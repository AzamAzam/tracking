@extends('js.custom')
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
    <div class="wrapper theme-1-active box-layout pimary-color-red">

		<!-- Top Menu Items -->
		<nav class="navbar navbar-inverse navbar-fixed-top">
			<div class="mobile-only-brand pull-left">
				<div class="nav-header pull-left">
					<div class="logo-wrap">
						<a href="index.html">
							<img class="brand-img" src="dist/img/logo.png" alt="brand"/>
							<span class="brand-text">Hound</span>
						</a>
					</div>
				</div>	
				<a id="toggle_nav_btn" class="toggle-left-nav-btn inline-block ml-20 pull-left" href="javascript:void(0);"><i class="zmdi zmdi-menu"></i></a>
				<a id="toggle_mobile_search" data-toggle="collapse" data-target="#search_form" class="mobile-only-view" href="javascript:void(0);"><i class="zmdi zmdi-search"></i></a>
				<a id="toggle_mobile_nav" class="mobile-only-view" href="javascript:void(0);"><i class="zmdi zmdi-more"></i></a>
				
			</div>
			<div id="mobile_only_nav" class="mobile-only-nav pull-right">
				<ul class="nav navbar-right top-nav pull-right">
					
					<li class="dropdown auth-drp">
						<a href="#" class="dropdown-toggle pr-0" data-toggle="dropdown"><img src="dist/img/user1.png" alt="user_auth" class="user-auth-img img-circle"/><span class="user-online-status"></span></a>
						<ul class="dropdown-menu user-auth-dropdown" data-dropdown-in="flipInX" data-dropdown-out="flipOutX">
							<li>
								<a href="profile.html"><i class="zmdi zmdi-account"></i><span>Profile</span></a>
							</li>
							<li>
								<a href="#"><i class="zmdi zmdi-card"></i><span>Change Password</span></a>
							</li>
							
							<li class="divider"></li>
							<li>
								<a href="#"><i class="zmdi zmdi-power"></i><span>Log Out</span></a>
							</li>
						</ul>
					</li>
				</ul>
			</div>	
		</nav>
		<!-- /Top Menu Items -->
		
		<!-- Left Sidebar Menu -->
		<div class="fixed-sidebar-left">
			<ul class="nav navbar-nav side-nav nicescroll-bar">
				<li class="navigation-header">
					<span>Main</span> 
					<i class="zmdi zmdi-more"></i>
				</li>
				<li>
					<a href="javascript:void(0);" data-toggle="collapse" data-target="#dashboard_dr"><div class="pull-left"><i class="zmdi zmdi-landscape mr-20"></i><span class="right-nav-text">Dashboard</span></div><div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
					<ul id="dashboard_dr" class="collapse collapse-level-1">
						<li>
							<a  href="index.html">Analytical</a>
						</li>
						<li>
							<a  href="index2.html">Demographic</a>
						</li>
						<li>
							<a href="index3.html">Project</a>
						</li>
						<li>
							<a href="profile.html">profile</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="javascript:void(0);" data-toggle="collapse" data-target="#ecom_dr"><div class="pull-left"><i class="zmdi zmdi-shopping-basket mr-20"></i><span class="right-nav-text">E-Commerce</span></div><div class="pull-right"><span class="label label-success">hot</span></div><div class="clearfix"></div></a>
					<ul id="ecom_dr" class="collapse collapse-level-1">
						<li>
							<a href="e-commerce.html">Dashboard</a>
						</li>
						<li>
							<a href="product.html">Products</a>
						</li>
						<li>
							<a href="product-detail.html">Product Detail</a>
						</li>
						<li>
							<a href="add-products.html">Add Product</a>
						</li>
						<li>
							<a href="product-orders.html">Orders</a>
						</li>
						<li>
							<a href="product-cart.html">Cart</a>
						</li>
						<li>
							<a href="product-checkout.html">Checkout</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="javascript:void(0);" data-toggle="collapse" data-target="#app_dr"><div class="pull-left"><i class="zmdi zmdi-apps mr-20"></i><span class="right-nav-text">Apps </span></div><div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
					<ul id="app_dr" class="collapse collapse-level-1">
						<li>
							<a href="chats.html">chats</a>
						</li>
						<li>
							<a href="calendar.html">calendar</a>
						</li>
						<li>
							<a href="weather.html">weather</a>
						</li>
						<li>
							<a href="javascript:void(0);" data-toggle="collapse" data-target="#email_dr">Email<div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
							<ul id="email_dr" class="collapse collapse-level-2">
								<li>
									<a href="inbox.html">inbox</a>
								</li>
								<li>
									<a href="inbox-detail.html">detail email</a>
								</li>
							</ul>
						</li>
						<li>
							<a href="javascript:void(0);" data-toggle="collapse" data-target="#contact_dr">Contacts<div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
							<ul id="contact_dr" class="collapse collapse-level-2">
								<li>
									<a href="contact-list.html">list</a>
								</li>
								<li>
									<a href="contact-card.html">cards</a>
								</li>
							</ul>
						</li>
						<li>
							<a href="file-manager.html">File Manager</a>
						</li>
						<li>
							<a href="todo-tasklist.html">To Do/Tasklist</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="widgets.html"><div class="pull-left"><i class="zmdi zmdi-flag mr-20"></i><span class="right-nav-text">widgets</span></div><div class="pull-right"><span class="label label-warning">8</span></div><div class="clearfix"></div></a>
				</li>
				<li><hr class="light-grey-hr mb-10"/></li>
				<li class="navigation-header">
					<span>component</span> 
					<i class="zmdi zmdi-more"></i>
				</li>
				<li>
					<a href="javascript:void(0);" data-toggle="collapse" data-target="#ui_dr"><div class="pull-left"><i class="zmdi zmdi-smartphone-setup mr-20"></i><span class="right-nav-text">UI Elements</span></div><div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
					<ul id="ui_dr" class="collapse collapse-level-1 two-col-list">
						<li>
							<a href="panels-wells.html">Panels & Wells</a>
						</li>
						<li>
							<a href="modals.html">Modals</a>
						</li>
						<li>
							<a href="sweetalert.html">Sweet Alerts</a>
						</li>
						<li>
							<a href="notifications.html">notifications</a>
						</li>
						<li>
							<a href="typography.html">Typography</a>
						</li>
						<li>
							<a href="buttons.html">Buttons</a>
						</li>
						<li>
							<a href="accordion-toggle.html">Accordion / Toggles</a>
						</li>
						<li>
							<a href="tabs.html">Tabs</a>
						</li>
						<li>
							<a href="progressbars.html">Progress bars</a>
						</li>
						<li>
							<a href="skills-counter.html">Skills & Counters</a>
						</li>
						<li>
							<a href="pricing.html">Pricing Tables</a>
						</li>
						<li>
							<a href="nestable.html">Nestables</a>
						</li>
						<li>
							<a href="dorpdown.html">Dropdowns</a>
						</li>
						<li>
							<a href="bootstrap-treeview.html">Tree View</a>
						</li>
						<li>
							<a href="carousel.html">Carousel</a>
						</li>
						<li>
							<a href="range-slider.html">Range Slider</a>
						</li>
						<li>
							<a href="grid-styles.html">Grid</a>
						</li>
						<li>
							<a href="bootstrap-ui.html">Bootstrap UI</a>
						</li>
					</ul>
				</li>
				<li>
					<a  href="javascript:void(0);" data-toggle="collapse" data-target="#form_dr"><div class="pull-left"><i class="zmdi zmdi-edit mr-20"></i><span class="right-nav-text">Forms</span></div><div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
					<ul id="form_dr" class="collapse collapse-level-1 two-col-list">
						<li>
							<a href="form-element.html">Basic Forms</a>
						</li>
						<li>
							<a href="form-layout.html">form Layout</a>
						</li>
						<li>
							<a href="form-advanced.html">Form Advanced</a>
						</li>
						<li>
							<a href="form-mask.html">Form Mask</a>
						</li>
						<li>
							<a href="form-picker.html">Form Picker</a>
						</li>
						<li>
							<a href="form-validation.html">form Validation</a>
						</li>
						<li>
							<a href="form-wizard.html">Form Wizard</a>
						</li>
						<li>
							<a href="form-x-editable.html">X-Editable</a>
						</li>
						<li>
							<a href="cropperjs.html">Cropperjs</a>
						</li>
						<li>
							<a href="form-file-upload.html">File Upload</a>
						</li>
						<li>
							<a href="dropzone.html">Dropzone</a>
						</li>
						<li>
							<a href="bootstrap-wysihtml5.html">Bootstrap Wysihtml5</a>
						</li>
						<li>
							<a href="tinymce-wysihtml5.html">Tinymce Wysihtml5</a>
						</li>
						<li>
							<a href="summernote-wysihtml5.html">summernote</a>
						</li>
						<li>
							<a href="typeahead-js.html">typeahead</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="javascript:void(0);" data-toggle="collapse" data-target="#chart_dr"><div class="pull-left"><i class="zmdi zmdi-chart-donut mr-20"></i><span class="right-nav-text">Charts </span></div><div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
					<ul id="chart_dr" class="collapse collapse-level-1 two-col-list">
						<li>
							<a href="flot-chart.html">Flot Chart</a>
						</li>
						<li>
							<a href="morris-chart.html">Morris Chart</a>
						</li>
						<li>
							<a href="chart.js.html">chartjs</a>
						</li>
						<li>
							<a href="chartist.html">chartist</a>
						</li>
						<li>
							<a href="easy-pie-chart.html">Easy Pie Chart</a>
						</li>
						<li>
							<a href="sparkline.html">Sparkline</a>
						</li>
						<li>
							<a href="peity-chart.html">Peity Chart</a>
						</li>
					</ul>
				</li>
				<li>
					<a class="active" href="javascript:void(0);" data-toggle="collapse" data-target="#table_dr"><div class="pull-left"><i class="zmdi zmdi-format-size mr-20"></i><span class="right-nav-text">Tables</span></div><div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
					<ul id="table_dr" class="collapse collapse-level-1 two-col-list">
						<li>
							<a class="active-page" href="basic-table.html">Basic Table</a>
						</li>
						<li>
							<a href="bootstrap-table.html">Bootstrap Table</a>
						</li>
						<li>
							<a href="data-table.html">Data Table</a>
						</li>
						<li>
							<a  href="export-table.html"><span class="pull-right"><span class="label label-danger">New</span></span>Export Table</a>
						</li>
						<li>
							<a  href="responsive-data-table.html"><span class="pull-right"><span class="label label-danger">New</span></span>RSPV DataTable</a>
						</li>
						<li>
							<a href="responsive-table.html">Responsive Table</a>
						</li>
						<li>
							<a href="editable-table.html">Editable Table</a>
						</li>
						<li>
							<a href="foo-table.html">Foo Table</a>
						</li>
						<li>
							<a href="jsgrid-table.html">Jsgrid Table</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="javascript:void(0);" data-toggle="collapse" data-target="#icon_dr"><div class="pull-left"><i class="zmdi zmdi-iridescent mr-20"></i><span class="right-nav-text">Icons</span></div><div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
					<ul id="icon_dr" class="collapse collapse-level-1">
						<li>
							<a href="fontawesome.html">Fontawesome</a>
						</li>
						<li>
							<a href="themify.html">Themify</a>
						</li>
						<li>
							<a href="linea-icon.html">Linea</a>
						</li>
						<li>
							<a href="simple-line-icons.html">Simple Line</a>
						</li>
						<li>
							<a href="pe-icon-7.html">Pe-icon-7</a>
						</li>
						<li>
							<a href="glyphicons.html">Glyphicons</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="javascript:void(0);" data-toggle="collapse" data-target="#maps_dr"><div class="pull-left"><i class="zmdi zmdi-map mr-20"></i><span class="right-nav-text">maps</span></div><div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
					<ul id="maps_dr" class="collapse collapse-level-1">
						<li>
							<a href="vector-map.html">Vector Map</a>
						</li>
						<li>
							<a href="google-map.html">Google Map</a>
						</li>
					</ul>
				</li>
				<li><hr class="light-grey-hr mb-10"/></li>
				<li class="navigation-header">
					<span>featured</span> 
					<i class="zmdi zmdi-more"></i>
				</li>
				<li>
					<a href="javascript:void(0);" data-toggle="collapse" data-target="#pages_dr"><div class="pull-left"><i class="zmdi zmdi-google-pages mr-20"></i><span class="right-nav-text">Special Pages</span></div><div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
					<ul id="pages_dr" class="collapse collapse-level-1 two-col-list">
						<li>
							<a href="blank.html">Blank Page</a>
						</li>
						<li>
							<a href="javascript:void(0);" data-toggle="collapse" data-target="#auth_dr">Authantication pages<div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
							<ul id="auth_dr" class="collapse collapse-level-2">
								<li>
									<a href="login.html">Login</a>
								</li>
								<li>
									<a href="signup.html">Register</a>
								</li>
								<li>
									<a href="forgot-password.html">Recover Password</a>
								</li>
								<li>
									<a href="reset-password.html">reset Password</a>
								</li>
								<li>
									<a href="locked.html">Lock Screen</a>
								</li>
							</ul>
						</li>
						<li>
							<a href="javascript:void(0);" data-toggle="collapse" data-target="#invoice_dr">Invoice<div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
							<ul id="invoice_dr" class="collapse collapse-level-2">
								<li>
									<a href="invoice.html">Invoice</a>
								</li>
								<li>
									<a href="invoice-archive.html">Invoice Archive</a>
								</li>
							</ul>
						</li>
						<li>
							<a href="javascript:void(0);" data-toggle="collapse" data-target="#error_dr">error pages<div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
							<ul id="error_dr" class="collapse collapse-level-2">
								<li>
									<a href="404.html">Error 404</a>
								</li>
								<li>
									<a href="500.html">Error 500</a>
								</li>
							</ul>
						</li>
						<li>
							<a href="gallery.html">Gallery</a>
						</li>
						<li>
							<a href="timeline.html">Timeline</a>
						</li>
						<li>
							<a href="faq.html">FAQ</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="documentation.html"><div class="pull-left"><i class="zmdi zmdi-book mr-20"></i><span class="right-nav-text">documentation</span></div><div class="clearfix"></div></a>
				</li>
				<li>
					<a href="javascript:void(0);" data-toggle="collapse" data-target="#dropdown_dr_lv1"><div class="pull-left"><i class="zmdi zmdi-filter-list mr-20"></i><span class="right-nav-text">multilevel</span></div><div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
					<ul id="dropdown_dr_lv1" class="collapse collapse-level-1">
						<li>
							<a href="#">Item level 1</a>
						</li>
						<li>
							<a href="javascript:void(0);" data-toggle="collapse" data-target="#dropdown_dr_lv2">Dropdown level 2<div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
							<ul id="dropdown_dr_lv2" class="collapse collapse-level-2">
								<li>
									<a href="#">Item level 2</a>
								</li>
								<li>
									<a href="#">Item level 2</a>
								</li>
							</ul>
						</li>
					</ul>
				</li>
			</ul>
		</div>
		<!-- /Left Sidebar Menu -->

		<!-- Main Content -->
		<div class="page-wrapper">
			<div class="container-fluid">
				
				<!-- Title -->
				<div class="row heading-bg">
					<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
					  <h5 class="txt-dark">All Employees</h5>
					</div>
					<!-- Breadcrumb -->
					<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
					  <ol class="breadcrumb">
						<li><a href="#">Component</a></li>
						<li><a href="#"><span>Employees</span></a></li>
						<li class="active"><span>All Employees</span></li>
					  </ol>
					</div>
					<!-- /Breadcrumb -->
				</div>
				<!-- /Title -->	
				
				<div class="row">
					
					<!-- Bordered Table -->
					<div class="col-sm-12">
						<div class="panel panel-default card-view">
							<div class="panel-heading">
								<div class="pull-left">
									<div class="row">
										<div class="col-md-8">
											<input type="text"  name="example-input1-group2" class="form-control" placeholder="Search">
										</div>
										<div class="col-md-4">
											<button class="btn  btn-primary btn-rounded" class="model_img img-responsive" id="newEmployeeOpenButton">New Employee</button>
										</div>
									</div>
								</div>
							</div>
							<div class="panel-wrapper collapse in">
								<div class="panel-body">
									<div class="table-wrap mt-40">
										<div class="table-responsive">
										  <table class="table table-hover table-bordered mb-0">
											<thead>
											  <tr>
												<th>Name</th>
												<th>Contact</th>
												<th>Department</th>
												<th class="text-nowrap">Action</th>
											  </tr>
											</thead>
											<tbody>
												@foreach($data as $row)
											  <tr>
												<td>{{ $row->name }}</td>
												<td>{{ $row->contactNo }}</td>
												<td>{{ $row->department }}</td>
												<td class="text-nowrap">
													<a href="#" data-toggle="modal" class="view-EmployeeModel mr-25" data-id="{{ $row->employeeID }}"> 
														<i class="fa fa-eye text-inverse m-r-10"></i>
													</a> 
													<a href="#" data-toggle="modal" class="edit-EmployeeModel mr-25" data-id="{{ $row->employeeID }}"> 
														<i class="fa fa-pencil text-inverse m-r-10"></i> 
													</a> 
													<a href="#" data-toggle="modal" class="delete-EmployeeModel mr-25" data-id="{{ $row->employeeID }}"> 
														<i class="fa fa-trash text-danger"></i> 
													</a>
												</td>
											  </tr>
											  @endforeach
											</tbody>
										  </table>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /Bordered Table -->
					
				</div>
				
			</div>
			
			<!-- Footer -->
			<footer class="footer container-fluid pl-30 pr-30">
				<div class="row">
					<div class="col-sm-12">
						<p>2017 &copy; Hound. Pampered by Hencework</p>
					</div>
				</div>
			</footer>
			<!-- /Footer -->
			
		</div>
		<!-- /Main Content -->

    </div>

    <!-- Modal View -->
  	<div class="modal fade" id="viewEmployeeModel" role="dialog">
  		<div class="modal-dialog modal-lg">
  			<!-- Modal content View-->
      		<div class="modal-content">
        		<div class="modal-header">
        			<button type="button" class="close" data-dismiss="modal">&times;</button>
          			<h4 class="modal-title"><h6 class="txt-dark capitalize-font"><i class="zmdi zmdi-account mr-10"></i>View Employee's Info</h6></h4>
        		</div>
        		<!-- Modal body View-->
        		<div class="modal-body">
        			<!-- Row -->
        			<div class="row">
        				<div class="col-sm-12 col-xs-12">
        					<div class="table-wrap mt-40">
        						<div class="table-responsive">
        							<table class="table table-hover table-bordered mb-0">
        								<thead>
        									 <tr>
        									 	<th>ID</th>
        									 	<td id="viewID"></td>
        									 	<th>Department</th>
        									 	<td id="viewDepartment"></td>
        									 </tr>
        									 <tr>
        									 	<th>Name</th>
        									 	<td id="viewName"></td>
        									 	<th>Gender</th>
        									 	<td id="viewGender"></td>
        									 </tr>
        									 <tr>
        									 	<th>Email</th>
        									 	<td id="viewEmail"></td>
        									 	<th>Contact Number</th>
        									 	<td id="viewContact"></td>
        									 </tr>
        									 <tr>
        									 	<th>Date Of Birth</th>
        									 	<td id="viewDOB"></td>
        									 	<th>Hire Date</th>
        									 	<td id="viewHireDate"></td>
        									 </tr>
        									 <tr>
        									 	<th>Salary</th>
        									 	<td id="viewSalary"></td>
        									 	<th>Designation</th>
        									 	<td id="viewDesignation"></td>
        									 </tr>
        									 <tr>
        									 	<th>Address</th>
        									 	<td id="viewAddress" colspan="3"></td>
        									 </tr>
        									 <tr>
        									 	<th>Bank Name</th>
        									 	<td id="viewBankName"></td>
        									 	<th>Account Name</th>
        									 	<td id="viewAccountName"></td>
        									 </tr>
        									 <tr>
        									 	<th>Account Number</th>
        									 	<td id="viewAccountNumber"></td>
        									 	<th>IBAN</th>
        									 	<td id="viewIBAN"></td>
        									 </tr>
        									 <tr>
        									 	<th>Branch Name</th>
        									 	<td id="viewBranchName"></td>
        									 	<th>Branch Code</th>
        									 	<td id="viewBranchCode"></td>
        									 </tr>
        									 <tr>
        									 	<th>Bank Address</th>
        									 	<td id="viewBankAddress" colspan="3"></td>
        									 </tr>
        								</thead>
        							</table>
        						</div>
        					</div>
        				</div>
        			</div>
        			<!-- /Row -->
        		</div>
        		<!-- /Modal body View-->
        		<div class="modal-footer">
        			<button type="button" class="btn btn-primary text-left">Print</button>
          			<button type="button" class="btn btn-danger text-left" data-dismiss="modal">Close</button>
        		</div>
      		</div>
      		<!-- /Modal content View-->
    	</div>
    </div>
    <!-- /Model View-->

    <!-- Modal Edit -->
  	<div class="modal fade" id="editEmployeeModel" role="dialog">
  		<div class="modal-dialog modal-lg">
  			<!-- Modal content Edit-->
      		<div class="modal-content">
        		<div class="modal-header">
        			<button type="button" class="close" data-dismiss="modal">&times;</button>
          			<h4 class="modal-title"><h6 class="txt-dark capitalize-font"><i class="zmdi zmdi-account mr-10"></i>Edit Employee's Info</h6></h4>
        		</div>
        		<form method="post" action="{{ route('adminEmployee_edit') }}">
        			@csrf
        		<!-- Modal body Edit-->
        		<div class="modal-body">
        			<!-- Row -->
        			<div class="row">
        				<div class="col-sm-12 col-xs-12">
        					<div class="table-wrap mt-40">
        						<div class="table-responsive">
        							<table class="table table-hover table-bordered mb-0">
        								<tr>
        									<th>ID</th>
        									<td>
        										<input type="text" id="editID" name="editID" class="form-control" readonly="">
        									</td>
        									<th>Department</th>
        									<td>
        										<input type="text" id="editDepartment" name="editDepartment" class="form-control" placeholder="write department here" required="">
        									</td>
        								</tr>
        								<tr>
        									<th>Name</th>
        									<td>
        										<input type="text" id="editName" name="editName" class="form-control" value="" placeholder="write name here" required="">
        									</td>
        									<th>Gender</th>
        									<td>
        										<input type="text" id="editGender" name="editGender" class="form-control" placeholder="write gender here" required="">
        									</td>
        								</tr>
        								<tr>
        									<th>Email</th>
        									<td>
        										<input type="text" id="editEmail" name="editEmail" class="form-control" value="" placeholder="write email here" required="">
        									</td>
        									<th>Contact Number</th>
        									<td>
        										<input type="text" id="editContact" name="editContact" class="form-control" placeholder="write Contact Number here" required="">
        									</td>
        								</tr>
        								<tr>
        									<th>Date Of Birth</th>
        									<td>
        										<input type="text" id="editDOB" name="editDOB" class="form-control" value=""placeholder="write Date Of Birth here" required="">
        									</td>
        									<th>Hire Date</th>
        									<td>
        										<input type="text" id="editHireDate" name="editHireDate" class="form-control" placeholder="write Hire Date here" required="">
        									</td>
        								</tr>
        								<tr>
        									<th>Salary</th>
        									<td>
        										<input type="text" id="editSalary" name="editSalary" class="form-control" placeholder="write Salary here" required="">
        									</td>
        									<th>Designation</th>
        									<td>
        										<input type="text" id="editDesignation" name="editDesignation" class="form-control" placeholder="write Designation here" required="">
        									</td>
        								</tr>
        								<tr>
        									<th>Address</th>
        									<td colspan="3">
        										<input type="text" id="editAddress" name="editAddress" class="form-control" placeholder="write Address here" required="">
        									</td>
        								</tr>
        								<tr>
        									<th>Bank Name</th>
        									<td>
        										<input type="text" id="editBankName" name="editBankName" class="form-control" placeholder="write Bank Name here" required="">
        									</td>
        									<th>Account Name</th>
        									<td>
        										<input type="text" id="editAccountName" name="editAccountName" class="form-control" placeholder="write Account Name here" required="">
        									</td>
        								</tr>
        								<tr>
        									<th>Account Number</th>
        									<td>
        										<input type="text" id="editAccountNo" name="editAccountNo" class="form-control" placeholder="write Account Number here" required="">
        									</td>
        									<th>IBAN</th>
        									<td>
        										<input type="text" id="editIBAN" name="editIBAN" class="form-control" placeholder="write IBAN here" required="">
        									</td>
        								</tr>
        								<tr>
        									<th>Branch Name</th>
        									<td>
        										<input type="text" id="editBranchName" name="editBranchName" class="form-control" placeholder="write Branch Name here" required="">
        									</td>
        									<th>Branch Code</th>
        									<td>
        										<input type="text" id="editBranchCode" name="editBranchCode" class="form-control" placeholder="write Branch Code here" required="">
        									</td>
        								</tr>
        								<tr>
        									<th>Bank Address</th>
        									<td colspan="3">
        										<input type="text" id="editBankAddress" name="editBankAddress" class="form-control" placeholder="write Bank Address here" required="">
        									</td>
        								</tr>
        							</table>
        						</div>
        					</div>
        				</div>
        			</div>
        			<!-- /Row -->
        		</div>
        		<!-- /Modal body Edit-->
        		<div class="modal-footer">
        			<button type="submit" class="btn btn-primary text-left">Save</button>
          			<button type="button" class="btn btn-danger text-left" data-dismiss="modal">Close</button>
        		</div>
        		</form>
      		</div>
      		<!-- /Modal content Edit-->
    	</div>
    </div>
    <!-- /Model Edit-->

    <!-- Modal delete --> 
  	<div class="modal fade" id="deleteEmployee" role="dialog">
  		<div class="modal-dialog">
  			<!-- Modal content delete-->
      		<div class="modal-content">
        		<div class="modal-header">
        			<button type="button" class="close" data-dismiss="modal">&times;</button>
          			<h4 class="modal-title"><h6 class="txt-dark capitalize-font"><i class="zmdi zmdi-account mr-10"></i>Delete Employee's Info</h6></h4>
        		</div>
        		<!-- Modal body delete-->
        		<div class="modal-body">
        			<!-- Row -->
        			<h5>Are you sure?</h5>
        			<div class="row">
        				<input type="number" id="deleteID" hidden="">
        			</div>
        			<!-- /Row -->
        		</div>
        		<!-- /Modal body delete-->
        		<div class="modal-footer">
        			<button type="button" class="btn btn-danger text-left" id="deleteEmployeeButton">Yes</button>
          			<button type="button" class="btn btn-primary text-left" data-dismiss="modal">No</button>
        		</div>
      		</div>
      		<!-- /Modal content delete-->
    	</div>
    </div>
    <!-- /Model delete-->

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
