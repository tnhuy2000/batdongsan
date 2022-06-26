<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="author" content="AGChain Lab." />
	<meta name="csrf-token" content="{{ csrf_token() }}" />
	@yield('meta')
	<title>@yield('title', 'Chuyên mục') - {{ config('app.name', 'LCMS') }}</title>
	<link rel="shortcut icon" href="{{ asset('public/favicon.png') }}" />
	<link rel="stylesheet" href="{{ asset('public/frontend/css/plugins.css') }}" />
	<link rel="stylesheet" href="{{ asset('public/frontend/css/style.css') }}" />
	<link rel="stylesheet" href="{{ asset('public/frontend/css/color-variations/blue.css') }}" media="screen" />
	@toastr_css
	@yield('css')
</head>
<body class=" background-secondary">
	<div class="body-inner">
		<div id="topbar" class="d-none d-xl-block d-lg-block" style="background-color: #100254">
			<div class="container">
				<div class="row " >
					<div class="col-md-8">
						<div class="topbar-dropdown">
							{{-- <div class="title"><i class="fal fa-calendar-alt"></i> {{ $topbar_today }}</div> --}}
							<div class="title text-white"><i class="fal fa-envelope"></i> tlmcuong_19th1@student.agu.edu.vn</div>
						</div>
						<div class="topbar-dropdown">
							{{-- <div class="title"><i class="fal fa-{{ $topbar_weather_icon }}"></i> Long Xuyên {{ $topbar_weather_temperature }}°C</div>
							 --}}
							 <div class="title text-white"><i class="fal fa-phone"></i> 0968.369.054</div>
						</div>
						
					</div>
					<div class="col-md-4">
						<div class="topbar-dropdown right">
							 <div class="title text-white">Kết nối với chúng tôi &nbsp;
								 <a href="" target="_blank"><i class="fab fa-facebook-f"></i></a>&nbsp;
								 <a href="https://www.google.com/" target="_blank"><i class="fab fa-google"></i></a>

								 
								</div>
					

						</div>
						
					</div>
				</div>
			</div>
		</div>
		
		<header id="header" class="header-disable-fixed">
			<div class="header-inner">
				<div class="container">
					<div id="logo">
						<a href="{{ route('home') }}">
							<span class="logo-default d-lg-none d-xl-block"><img src="{{ asset('public/frontend/images/logo.png') }}" style="max-height:50px;" /></span>
							<span class="logo-default d-none d-lg-block d-xl-none"><img src="{{ asset('public/frontend/images/logo-only.png') }}" style="max-height:50px;" /></span>
							
							<span class="logo-dark"><img src="{{ asset('public/frontend/images/logo.png') }}" style="max-height:50px;" /></span>
						</a>
					</div>
		
					<div class="header-extras">
						<ul>
							<li>
								<form action="{{route('timkiem')}}" method="GET">
									@csrf
									<div class="input-group mt-4 mb-3">
										<input type="text" class="form-control" name="TuKhoa" placeholder="Nhập từ khoá cần tìm ...." aria-label="Recipient's username" aria-describedby="basic-addon2">
										<div class="input-group-append">
										<button  type="submit" class="btn btn-info"><i class="icon-search text-white"></i> Tìm kiếm</button>
										</div>
									</div>
								</form>
							</li>
						</ul>
					</div>
					<div id="mainMenu-trigger"><a class="lines-button x"><span class="lines"></span></a></div>
					<div id="mainMenu">
						<div class="container">
							<nav>
								<ul >
									<li class="dropdown">
										<a href="{{url('/bai-viet/gioi-thieu/gioi-thieu-2.html')}}"  style="color: #100254"><i class="fal fa-star"></i>Giới thiệu</a>
										
									</li>
									<li class="dropdown">
										<a href="{{url('/bai-viet/du-an/')}}" style="color: #100254"><i class="fal fa-industry"></i>Dự án</a>
										
									</li>
									<li class="dropdown">
										<a href="#tong-quan" style="color: #100254"><i class="fal fa-newspaper"></i>Tin tức</a>
										<ul class="dropdown-menu">
											@foreach($navbar_data_thongbao as $value)
												<li><a href="{{ route('baiviet.chude', ['chuDe' => $value->TenChuDeKhongDau]) }}"><i class="fal fa-fw fa-bell-on"></i>{{ $value->TenChuDe }}</a></li>
											@endforeach
										</ul>
									</li>
									<li class="dropdown">
										<a href="{{url('/lien-he/')}}" style="color: #100254"><i class="fal fa-phone"></i>Liên hệ</a>
										
									</li>
									<li class="dropdown">
										<a href="#tong-quan" style="color: #100254"><i class="fal fa-external-link-square"></i>Liên kết ngoài</a>
										<ul class="dropdown-menu">
											@foreach($navbar_data_lienketngoai as $value)
												<li><a href="{{ $value->LienKet }}" target="_blank"><i class="fal fa-fw fa-link"></i>{{ $value->TenLienKet }}</a></li>
											@endforeach
										</ul>
									</li>
								</ul>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</header>
		
		@yield('content')
		
		<section id="section-contact" class="p-t-40 p-b-0" style="background-color: #100254; ">
			<div class="container">
				<div class="row">
					<div class="col-lg-4">
						<div class="icon-box effect small clean m-b-20">
							<div class="icon"><i class="fal fa-map-marker-alt text-white"></i></div>
							<h3 class="text-white">Địa chỉ liên hệ</h3>
							<p class="text-white">
								<strong>Văn phòng công ty:</strong>
								<br />33B Trần Hưng Đạo, P. Mỹ Thới,
								<br />Thành phố Long Xuyên, Tỉnh An Giang
							</p>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="icon-box effect small clean m-b-20">
							<div class="icon"><i class="fal fa-phone text-white"></i></div>
							<h3 class="text-white">Liên hệ</h3>
							<p>
								
								<br /><a class="text-white" href="tel:+842966256565">Điện thoại: +84 368672641</a>
								<br /><a class="text-white" href="tel:+842966256565">Email: tlmcuong_19th1@student.agu.edu.vn</a>
							</p>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="icon-box effect small clean m-b-20">
							<div class="icon"><i class="fal fa-clock text-white"></i></div>
							<h3 class="text-white">Giờ làm việc</h3>
							<p class="text-white">
								<strong >Thứ Hai đến Thứ Sáu</strong>
								<br />Buổi sáng: Từ 07:00 đến 11:00
								<br />Buổi chiều: Từ 13:00 đến 17:00
							</p>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		<footer  style="background-color: #100254; ">
			
			<div class="copyright-content">
				<div class="container">
					
					<div class="copyright-text text-center text-uppercase text-white">&copy; {{ @date("Y") }} {{ config('app.name', 'LCMS') }}.</div>
				<br>
				</div>
			</div>
		</footer>
	</div>
	
	<a id="scrollTop"><i class="icon-chevron-up"></i><i class="icon-chevron-up"></i></a>
	@jquery
    @toastr_js
    @toastr_render
	<script src="{{ asset('public/frontend/js/jquery.js') }}"></script>
	<script src="{{ asset('public/frontend/js/plugins.js') }}"></script>
	<script src="{{ asset('public/frontend/js/functions.js') }}"></script>
	@yield('javascript')
</body>
</html>