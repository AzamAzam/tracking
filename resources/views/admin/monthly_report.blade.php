<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <title>Track</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ URL::asset('public/faviconnew.ico') }}">
    <link rel="icon" href="{{ URL::asset('public/faviconnew.ico') }}" type="image/x-icon">

<!-- this is example <link rel="stylesheet" href="{{ URL::asset('public/css/mycss.css') }}"> -->
    <!-- Morris Charts CSS -->
    <link href="{{ URL::asset('public/vendors/bower_components/morris.js/morris.css') }}" rel="stylesheet"
          type="text/css"/>

    <!-- Data table CSS -->
    <link href="{{ URL::asset('public/vendors/bower_components/datatables/media/css/jquery.dataTables.min.css') }}"
          rel="stylesheet" type="text/css"/>
    {{--<link href="https://cdn.datatables.net/buttons/1.2.2/css/buttons.dataTables.min.css" rel="stylesheet"--}}
    {{--type="text/css"/>--}}
    <link href="{{asset('public/vendors/bower_components/datatables.net-responsive/css/responsive.dataTables.min.css')}}"
          rel="stylesheet"
          type="text/css"/>

    <link href="{{ URL::asset('public/vendors/bower_components/jquery-toast-plugin/dist/jquery.toast.min.css') }}"
          rel="stylesheet" type="text/css">

    <!-- Custom CSS -->
    <link href="{{ URL::asset('public/dist/css/style.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ URL::asset('public/vendors/bower_components/select2/dist/css/select2.min.css') }}" rel="stylesheet"
          type="text/css">
    <link href="{{ URL::asset("public/vendors/bower_components/bootstrap-select/dist/css/bootstrap-select.min.css" ) }}"
          rel="stylesheet" type="text/css">


    <!-- Custom CSS -->
</head>

<body>
<!-- Preloader -->
<div class="preloader-it">
    <div class="la-anim-1"></div>
