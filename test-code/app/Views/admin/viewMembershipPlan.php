<!DOCTYPE html>
<html lang="en">
<head></head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BookMyBook-view_Books</title>
    <link rel="stylesheet" href="<?= base_url('cssadmin/bootstrap.css') ?>">
        <!-- Add custom CSS here -->
    <link rel="stylesheet" href="<?= base_url('cssadmin/sb-admin.css') ?>">

    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <!-- Page Specific CSS -->
    <link rel="stylesheet" href="http://cdn.oesmith.co.uk/morris-0.4.3.min.css">
    <!-- Include SweetAlert CDN -->
      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
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
    <a class="navbar-brand" href="<?= base_url('admin/adminMain_Page') ?>">BMB Admin</a>
  </div>

  <!-- Collect the nav links, forms, and other content for toggling -->
  <div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav side-nav">
      <li><a href="<?= base_url('admin/adminMain_Page') ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>

      <!--dropdown for categories -->
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-caret-square-o-down"></i>Categories <b class="caret"></b></a>
        <ul class="dropdown-menu">
        <li><a href="<?= base_url('admin/addCategory') ?>">Add Category</a></li>
      <li><a href="<?= base_url('admin/addSubcategory') ?>">Add Subcategory</a></li>
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

<?php if (session()->has('success')): ?>
                    <script>
                        document.addEventListener('DOMContentLoaded', function() {
                            Swal.fire({
                                title: 'Success!',
                                text: '<?= session('success') ?>',
                                icon: 'success',
                                confirmButtonText: 'OK',
                                position: 'top', // Display at the top
                                timer: 3000 // Auto close after 3 seconds
                            });
                        });
                    </script>
                <?php endif; ?>


    <div class="container">
    <h1 class="mt-4">View Membership Plans</h1>
    <div class="table-responsive-sm custom-table">
        <table class="table table-striped table-bordered table-hover">
            <thead class="thead-dark">
                <tr>
                    <th>Sr. No.</th>
                    <th>Plan Name</th>
                    <th>Price</th>
                    <th>Duration (months)</th>
                    <th>Description</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                    <th>Update</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php $counter = 1; ?>
                <?php foreach ($membershipPlans as $plan): ?>
                    <tr>
                        <td><?= $counter++ ?></td>
                        <td><?= esc($plan['plan_name']) ?></td>
                        <td><?= esc($plan['price']) ?></td>
                        <td><?= esc($plan['duration']) ?></td>
                        <td><?= esc($plan['description']) ?></td>
                        <td><?= esc($plan['created_at']) ?></td>
                        <td><?= esc($plan['updated_at']) ?></td>
                        <td>
                            <a href="<?= base_url('admin/editMembershipPlan/' . $plan['plan_id']) ?>" class="btn btn-primary">Update</a>
                        </td>
                        <td>
                            <a href="<?= base_url('admin/deleteMembershipPlan/' . $plan['plan_id']) ?>" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>


</div><!-- /#page-wrapper -->

</div><!-- /#wrapper -->

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