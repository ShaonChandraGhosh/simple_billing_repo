<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ITBILLING | Superadmin Dashboard</title>
  <link rel="icon" type="image/x-icon" href="assets/img/logo.png"
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="assets/css/googlefontcss.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="assets/icon/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
  <!-- font-awesome -->
  <link rel="stylesheet" href="assets/fontawesome/css/all.css">
  <link rel="stylesheet" href="assets/fontawesome/css/all.min.css">
  <script src="assets/js/Chart.min.js"></script>
  <script type="text/javascript" src="assets/js/loader.js"></script>
  <script type="text/javascript" src="assets/js/plotly-latest.min.js"></script>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="assets/img/logo.png" alt="AdminLogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="assets/img/shaon.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Shaon Chandra Ghosh
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>


          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
	  
      
	  
	  
	  
	  
	  <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
		<span>Shaon Chandra Ghosh</span>
          <img src="dist/img/shaon.jpg" class="img-circle" alt="User Image" width="30px" height="30px">
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header"><img src="dist/img/shaon.jpg" class="img-circle" alt="User Image" width="30px" height="30px"> Shaon Chandra Ghosh</span>
          <div class="dropdown-divider"></div>
          <a href="superadmin_settings.html" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> Settings
          </a>
          <div class="dropdown-divider"></div>
          <a href="superadmin_support.html" class="dropdown-item">
            <i class="fa-solid fa-phone"></i> Support
          </a>
		  <div class="dropdown-divider"></div>
          <a href="login.html" class="dropdown-item">
            <i class="fa-solid fa-right-from-bracket"></i> Logout
          </a>
        </div>
      </li>
	  
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="assets/img/logo.png" alt="Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">ITBILLING</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="assets/img/shaon.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Shaon Chandra Ghosh</a>
        </div>
      </div>

     

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="fa-solid fa-gauge-high"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
				<span class="badge badge-info right">1</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="superadmin_dashboard.html" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard <span class="right badge badge-danger">New</span></p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fa-solid fa-location-dot"></i>
              <p>
                Area
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">2</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="superadmin_area.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Area</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="superadmin_subarea.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Sub Area</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fa-solid fa-gear"></i>
              <p>
                Packages
                <i class="right fas fa-angle-left"></i>
				<span class="badge badge-info right">1</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="superadmin_package.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Package</p>
                </a>
              </li>
              
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fa-solid fa-user-large"></i>
              <p>
                Clients
                <i class="fas fa-angle-left right"></i>
				<span class="badge badge-info right">1</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="superadmin_client.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Client List</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fa-solid fa-users-gear"></i>
              <p>
                Manager
                <i class="fas fa-angle-left right"></i>
				<span class="badge badge-info right">1</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="superadmin_manager.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manager</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fa-regular fa-envelope"></i>
              <p>
                Message
                <i class="fas fa-angle-left right"></i>
				<span class="badge badge-info right">3</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="superadmin_bulk_sms.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Bulk SMS</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="superadmin_sms_template.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>SMS Template</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="superadmin_sms_log.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>SMS Log</p>
                </a>
              </li>
            </ul>
          </li>
		  <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fa-solid fa-flag"></i>
              <p>
                Report
                <i class="fas fa-angle-left right"></i>
				<span class="badge badge-info right">2</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="superadmin_collection.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Collection</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="superadmin_webhookbill.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Webhook Bill</p>
                </a>
              </li>
            </ul>
          </li>
		  <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fa-solid fa-headset"></i>
              <p>
                Support
                <i class="fas fa-angle-left right"></i>
				<span class="badge badge-info right">2</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="superadmin_support_catagory.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Support Category</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="superadmin_support.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Support Ticket List</p>
                </a>
              </li>
            </ul>
          </li>
		  <li class="nav-item">
            <a href="accounts.html" class="nav-link">
              <i class="fa-solid fa-receipt"></i>
              <p>
                Accounts
                <i class="fas fa-angle-left right"></i>
				<span class="badge badge-info right">1</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="superadmin_account.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Accounts</p>
                </a>
              </li>
            </ul>
          </li>
		  <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Setting
                <i class="fas fa-angle-left right"></i>
				<span class="badge badge-info right">1</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="superadmin_setting.html" class="nav-link">
                  <i class="fa-solid fa-wrench"></i>
                  <p>Settings</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper pl-3">
    <!-- Content Header (Page header) -->
    <div class="content-header ">
      <div class="container-fluid">
        <div class="row mb-1 bg-primary rounded p-3">
          <div class="col-sm-6">
            <h1 class="m-0">Open Support Ticket</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">
			  <h4 class="text-white">
			  <button type="button" onClick="refreshPage()" class="btn btn-info" ><i class="fa-solid fa-arrows-rotate"></i></button>
			  <button type="button" class="btn btn-info" data-toggle="modal" data-target="#addcatagory">Catagory+</button>
			  <button type="button" class="btn btn-info" data-toggle="modal" data-target="#addsupportticket">Support Ticket<i class="fa-solid fa-user-plus"></i></button>
			  </h4>
			  </li>
            </ol>
			

			
          </div><!-- /.col -->
        </div><!-- /.row -->
		
		
		
		<!-- main Content -->
		<div class="row mb-1 rounded p-2">
          <div class="col-sm-12">
				<div class="container">
				  <ul class="nav nav-tabs" id="myTab" role="tablist">
					  <li class="nav-item" role="presentation">
						<button class="nav-link active" id="support-ticket-tab" data-bs-toggle="tab" data-bs-target="#support-ticket" type="button" role="tab" aria-controls="support-ticket" aria-selected="true">Support Tickets</button>
					  </li>
					  <li class="nav-item" role="presentation">
						<button class="nav-link" id="catagory-tab" data-bs-toggle="tab" data-bs-target="#catagory" type="button" role="tab" aria-controls="catagory" aria-selected="false">Catagory</button>
					  </li>
				 </ul>
				
				 
				 <div class="tab-content" id="myTabContent">
	  <div class="tab-pane fade show active" id="support-ticket" role="tabpanel" aria-labelledby="info-tab">
			<table id="pppoedatatable" class="table table-striped " style="width:100%">
        <thead class="text-center ">
                <th class="text-center">NO</th>
                <th class="text-center">User Id</th>
                <th class="text-center">Mobile</th>
                <th class="text-center">Address</th>
                <th class="text-center">Problem</th>
                <th class="text-center">Problem Type</th>
                <th class="text-center">Works on</th>
				<th class="text-center">Recived Person</th>
				<th class="text-center">Action</th>
            </tr>
            </tr>
        </thead>
        <tbody class="text-center">
            <tr>
                <td>1</td>
                <td>123456</td>
                <td>017********</td>
                <td>Cumilla</td>
                <td>Onu te red light joltece</td>
				<td>Fiber</td>
                <td>Atik</td>
                <td>Shaon</td>
				<td>
					<div class="dropstart">
					  <button type="button" class="btn btn-default dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
							<i class="fa-solid fa-bars"></i>
					  </button>
					  <ul class="dropdown-menu bg-primary text-light">
						<li><a class="dropdown-item bg-primary text-light" href="#">Edit</a></li>
						<li><a class="dropdown-item bg-primary text-light" href="#">Delete</a></li>
						<li><a class="dropdown-item bg-primary text-light" href="#">Message</a></li>
					  </ul>
					</div>
				</td>
            </tr>
           <tr>
                <td>1</td>
                <td>123456</td>
                <td>017********</td>
                <td>Cumilla</td>
                <td>Onu te red light joltece</td>
				<td>Fiber</td>
                <td>Atik</td>
                <td>Shaon</td>
				<td>
					<div class="dropstart">
					  <button type="button" class="btn btn-default dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
							<i class="fa-solid fa-bars"></i>
					  </button>
					  <ul class="dropdown-menu bg-primary text-light">
						<li><a class="dropdown-item bg-primary text-light" href="#">Edit</a></li>
						<li><a class="dropdown-item bg-primary text-light" href="#">Delete</a></li>
						<li><a class="dropdown-item bg-primary text-light" href="#">Message</a></li>
					  </ul>
					</div>
				</td>
            </tr>
            <tr>
                <td>1</td>
                <td>123456</td>
                <td>017********</td>
                <td>Cumilla</td>
                <td>Onu te red light joltece</td>
				<td>Fiber</td>
                <td>Atik</td>
                <td>Shaon</td>
				<td>
					<div class="dropstart">
					  <button type="button" class="btn btn-default dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
							<i class="fa-solid fa-bars"></i>
					  </button>
					  <ul class="dropdown-menu bg-primary text-light">
						<li><a class="dropdown-item bg-primary text-light" href="#">Edit</a></li>
						<li><a class="dropdown-item bg-primary text-light" href="#">Delete</a></li>
						<li><a class="dropdown-item bg-primary text-light" href="#">Message</a></li>
					  </ul>
					</div>
				</td>
            </tr>
            <tr>
                <td>1</td>
                <td>123456</td>
                <td>017********</td>
                <td>Cumilla</td>
                <td>Onu te red light joltece</td>
				<td>Fiber</td>
                <td>Atik</td>
                <td>Shaon</td>
				<td>
					<div class="dropstart">
					  <button type="button" class="btn btn-default dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
							<i class="fa-solid fa-bars"></i>
					  </button>
					  <ul class="dropdown-menu bg-primary text-light">
						<li><a class="dropdown-item bg-primary text-light" href="#">Edit</a></li>
						<li><a class="dropdown-item bg-primary text-light" href="#">Delete</a></li>
						<li><a class="dropdown-item bg-primary text-light" href="#">Message</a></li>
					  </ul>
					</div>
				</td>
            </tr>
            <tr>
                <td>1</td>
                <td>123456</td>
                <td>017********</td>
                <td>Cumilla</td>
                <td>Onu te red light joltece</td>
				<td>Fiber</td>
                <td>Atik</td>
                <td>Shaon</td>
				<td>
					<div class="dropstart">
					  <button type="button" class="btn btn-default dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
							<i class="fa-solid fa-bars"></i>
					  </button>
					  <ul class="dropdown-menu bg-primary text-light">
						<li><a class="dropdown-item bg-primary text-light" href="#">Edit</a></li>
						<li><a class="dropdown-item bg-primary text-light" href="#">Delete</a></li>
						<li><a class="dropdown-item bg-primary text-light" href="#">Message</a></li>
					  </ul>
					</div>
				</td>
            </tr>
            <tr>
                <td>1</td>
                <td>123456</td>
                <td>017********</td>
                <td>Cumilla</td>
                <td>Onu te red light joltece</td>
				<td>Fiber</td>
                <td>Atik</td>
                <td>Shaon</td>
				<td>
					<div class="dropstart">
					  <button type="button" class="btn btn-default dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
							<i class="fa-solid fa-bars"></i>
					  </button>
					  <ul class="dropdown-menu bg-primary text-light">
						<li><a class="dropdown-item bg-primary text-light" href="#">Edit</a></li>
						<li><a class="dropdown-item bg-primary text-light" href="#">Delete</a></li>
						<li><a class="dropdown-item bg-primary text-light" href="#">Message</a></li>
					  </ul>
					</div>
				</td>
            </tr>
            <tr>
                <td>1</td>
                <td>123456</td>
                <td>017********</td>
                <td>Cumilla</td>
                <td>Onu te red light joltece</td>
				<td>Fiber</td>
                <td>Atik</td>
                <td>Shaon</td>
				<td>
					<div class="dropstart">
					  <button type="button" class="btn btn-default dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
							<i class="fa-solid fa-bars"></i>
					  </button>
					  <ul class="dropdown-menu bg-primary text-light">
						<li><a class="dropdown-item bg-primary text-light" href="#">Edit</a></li>
						<li><a class="dropdown-item bg-primary text-light" href="#">Delete</a></li>
						<li><a class="dropdown-item bg-primary text-light" href="#">Message</a></li>
					  </ul>
					</div>
				</td>
            </tr>
            
			
			
			
			
            
        </tbody>
    </table>
	  </div>
	  
	  <div class="tab-pane fade show active" id="catagory" role="tabpanel" aria-labelledby="info-tab">
				<table id="pppoedatatable" class="table table-striped " style="width:100%">
        <thead class="text-center ">
                <th class="text-center">NO</th>
                <th class="text-center">Catagory Name</th>
                <th class="text-center">Description</th>
                <th class="text-center">Action</th>
            </tr>
            </tr>
        </thead>
        <tbody class="text-center">
            <tr>
                <td>1</td>
                <td>Fiber</td>
                <td>Fiber team kaj korte hobe</td>
				<td>
					<div class="dropstart">
					  <button type="button" class="btn btn-default dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
							<i class="fa-solid fa-bars"></i>
					  </button>
					  <ul class="dropdown-menu bg-primary text-light">
						<li><a class="dropdown-item bg-primary text-light" href="#">Edit</a></li>
						<li><a class="dropdown-item bg-primary text-light" href="#">Delete</a></li>
					  </ul>
					</div>
				</td>
            </tr>
          <tr>
                <td>1</td>
                <td>Service</td>
                <td>Service team kaj korte hobe</td>
				<td>
					<div class="dropstart">
					  <button type="button" class="btn btn-default dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
							<i class="fa-solid fa-bars"></i>
					  </button>
					  <ul class="dropdown-menu bg-primary text-light">
						<li><a class="dropdown-item bg-primary text-light" href="#">Edit</a></li>
						<li><a class="dropdown-item bg-primary text-light" href="#">Delete</a></li>
					  </ul>
					</div>
				</td>
            </tr>
			
			
			
			
			
            
            
            
            
          
            
			
			
			
			
            
        </tbody>
    </table>
	  </div>
	  </div>
				 
				 
				 
				 </div>
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
	</div>
		
		
		
		
		
		
		
      </div><!-- /.container-fluid -->
    </div>
    </div>

    <!-- /.content-header -->
	
	
	


