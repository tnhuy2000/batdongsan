<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>Trang chủ</title>
    
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <meta name="keywords" content="bootstrap, bootstrap admin template, admin theme, admin dashboard, dashboard template, admin template, responsive" />
    <meta name="author" content="Codedthemes" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
	<title>@yield('pagetitle', 'Trang chủ') - {{ config('app.short_name', 'Laravel') }}</title>

	<link rel="shortcut icon" type="image/x-icon" href="{{ asset('public/favicon.png') }}" />
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
    <!-- waves.css -->
    <link rel="stylesheet" href="{{asset('public/themes/assets/pages/waves/css/waves.min.css')}}" type="text/css" media="all">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="{{asset('public/themes/assets/css/bootstrap/css/bootstrap.min.css')}}">
    <!-- waves.css -->
    <link rel="stylesheet" href="{{asset('public/themes/assets/pages/waves/css/waves.min.css" type="text/css')}}" media="all">
    <!-- themify icon -->
    <link rel="stylesheet" type="text/css" href="{{asset('public/themes/assets/icon/themify-icons/themify-icons.css')}}">
    <!-- font-awesome-n -->
    <link rel="stylesheet" type="text/css" href="{{asset('public/themes/assets/css/font-awesome-n.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/themes/assets/css/font-awesome.min.css')}}">
    <!-- scrollbar.css -->
    <link rel="stylesheet" type="text/css" href="{{asset('public/themes/assets/css/jquery.mCustomScrollbar.css')}}">
    <link rel="stylesheet" href="{{ asset('public/vendor/datatables/datatables-1.10.22/css/dataTables.bootstrap4.min.css') }}" />
    <!-- Style.css -->
    <link rel="stylesheet" href="{{ asset('public/vendor/fontawesome/15.4.0/css/all.min.css') }}" />
    @toastr_css
	@yield('css')
    <link rel="stylesheet" type="text/css" href="{{asset('public/themes/assets/css/style.css')}}">
</head>

