@extends('layouts.admin')

@section('pagetitle')
	Trang chủ quản trị
@endsection

@section('content')
	<div class="card">
		<div class="card-header">Trang chủ quản trị</div>
		<div class="card-body admin-page">
			@if(session('status'))
				<div class="alert alert-info alert-dismissible fade show" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span>&times;</span></button>
					<span class="font-weight-bold text-primary"><i class="fal fa-info-circle"></i> {{ session('status') }}</span>
				</div>
			@endif
			
			
			<div class="card-deck">
				@if(Auth::user()->privilege == "superadmin" || Auth::user()->privilege == "qldanhmuc")
					<div class="col-12 col-sm-6 col-md-4 col-lg-2">
						<div class="card text-center">
							<a href="{{ route('admin.danhmuc.home') }}">
								<img class="card-img-top " src="{{ asset('public/admin/images/icons/danhmuc.png') }}"  alt="" />
								<div class="card-body bg-primary">
									<p class="card-text"><strong>Danh mục</strong></p>
								</div>
							</a>
						</div>
					</div>
				@endif
				@if(Auth::user()->privilege == "superadmin" || Auth::user()->privilege == "qlbaiviet")
					<div class="col-12 col-sm-6 col-md-4 col-lg-2">
						<div class="card text-center">
							<a href="{{ route('admin.baiviet.home') }}">
								<img class="card-img-top" src="{{ asset('public/admin/images/icons/baiviet.png') }}" alt="" />
								<div class="card-body bg-primary">
									<p class="card-text"><strong>Bài viết</strong></p>
								</div>
							</a>
						</div>
					</div>
				@endif
				@if(Auth::user()->privilege == "superadmin" || Auth::user()->privilege == "qlbaiviet")
					<div class="col-12 col-sm-6 col-md-4 col-lg-2">
						<div class="card text-center">
							<a href="{{ route('admin.hinhanh.home') }}">
								<img class="card-img-top" src="{{ asset('public/admin/images/icons/hinhanh.png') }}" alt="" />
								<div class="card-body bg-primary">
									<p class="card-text"><strong>Hình ảnh</strong></p>
								</div>
							</a>
						</div>
					</div>
				@endif
				
			</div>
		</div>
	</div>
@endsection