<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHRMNhanVienTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('hrm_nhanvien', function (Blueprint $table) {
			$table->id('ID');
			$table->string('MaNhanVien', 20)->nullable();
			$table->foreignId('MaChucVu')->constrained()->on('hrm_chucvu');
			$table->string('HoVaTen', 100);
			$table->string('HoVaTenKhongDau', 100);
			$table->year('NamSinh')->nullable();
			$table->date('NgayVaoLam')->nullable();
			
			$table->string('Email');
			$table->string('DienThoai', 50)->nullable();
			
			$table->string('HinhAnh')->nullable();
			$table->text('ThongTinThem')->nullable();
			$table->unsignedInteger('LuotXem')->default(0);
			$table->unsignedTinyInteger('TrangThai')->default(1);
			$table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
		});
	}
	
	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('hrm_nhanvien');
	}
}