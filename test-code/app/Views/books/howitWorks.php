<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book My Book</title>
    <link rel="stylesheet" href="<?= base_url('css/styles.css') ?>">
    <link rel="stylesheet" type="text/css" href="css/styles.css?v=2">
    <!-- Include SweetAlert CDN -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
         <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <!-- Bootstrap JS -->
  

<style>     
        /* Additional styles for the search bar */ 
        .header-links {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .header-link {
            cursor: pointer;
            color: #343a40;
            text-decoration: none;
            font-weight: bold;
            margin-right: 20px;
            transition: color 0.3s ease;
        }
        .header-link:hover {
            color: #007bff;
        }
        body {        
    background-color: #f5f5f5; /* Light background color */
    color: #343a40; /* Dark text color */
    margin: 0;
    padding: 0;
    width: 100%;
    overflow-x: hidden; /* Add this to hide horizontal overflow */
}  
    #howitworks img {
    margin: 0;
    padding: 0;
}
.footer {
    position: relative; /* Position relative for containing the absolute positioned overlay */
    background-image: url('<?= base_url('images/bmbback3.png') ?>');
    background-size: cover;
    color: #ffffff; /* White text color on the footer */
    padding: 30px 0;
    margin-bottom: 0; /* Removed top margin */
}
.footer::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.7); /* Transparent black color */
}
        .footer-img {
            max-width: 100%;
            height: auto;
            
        }
        .footer-social i {
            color: black; /* black color for social icons */
            margin-right: 10px;
        }
        .footer-logo {
    max-width: 100%;
    height: auto;
        }
    </style>
     <style>
        /*Style for Large dropdoen list  */
    .large-dropdown {
        width: 100vw; /* Set the width to 100% of the viewport width */
        position: absolute;
        top: 90px; /* Adjust the top position based on your header's height */
        left: -10px;/* Adjust the large dropdown place */
        background-color: rgb(245,241,241); /* Set background color if needed */
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 1;
    }
    .large-dropdown .col-md-2 {
        padding-left: 30px;
        border-right: 1px solid #ddd; /* Add borders between columns */
    }
    .large-dropdown h6 {
        margin-bottom: 10px;
    }
    /* Optional: To make the dropdown full-width on smaller screens */
    @media (max-width: 767px) {
        .large-dropdown {
            top: 56px; /* Adjust for mobile header height */
        }
    }
    /* Custom styles for the navbar */
    .navbar {
            padding: 0 0; /* Increase the padding to increase navbar size */
        }
        /* Custom styles for the horizontal line */
        hr {
            border: none;
            height: 5px; /* Increase the height of the line */
            background-color: #ccc; /* Gray color */
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Shadow effect */
            margin: 0; /* Remove default margin */
        }
.footer-contact p,
.footer-about p {
    text-align: left;
    color:gray;
}
.footer-contact h4,
.footer-about h4 {
    text-align: left;
    color:#DFD9D9;
}
.footer-social i {
    color:#AAA8A8; /* Match the color of h4 elements */
}
    /* Style for the logout dropdown menu */
    .dropdown-menu .dropdown-item {
        border-color: #007bff; /* Change border color on hover */
        transition: color 0.3s ease; /* Smooth transition */
}
    /* Hover effect */
    .dropdown-menu .dropdown-item:hover { 
        background-color: #f8f9fa; /* Add background color on hover */
    }
