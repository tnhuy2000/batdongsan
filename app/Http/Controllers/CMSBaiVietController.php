<?php

namespace App\Http\Controllers;

use App\Models\CMS_ChuDe;
use App\Models\CMS_LoaiBaiViet;
use App\Models\CMS_BaiViet;
use App\Models\CMS_VanBan;
use App\Models\HRM_DonVi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class CMSBaiVietController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
	}
	
	public function getDanhSach()
	{
		$cms_baiviet = CMS_BaiViet::orderBy('created_at', 'desc')
			->orderBy('QuanTrong', 'desc')->get();
		return view('admin.baiviet.danhsach', compact('cms_baiviet'));
	}
	
	public function getThem()
	{
		if(session_status() == PHP_SESSION_NONE)
		{
			session_start();
		}
		$baiviet_identity = DB::select("SELECT AUTO_INCREMENT FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_SCHEMA = '" . config('database.connections.mysql.database') . "' AND TABLE_NAME = 'cms_baiviet'");
		$next_id = $baiviet_identity[0]->AUTO_INCREMENT;
		Storage::makeDirectory('files/posts/' . str_pad($next_id, 7, '0', STR_PAD_LEFT), 0775);
		
		$path = config('app.url') . '/storage/app/files/posts/' . str_pad($next_id, 7, '0', STR_PAD_LEFT) . '/';
		if(isset($_SESSION['ckAuth'])) unset($_SESSION['ckAuth']);
		$_SESSION['ckAuth'] = true;
		if(isset($_SESSION['baseUrl'])) unset($_SESSION['baseUrl']);
		$_SESSION['baseUrl'] = $path;
		if(isset($_SESSION['resourceType'])) unset($_SESSION['resourceType']);
		$_SESSION['resourceType'] = '*';
		
		// $cms_loaibaiviet = CMS_LoaiBaiViet::all();
		
		$cms_chude = CMS_ChuDe::all();
		return view('admin.baiviet.them', compact( 'cms_chude'));
	}
	
	public function postThem(Request $request)
	{
		$rules = array();
		
		$rules['MaChuDe'] = 'required';
		$rules['TieuDe'] = 'required|string|unique:cms_baiviet';
		$rules['NoiDung'] = 'required';
		if($request->MaLoai == 2) $rules['DinhKem'] = 'required';
		
		$this->validate($request, $rules);
		
		$orm = new CMS_BaiViet();
		
		
		$orm->MaChuDe = $request->MaChuDe;
		$orm->MaNguoiDung = Auth::user()->id;
		$orm->TieuDe = $request->TieuDe;
		$orm->TieuDeKhongDau = Str::slug($request->TieuDe, '-');
		$orm->NoiDung = $request->NoiDung;
		
		if(!empty($request->TomTat)) $orm->TomTat = $request->TomTat;
		if(!empty($request->QuanTrong)) $orm->QuanTrong = $request->QuanTrong;
		$orm->save();
		
		
		toastr()->success('Th??m m???i th??nh c??ng', 'Th??ng b??o');
		return redirect()->route('admin.baiviet.danhsach');
	}
	
	public function getSua($id)
	{
		if(session_status() == PHP_SESSION_NONE)
		{
			session_start();
		}
		
		$cms_baiviet = CMS_BaiViet::where('ID', $id)->first();
	
		
		$cms_chude = CMS_ChuDe::all();
		
		return view('admin.baiviet.sua', compact('cms_baiviet', 'cms_chude'));
	}
	
	public function postSua(Request $request, $id)
	{
		$rules = array();
		
		$rules['MaChuDe'] = 'required';
		$rules['TieuDe'] = 'required|string|unique:cms_baiviet,TieuDe,' . $request->ID . ',ID';
		$rules['NoiDung'] = 'required';
		
		$this->validate($request, $rules);
		
		$orm = CMS_BaiViet::find($request->ID);
		
		$orm->MaChuDe = $request->MaChuDe;
		
		$orm->TieuDe = $request->TieuDe;
		$orm->TieuDeKhongDau = Str::slug($request->TieuDe, '-');
		$orm->TomTat = $request->TomTat;
		$orm->NoiDung = $request->NoiDung;
		$orm->QuanTrong = empty($request->QuanTrong) ? 0 : 1;
		$orm->save();
		
		toastr()->success('C???p nh???t th??nh c??ng', 'Th??ng b??o');
			return redirect()->route('admin.baiviet.danhsach');
	}
	
	public function getSuaNhanh()
	{
		$cms_baiviet = CMS_BaiViet::where('KiemDuyet', 0)
			->orderBy('created_at', 'desc')
			->limit(10)->get();
		return view('admin.baiviet.suanhanh', compact('cms_baiviet'));
	}
	
	public function postSuaNhanh(Request $request)
	{
		foreach($request->ID as $value)
		{
			$orm = CMS_BaiViet::find($value);
			$orm->TieuDe = $request->TieuDe[$value];
			$orm->TieuDeKhongDau = Str::slug($request->TieuDe[$value], '-');
			$orm->TomTat = $request->TomTat[$value];
			$orm->NoiDung = $request->NoiDung[$value];
			$orm->KiemDuyet = 1;
			$orm->save();
		}
		return redirect()->route('admin.home')->with('status', '???? c???p nh???t nhanh c??c b??i vi???t.');
	}
	
	public function postXoa(Request $request)
	{
		
		CMS_BaiViet::where('ID', $request->ID_delete)->delete();
		toastr()->success('Xo?? th??nh c??ng', 'Th??ng b??o');
		return redirect()->route('admin.baiviet.danhsach');
	}
	
	public function getQuanTrong($id)
	{
		$orm = CMS_BaiViet::find($id);
		$orm->QuanTrong = 1 - $orm->QuanTrong;
		$orm->save();
		
		return redirect()->route('admin.baiviet.danhsach');
	}
	
	public function getKichHoat($id)
	{
		$orm = CMS_BaiViet::find($id);
		$orm->KichHoat = 1 - $orm->KichHoat;
		$orm->save();
		
		return redirect()->route('admin.baiviet.danhsach');
	}
}