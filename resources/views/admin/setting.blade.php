<!DOCTYPE html>
<html lang="en">
<head> 
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<title>Hound I Fast build Admin dashboard for any platform</title>
	<meta name="description" content="Hound is a Dashboard & Admin Site Responsive Template by hencework." />
	<meta name="keywords" content="admin, admin dashboard, admin template, cms, crm, Hound Admin, Houndadmin, premium admin templates, responsive admin, sass, panel, software, ui, visualization, web app, application" />
	<meta name="author" content="hencework"/>
	
	<!-- Favicon -->
	<link rel="shortcut icon" href="{{ URL::asset('public/faviconnew.ico') }}">
	<link rel="icon" href="{{ URL::asset('public/faviconnew.ico') }}" type="image/x-icon">

	<!-- Custom CSS -->
	<link href="{{ URL::asset('public/dist/css/style.css') }}" rel="stylesheet" type="text/css">
</head>
<body>
	<!--Preloader-->
	<div class="preloader-it">
		<div class="la-anim-1"></div>
	</div>
	<!--/Preloader-->
	
	<div class="wrapper pa-0">
		<header class="sp-header">
			<div class="sp-logo-wrap pull-left">
				<a href="index.html">
					<img class="brand-img mr-10" src="{{ URL::asset('public/dist/img/logo.png') }}" alt="brand"/>
					<span class="brand-text">Hound</span>
				</a>
			</div>
			<div class="form-group mb-0 pull-right">
			</div>
			<div class="clearfix"></div>
		</header>
		
		<!-- Main Content -->
		<div class="page-wrapper pa-0 ma-0 auth-page">
			<div class="container-fluid">
				<!-- Row -->
				<div class="table-struct full-width full-height">
					<div class="table-cell vertical-align-middle auth-form-wrap">
						<div class="auth-form  ml-auto mr-auto no-float">
							<div class="row">
								<div class="col-sm-12 col-xs-12">
									<div class="mb-30">
										<h3 class="text-center txt-dark mb-10">Change Credentials</h3>
										<h6 class="text-center nonecase-font txt-grey">Enter your details below</h6>
									</div>	
									<div class="form-wrap">
										<form method="post" action="{{ route('changeCredentials') }}">
											@csrf
											<div class="form-group">
												<label class="control-label mb-10">Email</label>
												<input type="email" class="form-control" value="{{ $adminEmail }}" required="" readonly="">
											</div>
											<div class="form-group">
												<label class="pull-left control-label mb-10">Password</label>
												<div class="clearfix"></div>
												<input type="password" name="password" class="form-control" required="">
											</div>
											<div class="form-group text-center">
												<button type="submit" class="btn btn-info btn-rounded">Confirm</button>
											</div>
										</form>
									</div>
								</div>	 
							</div>
						</div>
					</div>
				</div>
				<!-- /Row -->	
			</div>
		</div>
		<!-- /Main Content -->

	</div>
	<!-- /#wrapper -->
		
	<!-- JavaScript -->
	
	<!-- jQuery -->
    <script src="{{ URL::asset('public/vendors/bower_components/jquery/dist/jquery.min.js') }}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ URL::asset('public/vendors/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
	
	<!-- Piety JavaScript -->
	<script src="{{ URL::asset('public/vendors/bower_components/peity/jquery.peity.min.js') }}"></script>
	<script src="{{ URL::asset('public/dist/js/peity-data.js') }}"></script>
	
	<!-- Slimscroll JavaScript -->
	<script src="{{ URL::asset('public/dist/js/jquery.slimscroll.js') }}"></script>
	
	<!-- Owl JavaScript -->
	<script src="{{ URL::asset('public/vendors/bower_components/owl.carousel/dist/owl.carousel.min.js') }}"></script>
	
	<!-- Switchery JavaScript -->
	<script src="{{ URL::asset('public/vendors/bower_components/switchery/dist/switchery.min.js') }}"></script>
	
	<!-- Fancy Dropdown JS -->
	<script src="{{ URL::asset('public/dist/js/dropdown-bootstrap-extended.js') }}"></script>
	
	<!-- Init JavaScript -->
	<script src="{{ URL::asset('public/dist/js/init.js') }}"></script>
</body>

</html>
