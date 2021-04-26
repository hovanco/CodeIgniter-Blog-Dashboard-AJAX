<!doctype html>
<html class="no-js" lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Users</title>
  <meta name="description" content="Sufee Admin - HTML5 Admin Template">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="apple-touch-icon" href="https://www.aps.edu/sapr/images/pnglot.comtwitterbirdlogopng139735.png/image">
  <link rel="shortcut icon" href="https://www.aps.edu/sapr/images/pnglot.comtwitterbirdlogopng139735.png/image">


  <link rel="stylesheet" href="<?php echo base_url(); ?>vendor/dashboard/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>vendor/dashboard/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>vendor/dashboard/themify-icons/css/themify-icons.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>vendor/dashboard/flag-icon-css/css/flag-icon.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>vendor/dashboard/selectFX/css/cs-skin-elastic.css">

  <link rel="stylesheet" type="text/css"
    href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap4.min.css" />
		
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css'); ?>">

  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

  
  <!-- Toastr CSS -->
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"
  	integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous">
	</script>
	
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>


  <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

  <script type="text/javascript"
    src="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.10.21/b-1.6.3/b-flash-1.6.3/b-html5-1.6.3/b-print-1.6.3/r-2.2.5/datatables.min.js">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>




		


  <style>
  .user_avatar {
    width: 60px;
    height: 60px;
    object-fit: cover;
    border-radius: 50%;
    margin: 0 auto;
    display: flex;
  }

	.dataTables_filter {
		text-align: left;
    float: right;
	}

	.dataTables_paginate {
		float: right;
	} 

	td:last-child {
		display: flex;
		justify-content: space-between;
	}
	/* td:nth-last-child(2) {
		max-width: 5%;
	} */

	
	/* paging_simple_numbers */

  </style>
</head>