<!-- Add Area Model Popup -->
<!-- Large modal -->












<div class="modal fade" id="addsupportticket" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
		<div class="modal-header">
        <h5 class="modal-title" id="myLargeModalLabel">Open Support Ticket</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
	  <div class="modal-body">
			<form>
				<div class="form-row">
					  <div class="form-group col-md-12">
					  <div class="form-group col-md-12">
							<input type="number" class="form-control" id="Inputaddareadesc" aria-describedby="emailHelp" placeholder="User ID">
					  </div>
					  <div class="form-group col-md-12">
							<input type="number" class="form-control" id="Inputaddareadesc" aria-describedby="emailHelp" placeholder="Mobile Number">
					  </div>
					  <div class="form-group col-md-12">
							<input type="number" class="form-control" id="Inputaddareadesc" aria-describedby="emailHelp" placeholder="Address">
					  </div>
					  <div class="form-group col-md-12">
							<input type="number" class="form-control" id="Inputaddareadesc" aria-describedby="emailHelp" placeholder="Problem">
					  </div>
					  <select class="form-control" id="Inputaddarea" aria-describedby="emailHelp">
							<option>Problem Type</option>
							<option>Fiber</option>
							<option>Service</option>
					  </select>
					  <select class="form-control" id="Inputaddarea" aria-describedby="emailHelp">
							<option>Works On</option>
							<option>Atik</option>
							<option>Mehedi</option>
							<option>Mohin</option>
					  </select>
					  <select class="form-control" id="Inputaddarea" aria-describedby="emailHelp">
							<option>Recived On</option>
							<option>Shaon</option>
							<option>Mehedi</option>
							<option>Tanjid</option>
					  </select>
					  </div>
					  </div>
				</div>
				      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary">Add Ticket</button>
      </div>
			</form>
      </div>

	  
	  
	  
	  
	  
    </div>
  </div>
