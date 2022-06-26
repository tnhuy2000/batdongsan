<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;
use Storage;
use App\Models\CMS_ChuDe;
use App\Models\CMS_BaiViet;
use App\Models\CMS_HinhAnh;
use App\Models\CMS_VanBan;
use App\Models\CMS_TrinhChieu;
use App\Models\CMS_TrinhChieu_Mini;
use App\Models\CMS_BangDienTu;
use App\Models\SYS_NguoiDung;
use App\Models\HRM_NhanVien;
use App\Models\HRM_DonVi;
use App\Models\HRM_NhanVien_DonVi;
use App\Models\HRM_QuaTrinhCongTac;
use App\Models\HRM_BaiBaoKhoaHoc;
use App\Models\HRM_DeTaiKhoaHoc;
use App\Models\HRM_SachGiaoTrinhTaiLieu;
use App\Models\HRM_HuongDanSauDaiHoc;
use Socialite;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Notifications\ResetPassword;
use Illuminate\Notifications\Messages\MailMessage;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Mail;
use Illuminate\Mail\Mailable;
class HomeController extends Controller
{
	public function __construct()
	{
		
	}
	public function postLienHe(Request $request)
	{
		
		$input = $request->all();
		Mail::send('mailfb', array('hoten'=>$input["hoten"],'diachi'=>$input["diachi"],'email'=>$input["email"],'dienthoai'=>$input["dienthoai"], 'noidung'=>$input['noidung']), function($message) use($request){
			$message->from('tlmcuong_19th1@student.agu.edu.vn', 'Thien Phuc Company');
			$message->to('tlmcuong_19th1@student.agu.edu.vn', 'Visitor')->subject('Bạn vừa có một phản hồi đến từ khách hàng!');//mail được gửi đến tlmcuong_19th1@student.agu.edu.vn(kiểm tra hộp thư)
		});
		
		toastr()->success('Gửi thông tin liên hệ thành công!','Thông báo');
		return view('frontend.lienhe');

	}
	public function getTimKiem(Request $request)
	{
		$rules = array();
		
		$rules['TuKhoa'] = 'required';
		
		$this->validate($request, $rules);


		$no_image = config('app.url') . '/public/frontend/images/no-image.jpg';

		
		$cms_baiviet = CMS_BaiViet::join('cms_chude','cms_chude.ID','=','cms_baiviet.MaChuDe')
						->where('cms_baiviet.TieuDe','like','%'.$request->TuKhoa.'%')
		                ->orWhere('cms_baiviet.TomTat','like','%'.$request->TuKhoa.'%')
						->orWhere('cms_baiviet.NoiDung','like','%'.$request->TuKhoa.'%')
						->orWhere('cms_chude.TenChuDe','like','%'.$request->TuKhoa.'%')
						->where('cms_baiviet.KichHoat',1)
						->select('cms_baiviet.*')->get();
					
		
		
		$session_title = 'Kết quả tìm kiếm: `'.$request->TuKhoa.'`';
		
		// Thống kê bài viết theo chủ đề
		$cms_chude_thongke = DB::table('cms_chude as cd')
			->leftJoin('cms_baiviet as bv', 'cd.ID', '=', 'bv.MaChuDe')
			->where([['bv.KichHoat', 1], ['cd.ID', '>', 1]])
			->select(DB::raw('cd.ID, cd.TenChuDe, cd.TenChuDeKhongDau, count(bv.ID) as TongBaiViet'))
			->groupBy('cd.ID', 'cd.TenChuDe', 'cd.TenChuDeKhongDau')
			->orderBy('cd.ThuTuHienThi', 'asc')->get();
		
		// Xem nhiều nhất
		$cms_baiviet_xnn = CMS_BaiViet::where([['KichHoat', 1], ['MaChuDe', '>', 1]])
			->orderBy('LuotXem', 'desc')
			->take(10)->get();
		
			return view('frontend.ketquatimkiem', compact('session_title', 'cms_baiviet', 'cms_chude_thongke', 'cms_baiviet_xnn'));
		
	}
	public function getHome()
	{
		$no_image = config('app.url') . '/public/frontend/images/no-image.jpg';
		$slider_path = config('app.url') . '/storage/app/slider/';
		$extensions = array('jpg', 'jpeg', 'png', 'gif', 'bmp');
		
		$cms_trinhchieu = CMS_TrinhChieu::where('KichHoat', 1)
			->orderBy('ThuTuHienThi', 'asc')->get();
		
		// Tin nóng
		$cms_bangdientu = CMS_BangDienTu::where('KichHoat', 1)
			->orderBy('ThuTuHienThi', 'asc')
			->orderBy('created_at', 'desc')->get();
		
		// Tin hoạt động
		$cms_baiviet = CMS_BaiViet::join('cms_chude', 'cms_baiviet.MaChuDe', '=', 'cms_chude.ID')
			->where([['KichHoat', 1], ['cms_chude.TenChuDe', '=', 'Dự án']])
			->select('cms_baiviet.*','cms_chude.TenChuDe')
			->orderBy('luotxem', 'desc')
			->take(12)->get();
		
		
		
		$cms_baiviet_first_file = array();
		
		
		// Hình ảnh hoạt động
		$cms_hinhanh = CMS_HinhAnh::where('KichHoat', 1)
			->orderBy('created_at', 'desc')
			->take(12)->get();
		
		$cms_hinhanh_chude = CMS_HinhAnh::join('cms_chude', 'cms_hinhanh.MaChuDe', '=', 'cms_chude.ID')
			->select('MaChuDe', 'TenChuDe', 'TenChuDeKhongDau')
			->orderBy('TenChuDe', 'asc')
			->distinct()->get();
		
		$hinhanhhoatdong = array();
		foreach($cms_hinhanh as $value)
		{
			$dir = 'storage/app/' . $value->ThuMuc . '/';
			if(file_exists($dir))
			{
				$files = scandir($dir);
				if(isset($files[3]))
				{
					$extension2 = strtolower(pathinfo($files[3], PATHINFO_EXTENSION));
					if(in_array($extension2, $extensions))
						$first_file = config('app.url') . '/'. $dir . $files[3];
					else
						$first_file = $no_image;
				}
				else
					$first_file = $no_image;
			}
			else
				$first_file = $no_image;
			
			$hinhanhhoatdong[] = array(
				'ID' => $value->ID,
				'MoTa' => $value->MoTa,
				'MoTaKhongDau' => $value->MoTaKhongDau,
				'HinhDaiDien' => $first_file,
				'TenChuDe' => $value->CMS_ChuDe->TenChuDe,
				'TenChuDeKhongDau' => $value->CMS_ChuDe->TenChuDeKhongDau
			);
		}
		
		return view('frontend.index', compact('slider_path', 'cms_trinhchieu', 'cms_bangdientu', 'cms_baiviet', 'cms_baiviet_first_file', 'hinhanhhoatdong', 'cms_hinhanh_chude'));
	}
	
