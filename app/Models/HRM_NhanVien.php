<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HRM_NhanVien extends Model
{
	protected $table = 'hrm_nhanvien';
	protected $primaryKey = 'ID';
	
	protected $fillable = [
		'MaChucVu','MaNhanVien', 'HoVaTen', 'NamSinh', 'NgayVaoLam', 'Email', 'DienThoai','HinhAnh', 'ThongTinThem', 'LuotXem',
	];
	
	public function HRM_ChucVu()
	{
		return $this->belongsTo('App\Models\HRM_ChucVu', 'MaChucVu', 'ID');
	}
	
	
}