<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// Portal
Route::get('/', 'App\Http\Controllers\HomeController@getHome')->name('home');
Route::get('/home', 'App\Http\Controllers\HomeController@getHome')->name('home');


Route::get('/rss', 'App\Http\Controllers\HomeController@getRSS')->name('rss');


Route::get('/bai-viet', 'App\Http\Controllers\HomeController@getBaiViet')->name('baiviet');
Route::get('/bai-viet/{chuDe}', 'App\Http\Controllers\HomeController@getBaiViet')->name('baiviet.chude');
Route::get('/bai-viet/{chuDe}/{titleWithID}', 'App\Http\Controllers\HomeController@getBaiViet_ChiTiet')->name('baiviet.chitiet');

Route::get('/hinh-anh', 'App\Http\Controllers\HomeController@getHinhAnh')->name('hinhanh');
Route::get('/hinh-anh/{chuDe}', 'App\Http\Controllers\HomeController@getHinhAnh')->name('hinhanh.chude');
Route::get('/hinh-anh/{chuDe}/{titleWithID}', 'App\Http\Controllers\HomeController@getHinhAnh_ChiTiet')->name('hinhanh.chitiet');

Route::get('/lien-he', 'App\Http\Controllers\HomeController@getLienHe')->name('lienhe');
Route::post('/gui-lien-he', 'App\Http\Controllers\HomeController@postLienHe')->name('guilienhe');


// Link cũ
Route::get('/baiviet/{id}/{title}', 'App\Http\Controllers\HomeController@getBaiViet_ChiTiet_OldLink');
Route::get('/hinhanh/{id}/{title}', 'App\Http\Controllers\HomeController@getHinhAnh_ChiTiet_OldLink');
Route::get('/staff/{username}', 'App\Http\Controllers\HomeController@getNhanVien_ChiTiet_OldLink');

// Authentication
Auth::routes(['register' => false]);
Route::get('/login/google', 'App\Http\Controllers\HomeController@getGoogleLogin')->name('google.login');
Route::get('/login/google/callback', 'App\Http\Controllers\HomeController@getGoogleCallback')->name('google.callback');

// Tìm kiếm
Route::get('/tim-kiem/', 'App\Http\Controllers\HomeController@getTimKiem')->name('timkiem');

