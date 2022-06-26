@extends('layouts.frontend')

@section('meta')
	<meta property="og:image" content="{{ asset('public/frontend/images/share.png') }}" />
	<meta property="og:image:type" content="image/png" />
	<meta property="og:image:width" content="150" />
	<meta property="og:image:height" content="150" />
	<meta property="og:title" content="Trang chủ" />
	<meta property="og:description" content="Trang chủ {{ config('app.name', 'LCMS') }}." />
	<meta name="description" content="Trang chủ {{ config('app.name', 'LCMS') }}." />
@endsection

@section('title', 'Trang chủ')

@section('content')
	<section id="section-home" class="p-t-0 p-b-0">
		<div class="container">
			<div class="bg-info">
					@if($cms_bangdientu->isEmpty())
						@foreach($cms_baiviet as $value)
							<a href="{{ route('baiviet.chitiet', ['chuDe' => $value->CMS_ChuDe->TenChuDeKhongDau, 'titleWithID' => $value->TieuDeKhongDau . '-' . $value->ID . '.html']) }}">{{ Str::limit($value->TieuDe, 120) }}</a>
						@endforeach
					@else
					
						<marquee  onmouseover="stop()" onmouseout="start()">
							<span class="text-white font-weight-bold">Tin mới: </span>
							@php
								$count=1;
							@endphp
						@foreach($cms_bangdientu as $value)
							<a class="text-white" href="{{ empty($value->LienKet) ? '#tin-moi' : $value->LienKet }}">{{$count++}}/{{ $value->NoiDung }} &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
						@endforeach
						</marquee>
					
					@endif
				</div>	
		</div>
		<div class="container">
			<div class="d-none d-xl-block d-lg-block">
				<div id="slider" class="inspiro-slider slider-halfscreen dots-creative" data-height-xs="360" data-autoplay="2600" data-animate-in="fadeIn" data-animate-out="fadeOut" data-items="1" data-loop="true" data-autoplay="true">
					@foreach($cms_trinhchieu as $value)
						<div class="slide background-image" style="background-image:url('{{ $slider_path . $value->HinhAnh }}');">
							<div class="container">
								<div class="slide-captions">
									
										<h5 class="text-primary">Welcome to</h5>
										<h2 class="text-uppercase text-medium text-primary">THIEN PHUC COMPANY</h2>
										<a class="btn" href="{{$value->LienKet1}}">Tìm hiểu thêm</a>
									
								</div>
							</div>
						</div>
					@endforeach
				</div>
			</div>
			<div class="d-sm-block d-md-block d-lg-none d-xl-none">
				<div class="grid-articles carousel" data-items="1" data-margin="0" data-autoplay="true" data-autoplay="2000" data-loop="true" data-arrows="false" data-dots="false" data-auto-width="true">
					@foreach($cms_trinhchieu as $value)
						<article class="post-entry">
							<a href="#" class="post-image"><img src="{{ $slider_path . $value->HinhAnh }}" /></a>
							<div class="post-entry-overlay">
								<div class="post-entry-meta">
									
										<div class="post-entry-meta-category">
											<span class="badge badge-danger">Chuyên mục</span>
										</div>
										<div class="post-entry-meta-title">
											<h2><a href="#">Tiêu đề</a></h2>
										</div>
										<span class="post-date"><i class="fal fa-calendar-alt"></i> Ngày đăng</span>
									
								</div>
							</div>
						</article>
					@endforeach
				</div>
			</div>
		</div>
		
	</section>
	
	
	
	<section id="section-page" class="p-t-50  p-b-0 " >
		<div class="triangle-divider-top"></div>
		
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-3">
					<a href="{{url('/bai-viet/gioi-thieu/gioi-thieu-2.html')}}">
						<div class="icon-box effect medium color border center">
							<div class="icon">
								<i class="fal fa-server"></i>
							</div>
							<h3>Sản phẩm đa dạng</h3>
							<p>Cơ cấu tổ chức của Khoa Công nghệ thông tin.</p>
						</div>
					</a>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-3">
					<div class="icon-box effect medium color border center">
						<div class="icon">
							<a href="{{url('/bai-viet/gioi-thieu/gioi-thieu-2.html')}}"><i class="fal fa-newspaper"></i></a>
						</div>
						<h3>Thông tin minh bạch</h3>
						<p>Các sản phẩm khoa học của giảng viên và sinh viên.</p>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-3">
					<div class="icon-box effect medium color border center">
						<div class="icon">
							<a href="{{url('/bai-viet/gioi-thieu/gioi-thieu-2.html')}}"><i class="fal fa-folder-tree"></i></a>
						</div>
						<h3>Quy trình đơn giản</h3>
						<p>Thông tin hoạt động đối ngoại của Khoa Công nghệ thông tin.</p>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-3">
					<div class="icon-box effect medium color border center">
						<div class="icon">
							<a href="{{url('/bai-viet/gioi-thieu/gioi-thieu-2.html')}}"><i class="fal fa-trophy"></i></a>
						</div>
						<h3>Thương hiệu uy tín</h3>
						<p>Các văn bản và biểu mẫu dành cho giảng viên và sinh viên.</p>
					</div>
				</div>
				
				
			</div>
			
				
			
		</div>
		<div class="triangle-divider-bottom"></div>
	</section>
	
	{{-- <section id="section-department" class="p-t-30 p-b-0">
		<div class="container">
			<div class="heading-text heading-section text-center heading-line">
				<h4>DỰ ÁN NỔI BẬC</h4>
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="icon-box effect square medium color">
						<div class="icon">
							<a href="{{ url('/bai-viet/gioi-thieu/ban-chu-nhiem-khoa-4.html') }}"><i class="fal fa-building"></i></a>
						</div>
						<h3>Ban Chủ nhiệm Khoa</h3>
						<p>Trực tiếp quản lý và điều hành các hoạt động của Khoa theo qui định của nhà trường.</p>
					</div>
				</div>
				<div class="col-md-6">
					<div class="icon-box effect square medium color">
						<div class="icon">
							<a href="{{ url('/bai-viet/gioi-thieu/van-phong-khoa-5.html') }}"><i class="fal fa-building"></i></a>
						</div>
						<h3>Văn phòng Khoa</h3>
						<p>Đầu mối liên hệ giữa các đơn vị, lên kế hoạch và tổ chức triển khai thực hiện công tác đào tạo.</p>
					</div>
				</div>
				<div class="col-md-6">
					<div class="icon-box effect square medium color">
						<div class="icon">
							<a href="{{ url('/bai-viet/gioi-thieu/bo-mon-cong-nghe-thong-tin-6.html') }}"><i class="fal fa-building"></i></a>
						</div>
						<h3>Bộ môn Công nghệ thông tin</h3>
						<p>Quản lý chương trình đào tạo và giảng dạy sinh viên chuyên ngành Công nghệ thông tin...</p>
					</div>
				</div>
				<div class="col-md-6">
					<div class="icon-box effect square medium color">
						<div class="icon">
							<a href="{{ url('/bai-viet/gioi-thieu/bo-mon-ky-thuat-phan-mem-7.html') }}"><i class="fal fa-building"></i></a>
						</div>
						<h3>Bộ môn Kỹ thuật phần mềm</h3>
						<p>Quản lý chương trình đào tạo và giảng dạy sinh viên chuyên ngành Kỹ thuật phần mềm...</p>
					</div>
				</div>
			</div>
		</div>
	</section> --}}
	
	
	
	<section id="section-article" class="p-t-30 p-b-30">
		<div class="container">
			<div class="heading-text heading-section text-center heading-line">
				<h4>DỰ ÁN NỔI BẬC</h4>
			</div>
			<div class="grid-articles-customize grid-articles-customize-space grid-articles-customize-v2">
				@php
					function LayHinhDauTien($strNoiDung)
					{
						$first_img = "";
						ob_start();
						ob_end_clean();
						$output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $strNoiDung, $matches);
						if(empty($output))
							return "images/noimage.png";
						else
							return $matches[1][0];
					}
				@endphp	
				@foreach($cms_baiviet as $value)
					<article class="post-entry">
						
						<a href="{{ route('baiviet.chitiet', ['chuDe' => $value->CMS_ChuDe->TenChuDeKhongDau, 'titleWithID' => $value->TieuDeKhongDau . '-' . $value->ID . '.html']) }}" class="post-image"><img src="{{ LayHinhDauTien($value->NoiDung) }}" /></a>
						<div class="post-entry-overlay">
							<div class="post-entry-meta">
								<div class="post-entry-meta-category">
									<span class="badge badge-danger"><a href="{{ route('baiviet.chude', ['chuDe' => $value->CMS_ChuDe->TenChuDeKhongDau]) }}">{{ $value->CMS_ChuDe->TenChuDe }}</a></span>
								</div>
								<div class="post-entry-meta-title text-white">
									<h2><a href="{{ route('baiviet.chitiet', ['chuDe' => $value->CMS_ChuDe->TenChuDeKhongDau, 'titleWithID' => $value->TieuDeKhongDau . '-' . $value->ID . '.html']) }}">{{ $value->TieuDe }}</a></h2>
								</div>
								<span class="post-date text-white"><i class="fal fa-calendar-alt"></i>{{ Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $value->created_at)->format('d/m/Y') }}</span>
								<span class="post-numviews text-white"><i class="fal fa-eye"></i>{{ $value->LuotXem }} lượt xem</span>
							</div>
						</div>
					</article>
				@endforeach
			</div>
		</div>
	</section>
	
	<div class="seperator seperator-image seperator-over-top background-white" style="background-image:url({{ asset('public/frontend/images/seperator-top.png') }});"></div>
	<section id="section-portfolio" class="p-t-30 p-b-30" style="background-color:#e9e6df;">
		<div class="container">
			<div class="heading-text heading-section text-center heading-line">
				<h4>HÌNH ẢNH</h4>
			</div>
			<div class="portfolio">
				<nav class="grid-filter gf-outline" data-layout="#portfolio">
					<ul>
						<li class="active"><a href="{{ route('hinhanh') }}" data-category="*">Xem tất cả</a></li>
						@foreach($cms_hinhanh_chude as $value)
							<li><a href="{{ route('hinhanh.chude', ['chuDe' => $value->TenChuDeKhongDau]) }}" data-category=".{{ $value->TenChuDeKhongDau }}">{{ $value->TenChuDe }}</a></li>
						@endforeach
					</ul>
					<div class="grid-active-title">Xem tất cả</div>
				</nav>
				<div id="portfolio" class="grid-layout portfolio-4-columns" data-margin="20">
					@foreach($hinhanhhoatdong as $value)
						<div class="portfolio-item img-zoom {{ $value['TenChuDeKhongDau'] }}">
							<div class="portfolio-item-wrap">
								<div class="portfolio-image portfolio-image-index">
									<a href="{{ route('hinhanh.chitiet', ['chuDe' => $value['TenChuDeKhongDau'], 'titleWithID' => $value['MoTaKhongDau'] . '-' . $value['ID'] . '.html']) }}">
										<img src="{{ $value['HinhDaiDien'] }}" />
									</a>
								</div>
								<div class="portfolio-description">
									<a title="{{ $value['MoTa'] }}" data-lightbox="image" href="{{ $value['HinhDaiDien'] }}"><i class="fal fa-expand"></i></a>
									<a href="{{ route('hinhanh.chitiet', ['chuDe' => $value['TenChuDeKhongDau'], 'titleWithID' => $value['MoTaKhongDau'] . '-' . $value['ID'] . '.html']) }}"><i class="fal fa-link"></i></a>
								</div>
							</div>
						</div>
					@endforeach
				</div>
			</div>
		</div>
	</section>
	<div class="seperator seperator-image background-white" style="background-image:url({{ asset('public/frontend/images/seperator-bottom.png') }});"></div>
	
	
@endsection

@section('javascript')
	<script async src="https://www.googletagmanager.com/gtag/js?id={{ env('GOOGLE_ANALYTICS_HOME') }}"></script>
	{{-- <script>
		window.dataLayer = window.dataLayer || [];
		function gtag() { dataLayer.push(arguments); }
		gtag('js', new Date());
		gtag('config', '{{ env('GOOGLE_ANALYTICS_HOME') }}', { cookie_domain: 'fit.agu.edu.vn', cookie_flags: 'SameSite=None;Secure' });
	</script> --}}
@endsection