/* Custom style for the search button */
.custom-search-bar .btn-primary {
        background-color: #AA1703; /* Change to your desired color */
        border-color: #AA1703; /* Change border color to match background color */
    }
    /* Hover effect for the search button */
    .custom-search-bar .btn-primary:hover {
        background-color:#AA1703; /* Change to your desired hover color */
        border-color: #AA1703; /* Change border color on hover */
    }
    h1 {
            text-align: center;
            margin-top: 50px; /* Adjust the margin-top value as needed */
        }
         /* Add your custom styles here */
         .custom-content {
      background-color: #f8f9fa;
      padding: 30px;
      min-height: 300px; /* Ensure all boxes have the same height */
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
    }
    .custom-content:hover {
      box-shadow: 0px 0px 20px 0px rgba(0,0,0,0.2);
    }
    .custom-content h2 {
      color: #007bff;
      text-align: center; /* Center align h2 */
      margin-bottom: 20px;
    }
    .custom-content h3 {
      color: #007bff;
      text-align: center;
    }
    .custom-content p {
      color: #555;
      font-size: 18px;
    }
    .icon {
      font-size: 5rem; /* Increase icon size */
      margin-bottom: 20px;
    }
    .icon-membership {
      color: #007bff; /* Membership color */
    }
    .icon-order-books {
      color: #28a745; /* Order Books color */
    }
    .icon-read-books {
      color: #ffc107; /* Read Books color */
    }
    .icon-repeat {
      color: #dc3545; /* Repeat color */
    }
    .display-5 {
    font-weight: bold; /* Bold font weight */
    transition: color 0.3s ease; /* Transition effect for color change */
}

.display-5:hover {
    color: #0056b3; /* Darker blue color on hover */
}

</style>
</head>
<body >
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
<?php endif; ?>
    <!-- Header Section --> 
<nav class="navbar navbar-expand-lg navbar-light bg-light" >
    <div class="container-fluid">
        <a class="navbar-brand" href="<?= base_url() ?>">
            <img src="<?= base_url('images/logo1.png') ?>" alt="Logo" class="footer-logo" style="max-width: 160px; float: left;">
        </a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
            <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('main_page') ?>">Home</a>
                </li>
                <li class="nav-item">
                    <!--<a class="nav-link" href="#aboutus">About Us</a>-->
                    <a class="nav-link" href="<?= base_url('books/about') ?>">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('books/howitWorks') ?>">How It Works</a>
                </li>
                <li class="nav-item">
    <a class="nav-link dropdown-toggle" href="#" id="booksDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> All Categories</a>
    <div class="dropdown-menu large-dropdown" aria-labelledby="booksDropdown">
        <div class="container-fluid">
            <div class="row">
                <?php foreach ($categories as $category): ?>
                    <div class="col-md-2">
                        <h6><?= $category['title'] ?></h6>
                        <!-- Display subcategories -->                    
                            <?php foreach ($category['subcategories'] as $subcategory): ?>
                               <a class="dropdown-item" href="<?= base_url('books/bookDetail/'.$subcategory['s_id']) ?>"><?= $subcategory['sub_title'] ?></a>
                            <?php endforeach; ?>
                     
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</li>
</ul>
           
<!-- Search Bar Section -->
<div class="mx-auto">
    <form action="<?= base_url('books/search') ?>" method="post">
        <div class="input-group mb-3 custom-search-bar">
            <input type="text" name="keyword" class="form-control border-0 py-2" placeholder="Search books" aria-label="Search books">
            <div class="input-group-append">
                <button class="btn btn-primary px-4" type="submit">Search</button>
            </div>
        </div>
    </form>
</div>
            <ul class="navbar-nav ml-auto">
               <!-- <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('books/register') ?>">Register</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('books/login') ?>">Login</a>
                </li>-->
                <?php if (session()->has('user_id')): ?>
    <button class="btn btn-outline-primary btn-sm mt-2" id="browse-planes" onclick="browsePlanes()">Browse Planes</button>
    <style>
    .btn-outline-primary {
        color: #fff;
        background-color:#0396aa;
        border-color:   #0396aa;
    } 
    </style>
    <script>
        function browsePlanes() {
            // You can define the functionality of browsing planes here
            // For example, you can redirect the user to a page where they can browse planes
            window.location.href = "<?= base_url('books/loggedin/#plan') ?>"; // Replace "browse_planes.html" with the actual URL of the page where you want to browse planes
        }
    </script>
<?php endif; ?>
                <li class="nav-item dropdown">                 
                        <!-- If user is logged in -->
                     <?php if (session()->has('user_id')): ?>
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Hello, <?= session()->get('name') ?>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="userDropdown">
                             <a class="dropdown-item" href="<?= base_url('books/membership_plane') ?>">Profile</a>

                            <a class="dropdown-item" href="<?= base_url('books/loggedin/logout') ?>">Logout</a>
                        </div>
                    <?php else: ?>
                        <!-- If user is not logged in, show login/register links -->
                        <li class="nav-item">
                         <a class="nav-link" href="<?= base_url('books/loginRegister') ?>">Register  |  Login</a>
                        </li>
                    <?php endif; ?>
                </li>
                <div id="cart-link">
    <a class="nav-link" href="#">
        <i class="fas fa-shopping-cart"></i>
        <span id="cart-count"><?= session('logged_in') ? session('cart_count') : '0' ?></span>
    </a>
</div>
            </ul>
        </div>
    </div>
</nav>  
    <!-- Horizontal Line -->
<hr style="margin-top: 0;">
<br>
<!-- How It Works Section -->
<div class="container mt-8">
    <div class="row">
        <div class="col-md-12 text-center p-12">
            <h1 class="display-5" style="font-weight: bold;">How it Works</h1>
            <p class="lead">Explore the simplicity</p>
        </div>
    </div>
</div>


    </div>
    <br><br><br>
    <div class="row">
      <div class="col-md-3">
        <div class="custom-content">
          <i class="fas fa-users icon icon-membership"></i> <!-- Membership Icon -->
          <br>
          <div>
            <h3>Membership</h3>
            <p>Become a member by paying nominal charge. See plans for more detail.</p>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="custom-content">
          <i class="fas fa-book icon icon-order-books"></i> <!-- Order Books Icon -->
          <br>
          <div>
            <h3>Order Books</h3>
            <p>Get ordered books delivered on time. Doorstep delivery.</p>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="custom-content">
          <i class="fas fa-book-open icon icon-read-books"></i> <!-- Read Books Icon -->
          <br>
          <div>
            <h3>Read Books</h3>
            <p>Read as much as you can.</p>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="custom-content">
          <i class="fas fa-redo-alt icon icon-repeat"></i> <!-- Repeat Icon -->
          <br>
          <div>
            <h3>Repeat</h3>
            <p>Repeat books as per your membership plan.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
<br>
 <!--footer section-->
 <div class="footer text-center" style="padding-bottom: 0; margin-bottom: 0;">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                <img src="<?= base_url('images/logo.jpg') ?>" alt="Logo" class="footer-logo">
                    <div class="footer-social">
                    <i class="fab fa-facebook mr-3"></i>
                    <i class="fab fa-twitter mr-3"></i>
                    <i class="fab fa-google"></i>
                </div>
                </div>
                <div id="contactus" class="col-md-4 footer-contact">
                    <h4>Contact Us</h4>
                    <p>Email: contact@bookmybook.com</p>
                    <p>Phone: +123 456 7890</p>
                </div>
                <div id="aboutus"  class="col-md-4 footer-about">
                    <h4>About Us</h4>
                        <p>Welcome to Book My Book, your one-stop destination for discovering and acquiring your next favorite reads. At Book My Book, we believe in the transformative power of literature and its ability to transport readers to new worlds, inspire profound thoughts, and ignite the imagination.</p>
                </div>
            </div>
        </div>
     <!-- For copyright section -->
<div class="container-fluid mt-3" style="background-color: #570404; color: #AAA8A8; padding: 10px;">
    <div class="row">
        <div class="col-md-12 text-center">
            &copy; Book My Book. All Rights Reserved.
        </div>
    </div>
</div>   
</div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <!-- Font Awesome JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>
</html>