	public function getLienHe()
	{
		return view('frontend.lienhe');
	}
	
	
	public function getBaiViet($chuDe = '')
	{
		$no_image = config('app.url') . '/public/frontend/images/no-image.jpg';
		if(empty($chuDe))
		{
			$session_title = 'Tất cả bài viết';
			$cms_baiviet = CMS_BaiViet::where([['KichHoat', 1], ['MaChuDe', '>', 1]])
				->orderBy('QuanTrong', 'desc')
				->orderBy('created_at', 'desc')
				->paginate(20);
		}
		else
		{
			$cms_chude = CMS_ChuDe::where('TenChuDeKhongDau', $chuDe)->firstOrFail();
			$cms_baiviet = CMS_BaiViet::where([['KichHoat', 1], ['MaChuDe', $cms_chude->ID]])
				->orderBy('QuanTrong', 'desc')
				->orderBy('created_at', 'desc')
				->paginate(20);
		}
		
		
		
		// Thống kê bài viết theo chủ đề
		$cms_chude_thongke = DB::table('cms_chude as cd')
			->leftJoin('cms_baiviet as bv', 'cd.ID', '=', 'bv.MaChuDe')
			->where([['bv.KichHoat', 1], ['cd.ID', '>', 1]])
			->select(DB::raw('cd.ID, cd.TenChuDe, cd.TenChuDeKhongDau, count(bv.ID) as TongBaiViet'))
			->groupBy('cd.ID', 'cd.TenChuDe', 'cd.TenChuDeKhongDau')
			->orderBy('cd.ThuTuHienThi', 'asc')->get();
		
		// Xem nhiều nhất
		$cms_baiviet_xnn = CMS_BaiViet::where([['KichHoat', 1], ['MaChuDe', '>', 1]])
			->orderBy('LuotXem', 'desc')
			->take(10)->get();
	
		
		if(empty($chuDe))
			return view('frontend.baiviet', compact('session_title', 'cms_baiviet', 'cms_chude_thongke', 'cms_baiviet_xnn'));
		else
			return view('frontend.baiviet', compact('cms_chude', 'cms_baiviet', 'cms_chude_thongke', 'cms_baiviet_xnn'));
	}
	