</div>
<!-- /Preloader -->
<div class="wrapper theme-1-active pimary-color-red box-layout">
    <!-- Top Menu Items -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="mobile-only-brand pull-left">
            <div class="nav-header pull-left">
                <div class="logo-wrap">
                    <a href="index.html">
                        <img class="brand-img" src="{{ URL::asset('public/dist/img/logo.png') }}" alt="brand"/>
                        <span class="brand-text">Tracking System</span>
                    </a>
                </div>
            </div>
            <a id="toggle_nav_btn" class="toggle-left-nav-btn inline-block ml-20 pull-left"
               href="javascript:void(0);"><i class="zmdi zmdi-menu"></i></a>
            <a id="toggle_mobile_search" data-toggle="collapse" data-target="#search_form" class="mobile-only-view"
               href="javascript:void(0);"><i class="zmdi zmdi-search"></i></a>
            <a id="toggle_mobile_nav" class="mobile-only-view" href="javascript:void(0);"><i class="zmdi zmdi-more"></i></a>
        </div>
        <div id="mobile_only_nav" class="mobile-only-nav pull-right">
            <ul class="nav navbar-right top-nav pull-right">
                <li class="dropdown auth-drp">
                    <a href="#" class="dropdown-toggle pr-0" data-toggle="dropdown"><img
                                src="{{ URL::asset('public/dist/img/user1.png') }}" alt="user_auth"
                                class="user-auth-img img-circle"/><span class="user-online-status"></span></a>
                    <ul class="dropdown-menu user-auth-dropdown" data-dropdown-in="flipInX"
                        data-dropdown-out="flipOutX">
                        <li>
                            <a href="{{ route('adminProfile') }}"><i class="zmdi zmdi-account"></i><span>Profile</span></a>
                        </li>
                        <li>
                            <a href="{{ route('adminVarify') }}"><i
                                        class="zmdi zmdi-card"></i><span>Change Password</span></a>
                        </li>
                        <li class="divider"></li>

                        <li>
                            <a href="{{ route('adminLogout') }}"><i class="zmdi zmdi-power"></i><span>Log Out</span></a>
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
                <a href="index.html">
                    <div class="pull-left"><i class="zmdi zmdi-flag mr-20"></i><span
                                class="right-nav-text">Dashboard</span></div>
                    <div class="pull-right"></div>
                    <div class="clearfix"></div>
                </a>
            </li>
            <li>
                <a href="{{ route('adminDepartments') }}">
                    <div class="pull-left"><i class="zmdi zmdi-apps mr-20"></i><span
                                class="right-nav-text">Depaertments</span></div>
                    <div class="pull-right"></div>
                    <div class="clearfix"></div>
                </a>
            </li>
            <li>
                <a href="javascript:void(0);" data-toggle="collapse" data-target="#ecom_dr">
                    <div class="pull-left"><i class="zmdi zmdi-format-size mr-20"></i><span class="right-nav-text">Reports</span>
                    </div>
                    <div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div>
                    <div class="clearfix"></div>
                </a>
                <ul id="ecom_dr" class="collapse collapse-level-1">
                    <li>
                        <a href="">Custom Report</a>
                    </li>
                    <li>
                        <a href="{{route('monthly_report')}}">Monthly Report</a>
                    </li>
                    <li>
                        <a href="">Yearly Report</a>
                    </li>
                </ul>
            </li>

            <li>
                <hr class="light-grey-hr mb-10"/>
            </li>
            <li class="navigation-header">
                <span>component</span>
                <i class="zmdi zmdi-more"></i>
            </li>

            <li>
                <a href="javascript:void(0);" data-toggle="collapse" data-target="#app_dr">
                    <div class="pull-left"><i class="zmdi zmdi-edit mr-20"></i><span
                                class="right-nav-text">Employees</span></div>
                    <div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div>
                    <div class="clearfix"></div>
                </a>
                <ul id="app_dr" class="collapse collapse-level-1 two-col-list">
                    <li>
                        <a href="{{ route('adminEmployeeNew') }}">New Employee</a>
                    </li>
                    <li>
                        <a href="{{ route('adminEmployees') }}">All Employees</a>
                    </li>
                    <li>
                        <a href="{{ route('adminDesignations') }}">Designation</a>
                    </li>
                </ul>
            </li>

            <li>
                <a href="{{ route('adminDesignations') }}">
                    <div class="pull-left"><i class="zmdi zmdi-iridescent mr-20"></i><span class="right-nav-text">Designations</span>
                    </div>
                    <div class="pull-right"></div>
                    <div class="clearfix"></div>
                </a>
            </li>

            <li>
                <a href="{{ route('adminUseraccounts') }}">
                    <div class="pull-left"><i class="zmdi zmdi-iridescent mr-20"></i><span class="right-nav-text">Accounts</span>
                    </div>
                    <div class="pull-right"></div>
                    <div class="clearfix"></div>
                </a>
            </li>

            <li>
                <a href="javascript:void(0);" data-toggle="collapse" data-target="#icon_dr">
                    <div class="pull-left"><i class="zmdi zmdi-map mr-20"></i><span
                                class="right-nav-text">Settings</span></div>
                    <div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div>
                    <div class="clearfix"></div>
                </a>
                <ul id="icon_dr" class="collapse collapse-level-1">
                    <li>
                        <a href="{{ route('adminProfile') }}">Edit Profile</a>
                    </li>
                    <li>
                        <a href="{{ route('adminVarify') }}">Change Password</a>
                    </li>
                    <li>
                        <a href="">Security Question</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
    <!-- /Left Sidebar Menu -->

    <!-- Right Sidebar Menu -->
    <div class="fixed-sidebar-right">
        <ul class="right-sidebar">
            <li>
                <div class="tab-struct custom-tab-1">
                    <ul role="tablist" class="nav nav-tabs" id="right_sidebar_tab">
                        <li class="active" role="presentation"><a aria-expanded="true" data-toggle="tab" role="tab"
                                                                  id="chat_tab_btn" href="#chat_tab">chat</a></li>
                        <li role="presentation" class=""><a data-toggle="tab" id="messages_tab_btn" role="tab"
                                                            href="#messages_tab" aria-expanded="false">messages</a></li>
                        <li role="presentation" class=""><a data-toggle="tab" id="todo_tab_btn" role="tab"
                                                            href="#todo_tab" aria-expanded="false">todo</a></li>
                    </ul>
                    <div class="tab-content" id="right_sidebar_content">
                        <div id="chat_tab" class="tab-pane fade active in" role="tabpanel">
                            <div class="chat-cmplt-wrap">
                                <div class="chat-box-wrap">
                                    <div class="add-friend">
                                        <a href="javascript:void(0)" class="inline-block txt-grey">
                                            <i class="zmdi zmdi-more"></i>
                                        </a>
                                        <span class="inline-block txt-dark">users</span>
                                        <a href="javascript:void(0)" class="inline-block text-right txt-grey"><i
                                                    class="zmdi zmdi-plus"></i></a>
                                        <div class="clearfix"></div>
                                    </div>
                                    <form role="search" class="chat-search pl-15 pr-15 pb-15">
                                        <div class="input-group">
                                            <input type="text" id="example-input1-group2" name="example-input1-group2"
                                                   class="form-control" placeholder="Search">
                                            <span class="input-group-btn">
												<button type="button" class="btn  btn-default"><i
                                                            class="zmdi zmdi-search"></i></button>
												</span>
                                        </div>
                                    </form>
                                    <div id="chat_list_scroll">
                                        <div class="nicescroll-bar">
                                            <ul class="chat-list-wrap">
                                                <li class="chat-list">
                                                    <div class="chat-body">
                                                        <a href="javascript:void(0)">
                                                            <div class="chat-data">
                                                                <img class="user-img img-circle" src="dist/img/user.png"
                                                                     alt="user"/>
                                                                <div class="user-data">
                                                                    <span class="name block capitalize-font">Clay Masse</span>
                                                                    <span class="time block truncate txt-grey">No one saves us but ourselves.</span>
                                                                </div>
                                                                <div class="status away"></div>
                                                                <div class="clearfix"></div>
                                                            </div>
                                                        </a>
                                                        <a href="javascript:void(0)">
                                                            <div class="chat-data">
                                                                <img class="user-img img-circle"
                                                                     src="dist/img/user1.png" alt="user"/>
                                                                <div class="user-data">
                                                                    <span class="name block capitalize-font">Evie Ono</span>
                                                                    <span class="time block truncate txt-grey">Unity is strength</span>
                                                                </div>
                                                                <div class="status offline"></div>
                                                                <div class="clearfix"></div>
                                                            </div>
                                                        </a>
                                                        <a href="javascript:void(0)">
                                                            <div class="chat-data">
                                                                <img class="user-img img-circle"
                                                                     src="dist/img/user2.png" alt="user"/>
                                                                <div class="user-data">
                                                                    <span class="name block capitalize-font">Madalyn Rascon</span>
                                                                    <span class="time block truncate txt-grey">Respect yourself if you would have others respect you.</span>
                                                                </div>
                                                                <div class="status online"></div>
                                                                <div class="clearfix"></div>
                                                            </div>
                                                        </a>
                                                        <a href="javascript:void(0)">
                                                            <div class="chat-data">
                                                                <img class="user-img img-circle"
                                                                     src="dist/img/user3.png" alt="user"/>
                                                                <div class="user-data">
                                                                    <span class="name block capitalize-font">Mitsuko Heid</span>
                                                                    <span class="time block truncate txt-grey">I’m thankful.</span>
                                                                </div>
                                                                <div class="status online"></div>
                                                                <div class="clearfix"></div>
                                                            </div>
                                                        </a>
                                                        <a href="javascript:void(0)">
                                                            <div class="chat-data">
                                                                <img class="user-img img-circle" src="dist/img/user.png"
                                                                     alt="user"/>
                                                                <div class="user-data">
                                                                    <span class="name block capitalize-font">Ezequiel Merideth</span>
                                                                    <span class="time block truncate txt-grey">Patience is bitter.</span>
                                                                </div>
                                                                <div class="status offline"></div>
                                                                <div class="clearfix"></div>
                                                            </div>
                                                        </a>
                                                        <a href="javascript:void(0)">
                                                            <div class="chat-data">
                                                                <img class="user-img img-circle"
                                                                     src="dist/img/user1.png" alt="user"/>
                                                                <div class="user-data">
                                                                    <span class="name block capitalize-font">Jonnie Metoyer</span>
                                                                    <span class="time block truncate txt-grey">Genius is eternal patience.</span>
                                                                </div>
                                                                <div class="status online"></div>
                                                                <div class="clearfix"></div>
                                                            </div>
                                                        </a>
                                                        <a href="javascript:void(0)">
                                                            <div class="chat-data">
                                                                <img class="user-img img-circle"
                                                                     src="dist/img/user2.png" alt="user"/>
                                                                <div class="user-data">
                                                                    <span class="name block capitalize-font">Angelic Lauver</span>
                                                                    <span class="time block truncate txt-grey">Every burden is a blessing.</span>
                                                                </div>
                                                                <div class="status away"></div>
                                                                <div class="clearfix"></div>
                                                            </div>
                                                        </a>
                                                        <a href="javascript:void(0)">
                                                            <div class="chat-data">
                                                                <img class="user-img img-circle"
                                                                     src="dist/img/user3.png" alt="user"/>
                                                                <div class="user-data">
                                                                    <span class="name block capitalize-font">Priscila Shy</span>
                                                                    <span class="time block truncate txt-grey">Wise to resolve, and patient to perform.</span>
                                                                </div>
                                                                <div class="status online"></div>
                                                                <div class="clearfix"></div>
                                                            </div>
                                                        </a>
                                                        <a href="javascript:void(0)">
                                                            <div class="chat-data">
                                                                <img class="user-img img-circle"
                                                                     src="dist/img/user4.png" alt="user"/>
                                                                <div class="user-data">
                                                                    <span class="name block capitalize-font">Linda Stack</span>
                                                                    <span class="time block truncate txt-grey">Our patience will achieve more than our force.</span>
                                                                </div>
                                                                <div class="status away"></div>
                                                                <div class="clearfix"></div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="recent-chat-box-wrap">
                                    <div class="recent-chat-wrap">
                                        <div class="panel-heading ma-0">
                                            <div class="goto-back">
                                                <a id="goto_back" href="javascript:void(0)"
                                                   class="inline-block txt-grey">
                                                    <i class="zmdi zmdi-chevron-left"></i>
                                                </a>
                                                <span class="inline-block txt-dark">ryan</span>
                                                <a href="javascript:void(0)" class="inline-block text-right txt-grey"><i
                                                            class="zmdi zmdi-more"></i></a>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                        <div class="panel-wrapper collapse in">
                                            <div class="panel-body pa-0">
                                                <div class="chat-content">
                                                    <ul class="nicescroll-bar pt-20">
                                                        <li class="friend">
                                                            <div class="friend-msg-wrap">
                                                                <img class="user-img img-circle block pull-left"
                                                                     src="dist/img/user.png" alt="user"/>
                                                                <div class="msg pull-left">
                                                                    <p>Hello Jason, how are you, it's been a long time
                                                                        since we last met?</p>
                                                                    <div class="msg-per-detail text-right">
                                                                        <span class="msg-time txt-grey">2:30 PM</span>
                                                                    </div>
                                                                </div>
                                                                <div class="clearfix"></div>
                                                            </div>
                                                        </li>
                                                        <li class="self mb-10">
                                                            <div class="self-msg-wrap">
                                                                <div class="msg block pull-right"> Oh, hi Sarah I'm have
                                                                    got a new job now and is going great.
                                                                    <div class="msg-per-detail text-right">
                                                                        <span class="msg-time txt-grey">2:31 pm</span>
                                                                    </div>
                                                                </div>
                                                                <div class="clearfix"></div>
                                                            </div>
                                                        </li>
                                                        <li class="self">
                                                            <div class="self-msg-wrap">
                                                                <div class="msg block pull-right"> How about you?
                                                                    <div class="msg-per-detail text-right">
                                                                        <span class="msg-time txt-grey">2:31 pm</span>
                                                                    </div>
                                                                </div>
                                                                <div class="clearfix"></div>
                                                            </div>
                                                        </li>
                                                        <li class="friend">
                                                            <div class="friend-msg-wrap">
                                                                <img class="user-img img-circle block pull-left"
                                                                     src="dist/img/user.png" alt="user"/>
                                                                <div class="msg pull-left">
                                                                    <p>Not too bad.</p>
                                                                    <div class="msg-per-detail  text-right">
                                                                        <span class="msg-time txt-grey">2:35 pm</span>
                                                                    </div>
                                                                </div>
                                                                <div class="clearfix"></div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="input-group">
                                                    <input type="text" id="input_msg_send" name="send-msg"
                                                           class="input-msg-send form-control"
                                                           placeholder="Type something">
                                                    <div class="input-group-btn emojis">
                                                        <div class="dropup">
                                                            <button type="button"
                                                                    class="btn  btn-default  dropdown-toggle"
                                                                    data-toggle="dropdown"><i
                                                                        class="zmdi zmdi-mood"></i></button>
                                                            <ul class="dropdown-menu dropdown-menu-right">
                                                                <li><a href="javascript:void(0)">Action</a></li>
                                                                <li><a href="javascript:void(0)">Another action</a></li>
                                                                <li class="divider"></li>
                                                                <li><a href="javascript:void(0)">Separated link</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="input-group-btn attachment">
                                                        <div class="fileupload btn  btn-default"><i
                                                                    class="zmdi zmdi-attachment-alt"></i>
                                                            <input type="file" class="upload">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="messages_tab" class="tab-pane fade" role="tabpanel">
                            <div class="message-box-wrap">
                                <div class="msg-search">
                                    <a href="javascript:void(0)" class="inline-block txt-grey">
                                        <i class="zmdi zmdi-more"></i>
                                    </a>
                                    <span class="inline-block txt-dark">messages</span>
                                    <a href="javascript:void(0)" class="inline-block text-right txt-grey"><i
                                                class="zmdi zmdi-search"></i></a>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="set-height-wrap">
                                    <div class="streamline message-box nicescroll-bar">
                                        <a href="javascript:void(0)">
                                            <div class="sl-item unread-message">
                                                <div class="sl-avatar avatar avatar-sm avatar-circle">
                                                    <img class="img-responsive img-circle" src="dist/img/user.png"
                                                         alt="avatar"/>
                                                </div>
                                                <div class="sl-content">
                                                    <span class="inline-block capitalize-font   pull-left message-per">Clay Masse</span>
                                                    <span class="inline-block font-11  pull-right message-time">12:28 AM</span>
                                                    <div class="clearfix"></div>
                                                    <span class=" truncate message-subject">Themeforest message sent via your envato market profile</span>
                                                    <p class="txt-grey truncate">Neque porro quisquam est qui dolorem
                                                        ipsu messm quia dolor sit amet, consectetur, adipisci velit</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="javascript:void(0)">
                                            <div class="sl-item">
                                                <div class="sl-avatar avatar avatar-sm avatar-circle">
                                                    <img class="img-responsive img-circle" src="dist/img/user1.png"
                                                         alt="avatar"/>
                                                </div>
                                                <div class="sl-content">
                                                    <span class="inline-block capitalize-font   pull-left message-per">Evie Ono</span>
                                                    <span class="inline-block font-11  pull-right message-time">1 Feb</span>
                                                    <div class="clearfix"></div>
                                                    <span class=" truncate message-subject">Pogody theme support</span>
                                                    <p class="txt-grey truncate">Neque porro quisquam est qui dolorem
                                                        ipsum quia dolor sit amet, consectetur, adipisci velit</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="javascript:void(0)">
                                            <div class="sl-item">
                                                <div class="sl-avatar avatar avatar-sm avatar-circle">
                                                    <img class="img-responsive img-circle" src="dist/img/user2.png"
                                                         alt="avatar"/>
                                                </div>
                                                <div class="sl-content">
                                                    <span class="inline-block capitalize-font   pull-left message-per">Madalyn Rascon</span>
                                                    <span class="inline-block font-11  pull-right message-time">31 Jan</span>
                                                    <div class="clearfix"></div>
                                                    <span class=" truncate message-subject">Congratulations from design nominees</span>
                                                    <p class="txt-grey truncate">Neque porro quisquam est qui dolorem
                                                        ipsum quia dolor sit amet, consectetur, adipisci velit</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="javascript:void(0)">
                                            <div class="sl-item unread-message">
                                                <div class="sl-avatar avatar avatar-sm avatar-circle">
                                                    <img class="img-responsive img-circle" src="dist/img/user3.png"
                                                         alt="avatar"/>
                                                </div>
                                                <div class="sl-content">
                                                    <span class="inline-block capitalize-font   pull-left message-per">Ezequiel Merideth</span>
                                                    <span class="inline-block font-11  pull-right message-time">29 Jan</span>
                                                    <div class="clearfix"></div>
                                                    <span class=" truncate message-subject">Themeforest item support message</span>
                                                    <p class="txt-grey truncate">Neque porro quisquam est qui dolorem
                                                        ipsum quia dolor sit amet, consectetur, adipisci velit</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="javascript:void(0)">
                                            <div class="sl-item unread-message">
                                                <div class="sl-avatar avatar avatar-sm avatar-circle">
                                                    <img class="img-responsive img-circle" src="dist/img/user4.png"
                                                         alt="avatar"/>
                                                </div>
                                                <div class="sl-content">
                                                    <span class="inline-block capitalize-font   pull-left message-per">Jonnie Metoyer</span>
                                                    <span class="inline-block font-11  pull-right message-time">27 Jan</span>
                                                    <div class="clearfix"></div>
                                                    <span class=" truncate message-subject">Help with beavis contact form</span>
                                                    <p class="txt-grey truncate">Neque porro quisquam est qui dolorem
                                                        ipsum quia dolor sit amet, consectetur, adipisci velit</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="javascript:void(0)">
                                            <div class="sl-item">
                                                <div class="sl-avatar avatar avatar-sm avatar-circle">
                                                    <img class="img-responsive img-circle" src="dist/img/user.png"
                                                         alt="avatar"/>
                                                </div>
                                                <div class="sl-content">
                                                    <span class="inline-block capitalize-font   pull-left message-per">Priscila Shy</span>
                                                    <span class="inline-block font-11  pull-right message-time">19 Jan</span>
                                                    <div class="clearfix"></div>
                                                    <span class=" truncate message-subject">Your uploaded theme is been selected</span>
                                                    <p class="txt-grey truncate">Neque porro quisquam est qui dolorem
                                                        ipsum quia dolor sit amet, consectetur, adipisci velit</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="javascript:void(0)">
                                            <div class="sl-item">
                                                <div class="sl-avatar avatar avatar-sm avatar-circle">
                                                    <img class="img-responsive img-circle" src="dist/img/user1.png"
                                                         alt="avatar"/>
                                                </div>
                                                <div class="sl-content">
                                                    <span class="inline-block capitalize-font   pull-left message-per">Linda Stack</span>
                                                    <span class="inline-block font-11  pull-right message-time">13 Jan</span>
                                                    <div class="clearfix"></div>
                                                    <span class=" truncate message-subject"> A new rating has been received</span>
                                                    <p class="txt-grey truncate">Neque porro quisquam est qui dolorem
                                                        ipsum quia dolor sit amet, consectetur, adipisci velit</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="todo_tab" class="tab-pane fade" role="tabpanel">
                            <div class="todo-box-wrap">
                                <div class="add-todo">
                                    <a href="javascript:void(0)" class="inline-block txt-grey">
                                        <i class="zmdi zmdi-more"></i>
                                    </a>
                                    <span class="inline-block txt-dark">todo list</span>
                                    <a href="javascript:void(0)" class="inline-block text-right txt-grey"><i
                                                class="zmdi zmdi-plus"></i></a>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="set-height-wrap">
                                    <!-- Todo-List -->
                                    <ul class="todo-list nicescroll-bar">
                                        <li class="todo-item">
                                            <div class="checkbox checkbox-default">
                                                <input type="checkbox" id="checkbox01"/>
                                                <label for="checkbox01">Record The First Episode</label>
                                            </div>
                                        </li>
                                        <li>
                                            <hr class="light-grey-hr"/>
                                        </li>
                                        <li class="todo-item">
                                            <div class="checkbox checkbox-pink">
                                                <input type="checkbox" id="checkbox02"/>
                                                <label for="checkbox02">Prepare The Conference Schedule</label>
                                            </div>
                                        </li>
                                        <li>
                                            <hr class="light-grey-hr"/>
                                        </li>
                                        <li class="todo-item">
                                            <div class="checkbox checkbox-warning">
                                                <input type="checkbox" id="checkbox03" checked/>
                                                <label for="checkbox03">Decide The Live Discussion Time</label>
                                            </div>
                                        </li>
                                        <li>
                                            <hr class="light-grey-hr"/>
                                        </li>
                                        <li class="todo-item">
                                            <div class="checkbox checkbox-success">
                                                <input type="checkbox" id="checkbox04" checked/>
                                                <label for="checkbox04">Prepare For The Next Project</label>
                                            </div>
                                        </li>
                                        <li>
                                            <hr class="light-grey-hr"/>
                                        </li>
                                        <li class="todo-item">
                                            <div class="checkbox checkbox-danger">
                                                <input type="checkbox" id="checkbox05" checked/>
                                                <label for="checkbox05">Finish Up AngularJs Tutorial</label>
                                            </div>
                                        </li>
                                        <li>
                                            <hr class="light-grey-hr"/>
                                        </li>
                                        <li class="todo-item">
                                            <div class="checkbox checkbox-purple">
                                                <input type="checkbox" id="checkbox06" checked/>
                                                <label for="checkbox06">Finish Infinity Project</label>
                                            </div>
                                        </li>
                                        <li>
                                            <hr class="light-grey-hr"/>
                                        </li>
                                    </ul>
                                    <!-- /Todo-List -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
    <!-- /Right Sidebar Menu -->

    <!-- Main Content -->
    <div class="page-wrapper">
        <div class="container-fluid">
            <div class="row heading-bg">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <h5 class="txt-dark">Monthly Report</h5>
                </div>
                <!-- Breadcrumb -->
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                    <ol class="breadcrumb">
                        <li>Admin</li>
                        <li class="active"><span>Reports</span></li>
                    </ol>
                </div>
                <!-- /Breadcrumb -->
            </div>

            <!-- Bordered Table -->
            <div class="col-sm-12">
                <div class="panel panel-default card-view">
                    <div class="panel-wrapper collapse in">
                        <div class="panel-body">

                            <section>
                                <div class="col-sm-6 col-sm-offset-3">
                                    <div class="container ">
                                        <div class="card col-sm-6">
                                            {{--<h4 class="card-header text-center">Monthly Report</h4>--}}
                                            <div class="card-body">
                                                <form action="{{route('getEmployeeData')}}" method="post">
                                                    @csrf
                                                    <div class="row">
                                                        <div class="form-group col-sm-6">
                                                            <label for="month">Month</label>
                                                            <select name="month" id="month" class="form-control">
                                                                <?php for ($i = 1; $i <= 12; $i++) {
                                                                $monthName = date("F", mktime(0, 0, 0, $i, 10)); ?>
                                                                <option {{isset($m) && $i == $m ? "selected" : "" }}   value="{{$i}}">{{$monthName}}</option>
                                                                <?php }?>
                                                            </select>
                                                        </div>
                                                        <div class="form-group col-sm-6">
                                                            <label for="month">Year</label>
                                                            <select name="year" id="year" class="form-control">
                                                                <?php for($i = 0;$i < 5;$i++){?>
                                                                <option {{isset($y)&&date('Y')-$i==$y?"selected":""}} value="{{date('Y')-$i}}">{{date('Y')-$i}}</option>
                                                                <?php }?>
                                                            </select>
                                                        </div>

                                                    </div>

                                                    <div class="form-group mb-10">
                                                        <label class="control-label"
                                                               for="employee">Employee</label>
                                                        <select name="employee" id="employee"
                                                                class="form-control select2">
                                                            @if(!isset($employee))
                                                                <option value="0">Select</option>
                                                            @endif
                                                            @foreach($employees as $emp )
                                                                <option value="{{$emp->id}}" {{ isset($employee)&&$employee->employeeID==$emp->id?"selected":""}}>{{$emp->name}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="form-group mt-20">
                                                        <button type="submit"
                                                                class="btn  btn-success btn-sm btn-block">
                                                            Get Report
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                if (isset($m)) {
                                    $monthName = date("F", mktime(0, 0, 0, $m, 10));
                                }
                                ?>
                                <div class="col-sm-8 col-sm-offset-2 mt-5">
                                    <div class="table-responsive">
                                        <table class="table table-striped border-secondary" border="1px"
                                               cellpadding="10px" id="reportTable">
                                            <caption class="caption capitalize-font h2 text-center" id="table_caption">
                                                {{isset($m)? $monthName." ".$y: 'Month'}}</caption>
                                            <thead class="fixed-table-header">
                                            <tr>
                                                <th class="text-center">#</th>
                                                <th class="text-center">Date</th>
                                                <th class="text-center">Hours:Minutes</th>
                                            </tr>
                                            </thead>
                                            <tbody class="text-center">
                                            <?php $i = 1;?>
                                            @if (isset($reports) &&sizeof( $reports)>0)
                                                @foreach($reports as $r)
                                                    <tr>
                                                        <td>{{$i++}}</td>
                                                        <td>{{$r->dateofattendance}}</td>
                                                        <?php
                                                        $time = explode(":", $r->hours);
                                                        $hour = $time[0];
                                                        $minutes = $time[1];
                                                        ?>
                                                        <td>{{$hour.":".$minutes}}</td>
                                                    </tr>
                                                @endforeach
                                            @else
                                                <tr class="text-center">
                                                    <td colspan="3">No data is available</td>
                                                </tr>
                                            @endif
                                            </tbody>
                                        </table>
                                        @if (isset($reports) &&sizeof( $reports)>0)
                                            <div class="form-group mt-10">
                                                <button type="button" id="printbtn"
                                                        class=" col-sm btn btn-success btn-sm ">
                                                    Print Report
                                                </button>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Footer -->
            <footer class="footer container-fluid pl-30 pr-30">
                <div class="row">
                    <div class="col-sm-12">
                        <p>{{date('Y')}} &copy; Hound. Pampered by Hencework</p>
                    </div>
                </div>
            </footer>
            <!-- /Footer -->

        </div>
        <!-- /Main Content -->

    </div>
    <!-- /#wrapper -->

    <!-- JavaScript -->
<!-- this is example <link rel="stylesheet" href="{{ URL::asset('public/css/mycss.css') }}"> -->
    <!-- jQuery -->
    <script src="{{ URL::asset('public/vendors/bower_components/jquery/dist/jquery.min.js') }}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ URL::asset('public/vendors/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>

    <!-- Data table JavaScript -->
    <script src="{{ URL::asset('public/vendors/bower_components/datatables/media/js/jquery.dataTables.min.js') }}"></script>

    <!-- Slimscroll JavaScript -->
    <script src="{{ URL::asset('public/dist/js/jquery.slimscroll.js') }}"></script>

    <!-- simpleWeather JavaScript -->
    <script src="{{ URL::asset('public/vendors/bower_components/moment/min/moment.min.js') }}"></script>
    <script src="{{ URL::asset('public/vendors/bower_components/simpleWeather/jquery.simpleWeather.min.js') }}"></script>
    <script src="{{ URL::asset('public/dist/js/simpleweather-data.js') }}"></script>

    <!-- Progressbar Animation JavaScript  -->
    <script src="{{ URL::asset('public/vendors/bower_components/waypoints/lib/jquery.waypoints.min.js') }}"></script>
    <script src="{{ URL::asset('public/vendors/bower_components/jquery.counterup/jquery.counterup.min.js') }}"></script>

    <!-- Fancy Dropdown JS -->
    <script src="{{ URL::asset('public/dist/js/dropdown-bootstrap-extended.js') }}"></script>

    <!-- Sparkline JavaScript -->
    <script src="{{ URL::asset('public/vendors/jquery.sparkline/dist/jquery.sparkline.min.js') }}"></script>

    <!-- Owl JavaScript -->
    <script src="{{ URL::asset('public/vendors/bower_components/owl.carousel/dist/owl.carousel.min.js') }}"></script>

    <!-- ChartJS JavaScript -->
    <script src="{{ URL::asset('public/vendors/chart.js/Chart.min.js') }}"></script>

    <!-- Morris Charts JavaScript -->
    <script src="{{ URL::asset('public/vendors/bower_components/raphael/raphael.min.js') }}"></script>
    <script src="{{ URL::asset('public/vendors/bower_components/morris.js/morris.min.js') }}"></script>
    <script src="{{ URL::asset('public/vendors/bower_components/jquery-toast-plugin/dist/jquery.toast.min.js') }}"></script>

    <!-- Switchery JavaScript -->
    <script src="{{ URL::asset('public/vendors/bower_components/switchery/dist/switchery.min.js') }}"></script>
    <script src="{{ asset('public/dist/js/form-advance-data.js')}}"></script>
    <!-- Init JavaScript -->
    <script src="{{ URL::asset('public/dist/js/init.js') }}"></script>
    <script src="{{ asset('public/vendors/bower_components/select2/dist/js/select2.full.min.js') }}"></script>
    <script src="{{ asset('public/vendors/bower_components/bootstrap-select/dist/js/bootstrap-select.min.js')}}"></script>
    <script src="{{ asset('public/vendors/bower_components/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js')}}"></script>
    <script src="{{ asset('public/vendors/bower_components/multiselect/js/jquery.multi-select.js')}}"></script>
    <script src="{{ asset('public/vendors/bower_components/bootstrap-switch/dist/js/bootstrap-switch.min.js')}}"></script>
    <script src="{{ asset('public/vendors/bower_components/datatables/media/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{ asset('public/vendors/bower_components/datatables.net-responsive/js/dataTables.responsive.js')}}"></script>
    {{--<script src="{{asset('public/dist/js/dataTables-data.js')}}"></script>--}}
    {{--<script src="{{asset('public/vendors/bower_components/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>--}}
    {{--<script src="{{asset('public/vendors/bower_components/datatables.net-buttons/js/buttons.flash.min.js')}}"></script>--}}
    {{--<script src="{{asset('public/vendors/bower_components/pdfmake/build/pdfmake.js')}}"></script>--}}
    {{--<script src="{{asset('public/vendors/bower_components/pdfmake/build/vfs_fonts.js')}}"></script>--}}
    {{--<script src="{{asset('public/vendors/bower_components/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>--}}
    {{--<script src="{{asset('public/vendors/bower_components/datatables.net-buttons/js/buttons.print.min.js')}}"></script>--}}

    <script>
        var empname = "{{isset($employee->name)?$employee->name:""}}";

        function printData() {
            var divToPrint = document.getElementById("reportTable");
            var caption = $("#table_caption").text();
            $("#table_caption").text(caption + " of " + empname);
            newWin = window.open("");
            newWin.document.write(divToPrint.outerHTML);
            newWin.print();
            newWin.close();
            $("#table_caption").text(caption);
        }

        $('#printbtn').on('click', function () {
            printData();
        })
        $('#reportTable').DataTable({
            // "pageLength": 5,
            "lengthChange": false,
            "searching": false,
            "paging": false,
            "info": false,
            // dom: 'frtipB',
            // buttons: [
            //    'pdf',
            //     {
            //         extend: 'print',
            //         messageTop: 'The information in this table is copyright to Sirius Cybernetics Corp.'
            //     }
            // ]
        });

    </script>
</body>

</html>