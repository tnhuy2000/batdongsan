@extends('layouts.admin')

@section('pagetitle')
	Quản lý danh mục
@endsection

@section('content')
	<div class="card">
		<div class="card-header"><a href="{{ route('admin.home') }}">Trang chủ quản trị</a> <i class="fal fa-angle-double-right"></i> Quản lý danh mục</div>
		<div class="card-body admin-page">
			<div class="card-deck">
				<div class="col-12 col-sm-6 col-md-4 col-lg-2">
					<div class="card text-center">
						<a href="{{ route('admin.danhmuc.chude') }}">
							<img class="card-img-top" src="{{ asset('public/admin/images/icons/chude.png') }}" alt="" />
							<div class="card-body bg-primary">
								<p class="card-text"><strong>Chủ đề</strong></p>
							</div>
						</a>
					</div>
				</div>
				
				<div class="col-12 col-sm-6 col-md-4 col-lg-2">
					<div class="card text-center">
						<a href="{{ route('admin.danhmuc.mainslide') }}">
							<img class="card-img-top" src="{{ asset('public/admin/images/icons/trinhchieu.png') }}" alt="" />
							<div class="card-body bg-primary">
								<p class="card-text"><strong>Trình chiếu</strong></p>
							</div>
						</a>
					</div>
				</div>
				
				<div class="col-12 col-sm-6 col-md-4 col-lg-2">
					<div class="card text-center">
						<a href="{{ route('admin.danhmuc.bangdientu') }}">
							<img class="card-img-top" src="{{ asset('public/admin/images/icons/bangdientu.png') }}" alt="" />
							<div class="card-body bg-primary">
								<p class="card-text" style="font-size: 0.9em"><strong>Bảng điện tử</strong></p>
							</div>
						</a>
					</div>
				</div>
				<div class="col-12 col-sm-6 col-md-4 col-lg-2">
					<div class="card text-center">
						<a href="{{ route('admin.danhmuc.lienketngoai') }}">
							<img class="card-img-top" src="{{ asset('public/admin/images/icons/lienketngoai.png') }}" alt="" />
							<div class="card-body bg-primary">
								<p class="card-text" style="font-size: 0.9em"><strong>LK ngoài</strong></p>
							</div>
						</a>
					</div>
				</div>
				
				
				<div class="col-12 col-sm-6 col-md-4 col-lg-2">
					<div class="card text-center">
						<a href="{{ route('admin.danhmuc.nhanvien') }}">
							<img class="card-img-top" src="{{ asset('public/admin/images/icons/nhanvien.png') }}" alt="" />
							<div class="card-body bg-primary">
								<p class="card-text"><strong>Nhân viên</strong></p>
							</div>
						</a>
					</div>
				</div>
				
				<div class="col-12 col-sm-6 col-md-4 col-lg-2">
					<div class="card text-center">
						<a href="{{ route('admin.danhmuc.nguoidung') }}">
							<img class="card-img-top" src="{{ asset('public/admin/images/icons/nguoidung.png') }}" alt="" />
							<div class="card-body bg-primary">
								<p class="card-text"><strong>Người dùng</strong></p>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection