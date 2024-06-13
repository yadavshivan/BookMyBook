<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard|BMB Admin</title>
    <link rel="stylesheet" href="<?= base_url('cssadmin/bootstrap.css') ?>">
        <!-- Add custom CSS here -->
    <link rel="stylesheet" href="<?= base_url('cssadmin/sb-admin.css') ?>">

    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <!-- Page Specific CSS -->
    <link rel="stylesheet" href="http://cdn.oesmith.co.uk/morris-0.4.3.min.css">
    <style>
        /* Adjust the table width */
        .custom-table {
            width: 90%; /* You can adjust the width as needed */
           
        }
    </style>
  </head>
  <body>

    <div id="wrapper">

    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <div class="col-md-1">
    <img src="<?= base_url('images/logo.jpg') ?>" alt="Logo" class="footer-logo" style="width: 80px; height: auto;">
</div>
<style>
    .col-md-1 {
        padding-left: 0px;
        margin: 4px;
    }
</style>
   
  </div>

  <!-- Collect the nav links, forms, and other content for toggling -->
  <div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav side-nav">
      <li><a href="<?= base_url('admin/adminMain_Page') ?>"><i class="fa fa-dashboard"></i>Admin Dashboard</a></li>

      <!--dropdown for categories -->
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-caret-square-o-down"></i>Categories <b class="caret"></b></a>
        <ul class="dropdown-menu">
        <li><a href="<?= base_url('admin/addCategory') ?>">Add Category</a></li>
      <li><a href="<?= base_url('admin/addSubcategory') ?>">Add Subcategory</a></li>
      <li><a href="<?= base_url('admin/viewCategories') ?>">View Categories</a></li>
      <li><a href="<?= base_url('admin/addSubcategory') ?>">View Subcategories</a></li>
        </ul>
      </li>
      
      <!--dropdown for books-->
       <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-caret-square-o-down"></i>Books <b class="caret"></b></a>
        <ul class="dropdown-menu">
            <li><a href="<?= base_url('admin/addBook') ?>">Add Book</a></li>
            <li><a href="<?= base_url('admin/view_Books') ?>">View Book</a></li>
        </ul>
      </li>
      <!--dropdown for membership plane-->
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-caret-square-o-down"></i>Membership plan <b class="caret"></b></a>
        <ul class="dropdown-menu">
            <li><a href="<?= base_url('admin/addMembershipPlan') ?>">Add membership plan</a></li>
            <li><a href="<?= base_url('admin/viewMembershipPlan') ?>">View membership plan</a></li>

        </ul>
      </li>
    </ul>
   

    <ul class="nav navbar-nav navbar-right navbar-user">
   
      <li class="dropdown user-dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> John Smith <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="#"><i class="fa fa-user"></i> Profile</a></li>
          <li><a href="#"><i class="fa fa-envelope"></i> Inbox <span class="badge">7</span></a></li>
          <li><a href="#"><i class="fa fa-gear"></i> Settings</a></li>
          <li class="divider"></li>
          <li><a href="#"><i class="fa fa-power-off"></i> Log Out</a></li>
        </ul>
      </li>
    </ul>
  </div><!-- /.navbar-collapse -->
</nav>

      <div id="page-wrapper">

        <div class="row">
          <div class="col-lg-12">
            <h1>Dashboard <small>BMB Admin</small></h1>
            <ol class="breadcrumb">
              <li class="active"><i class="fa fa-dashboard"></i> Dashboard</li>
            </ol>
           
          </div>
        </div><!-- /.row -->

        <div class="row">
          <div class="col-lg-3">
            <div class="panel panel-info">
              <div class="panel-heading">
                <div class="row">
                  <div class="col-xs-6">
                    <i class="fa fa-comments fa-5x"></i>
                  </div>
                  <div class="col-xs-10 text-right">
                    <p class="announcement-text">books count</p>
                  </div>
                </div>
              </div>
              <a href="#">
                <div class="panel-footer announcement-bottom">
                  <div class="row">
                    <div class="col-xs-10">
                     Total Books
                    </div>
                    <div class="col-xs-6 text-right">
                      <i class="fa fa-arrow-circle-right"></i>
                    </div>
                  </div>
                </div>
              </a>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="panel panel-warning">
              <div class="panel-heading">
                <div class="row">
                  <div class="col-xs-6">
                    <i class="fa fa-check fa-5x"></i>
                  </div>
                  <div class="col-xs-10 text-right">
                    <p class="announcement-text">category count</p>
                  </div>
                </div>
              </div>
              <a href="#">
                <div class="panel-footer announcement-bottom">
                  <div class="row">
                    <div class="col-xs-10">
                     Total Category
                    </div>
                    <div class="col-xs-6 text-right">
                      <i class="fa fa-arrow-circle-right"></i>
                    </div>
                  </div>
                </div>
              </a>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="panel panel-danger">
              <div class="panel-heading">
                <div class="row">
                  <div class="col-xs-6">
                    <i class="fa fa-tasks fa-5x"></i>
                  </div>
                  <div class="col-xs-10 text-right">
                    <p class="announcement-text">subcategory count</p>
                  </div>
                </div>
              </div>
              <a href="#">
                <div class="panel-footer announcement-bottom">
                  <div class="row">
                    <div class="col-xs-10">
                     Total Subcategory
                    </div>
                    <div class="col-xs-6 text-right">
                      <i class="fa fa-arrow-circle-right"></i>
                    </div>
                  </div>
                </div>
              </a>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="panel panel-success">
              <div class="panel-heading">
                <div class="row">
                  <div class="col-xs-6">
                    <i class="fa fa-comments fa-5x"></i>
                  </div>
                  <div class="col-xs-10 text-right">
                    <p class="announcement-text">membership plans</p>
                  </div>
                </div>
              </div>
              <a href="#">
                <div class="panel-footer announcement-bottom">
                  <div class="row">
                    <div class="col-xs-10">
                      Membership Plans
                    </div>
                    <div class="col-xs-6 text-right">
                      <i class="fa fa-arrow-circle-right"></i>
                    </div>
                  </div>
                </div>
              </a>
            </div>
          </div>
        </div><!-- /.row -->

       

        
      </div><!-- /#page-wrapper -->

    </div><!-- /#wrapper -->

    <!-- JavaScript -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script>
   
     <!-- Include Bootstrap JS and Popper.js -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="http://cdn.oesmith.co.uk/morris-0.4.3.min.js"></script>
    <script src="js/morris/chart-data-morris.js"></script>
    <script src="js/tablesorter/jquery.tablesorter.js"></script>
    <script src="js/tablesorter/tables.js"></script>
  </body>
</html>