<body>
  <aside id="left-panel" class="left-panel">
    <!-- Left Panel -->
    <nav class="navbar navbar-expand-sm navbar-default">
      <div class="navbar-header">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu"
          aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fa fa-bars"></i>
        </button>
        <a class="navbar-brand" href="./"><img src="<?php echo base_url(); ?>assets/images/logo.png" alt="Logo"></a>
        <a class="navbar-brand hidden" href="./"><img src="<?php echo base_url(); ?>assets/images/logo2.png"
            alt="Logo"></a>
      </div>

      <div id="main-menu" class="main-menu collapse navbar-collapse">
        <ul class="nav navbar-nav">
          <li>
            <a href="index.html"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
          </li>
          <h3 class="menu-title">UI elements</h3><!-- /.menu-title -->
          <li class="menu-item-has-children dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i
                class="menu-icon fa fa-laptop">

              </i>Components</a>
            <ul class="sub-menu children dropdown-menu">
              <li><i class="fa fa-puzzle-piece"></i><a href="ui-buttons.html">Buttons</a></li>
              <li><i class="fa fa-id-badge"></i><a href="ui-badges.html">Badges</a></li>
              <li><i class="fa fa-bars"></i><a href="ui-tabs.html">Tabs</a></li>
              <li><i class="fa fa-share-square-o"></i><a href="ui-social-buttons.html">Social Buttons</a></li>
              <li><i class="fa fa-id-card-o"></i><a href="ui-cards.html">Cards</a></li>
              <li><i class="fa fa-exclamation-triangle"></i><a href="ui-alerts.html">Alerts</a></li>
              <li><i class="fa fa-spinner"></i><a href="ui-progressbar.html">Progress Bars</a></li>
              <li><i class="fa fa-fire"></i><a href="ui-modals.html">Modals</a></li>
              <li><i class="fa fa-book"></i><a href="ui-switches.html">Switches</a></li>
              <li><i class="fa fa-th"></i><a href="ui-grids.html">Grids</a></li>
              <li><i class="fa fa-file-word-o"></i><a href="ui-typgraphy.html">Typography</a></li>
            </ul>
          </li>
          <li class="menu-item-has-children active dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i
                class="menu-icon fa fa-table"></i>Tables</a>
            <ul class="sub-menu children dropdown-menu">
              <li><i class="fa fa-table"></i><a href="tables-basic.html">Basic Table</a></li>
              <li><i class="fa fa-table"></i><a href="tables-data.html">Data Table</a></li>
            </ul>
          </li>
          <li class="menu-item-has-children dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i
                class="menu-icon fa fa-th"></i>Forms</a>
            <ul class="sub-menu children dropdown-menu">
              <li><i class="menu-icon fa fa-th"></i><a href="forms-basic.html">Basic Form</a></li>
              <li><i class="menu-icon fa fa-th"></i><a href="forms-advanced.html">Advanced Form</a></li>
            </ul>
          </li>

          <h3 class="menu-title">Icons</h3><!-- /.menu-title -->

          <li class="menu-item-has-children dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i
                class="menu-icon fa fa-tasks"></i>Icons</a>
            <ul class="sub-menu children dropdown-menu">
              <li><i class="menu-icon fa fa-fort-awesome"></i><a href="font-fontawesome.html">Font Awesome</a></li>
              <li><i class="menu-icon ti-themify-logo"></i><a href="font-themify.html">Themefy Icons</a></li>
            </ul>
          </li>
          <li>
            <a href="widgets.html"> <i class="menu-icon ti-email"></i>Widgets </a>
          </li>
          <li class="menu-item-has-children dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i
                class="menu-icon fa fa-bar-chart"></i>Charts</a>
            <ul class="sub-menu children dropdown-menu">
              <li><i class="menu-icon fa fa-line-chart"></i><a href="charts-chartjs.html">Chart JS</a></li>
              <li><i class="menu-icon fa fa-area-chart"></i><a href="charts-flot.html">Flot Chart</a></li>
              <li><i class="menu-icon fa fa-pie-chart"></i><a href="charts-peity.html">Peity Chart</a></li>
            </ul>
          </li>
          <li class="menu-item-has-children dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i
                class="menu-icon fa fa-area-chart"></i>Maps</a>
            <ul class="sub-menu children dropdown-menu">
              <li><i class="menu-icon fa fa-map-o"></i><a href="maps-gmap.html">Google Maps</a></li>
              <li><i class="menu-icon fa fa-street-view"></i><a href="maps-vector.html">Vector Maps</a></li>
            </ul>
          </li>
          <h3 class="menu-title">Extras</h3><!-- /.menu-title -->
          <li class="menu-item-has-children dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i
                class="menu-icon fa fa-glass"></i>Pages</a>
            <ul class="sub-menu children dropdown-menu">
              <li><i class="menu-icon fa fa-sign-in"></i><a href="page-login.html">Login</a></li>
              <li><i class="menu-icon fa fa-sign-in"></i><a href="page-register.html">Register</a></li>
              <li><i class="menu-icon fa fa-paper-plane"></i><a href="pages-forget.html">Forget Pass</a></li>
            </ul>
          </li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </nav>
  </aside><!-- /#left-panel -->
  <div id="right-panel" class="right-panel">
    <!-- Right Panel -->
    <header id="header" class="header">
      <!-- Header-->
      <div class="header-menu">
        <div class="col-sm-7">
          <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
          <div class="header-left">
            <button class="search-trigger"><i class="fa fa-search"></i></button>
            <a href="<?= base_url() ?>index.php/category_controller">Category</a>
            <a href="<?= base_url() ?>index.php/news_controller">News</a>
            <a href="<?= base_url() ?>index.php/post_controller">Post</a>
            <div class="form-inline">
              <form class="search-form">
                <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
              </form>
            </div>

            <div class="dropdown for-notification">
              <button class="btn btn-secondary dropdown-toggle" type="button" id="notification" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <i class="fa fa-bell"></i>
                <span class="count bg-danger">5</span>
              </button>
              <div class="dropdown-menu" aria-labelledby="notification">
                <p class="red">You have 3 Notification</p>
                <a class="dropdown-item media bg-flat-color-1" href="#">
                  <i class="fa fa-check"></i>
                  <p>Server #1 overloaded.</p>
                </a>
                <a class="dropdown-item media bg-flat-color-4" href="#">
                  <i class="fa fa-info"></i>
                  <p>Server #2 overloaded.</p>
                </a>
                <a class="dropdown-item media bg-flat-color-5" href="#">
                  <i class="fa fa-warning"></i>
                  <p>Server #3 overloaded.</p>
                </a>
              </div>
            </div>

            <div class="dropdown for-message">
              <button class="btn btn-secondary dropdown-toggle" type="button" id="message" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <i class="ti-email"></i>
                <span class="count bg-primary">9</span>
              </button>
              <div class="dropdown-menu" aria-labelledby="message">
                <p class="red">You have 4 Mails</p>
                <a class="dropdown-item media bg-flat-color-1" href="#">
                  <span class="photo media-left"><img alt="avatar"
                      src="<?php echo base_url(); ?>assets/images/avatar/1.jpg"></span>
                  <span class="message media-body">
                    <span class="name float-left">Jonathan Smith</span>
                    <span class="time float-right">Just now</span>
                    <p>Hello, this is an example msg</p>
                  </span>
                </a>
                <a class="dropdown-item media bg-flat-color-4" href="#">
                  <span class="photo media-left"><img alt="avatar"
                      src="<?php echo base_url(); ?>assets/images/avatar/2.jpg"></span>
                  <span class="message media-body">
                    <span class="name float-left">Jack Sanders</span>
                    <span class="time float-right">5 minutes ago</span>
                    <p>Lorem ipsum dolor sit amet, consectetur</p>
                  </span>
                </a>
                <a class="dropdown-item media bg-flat-color-5" href="#">
                  <span class="photo media-left"><img alt="avatar"
                      src="<?php echo base_url(); ?>assets/images/avatar/3.jpg"></span>
                  <span class="message media-body">
                    <span class="name float-left">Cheryl Wheeler</span>
                    <span class="time float-right">10 minutes ago</span>
                    <p>Hello, this is an example msg</p>
                  </span>
                </a>
                <a class="dropdown-item media bg-flat-color-3" href="#">
                  <span class="photo media-left"><img alt="avatar"
                      src="<?php echo base_url(); ?>assets/images/avatar/4.jpg"></span>
                  <span class="message media-body">
                    <span class="name float-left">Rachel Santos</span>
                    <span class="time float-right">15 minutes ago</span>
                    <p>Lorem ipsum dolor sit amet, consectetur</p>
                  </span>
                </a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-5">
          <div class="user-area dropdown float-right">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <img class="user-avatar rounded-circle" src="<?php echo base_url(); ?>assets/images/admin.jpg"
                alt="User Avatar">
            </a>

            <div class="user-menu dropdown-menu">
              <a class="nav-link" href="#"><i class="fa fa-user"></i> My Profile</a>

              <a class="nav-link" href="#"><i class="fa fa-user"></i> Notifications <span class="count">13</span></a>

              <a class="nav-link" href="#"><i class="fa fa-cog"></i> Settings</a>

              <a class="nav-link" href="<?= base_url() ?>index.php/login_form_controller/getLogout"><i
                  class="fa fa-power-off"></i> Logout</a>
            </div>
          </div>

          <div class="language-select dropdown" id="language-select">
            <a class="dropdown-toggle" href="#" data-toggle="dropdown" id="language" aria-haspopup="true"
              aria-expanded="true">
              <!-- <i class="flag-icon flag-icon-us"></i> -->
              <span style="color: #1266f1; font-weight: 600;"><?= $this->session->userdata('account_session'); ?></span>
            </a>
            <div class="dropdown-menu" aria-labelledby="language">
              <div class="dropdown-item">
                <span class="flag-icon flag-icon-fr"></span>
              </div>
              <div class="dropdown-item">
                <i class="flag-icon flag-icon-es"></i>
              </div>
              <div class="dropdown-item">
                <i class="flag-icon flag-icon-us"></i>
              </div>
              <div class="dropdown-item">
                <i class="flag-icon flag-icon-it"></i>
              </div>
            </div>
          </div>

        </div>
      </div>

    </header><!-- /header -->


    <div class="content mt-3">
      <div class="animated fadeIn">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <strong class="card-title">Users</strong>
              </div>
              <div class="card-body">
                <div class="col-md-12 mt-2">
                  <!-- Button trigger modal -->
                  <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#addRecords">
                    Add Record
                  </button>

                  <!-- Add Records Modal -->
                  <div class="modal fade" id="addRecords" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Add Record</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">

                          <!-- Add Record Form -->
                          <form id="addRecordForm" method="post" accept-charset="utf-8" enctype="multipart/form-data">

                            <!-- First Name -->
                            <div class="input-group mb-3">
                              <div class="input-group-prepend">
                                <span class="input-group-text bg-info text-white" id="basic-addon1"><i
                                    class="fas fa-user"></i></span>
                              </div>
                              <input type="text" class="form-control" id="first_name" placeholder="first_name"
                                aria-label="first_name" aria-describedby="basic-addon1">
                            </div>

                            <!-- First Name -->
                            <div class="input-group mb-3">
                              <div class="input-group-prepend">
                                <span class="input-group-text bg-info text-white" id="basic-addon1"><i
                                    class="fas fa-user"></i></span>
                              </div>
                              <input type="text" class="form-control" id="last_name" placeholder="last_name"
                                aria-label="last_name" aria-describedby="basic-addon1">
                            </div>

                            <!-- Phone Number -->
                            <div class="input-group mb-3">
                              <div class="input-group-prepend">
                                <span class="input-group-text bg-info text-white" id="basic-addon1"><i
                                    class="fas fa-phone-alt"></i></span>
                              </div>
                              <input type="number" class="form-control" id="phone_number" placeholder="phone_number">
                            </div>


                            <!-- Email -->
                            <div class="input-group mb-3">
                              <div class="input-group-prepend">
                                <span class="input-group-text bg-info text-white" id="basic-addon1"><i
                                    class="fas fa-envelope"></i></span>
                              </div>
                              <input type="text" class="form-control" id="email" placeholder="Email Address">
                            </div>

                            <!-- User Name -->
                            <div class="input-group mb-3">
                              <div class="input-group-prepend">
                                <span class="input-group-text bg-info text-white" id="basic-addon1"><i
                                    class="fas fa-user"></i></span>
                              </div>
                              <input type="text" class="form-control" id="user_name" placeholder="user_name"
                                aria-label="user_name" aria-describedby="basic-addon1">
                            </div>



                            <!-- Password -->
                            <div class="input-group mb-3">
                              <input type="password" class="form-control" id="password" placeholder="password">
                              <!-- <small><?php echo form_error('password'); ?></small> -->
                            </div>


                            <!-- Confirm Password -->
                            <div class="input-group mb-3">
                              <input type="password" class="form-control" id="confirm_password"
                                placeholder="confirm_password">
                              <span id="indicator"></span>
                            </div>


                            <!-- Avatar -->
                            <!-- <div class="custom-file">
																	<input type="file" class="custom-file-input" id="avatar">
																	<label class="custom-file-label" for="customFile">Choose file</label>
																</div> -->

                            <div class="form-group">
                              <label for="">Avatar</label>
                              <input type="file" id="avatar" class="form-control">
                            </div>

                          </form>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                          <!-- Insert Button -->
                          <button type="button" class="btn btn-primary" id="add">Add Record</button>
                        </div>
                      </div>
                    </div>
                  </div>

                  <!-- Edit Records Modal -->
                  <!-- Modal -->
                  <div class="modal fade" id="editRecords" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Edit Record</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <div class="container-fluid">
                            <div class="row text-center">
                              <div class="col-md-12 my-3">
                                <div id="show_img"></div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-12">

                                <!-- Edit Record Form -->
                                <form id="editForm" method="post" accept-charset="utf-8" enctype="multipart/form-data">

                                  <!-- ID -->
                                  <input type="hidden" id="edit_record_id">

                                  <!-- First Name -->
                                  <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text bg-info text-white" id="basic-addon1"><i
                                          class="fas fa-user"></i></span>
                                    </div>
                                    <input type="text" class="form-control" id="edit_first_name"
                                      placeholder="edit_first_name" aria-label="edit_first_name"
                                      aria-describedby="basic-addon1">
                                  </div>

                                  <!-- Last Name -->
                                  <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text bg-info text-white" id="basic-addon1"><i
                                          class="fas fa-user"></i></span>
                                    </div>
                                    <input type="text" class="form-control" id="edit_last_name"
                                      placeholder="edit_last_name" aria-label="edit_last_name"
                                      aria-describedby="basic-addon1">
                                  </div>

                                  <!-- Phone Number -->
                                  <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text bg-info text-white" id="basic-addon1"><i
                                          class="fas fa-user"></i></span>
                                    </div>
                                    <input type="number" class="form-control" id="edit_phone_number"
                                      placeholder="edit_phone_number" aria-label="edit_phone_number"
                                      aria-describedby="basic-addon1">
                                  </div>

                                  <!-- Email -->
                                  <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text bg-info text-white" id="basic-addon1"><i
                                          class="fas fa-envelope"></i></span>
                                    </div>
                                    <input type="text" class="form-control" id="edit_email" placeholder="Email Address">
                                  </div>

                                  <!-- User Name -->
                                  <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text bg-info text-white" id="basic-addon1"><i
                                          class="fas fa-envelope"></i></span>
                                    </div>
                                    <input type="text" class="form-control" id="edit_user_name"
                                      placeholder="edit_user_name">
                                  </div>

                                  <!-- Avatar -->
                                  <div class="form-group">
                                    <label for="">Avatar</label>
                                    <input type="file" id="edit_avatar" class="form-control">
                                  </div>
                                </form>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          <!-- Update Button -->
                          <button type="button" class="btn btn-primary" id="update">Update Record</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-12 mt-4">
                    <div class="card-body">
                      <table class="table table-bordered table-striped" style="width:100%;" id="recordTable">
                        <thead>
                          <tr>
                            <th>No.</th>
                            <th>Avatar</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Phone Number</th>
                            <th>Email</th>
                            <th>User Name</th>
                            <!-- <th>Password</th> -->
                            <th>Action</th>
                          </tr>
                        </thead>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div><!-- .animated -->
  </div><!-- .content -->
  </div><!-- /#right-panel -->
  <!-- Right Panel -->


  <script src="<?php echo base_url(); ?>vendor/dashboard/jquery/dist/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>vendor/dashboard/popper.js/dist/umd/popper.min.js"></script>
  <script src="<?php echo base_url(); ?>vendor/dashboard/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/main.js"></script>

  <script src="<?php echo base_url(); ?>vendor/dashboard/datatables.net/js/jquery.dataTables.min.js"></script>
  <script src="<?php echo base_url(); ?>vendor/dashboard/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="<?php echo base_url(); ?>vendor/dashboard/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
  <script src="<?php echo base_url(); ?>vendor/dashboard/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js">
  </script>
  <script src="<?php echo base_url(); ?>vendor/dashboard/jszip/dist/jszip.min.js"></script>
  <script src="<?php echo base_url(); ?>vendor/dashboard/pdfmake/build/pdfmake.min.js"></script>
  <script src="<?php echo base_url(); ?>vendor/dashboard/pdfmake/build/vfs_fonts.js"></script>
  <script src="<?php echo base_url(); ?>vendor/dashboard/datatables.net-buttons/js/buttons.html5.min.js"></script>
  <script src="<?php echo base_url(); ?>vendor/dashboard/datatables.net-buttons/js/buttons.print.min.js"></script>
  <script src="<?php echo base_url(); ?>vendor/dashboard/datatables.net-buttons/js/buttons.colVis.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/init-scripts/data-table/datatables-init.js"></script>

	


  <script>
  function fetch() {
    $.ajax({
      type: "get",
      url: "<?php echo base_url(); ?>index.php/user_controller/fetch",
      dataType: "json",
      success: function(response) {
        var i = "1";
        $("#recordTable").DataTable({
          data: response,
          responsive: true,
          columns: [{
              data: "id",
              render: function(data, type, row, meta) {
                return i++;
              },
            },
            {
              data: "avatar",
              render: function(data, type, row, meta) {
                var a = `
										<img src="<?php echo base_url("/Fileupload/"); ?>${row.avatar}" class="user_avatar" alt="avatar"/>
										`;
                return a;
              },
            },
            {
              data: "first_name",
            },
            {
              data: "last_name",
            },
            {
              data: "phone_number",
            },
            {
              data: "email",
            },
            {
              data: "user_name",
            },
						// {
            //   data: "password",
            // },
            {
              orderable: false,
              searchable: false,
              data: function(row, set) {
                return `
									<a href="#" id="edit" class="btn btn-sm btn-outline-info" value="${row.id}"><i class="fa fa-pencil"></i></a>
										<a href="#" id="del" class="btn btn-sm btn-outline-danger" value="${row.id}"><i class="fa fa-remove"></i></a>
									`;
              },
            },
          ],
        });
      },
    });
  }
  fetch();



  // add
  $(document).on("click", "#add", function(e) {
    e.preventDefault();
    var first_name = $("#first_name").val();
    var last_name = $("#last_name").val();
    var phone_number = $("#phone_number").val();
    var email = $("#email").val();
    var user_name = $("#user_name").val();
    var avatar = $("#avatar")[0].files[0];

    var password = $("#password").val();
    var confirm_password = $("#confirm_password").val();
    if (password != confirm_password) {
      alert("Passwords do not match.");
      return false;
    } else {




      if (first_name == "" || last_name == "" || phone_number == "" || email == "" || user_name == "" || avatar
        .name == "" || password == "" || confirm_password == "") {
        alert("All field are required");
      } else {
        var fd = new FormData();
        fd.append("first_name", first_name);
        fd.append("last_name", last_name);
        fd.append("phone_number", phone_number);
        fd.append("email", email);
        fd.append("user_name", user_name);
        fd.append("password", password);
        // fd.append("confirm_password", confirm_password);

        fd.append("avatar", avatar);

        $.ajax({
          type: "post",
          url: "<?php echo base_url(); ?>index.php/user_controller/insert",
          data: fd,
          processData: false,
          contentType: false,
          dataType: "json",
          success: function(response) {
            if (response.res == "success") {
              toastr["success"](response.message);
              jQuery("#addRecords").modal("hide");
              $("#addRecordForm")[0].reset();
              $(".add-file-label").html("Choose file");
              $("#recordTable").DataTable().destroy();
              fetch();
            } else {
              toastr["error"](response.message);
            }
          },
        });
      }
    }
  });

  // Delete Record
  $(document).on("click", "#del", function(e) {
    e.preventDefault();
    var del_id = $(this).attr("value");
    const swalWithBootstrapButtons = Swal.mixin({
      customClass: {
        confirmButton: 'btn btn-success',
        cancelButton: 'btn btn-danger mr-2'
      },
      buttonsStyling: false
    })

    swalWithBootstrapButtons.fire({
      title: 'Are you sure?',
      text: "You won't be able to revert this!",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonText: 'Yes, delete it!',
      cancelButtonText: 'No, cancel!',
      reverseButtons: true
    }).then((result) => {
      if (result.value) {

        $.ajax({
          url: "<?php echo base_url(); ?>index.php/user_controller/delete",
          type: "post",
          dataType: "json",
          data: {
            del_id: del_id
          },
          success: function(data) {
            if (data.responce == "success") {
              $('#recordTable').DataTable().destroy();
              fetch();
              swalWithBootstrapButtons.fire(
                'Deleted!',
                'Your file has been deleted.',
                'success'
              );
            } else {
              swalWithBootstrapButtons.fire(
                'Cancelled',
                'Your imaginary file is safe :)',
                'error'
              );
            }
          }
        });
      } else if (
        result.dismiss === Swal.DismissReason.cancel
      ) {
        swalWithBootstrapButtons.fire(
          'Cancelled',
          'Your imaginary file is safe :)',
          'error'
        )
      }
    });
  });


  // edit

  $(document).on("click", "#edit", function(e) {
    e.preventDefault();
    var edit_id = $(this).attr("value");
    $.ajax({
      url: "<?php echo base_url(); ?>index.php/user_controller/edit",
      type: "get",
      dataType: "JSON",
      data: {
        edit_id: edit_id,
      },
      success: function(data) {
        if (data.res === "success") {
          jQuery("#editRecords").modal("show");
          $("#edit_record_id").val(data.post.id);
          $("#edit_first_name").val(data.post.first_name);
          $("#edit_last_name").val(data.post.last_name);
          $("#edit_phone_number").val(data.post.phone_number);
          $("#edit_email").val(data.post.email);
          $("#edit_user_name").val(data.post.user_name);
          $("#show_img").html(`
							<img src="<?php echo base_url("/Fileupload/"); ?>${data.post.avatar}" class="user_avatar" alt="avatar"/>
							`);
        } else {
          toastr["error"](data.message, "Error");
        }
      },
    });
  });

  /* -------------------------------------------------------------------------- */
  /*                               Update Records                               */
  /* -------------------------------------------------------------------------- */

  $(document).on("click", "#update", function(e) {
    e.preventDefault();
    var edit_id = $("#edit_record_id").val();
    var first_name = $("#edit_first_name").val();
    var last_name = $("#edit_last_name").val();
    var phone_number = $("#edit_phone_number").val();
    var email = $("#edit_email").val();
    var user_name = $("#edit_user_name").val();
    var edit_avatar = $("#edit_avatar")[0].files[0];

    if (first_name == "" || last_name == "" || phone_number == "" || email == "" || user_name == "") {
      alert("All field are required");
    } else {
      var fd = new FormData();

      fd.append("edit_id", edit_id);
      fd.append("first_name", first_name);
      fd.append("last_name", last_name);
      fd.append("phone_number", phone_number);
      fd.append("email", email);
      fd.append("user_name", user_name);
      if ($("#edit_avatar")[0].files.length > 0) {
        fd.append("edit_avatar", edit_avatar);
      }
      $.ajax({
        type: "post",
        url: "<?php echo base_url(); ?>index.php/user_controller/update",
        data: fd,
        processData: false,
        contentType: false,
        dataType: "json",
        success: function(response) {
          if (response.res == "success") {
            toastr["success"](response.message);
            jQuery ("#editRecords").modal("hide");
            $("#editForm")[0].reset();
            $(".edit-file-label").html("Choose file");
            $("#recordTable").DataTable().destroy();
            fetch();
          } else {
            toastr["error"](response.message);
          }
        },
      });
    }
  });
  </script>

	
</body>

</html>