// Quản trị
Route::prefix('admin')->name('admin.')->middleware('auth')->group(function() {
	Route::get('/home', 'App\Http\Controllers\AdminController@getAdminHome')->name('home');
	Route::get('/403', 'App\Http\Controllers\AdminController@getForbidden')->name('forbidden');
	
	Route::prefix('danhmuc')->name('danhmuc.')->middleware('qldanhmuc')->group(function() {
		Route::get('', 'App\Http\Controllers\AdminController@getDanhMucHome')->name('home');
		
		Route::get('/bangdientu', 'App\Http\Controllers\CMSBangDienTuController@getDanhSach')->name('bangdientu');
		Route::post('/bangdientu/them', 'App\Http\Controllers\CMSBangDienTuController@postThem')->name('bangdientu.them');
		Route::post('/bangdientu/sua', 'App\Http\Controllers\CMSBangDienTuController@postSua')->name('bangdientu.sua');
		Route::post('/bangdientu/xoa', 'App\Http\Controllers\CMSBangDienTuController@postXoa')->name('bangdientu.xoa');
		Route::get('/bangdientu/kichhoat/{id}', 'App\Http\Controllers\CMSBangDienTuController@getKichHoat')->name('bangdientu.kichhoat');
		
		Route::get('/chude', 'App\Http\Controllers\CMSChuDeController@getDanhSach')->name('chude');
		Route::post('/chude/them', 'App\Http\Controllers\CMSChuDeController@postThem')->name('chude.them');
		Route::post('/chude/sua', 'App\Http\Controllers\CMSChuDeController@postSua')->name('chude.sua');
		Route::post('/chude/xoa', 'App\Http\Controllers\CMSChuDeController@postXoa')->name('chude.xoa');
		
	
		
		Route::get('/slide', 'App\Http\Controllers\CMSTrinhChieuMiniController@getDanhSach')->name('slide');
		Route::post('/slide/them', 'App\Http\Controllers\CMSTrinhChieuMiniController@postThem')->name('slide.them');
		Route::post('/slide/sua', 'App\Http\Controllers\CMSTrinhChieuMiniController@postSua')->name('slide.sua');
		Route::post('/slide/xoa', 'App\Http\Controllers\CMSTrinhChieuMiniController@postXoa')->name('slide.xoa');
		Route::get('/slide/kichhoat/{id}', 'App\Http\Controllers\CMSTrinhChieuMiniController@getKichHoat')->name('slide.kichhoat');
		
		Route::get('/mainslide', 'App\Http\Controllers\CMSTrinhChieuController@getDanhSach')->name('mainslide');
		Route::post('/mainslide/them', 'App\Http\Controllers\CMSTrinhChieuController@postThem')->name('mainslide.them');
		Route::post('/mainslide/sua', 'App\Http\Controllers\CMSTrinhChieuController@postSua')->name('mainslide.sua');
		Route::post('/mainslide/xoa', 'App\Http\Controllers\CMSTrinhChieuController@postXoa')->name('mainslide.xoa');
		Route::get('/mainslide/kichhoat/{id}', 'App\Http\Controllers\CMSTrinhChieuController@getKichHoat')->name('mainslide.kichhoat');
		
		Route::get('/lienketngoai', 'App\Http\Controllers\CMSLienKetNgoaiController@getDanhSach')->name('lienketngoai');
		Route::post('/lienketngoai/them', 'App\Http\Controllers\CMSLienKetNgoaiController@postThem')->name('lienketngoai.them');
		Route::post('/lienketngoai/sua', 'App\Http\Controllers\CMSLienKetNgoaiController@postSua')->name('lienketngoai.sua');
		Route::post('/lienketngoai/xoa', 'App\Http\Controllers\CMSLienKetNgoaiController@postXoa')->name('lienketngoai.xoa');
		Route::get('/lienketngoai/kichhoat/{id}', 'App\Http\Controllers\CMSLienKetNgoaiController@getKichHoat')->name('lienketngoai.kichhoat');
		
		Route::get('/chucvu', 'App\Http\Controllers\HRMChucVuController@getDanhSach')->name('chucvu');
		Route::post('/chucvu/them', 'App\Http\Controllers\HRMChucVuController@postThem')->name('chucvu.them');
		Route::post('/chucvu/sua', 'App\Http\Controllers\HRMChucVuController@postSua')->name('chucvu.sua');
		Route::post('/chucvu/xoa', 'App\Http\Controllers\HRMChucVuController@postXoa')->name('chucvu.xoa');
		
		
		
		Route::get('/nhanvien', 'App\Http\Controllers\HRMNhanVienController@getDanhSach')->name('nhanvien');
		Route::post('/nhanvien/them', 'App\Http\Controllers\HRMNhanVienController@postThem')->name('nhanvien.them');
		Route::post('/nhanvien/sua', 'App\Http\Controllers\HRMNhanVienController@postSua')->name('nhanvien.sua');
		Route::post('/nhanvien/xoa', 'App\Http\Controllers\HRMNhanVienController@postXoa')->name('nhanvien.xoa');
		Route::get('/nhanvien/trangthai/{id}', 'App\Http\Controllers\HRMNhanVienController@getKichHoat')->name('nhanvien.trangthai');
		
		Route::get('/nhanvien/donvi', 'App\Http\Controllers\HRMNhanVienDonViController@getDanhSach')->name('nhanvien.donvi');
		Route::post('/nhanvien/donvi/them', 'App\Http\Controllers\HRMNhanVienDonViController@postThem')->name('nhanvien.donvi.them');
		Route::post('/nhanvien/donvi/sua', 'App\Http\Controllers\HRMNhanVienDonViController@postSua')->name('nhanvien.donvi.sua');
		Route::post('/nhanvien/donvi/xoa', 'App\Http\Controllers\HRMNhanVienDonViController@postXoa')->name('nhanvien.donvi.xoa');
		
		Route::get('/nguoidung', 'App\Http\Controllers\SYSNguoiDungController@getDanhSach')->name('nguoidung');
		Route::post('/nguoidung/them', 'App\Http\Controllers\SYSNguoiDungController@postThem')->name('nguoidung.them');
		Route::post('/nguoidung/sua', 'App\Http\Controllers\SYSNguoiDungController@postSua')->name('nguoidung.sua');
		Route::post('/nguoidung/xoa', 'App\Http\Controllers\SYSNguoiDungController@postXoa')->name('nguoidung.xoa');
	});
	
	Route::prefix('baiviet')->name('baiviet.')->middleware('qlbaiviet')->group(function() {
		Route::get('', 'App\Http\Controllers\AdminController@getBaiVietHome')->name('home');
		
		Route::get('/danhsach', 'App\Http\Controllers\CMSBaiVietController@getDanhSach')->name('danhsach');
		Route::get('/them', 'App\Http\Controllers\CMSBaiVietController@getThem')->name('them');
		Route::post('/them', 'App\Http\Controllers\CMSBaiVietController@postThem');
		Route::get('/sua/{id}', 'App\Http\Controllers\CMSBaiVietController@getSua')->name('sua');
		Route::post('/sua/{id}', 'App\Http\Controllers\CMSBaiVietController@postSua')->name('sua');
		Route::post('/xoa', 'App\Http\Controllers\CMSBaiVietController@postXoa')->name('xoa');
		Route::get('/quantrong/{id}', 'App\Http\Controllers\CMSBaiVietController@getQuanTrong')->name('quantrong');
		Route::get('/kichhoat/{id}', 'App\Http\Controllers\CMSBaiVietController@getKichHoat')->name('kichhoat');
		
		Route::get('/suanhanh', 'App\Http\Controllers\CMSBaiVietController@getSuaNhanh')->name('suanhanh');
		Route::post('/suanhanh', 'App\Http\Controllers\CMSBaiVietController@postSuaNhanh')->name('suanhanh');
	
	});
	
	Route::prefix('hinhanh')->name('hinhanh.')->middleware('qlbaiviet')->group(function() {
		Route::get('', 'App\Http\Controllers\AdminController@getHinhAnhHome')->name('home');
		
		Route::get('/danhsach', 'App\Http\Controllers\CMSHinhAnhController@getDanhSach')->name('danhsach');
		Route::get('/them', 'App\Http\Controllers\CMSHinhAnhController@getThem')->name('them');
		Route::post('/them', 'App\Http\Controllers\CMSHinhAnhController@postThem');
		Route::get('/sua/{id}', 'App\Http\Controllers\CMSHinhAnhController@getSua')->name('sua');
		Route::post('/sua/{id}', 'App\Http\Controllers\CMSHinhAnhController@postSua');
		Route::post('/xoa', 'App\Http\Controllers\CMSHinhAnhController@postXoa')->name('xoa');
		Route::get('/kichhoat/{id}', 'App\Http\Controllers\CMSHinhAnhController@getKichHoat')->name('kichhoat');
		Route::post('/ajax', 'App\Http\Controllers\CMSHinhAnhController@postHinhAnhAjax')->name('ajax');
		
		Route::get('/suanhanh', 'App\Http\Controllers\CMSHinhAnhController@getSuaNhanh')->name('suanhanh');
		Route::post('/suanhanh', 'App\Http\Controllers\CMSHinhAnhController@postSuaNhanh')->name('suanhanh');
	});
	
	Route::prefix('hosonhanvien')->name('hosonhanvien.')->group(function() {
		Route::get('', 'App\Http\Controllers\AdminController@getHoSoHome')->name('home');
		
		Route::get('/coban', 'App\Http\Controllers\HRMNhanVienController@getCoBan')->name('coban');
		Route::post('/coban/sua', 'App\Http\Controllers\HRMNhanVienController@postCoBan_Sua')->name('coban.sua');
		
		Route::get('/doimatkhau', 'App\Http\Controllers\SYSNguoiDungController@getDoiMatKhau')->name('doimatkhau');
		Route::post('/doimatkhau', 'App\Http\Controllers\SYSNguoiDungController@postDoiMatKhau')->name('doimatkhau');
		Route::post('/capnhathoso', 'App\Http\Controllers\SYSNguoiDungController@postCapNhatHoSo')->name('capnhathoso');
	});
});

