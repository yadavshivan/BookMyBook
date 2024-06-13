<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BookMyBook-addBook</title>
    <link rel="stylesheet" href="<?= base_url('cssadmin/bootstrap.css') ?>">
        <!-- Add custom CSS here -->
    <link rel="stylesheet" href="<?= base_url('cssadmin/sb-admin.css') ?>">

    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <!-- Page Specific CSS -->
    <link rel="stylesheet" href="http://cdn.oesmith.co.uk/morris-0.4.3.min.css">
     <!-- Include SweetAlert CDN -->
      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
     <style>
        /* Custom CSS for reducing input field width */
        .form-control {
            width: 1000px; /* Adjust the width as needed */
        }
    </style>
</head>
<body>
<div id="wrapper">

<!-- Sidebar -->
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

    <div class="container">
        <h1 class="mt-4"> Add Book</h1>

        <!-- Your form to add book details -->
        <form action="<?= base_url('admin/processAddBook') ?>" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="bname">Book Title:</label>
                <input type="text" class="form-control" id="bname" name="bname" required>
            </div>

            <div class="form-group">
                <label for="author">Author:</label>
                <input type="text" class="form-control" id="author" name="author" required>
            </div>

            <div class="form-group">
                <label for="publisher">Publisher:</label>
                <input type="text" class="form-control" id="publisher" name="publisher" required>
            </div>

            <div class="form-group">
                <label for="c_id">Category:</label>
                <!-- Dropdown to select category -->
                <select class="form-control" id="c_id" name="c_id" required onchange="loadSubcategories(this.value)" required>
                    <!-- Add a default option -->
                    <option value="" selected>--Select--</option>
                    <!-- Fetch and display categories from the database -->
                    <?php foreach ($categories as $category): ?>
                        <option value="<?= $category['c_id'] ?>"><?= $category['title'] ?></option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div class="form-group">
                <label for="s_id">Subcategory:</label>
                <!-- Dropdown to select subcategory -->
                <select class="form-control" id="s_id" name="s_id" required>
                    <!-- Options will be loaded dynamically using JavaScript -->
                </select>
            </div>

            <div class="form-group">
                <label for="quantity_available">Quantity Available:</label>
                <input type="number" class="form-control" id="quantity_available" name="quantity_available" required>
            </div>

            <div class="form-group">
                <label for="description">Description:</label>
                <textarea class="form-control" id="description" name="description" required></textarea>
            </div>

            <div class="form-group">
                <label for="image_path">Image Path:</label>
                <!-- Input field for image path -->
                <input type="file" class="form-control" id="image_path" name="image_path" accept="image/*" required>
            </div>

           <!-- Display SweetAlert for success message -->
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

                <?php if (isset($errors) && !empty($errors)): ?>
                    <div class="alert alert-danger">
                        <ul>
                            <?php foreach ($errors as $error): ?>
                                <li><?= esc($error) ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                <?php endif; ?>

            <!-- Submit button -->
            <button type="submit" class="btn btn-primary">Add Book</button>
        </form>
    </div>
    <!-- Your existing form for adding a book -->

    


</div><!-- /#page-wrapper -->

</div><!-- /#wrapper -->




    

    <!-- Include Bootstrap JS and Popper.js -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <!-- JavaScript to load subcategories based on selected category -->
    <script>
        function loadSubcategories(categoryId) {
            var subcategorySelect = document.getElementById('s_id');
            subcategorySelect.innerHTML = ''; // Clear existing options

            // Make an AJAX request to fetch subcategories based on the selected category
            fetch('<?= site_url('admin/getSubcategories/') ?>' + categoryId)
                .then(response => response.json())
                .then(data => {
                    data.forEach(subcategory => {
                        var option = document.createElement('option');
                        option.value = subcategory['s_id'];
                        option.textContent = subcategory['sub_title'];
                        subcategorySelect.appendChild(option);
                    });
                })
                .catch(error => {
                    console.error('Error fetching subcategories:', error);
                });
        }
    </script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="http://cdn.oesmith.co.uk/morris-0.4.3.min.js"></script>
    <script src="js/morris/chart-data-morris.js"></script>
    <script src="js/tablesorter/jquery.tablesorter.js"></script>
    <script src="js/tablesorter/tables.js"></script>

</body>
</html>
