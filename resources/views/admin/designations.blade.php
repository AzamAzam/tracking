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
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	
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
							<img class="brand-img" src="{{ URL::asset('public/dist/img/logo.png') }}" alt="brand"/>
							<span class="brand-text">Tracking</span>
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
					<a href="index.html"><div class="pull-left"><i class="zmdi zmdi-flag mr-20"></i><span class="right-nav-text">Dashboard</span></div><div class="pull-right"></div><div class="clearfix"></div></a>
				</li>
				<li>
					<a class="active" href="javascript:void(0);" data-toggle="collapse" data-target="#dashboard_dr"><div class="pull-left"><i class="zmdi zmdi-shopping-basket mr-20"></i><span class="right-nav-text">Purchase</span></div><div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
					<ul id="dashboard_dr" class="collapse collapse-level-1">
						<li>
							<a class="active-page" href="">Suppliers</a>
						</li>
						<li>
							<a href="Stock.html">Stock</a>
						</li>
						<li>
							<a href="Categories.html">Manage Categories</a>
						</li>
						<li>
							<a href="Location.html">Manage Locations</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="javascript:void(0);" data-toggle="collapse" data-target="#ecom_dr"><div class="pull-left"><i class="zmdi zmdi-apps mr-20"></i><span class="right-nav-text">Sales</span></div><div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
					<ul id="ecom_dr" class="collapse collapse-level-1">
						<li>
							<a href="saleNew.html">New Sale</a>
						</li>
						<li>
							<a href="CustomerList.html">Customers</a>
						</li>
						<li>
							<a href="ManageSale.html">Manage Sales</a>
						</li>
						<li>
							<a href="ReturnList.html">Return Sales</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="Inventory.html"><div class="pull-left"><i class="zmdi zmdi-flag mr-20"></i><span class="right-nav-text">Inventory</span></div><div class="pull-right"></div><div class="clearfix"></div></a>
				</li>
				<li><hr class="light-grey-hr mb-10"/></li>
				<li class="navigation-header">
					<span>component</span> 
					<i class="zmdi zmdi-more"></i>
				</li>
				
				<li>
					<a href="javascript:void(0);" data-toggle="collapse" data-target="#app_dr"><div class="pull-left"><i class="zmdi zmdi-edit mr-20"></i><span class="right-nav-text">Employees</span></div><div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
					<ul id="app_dr" class="collapse collapse-level-1 two-col-list">
						<li>
							<a href="EmployeeNew.html">New Employee</a>
						</li>
						<li>
							<a href="EmployeeList.html">All Employees</a>
						</li>
						<li>
							<a href="DesignationList.html">Designation</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="javascript:void(0);" data-toggle="collapse" data-target="#ui_dr"><div class="pull-left"><i class="zmdi zmdi-chart-donut mr-20"></i><span class="right-nav-text">Expense </span></div><div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
					<ul id="ui_dr" class="collapse collapse-level-1 two-col-list">
						<li>
							<a href="ExpenseNew.html">New Expense</a>
						</li>
						<li>
							<a href="ExpenseList.html">All Expenses</a>
						</li>
						<li>
							<a href="ExpenseTypeList.html">Expense Type</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="javascript:void(0);" data-toggle="collapse" data-target="#form_dr"><div class="pull-left"><i class="zmdi zmdi-format-size mr-20"></i><span class="right-nav-text">Reports</span></div><div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
					<ul id="form_dr" class="collapse collapse-level-1 two-col-list">
						<li>
							<a href="basic-table.html">Sales</a>
						</li>
						<li>
							<a href="bootstrap-table.html">Inventory</a>
						</li>
						<li>
							<a href="data-table.html">Suppliers</a>
						</li>
						<li>
							<a href="responsive-table.html">Customers</a>
						</li>
						<li>
							<a href="editable-table.html">Employees</a>
						</li>
						<li>
							<a href="foo-table.html">Expenses</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="javascript:void(0);" data-toggle="collapse" data-target="#chart_dr"><div class="pull-left"><i class="zmdi zmdi-iridescent mr-20"></i><span class="right-nav-text">Accounts</span></div><div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
					<ul id="chart_dr" class="collapse collapse-level-1">
						<li>
							<a href="AccountNew.html">Balance Sheet</a>
						</li>
						<li>
							<a href="AccountList.html">Ledger</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="javascript:void(0);" data-toggle="collapse" data-target="#table_dr"><div class="pull-left"><i class="zmdi zmdi-iridescent mr-20"></i><span class="right-nav-text">User Accounts</span></div><div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
					<ul id="table_dr" class="collapse collapse-level-1">
						<li>
							<a href="AccountNew.html">New Account</a>
						</li>
						<li>
							<a href="AccountList.html">All Accounts</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="javascript:void(0);" data-toggle="collapse" data-target="#icon_dr"><div class="pull-left"><i class="zmdi zmdi-map mr-20"></i><span class="right-nav-text">Settings</span></div><div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
					<ul id="icon_dr" class="collapse collapse-level-1">
						<li>
							<a href="ConfirmPassword.html">Change Password</a>
						</li>
						<li>
							<a href="google-map.html">Edit Profile</a>
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
					  <h5 class="txt-dark">All Designations</h5>
					</div>
					<!-- Breadcrumb -->
					<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
					  <ol class="breadcrumb">
						<li>Main</li>
						<li class="active"><span>Departments</span></li>
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
											<button class="btn  btn-primary btn-rounded" class="model_img img-responsive" id="addDesignationOpenButton">New Designation</button>
										</div>
									</div>
								</div>
							</div>
							<div class="panel-wrapper collapse in">
								<div class="panel-body">
									<div class="table-wrap mt-40">
										<div class="table-responsive">
											<table id="supplierTable" class="table table-hover table-bordered mb-0">
												<thead>
													<tr>
														<th>Name</th>
														<th class="text-nowrap">Action</th>
													</tr>
												</thead>
												<tbody>
													@foreach($data as $row)
													<tr>
														<td>{{ $row->name }}</td>
														<td class="text-nowrap">
															<a href="#" data-toggle="modal" class="view-DesignationModel mr-25" data-id="{{ $row->designationID }}">
																<i class="fa fa-eye text-inverse m-r-10"></i> 
															</a> 
															<a href="#" data-toggle="modal" class="edit-DesignationModel mr-25" data-id="{{ $row->designationID }}">
																<i class="fa fa-pencil text-inverse m-r-10"></i> 
															</a>
															<a href="#" data-toggle="modal" class="delete-DesignationModel" data-id="{{ $row->designationID }}">
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

    <!-- Modal Add -->
  	<div class="modal fade" id="addDesignation" role="dialog">
  		<div class="modal-dialog">
  			<!-- Modal content Add-->
      		<div class="modal-content">
        		<div class="modal-header">
        			<button type="button" class="close" data-dismiss="modal">&times;</button>
          			<h4 class="modal-title"><h6 class="txt-dark capitalize-font"><i class="zmdi zmdi-account mr-10"></i>Add New Designation</h6></h4>
        		</div>
        	<form method="post" action="{{ route('adminDesignation_new') }}">
        		@csrf
        		<!-- Modal body Add-->
        		<div class="modal-body">
        			<!-- Row -->
        			<div class="row">
        				<div class="col-sm-12 col-xs-12">
        					
        						<div class="form-body">
        							<div class="row">
        								<div class="col-md-2"></div>
        								<div class="col-md-8">
        									<div class="form-group">
        									<label class="control-label mb-10">Name</label>
        									<input type="text" name="addName" class="form-control" required="">
        								</div>
        								</div>
        								<div class="col-md-2"></div>
        							</div>
        						</div>
        				</div>
        			</div>
        			<!-- /Row -->
        		</div>
        		<!-- /Modal body Add-->
        		<div class="modal-footer">
        			<button type="submit" class="btn btn-primary text-left">Save</button>
          			<button type="button" class="btn btn-danger text-left" data-dismiss="modal">Close</button>
        		</div>
      		</form>
      		</div>
      		<!-- /Modal content Add-->
    	</div>
    </div>
    <!-- /Model Add-->

    <!-- Modal View -->
  	<div class="modal fade" id="viewDesignation" role="dialog">
  		<div class="modal-dialog">
  			<!-- Modal content View-->
      		<div class="modal-content">
        		<div class="modal-header">
        			<button type="button" class="close" data-dismiss="modal">&times;</button>
          			<h4 class="modal-title"><h6 class="txt-dark capitalize-font"><i class="zmdi zmdi-account mr-10"></i>View Designation's Info</h6></h4>
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
        									 	<th>Name</th>
        									 	<td id="viewName"></td>
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
  	<div class="modal fade" id="editDepartment" role="dialog">
  		<div class="modal-dialog">
  			<!-- Modal content Edit-->
      		<div class="modal-content">
        		<div class="modal-header">
        			<button type="button" class="close" data-dismiss="modal">&times;</button>
          			<h4 class="modal-title"><h6 class="txt-dark capitalize-font"><i class="zmdi zmdi-account mr-10"></i>Edit Designation's Info</h6></h4>
        		</div>
        		<!-- Modal body Edit-->
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
        									 	<td>
        									 		<input type="text" id="editID" class="form-control" value="" readonly="">
        									 	</td>
        									</tr>
        									<tr>
        										<th>Name</th>
        									 	<td>
        									 		<input type="text" id="editName" class="form-control" value="">
        									 	</td>
        									</tr>
        								</thead>
        							</table>
        						</div>
        					</div>
        				</div>
        			</div>
        			<!-- /Row -->
        		</div>
        		<!-- /Modal body Edit-->
        		<div class="modal-footer">
        			<button type="button" class="btn btn-primary text-left" id="editDesignationButton">Save</button>
          			<button type="button" class="btn btn-danger text-left" data-dismiss="modal">Close</button>
        		</div>
      		</div>
      		<!-- /Modal content Edit-->
    	</div>
    </div>
    <!-- /Model Edit-->

    <!-- Modal delete -->
  	<div class="modal fade" id="deleteDesignation" role="dialog">
  		<div class="modal-dialog">
  			<!-- Modal content delete-->
      		<div class="modal-content">
        		<div class="modal-header">
        			<button type="button" class="close" data-dismiss="modal">&times;</button>
          			<h4 class="modal-title"><h6 class="txt-dark capitalize-font"><i class="zmdi zmdi-account mr-10"></i>Delete Designation's Info</h6></h4>
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
        			<button type="button" class="btn btn-danger text-left" id="deleteDesignationButton">Yes</button>
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