	public function getBaiViet_ChiTiet($chuDe, $titleWithID)
	{
		$arrTitleWithID = explode('.', $titleWithID);
		$tieuDe = explode('-', $arrTitleWithID[0]);
		$maBaiViet = $tieuDe[count($tieuDe) - 1];
		
		if(!is_numeric($maBaiViet)) abort(404);
		
		$cms_baiviet = CMS_BaiViet::where('ID', $maBaiViet)
			->firstOrFail();
		$cms_baiviet_truoc = CMS_BaiViet::where('ID', $maBaiViet - 1)
			->first();
		$cms_baiviet_sau = CMS_BaiViet::where('ID', $maBaiViet + 1)
			->first();
		
		// Cập nhật lượt xem
		$idXem = 'BV' . $maBaiViet;
		if(!session()->has($idXem))
		{
			$orm = CMS_BaiViet::find($maBaiViet);
			$orm->LuotXem = $cms_baiviet->LuotXem + 1;
			$orm->save();
			session()->put($idXem, 1);
		}
		
		
		// Thống kê bài viết theo chủ đề
		$cms_chude_thongke = DB::table('cms_chude as cd')
			->leftJoin('cms_baiviet as bv', 'cd.ID', '=', 'bv.MaChuDe')
			->where([['bv.KichHoat', 1], ['cd.ID', '>', 1]])
			->select(DB::raw('cd.ID, cd.TenChuDe, cd.TenChuDeKhongDau, count(bv.ID) as TongBaiViet'))
			->groupBy('cd.ID', 'cd.TenChuDe', 'cd.TenChuDeKhongDau')
			->orderBy('cd.ThuTuHienThi', 'asc')->get();
		
		// Bài viết liên quan
		$no_image = config('app.url') . '/public/frontend/images/no-image.jpg';
		$cms_baiviet_lq = CMS_BaiViet::where([['KichHoat', 1], ['MaChuDe', $cms_baiviet->MaChuDe]])
			->orderBy('created_at', 'desc')
			->take(5)->get();
		
		$cms_baiviet_lq_first_file = array();
		foreach($cms_baiviet_lq as $value)
		{
			$cms_baiviet_lq_dir = 'storage/app/files/posts/' . str_pad($value->ID, 7, '0', STR_PAD_LEFT) . '/';
			if(file_exists($cms_baiviet_lq_dir))
			{
				$cms_baiviet_lq_files = scandir($cms_baiviet_lq_dir);
				$extensions = array('jpg', 'jpeg', 'png', 'gif', 'bmp');
				if(isset($cms_baiviet_lq_files[3]))
				{
					$extension = strtolower(pathinfo($cms_baiviet_lq_files[3], PATHINFO_EXTENSION));
					if(in_array($extension, $extensions))
						$cms_baiviet_lq_first_file[$value->ID] = config('app.url') . '/'. $cms_baiviet_lq_dir . $cms_baiviet_lq_files[3];
					else
						$cms_baiviet_lq_first_file[$value->ID] = $no_image;
				}
				else
					$cms_baiviet_lq_first_file[$value->ID] = $no_image;
			}
			else
				$cms_baiviet_lq_first_file[$value->ID] = $no_image;
		}
		
		return view('frontend.baiviet-chitiet', compact('cms_baiviet', 'cms_baiviet_truoc', 'cms_baiviet_sau',  'cms_chude_thongke', 'cms_baiviet_lq', 'cms_baiviet_lq_first_file'));
	}
	
	
	public function getBaiViet_ChiTiet_OldLink($id, $title)
	{
		if(!is_numeric($id)) abort(404);
		
		$cms_baiviet = CMS_BaiViet::where('ID', $id)
			->firstOrFail();
		
		return redirect()->route('baiviet.chitiet', ['chuDe' => $cms_baiviet->CMS_ChuDe->TenChuDeKhongDau, 'titleWithID' => $cms_baiviet->TieuDeKhongDau . '-' . $cms_baiviet->ID . '.html']);
	}
	
	
	