// Cấu hình
Route::prefix('app')->middleware('auth')->group(function() {
	Route::get('/v', function() {
		$laravel = app();
		return redirect()->route('admin.home')->with('status', 'Version: Laravel ' . $laravel::VERSION);
	})->name('app.version');
	
	Route::get('/key', function() {
		Artisan::call('key:generate');
		return redirect()->route('admin.home')->with('status', 'Key is generated.');
	})->name('app.key');
	
	Route::get('/down', function() {
		Artisan::call('down');
		return redirect()->route('admin.home')->with('status', 'Application is now in maintenance mode.');
	})->name('app.down');
	
	Route::get('/up', function() {
		Artisan::call('up');
		return redirect()->route('admin.home')->with('status', 'Application is now live.');
	})->name('app.up');
	
	Route::get('/clear/cache', function() {
		Artisan::call('cache:clear');
		return redirect()->route('admin.home')->with('status', 'Application cache is cleared.');
	})->name('app.clear.cache');
	
	Route::get('/clear/config', function() {
		Artisan::call('config:clear');
		return redirect()->route('admin.home')->with('status', 'Configuration cache is cleared.');
	})->name('app.clear.config');
	
	Route::get('/clear/route', function() {
		Artisan::call('route:clear');
		return redirect()->route('admin.home')->with('status', 'Route cache is cleared.');
	})->name('app.clear.route');
	
	Route::get('/clear/view', function() {
		Artisan::call('view:clear');
		return redirect()->route('admin.home')->with('status', 'Compiled views cache are cleared.');
	})->name('app.clear.view');
});