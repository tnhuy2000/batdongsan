<!DOCTYPE html>
<html lang="en">

<head>
    <title>Đăng nhập</title>
 
      <!-- Meta -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />

      <meta name="keywords" content="bootstrap, bootstrap admin template, admin theme, admin dashboard, dashboard template, admin template, responsive" />
      <meta name="author" content="Codedthemes" />
      <!-- Favicon icon -->

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
	  @yield('css')
	  <link rel="stylesheet" type="text/css" href="{{asset('public/themes/assets/css/style.css')}}">
  </head>

  <body themebg-pattern="theme1">
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
  <section class="login-block">
        <!-- Container-fluid starts -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
						
						
                   
                        <div class="text-center">
                            <img src="{{asset('public/frontend/images/logo.png')}}" alt="logo.png">
                        </div>
                        <div class="auth-box card">
                            <div class="card-block">
                                <div class="row m-b-20">
                                    <div class="col-md-12">
                                        <h3 class="text-center txt-primary">Đăng nhập</h3>
                                    </div>
                                </div>
								<form class="md-float-material form-material" method="post" action="{{ route('login') }}" >
									@csrf
								@if(session('warning'))
									<div class="alert alert-warning alert-dismissible fade show" role="alert">
										<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span>&times;</span></button>
										<span class="font-weight-bold text-danger"><i class="fal fa-exclamation-triangle"></i> {{ session('warning') }}</span>
									</div>
								@endif
								<div class="row m-t-30">
									<div class="col-md-12">
										<a class="btn btn-warning btn-md btn-block waves-effect text-center m-b-20" href="{{ route('google.login') }}" role="button"><i class="fab fa-google"></i> Đăng nhập bằng Gmail</a>					
									</div>
								</div>
                                <div class="form-group form-primary">
                                    <input type="text" class="form-control{{ ($errors->has('email') || $errors->has('username')) ? ' is-invalid' : '' }}" id="email" name="email" value="{{ old('email') }}"  placeholder="Tài khoản hoặc email" required />
									@if ($errors->has('email') || $errors->has('username'))
										<span class="invalid-feedback" role="alert"><strong>{{ empty($errors->first('email')) ? $errors->first('username') : $errors->first('email') }}</strong></span>
									@endif
                                    <span class="form-bar"></span>
                                    {{-- <label class="float-label">Tên đăng nhập hoặc email</label> --}}
                                </div>
                                <div class="form-group form-primary">
                                   <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="Mật khẩu" required />
									@error('password')
										<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
									@enderror
                                    <span class="form-bar"></span>
                                    {{-- <label class="float-label">Mật khẩu</label> --}}
                                </div>
                                
                               
                                <div class="row m-t-30">
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">Đăng nhập ngay</button>
                                    </div>
                                </div>
                               
							</form> 
                                
                            </div>
                        </div>
                    
                </div>
                <!-- end of col-sm-12 -->
            </div>
            <!-- end of row -->
        </div>
        <!-- end of container-fluid -->
    </section>
    
<!-- Required Jquery -->
<script type="text/javascript" src="{{asset('public/themes/assets/js/jquery/jquery.min.js ')}}"></script>
<script type="text/javascript" src="{{asset('public/themes/assets/js/jquery-ui/jquery-ui.min.js ')}}"></script>
<script type="text/javascript" src="{{asset('public/themes/assets/js/popper.js/popper.min.js')}}"></script>
<script type="text/javascript" src="{{asset('public/themes/assets/js/bootstrap/js/bootstrap.min.js')}} "></script>
<!-- waves js -->
<script src="{{asset('public/themes/assets/pages/waves/js/waves.min.js')}}"></script>
<!-- jquery slimscroll js -->
<script type="text/javascript" src="{{asset('public/themes/assets/js/jquery-slimscroll/jquery.slimscroll.js')}}"></script>
<script type="text/javascript" src="{{asset('public/themes/assets/js/common-pages.js')}}"></script>
</body>

</html>