	public function getHinhAnh($chuDe = '')
	{
		$no_image = config('app.url') . '/public/frontend/images/no-image.jpg';
		if(empty($chuDe))
		{
			$session_title = 'Hình ảnh hoạt động';
			$cms_hinhanh = CMS_HinhAnh::where('KichHoat', 1)
				->orderBy('created_at', 'desc')
				->paginate(12);
		}
		else
		{
			$cms_chude = CMS_ChuDe::where('TenChuDeKhongDau', $chuDe)->firstOrFail();
			$cms_hinhanh = CMS_HinhAnh::where([['KichHoat', 1], ['MaChuDe', $cms_chude->ID]])
				->orderBy('created_at', 'desc')
				->paginate(12);
		}
		
		$cms_hinhanh_chude = CMS_HinhAnh::join('cms_chude', 'cms_hinhanh.MaChuDe', '=', 'cms_chude.ID')
			->select('MaChuDe', 'TenChuDe', 'TenChuDeKhongDau')
			->orderBy('TenChuDe', 'asc')
			->distinct()->get();
		
		$cms_hinhanh_first_file = array();
		foreach($cms_hinhanh as $value)
		{
			$dir = 'storage/app/' . $value->ThuMuc . '/';
			if(file_exists($dir))
			{
				$files = scandir($dir);
				if(isset($files[3]))
					$cms_hinhanh_first_file[$value->ID] = config('app.url') . '/'. $dir . $files[3];
				else
					$cms_hinhanh_first_file[$value->ID] = $no_image;
			}
			else
				$cms_hinhanh_first_file[$value->ID] = $no_image;
		}
		
		if(empty($chuDe))
			return view('frontend.hinhanh', compact('session_title', 'cms_hinhanh_chude', 'cms_hinhanh', 'cms_hinhanh_first_file'));
		else
			return view('frontend.hinhanh', compact('cms_chude', 'cms_hinhanh_chude', 'cms_hinhanh', 'cms_hinhanh_first_file'));
	}
	
	public function getHinhAnh_ChiTiet($chuDe, $titleWithID)
	{
		if(session_status() == PHP_SESSION_NONE)
		{
			session_start();
		}
		
		$arrTitleWithID = explode('.', $titleWithID);
		$tieuDe = explode('-', $arrTitleWithID[0]);
		$maHinhAnh = $tieuDe[count($tieuDe) - 1];
		
		if(!is_numeric($maHinhAnh)) abort(404);
		
		$cms_hinhanh = CMS_HinhAnh::where('ID', $maHinhAnh)
			->firstOrFail();
		$cms_hinhanh_truoc = CMS_HinhAnh::where('ID', $maHinhAnh - 1)
			->first();
		$cms_hinhanh_sau = CMS_HinhAnh::where('ID', $maHinhAnh + 1)
			->first();
		
		$all_files = array();
		$dir = '';
		if(is_null($cms_hinhanh->ThuMuc) || trim($cms_hinhanh->ThuMuc) == '')
			$all_files = null;
		else
		{
			$dir = '/storage/app/' . $cms_hinhanh->ThuMuc . '/';
			$files = Storage::files($cms_hinhanh->ThuMuc . '/');
			foreach($files as $file)
				$all_files[] = pathinfo($file);
		}
		
		// Cập nhật lượt xem
		$idXem = 'HA' . $maHinhAnh;
		if(!session()->has($idXem))
		{
			$orm = CMS_HinhAnh::find($maHinhAnh);
			$orm->LuotXem = $cms_hinhanh->LuotXem + 1;
			$orm->save();
			session()->put($idXem, 1);
		}
		
		return view('frontend.hinhanh-chitiet', compact('cms_hinhanh', 'cms_hinhanh_truoc', 'cms_hinhanh_sau', 'dir', 'all_files'));
	}
	
	public function getHinhAnh_ChiTiet_OldLink($id, $title)
    {
		if(!is_numeric($id)) abort(404);
		
		$cms_hinhanh = CMS_HinhAnh::where('ID', $id)
			->firstOrFail();
		
		return redirect()->route('hinhanh.chitiet', ['chuDe' => $cms_hinhanh->CMS_ChuDe->TenChuDeKhongDau, 'titleWithID' => $cms_hinhanh->MoTaKhongDau . '-' . $cms_hinhanh->ID . '.html']);
	}
	
	public function getGoogleLogin()
	{
		return Socialite::driver('google')->redirect();
	}
	
	public function getGoogleCallback()
	{
		try
		{
			$user = Socialite::driver('google')->setHttpClient(new \GuzzleHttp\Client(['verify' => false]))->stateless()->user();
		}
		catch(Exception $e)
		{
			return redirect()->route('login')->with('warning', 'Lỗi xác thực. Xin vui lòng thử lại!');
		}
		

		$existingUser = SYS_NguoiDung::where('email', $user->email)->first();
		if($existingUser)
		{
			Auth::login($existingUser, true);
			return redirect()->route('admin.home');
		}
		else
		{
			return redirect()->route('login')->with('warning', 'Tài khoản không thuộc quản lý của THIEN PHUC!');
		}
	}
	
	
	
	
}	