<body>
    <!-- Pre-loader start -->
    <div class="theme-loader">
        <div class="loader-track">
            <div class="preloader-wrapper">
                <div class="spinner-layer spinner-blue">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
                <div class="spinner-layer spinner-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>

                <div class="spinner-layer spinner-yellow">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>

                <div class="spinner-layer spinner-green">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pre-loader end -->
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">
            <nav class="navbar header-navbar pcoded-header">
                <div class="navbar-wrapper">
                    <div class="navbar-logo">
                        <a class="mobile-menu waves-effect waves-light" id="mobile-collapse" href="#!">
                            <i class="ti-menu"></i>
                        </a>
                        <div class="mobile-search waves-effect waves-light">
                            <div class="header-search">
                                <div class="main-search morphsearch-search">
                                    <div class="input-group">
                                        <span class="input-group-prepend search-close"><i class="ti-close input-group-text"></i></span>
                                        <input type="text" class="form-control" placeholder="Enter Keyword">
                                        <span class="input-group-append search-btn"><i class="ti-search input-group-text"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="{{ route('admin.home') }}">
                            <img class="img-fluid" src="{{ asset('public/frontend/images/logo.png') }}" alt="Theme-Logo" />
                        </a>&nbsp;
                        <a class="mobile-options waves-effect waves-light">
                            <i class="ti-more"></i>
                        </a>
                    </div>
                    <div class="navbar-container container-fluid">
                        <ul class="nav-left">
                            <li>
                                <div class="sidebar_toggle"><a href="javascript:void(0)"><i class="ti-menu"></i></a></div>
                            </li>
                            <li>
                                <a href="#!" onclick="javascript:toggleFullScreen()" class="waves-effect waves-light">
                                    <i class="ti-fullscreen"></i>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav-right">
                           
                            <li class="user-profile header-notification">
                                <a href="#!" class="waves-effect waves-light">
                                    <img src="{{ asset('public/admin/images/no-image.png')}}" class="img-radius" alt="User-Profile-Image">
                                    <span>{{Auth::user()->name}}</span>
                                    <i class="ti-angle-down"></i>
                                </a>
                                <ul class="show-notification profile-notification">
                                    
                                    <li class="waves-effect waves-light">
                                        <a href="#capnhathoso" data-toggle="modal" data-target="#myModalEditHoSo">
                                            <i class="ti-user"></i> Hồ sơ cá nhân
                                        </a>
                                    </li>
                                   
                                    <li class="waves-effect waves-light">
                                        <a href="{{ route('admin.hosonhanvien.doimatkhau') }}">
                                            <i class="ti-lock"></i> Đổi mật khẩu
                                        </a>
                                    </li>
                                    <li class="waves-effect waves-light" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        <a href="{{ route('logout') }}">
                                            <i class="ti-layout-sidebar-left"></i> Đăng xuất
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    <nav class="pcoded-navbar">
                        <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
                        <div class="pcoded-inner-navbar main-menu">
                            <div class="">
                                <div class="main-menu-header">
                                    <img class="img-80 img-radius" src="{{ asset('public/admin/images/no-image.png')}}" alt="User-Profile-Image">
                                    <div class="user-details">
                                        <span id="more-details">{{ Auth::user()->name }}<i class="fa fa-caret-down"></i></span>
                                    </div>
                                </div>
                                <div class="main-menu-content">
                                    <ul>
                                        <li class="more-details">
                                            <a href="#hoso" data-toggle="modal" data-target="#myModalEditHoSo"><i class="ti-user"></i>Hồ sơ cá nhân</a>
                                            <a href="{{ route('admin.hosonhanvien.doimatkhau') }}"><i class="ti-lock"></i>Đổi mật khẩu</a>
                                            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="ti-layout-sidebar-left"></i>Logout</a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="post" style="display: none;">@csrf</form>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                          
                           
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="active">
                                    <a href="{{ route('admin.home') }}" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                                        <span class="pcoded-mtext">Trang chủ</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                            </ul>
                            
                            
                            @if(Auth::user()->privilege == "superadmin" || Auth::user()->privilege == "qldanhmuc")
                            <div class="pcoded-navigation-label">Quản lý danh mục</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="ti-view-list-alt"></i><b>BC</b></span>
                                        <span class="pcoded-mtext">Danh mục</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class=" ">
                                            <a href="{{ route('admin.danhmuc.chude') }}" class="waves-effect waves-dark">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext">Chủ đề</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="{{ route('admin.danhmuc.mainslide') }}" class="waves-effect waves-dark">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext">Trình chiếu</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="{{ route('admin.danhmuc.bangdientu') }}" class="waves-effect waves-dark">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext">Bảng điện tử</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="{{ route('admin.danhmuc.lienketngoai') }}" class="waves-effect waves-dark">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext">Liên kết ngoài</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="{{ route('admin.danhmuc.chucvu') }}" class="waves-effect waves-dark">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext">Chức vụ</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="{{ route('admin.danhmuc.nhanvien') }}" class="waves-effect waves-dark">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext">Nhân viên</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        
                                    </ul>
                                </li>
                            </ul>
                            @endif
                            @if(Auth::user()->privilege == "superadmin" || Auth::user()->privilege == "qlbaiviet")
                            <div class="pcoded-navigation-label">Quản lý bài viết</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="ti-book"></i><b>BC</b></span>
                                        <span class="pcoded-mtext">Bài viết</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class=" ">
                                            <a href="{{ route('admin.baiviet.them') }}" class="waves-effect waves-dark">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext">Đăng bài</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="{{ route('admin.baiviet.danhsach') }}" class="waves-effect waves-dark">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext">Bài viết đã đăng</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                       
                                    </ul>
                                </li>
                            </ul>
                            
                    
                            @endif
                            @if(Auth::user()->privilege == "superadmin" || Auth::user()->privilege == "qlbaiviet")
                            
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="ti-image"></i><b>BC</b></span>
                                        <span class="pcoded-mtext">Hình ảnh</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class=" ">
                                            <a href="{{ route('admin.hinhanh.them') }}" class="waves-effect waves-dark">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext">Đăng hình ảnh</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="{{ route('admin.hinhanh.danhsach') }}" class="waves-effect waves-dark">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext">Hình ảnh đã đăng</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                       
                                    </ul>
                                </li>
                            </ul>
                            
                    
                            @endif
                            @if(Auth::user()->privilege == "superadmin")
                            <div class="pcoded-navigation-label">Quản lý người dùng</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="">
                                    <a href="{{ route('admin.danhmuc.nguoidung') }}" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="ti-user"></i><b>FC</b></span>
                                        <span class="pcoded-mtext">Người dùng</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                            </ul>
                    
                            @endif
                          
                        </div>
                    </nav>
                    <div class="pcoded-content">
                        <!-- Page-header start -->
                        <div class="page-header">
                            <div class="page-block">
                                <div class="row align-items-center">
                                    <div class="col-md-8">
                                        <div class="page-header-title">
                                            <h5 class="m-b-10">Trang chủ</h5>
                                            <p class="m-b-0">Chào mừng đến với trang quản trị</p>
                                        </div>
                                    </div>
                                    {{-- <div class="col-md-4">
                                        <ul class="breadcrumb">
                                            <li class="breadcrumb-item">
                                                <a href="index.html"> <i class="fa fa-home"></i> </a>
                                            </li>
                                            <li class="breadcrumb-item"><a href="#!">Trang chủ</a>
                                            </li>
                                        </ul>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                        <!-- Page-header end -->
                        <div class="pcoded-inner-content">
                            <!-- Main-body start -->
                            <div class="main-body">
                                <div class="page-wrapper">
                                    <!-- Page-body start -->
                                    <div class="page-body">
                                        @yield('content')
                                    </div>
                                    <!-- Page-body end -->
                                </div>
                                <div id="styleSelector"> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <form action="{{ route('admin.hosonhanvien.capnhathoso') }}" method="post">
		@csrf
		
		<div class="modal fade" id="myModalEditHoSo" tabindex="-1" role="dialog" aria-labelledby="myModalLabelEdit">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="myModalLabelEdit">Cập nhật hồ sơ</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span>&times;</span></button>
					</div>
					<div class="modal-body">
						<div class="form-group">
							<label for="name_edit"><span class="badge badge-info">1</span> Họ và tên <span class="text-danger font-weight-bold">*</span></label>
							<input type="text" class="form-control @error('name_edit') is-invalid @enderror" id="name_edit" name="name_edit" value="{{ Auth::user()->name }}" required />
							@error('name_edit')
								<div class="invalid-feedback"><strong>{{ $message }}</strong></div>
							@enderror
						</div>
						<div class="form-group">
							<label for="username_edit"><span class="badge badge-info">2</span> Tên đăng nhập <span class="text-danger font-weight-bold">*</span></label>
							<input type="text" class="form-control @error('username_edit') is-invalid @enderror" id="username_edit" name="username_edit" value="{{ Auth::user()->username }}" required />
							@error('username_edit')
								<div class="invalid-feedback"><strong>{{ $message }}</strong></div>
							@enderror
						</div>
						<div class="form-group">
							<label for="email_edit"><span class="badge badge-info">3</span> Email <span class="text-danger font-weight-bold">*</span></label>
							<input type="email" class="form-control @error('email_edit') is-invalid @enderror" id="email_edit" name="email_edit" value="{{ Auth::user()->email }}" required />
							@error('email_edit')
								<div class="invalid-feedback"><strong>{{ $message }}</strong></div>
							@enderror
						</div>
						
						
					</div>
					<div class="modal-footer">
						<button type="submit" class="btn btn-primary"><i class="fal fa-save"></i> Thực hiện</button>
					</div>
				</div>
			</div>
		</div>
	</form>
    <!-- Warning Section Ends -->
    @jquery
    @toastr_js
    @toastr_render
    <!-- Required Jquery -->
    {{-- <script src="{{ asset('public/vendor/jquery/3.5.1/jquery-3.5.1.min.js') }}"></script> --}}
    <script type="text/javascript" src="{{asset('public/themes/assets/js/jquery/jquery.min.js')}} "></script>
    <script type="text/javascript" src="{{asset('public/themes/assets/js/jquery-ui/jquery-ui.min.js ')}}"></script>
    <script type="text/javascript" src="{{asset('public/themes/assets/js/popper.js/popper.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('public/themes/assets/js/bootstrap/js/bootstrap.min.js')}} "></script>
    <!-- waves js -->
    <script src="{{asset('public/themes/assets/pages/waves/js/waves.min.js')}}"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="{{asset('public/themes/assets/js/jquery-slimscroll/jquery.slimscroll.js')}}"></script>

    <!-- slimscroll js -->
    <script src="{{asset('public/themes/assets/js/jquery.mCustomScrollbar.concat.min.js ')}}"></script>

    <!-- menu js -->
    <script src="{{asset('public/themes/assets/js/pcoded.min.js')}}"></script>
    <script src="{{asset('public/themes/assets/js/vertical/vertical-layout.min.js ')}}"></script>

    <script type="text/javascript" src="{{asset('public/themes/assets/js/script.js ')}}"></script>
    <script src="{{ asset('public/vendor/datatables/datatables-1.10.22/js/jquery.dataTables.min.js') }}"></script>
	<script src="{{ asset('public/vendor/datatables/datatables-1.10.22/js/dataTables.bootstrap4.min.js') }}"></script>
	<script async src="https://www.googletagmanager.com/gtag/js?id={{ env('GOOGLE_ANALYTICS_ADMIN') }}"></script>
   
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag() { dataLayer.push(arguments); }
		gtag('js', new Date());
		gtag('config', '{{ env('GOOGLE_ANALYTICS_ADMIN') }}', { cookie_flags: 'SameSite=None;Secure' });
	</script>
	<script>
		$(document).ready(function() {
			$("#DataList").DataTable({
				"aLengthMenu": [[10, 25, 50, 100, -1], [10, 25, 50, 100, "Tất cả"]],
				"iDisplayLength": 25,
				"oLanguage": {
					"sLengthMenu": "Hiện _MENU_ dòng",
					"oPaginate": {
						"sFirst": "<i class='fal fa-step-backward'></i>",
						"sLast": "<i class='fal fa-step-forward'></i>",
						"sNext": "<i class='fal fa-chevron-right'></i>",
						"sPrevious": "<i class='fal fa-chevron-left'></i>"
					},
					"sEmptyTable": "Không có dữ liệu",
					"sSearch": "Tìm kiếm:",
					"sZeroRecords": "Không có dữ liệu",
					"sInfo": "Hiện từ _START_ đến _END_ của _TOTAL_ dòng",
					"sInfoEmpty" : "Không tìm thấy",
					"sInfoFiltered": " (tổng số _MAX_ dòng)"
				}
			});
			
			$("#DataList").wrap('<div class="table-responsive"></div>');
			$("#DataList_wrapper").removeClass("container-fluid");
		});
	</script>
	@yield('javascript')
</body>

</html>