</div>



<div class="modal fade" id="addcatagory" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
		<div class="modal-header">
        <h5 class="modal-title" id="myLargeModalLabel">Add Catagory</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
	  <div class="modal-body">
			<form>
				<div class="form-row">
					  <div class="form-group col-md-12">
							<input type="number" class="form-control" id="Inputaddareadesc" aria-describedby="emailHelp" placeholder="Catagory Name">
					  </div>
					  <div class="form-group col-md-12">
							<input type="number" class="form-control" id="Inputaddareadesc" aria-describedby="emailHelp" placeholder="Description">
					  </div>
				</div>
			</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary">Add Catagory</button>
      </div>
	  
	  
	  
	  
	  
    </div>
  </div>
</div>










</div>




























  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2024 <a href="index.html">ITBILLING</a>.</strong>All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Your IP IS:</b> 103.75.138.129
    </div>
  </footer>







  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->





<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- FLOT CHARTS -->
<script src="plugins/flot/jquery.flot.js"></script>
<!-- DataTables  & Plugins -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="plugins/jszip/jszip.min.js"></script>
<script src="plugins/pdfmake/pdfmake.min.js"></script>
<script src="plugins/pdfmake/vfs_fonts.js"></script>
<script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

	<script src="assets/js/jquery-3.7.1.js"></script>
	<script src="assets/js/bootstrap.bundle.min.js"></script>
	<script src="assets/js/dataTables.js"></script>
	<script src="assets/js/dataTables.bootstrap5.js"></script>


<!-- Tabole Data Base -->
<script type="text/javascript">
new DataTable('#pppoedatatable');
</script>

<!-- Drop Down -->
<script type="text/javascript">
$('.dropdown-toggle').dropdown()
</script>

<!-- Page Refresh -->
<script>
function refreshPage(){
    window.location.reload();
} 
</script>


</body>
</html>
</body>
</html>
