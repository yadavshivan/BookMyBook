<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BookMyBook-view_Books</title>
    <link rel="stylesheet" href="<?= base_url('cssadmin/bootstrap.css') ?>">
        <!-- Add custom CSS here -->
    <link rel="stylesheet" href="<?= base_url('cssadmin/sb-admin.css') ?>">

    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <!-- Page Specific CSS -->
    <link rel="stylesheet" href="http://cdn.oesmith.co.uk/morris-0.4.3.min.css">
   
</head>
<body>
<div id="wrapper">

<nav class="navbar navbar-inverse navbar-fixed-top" id="nav-option" role="navigation">
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

<!-- For success message-->
<?php if (session()->has('success')): ?>
    <script>
        Swal.fire({
            position: 'top',
            icon: "success",
            title: "<?= session('success') ?>",
            showConfirmButton: false,
            timer: 2000
        });
    </script>
<?php endif; ?><!-- This is for registraion success-->

        <?php if (session()->has('error')): ?>
            <p class="text-danger"><?= session()->get('error') ?></p>
            <script>
        Swal.fire({
            icon: "error",
            title: "Login Failed",
            text: "Invalid username or password. Please try again.",
            showConfirmButton: false,
            timer: 2000
        });
    </script>
    <?php endif; ?>
<div class="container1">
   <!-- Add a new section to display existing books -->
<div class="mt-5">
    <h2>Existing Books</h2>
    <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>Sr. No.</th>
                    <th>Title</th>
                    <th>Author</th>
                    <th>Publisher</th>
                    <th>Quantity Available</th>
                    <th>Description</th>
                    <th>Image</th>
                    <th>Edit</th>
                    <th>Delete</th>
                    <!-- Add more table headers as needed -->
                </tr>
            </thead>
            <tbody>
                <!-- Loop through each book and display its details in a row -->
                <?php $counter = 1; ?> <!-- Initialize a counter variable -->

                <?php foreach ($books as $book): ?>
                    <tr>
                        <td><?= $counter ?></td> <!-- Display the serial number -->
                        <td><?= $book['bname'] ?></td>
                        <td><?= $book['author'] ?></td>
                        <td><?= $book['publisher'] ?></td>
                        <td><?= $book['quantity_available'] ?></td>
                        <td><?= $book['description'] ?></td>
                        <td><img src="<?= base_url($book['image_path']) ?>" alt="<?= $book['bname'] ?>" style="max-width: 100px; max-height: 100px;"></td>
                        <!-- Add more table data cells for other book details -->
                        <td>
           <!-- <a href="<?= base_url('admin/editBook') ?>" class="btn btn-primary btn-sm">Edit</a>-->
            <a href="<?= base_url('admin/editBook/'.$book['b_id']) ?>" class="btn btn-primary btn-sm">Edit</a>

        </td>
                        <td>
            <a href="<?= base_url('admin/deleteBook/'.$book['b_id']) ?>" class="btn btn-danger btn-sm">Delete</a>
        </td>            
                        
                    </tr>

                        
                    </tr>

                    <?php $counter++; ?> <!-- Increment the counter for the next row -->

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