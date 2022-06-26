<?php

namespace App\Http\Controllers;

use App\Models\HRM_ChucVu;
use App\Models\HRM_NhanVien;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Storage;

class HRMNhanVienController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
	}
	
	public function getDanhSach()
	{
		
		if(session_status() == PHP_SESSION_NONE)
		{
			session_start();
		}
		
	
		$path = config('app.url') . '/storage/app/files/staffs/users/';
		

		if(isset($_SESSION['ckAuth'])) unset($_SESSION['ckAuth']);
		$_SESSION['ckAuth'] = true;
		if(isset($_SESSION['baseUrl'])) unset($_SESSION['baseUrl']);
		$_SESSION['baseUrl'] = $path;
		if(isset($_SESSION['resourceType'])) unset($_SESSION['resourceType']);
		$_SESSION['resourceType'] = 'Images';
		
		$hrm_nhanvien = HRM_NhanVien::all();
		$hrm_chucvu = HRM_ChucVu::all();
		return view('admin.danhmuc.nhanvien', compact('hrm_nhanvien','hrm_chucvu', 'path'));
	}
	
	public function postThem(Request $request)
	{
		$rules = array();
		$rules['HoVaTen'] = 'required|max:100|unique:hrm_nhanvien';
		$rules['Email'] = 'required|string|email|max:255|unique:hrm_nhanvien';
		$rules['MaChucVu'] = 'required';
		if(!empty($request->MaNhanVien)) $rules['MaNhanVien'] = 'max:20|unique:hrm_nhanvien';
		if(!empty($request->NamSinh)) $rules['NamSinh'] = 'digits:4|integer|min:1950|max:' . date('Y');
		if(!empty($request->DienThoai)) $rules['DienThoai'] = 'max:50|unique:hrm_nhanvien';
		$this->validate($request, $rules);
		
		$orm = new HRM_NhanVien();
		if(!empty($request->MaNhanVien))		$orm->MaNhanVien = $request->MaNhanVien;
		if(!empty($request->MaChucVu))			$orm->MaChucVu = $request->MaChucVu;
		if(!empty($request->HoVaTen))			$orm->HoVaTen = $request->HoVaTen;
		if(!empty($request->HoVaTen))			$orm->HoVaTenKhongDau = Str::slug($request->HoVaTen, '-');
		if(!empty($request->NamSinh))			$orm->NamSinh = $request->NamSinh;
		if(!empty($request->NgayVaoLam))		$orm->NgayVaoLam = Carbon::createFromFormat('d/m/Y', $request->NgayVaoLam)->format('Y-m-d');
		
		if(!empty($request->Email))				$orm->Email = $request->Email;
		if(!empty($request->DienThoai))			$orm->DienThoai = $request->DienThoai;
		
		if(!empty($request->HinhAnh))			$orm->HinhAnh = $request->HinhAnh;
		$orm->save();
		toastr()->success('Thêm thành công!','Thông báo');
		return redirect()->route('admin.danhmuc.nhanvien');
	}
	
	public function postSua(Request $request)
	{
		$rules = array();
		$rules['MaChucVu_edit'] = 'required';
		$rules['HoVaTen_edit'] = 'required|max:100|unique:hrm_nhanvien,HoVaTen,' . $request->ID_edit . ',ID';
		$rules['Email_edit'] = 'required|string|email|max:255|unique:hrm_nhanvien,Email,' . $request->ID_edit . ',ID';
		if(!empty($request->MaNhanVien_edit)) $rules['MaNhanVien_edit'] = 'max:20|unique:hrm_nhanvien,MaNhanVien,' . $request->ID_edit . ',ID';
		if(!empty($request->NamSinh_edit)) $rules['NamSinh_edit'] = 'digits:4|integer|min:1950|max:' . date('Y');
		if(!empty($request->DienThoai_edit)) $rules['DienThoai_edit'] = 'max:50|unique:hrm_nhanvien,DienThoai,' . $request->ID_edit . ',ID';
		$this->validate($request, $rules);
		
		$orm = HRM_NhanVien::find($request->ID_edit);
		$orm->MaNhanVien = $request->MaNhanVien_edit;
		$orm->MaChucVu = $request->MaChucVu_edit;
		$orm->HoVaTen = $request->HoVaTen_edit;
		$orm->HoVaTenKhongDau = Str::slug($request->HoVaTen_edit, '-');
		$orm->NamSinh = $request->NamSinh_edit;
		$orm->NgayVaoLam = !empty($request->NgayVaoLam_edit) ? Carbon::createFromFormat('d/m/Y', $request->NgayVaoLam_edit)->format('Y-m-d') : null;	
		$orm->Email = $request->Email_edit;
		$orm->DienThoai = $request->DienThoai_edit;
		$orm->HinhAnh = $request->HinhAnh_edit;
		$orm->save();
		toastr()->success('Cập nhật thành công!','Thông báo');
		return redirect()->route('admin.danhmuc.nhanvien');
	}
	
	public function postXoa(Request $request)
	{
		
		try {  
            $orm = HRM_NhanVien::find($request->ID_delete);
			$orm->delete();
			toastr()->success('Xoá thành công!','Thông báo');
			return redirect()->route('admin.danhmuc.nhanvien');
        } catch (\Illuminate\Database\QueryException $e) {
            toastr()->error('Dữ liệu này không thể xoá vì để tránh mất dữ liệu.');
            return redirect()->route('admin.danhmuc.nhanvien');
        }
	}
	
	public function getCoBan()
	{
		if(session_status() == PHP_SESSION_NONE)
		{
			session_start();
		}
		$user_folder = Auth::user()->username;
		if(!file_exists(storage_path() . '/app/files/staffs/' . $user_folder))
			Storage::makeDirectory('files/staffs/' . $user_folder);
		
		$path = config('app.url') . '/storage/app/files/staffs/';
		$user_path = $path . $user_folder . '/';
		if(isset($_SESSION['ckAuth'])) unset($_SESSION['ckAuth']);
		$_SESSION['ckAuth'] = true;
		if(isset($_SESSION['baseUrl'])) unset($_SESSION['baseUrl']);
		$_SESSION['baseUrl'] = $user_path;
		if(isset($_SESSION['resourceType'])) unset($_SESSION['resourceType']);
		$_SESSION['resourceType'] = 'Images';
		
		$hrm_nhanvien = HRM_NhanVien::where('Email', Auth::user()->email)->first();
		return view('admin.hosonhanvien.coban', compact('hrm_nhanvien', 'path', 'user_path'));
	}
	
	public function postCoBan_Sua(Request $request)
	{
		$rules = array();
		$rules['HoVaTen_edit'] = 'required|max:100|unique:hrm_nhanvien,HoVaTen,' . $request->ID_edit . ',ID';
		$rules['Email_edit'] = 'required|string|email|max:255|unique:hrm_nhanvien,Email,' . $request->ID_edit . ',ID';
		if(!empty($request->MaNhanVien_edit)) $rules['MaNhanVien_edit'] = 'max:20|unique:hrm_nhanvien,MaNhanVien,' . $request->ID_edit . ',ID';
		if(!empty($request->NamSinh_edit)) $rules['NamSinh_edit'] = 'digits:4|integer|min:1950|max:' . date('Y');
		if(!empty($request->DienThoai_edit)) $rules['DienThoai_edit'] = 'max:50|unique:hrm_nhanvien,DienThoai,' . $request->ID_edit . ',ID';
		$this->validate($request, $rules);
		
		$orm = HRM_NhanVien::find($request->ID_edit);
		$orm->MaNhanVien = $request->MaNhanVien_edit;
		$orm->HoVaTen = $request->HoVaTen_edit;
		$orm->HoVaTenKhongDau = Str::slug($request->HoVaTen_edit, '-');
		$orm->NamSinh = $request->NamSinh_edit;
		$orm->NgayVaoLam = !empty($request->NgayVaoLam_edit) ? Carbon::createFromFormat('d/m/Y', $request->NgayVaoLam_edit)->format('Y-m-d') : null;
		
		$orm->Email = $request->Email_edit;
		$orm->DienThoai = $request->DienThoai_edit;
		
		$orm->HinhAnh = $request->HinhAnh_edit;
		$orm->save();
		
		return redirect()->route('admin.hosonhanvien.coban');
	}
}