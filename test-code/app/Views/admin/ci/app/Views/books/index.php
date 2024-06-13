<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book My Book- kids book</title>
    <link rel="stylesheet" href="<?= base_url('css/styles.css') ?>">
     <!-- Include SweetAlert CDN -->
     <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <!-- Slick Carousel CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
     <!-- jQuery -->
     <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Slick Carousel JS -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <style>
        
        /* Additional styles for the search bar */

        .custom-search-bar {
    background-color: #f8f9fa;
    border: none; /* Remove the border */
    border-radius: 5px;
    padding: 5px;
    width: 500px; /* Set your desired width */

}
</style>

<style>
    /*style for upper header */

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
        /* Additional styles for the Categories Section */
        nav.navbar-categories {
            background-color: #343a40 !important; /* Dark background color for categories */
            padding: 10px 0; /* Add padding to the top and bottom */
        }

        nav.navbar-categories .container {
            margin-left: 0;
            margin-right: 0;
        }

        nav.navbar-categories .navbar-nav {
            display: flex;
            justify-content: center;
            width: 100%;
            list-style: none; /* Remove bullets */
            margin: 0; /* Reset margin */
            padding: 0; /* Reset padding */
        }

        nav.navbar-categories .nav-item {
            margin-right: 10px;
            white-space: nowrap; /* Prevent line breaks */
            font-size: 18px; /* Adjust the font size for main category headings */

        }

        nav.navbar-categories .nav-link {
            color: #fff !important; /* Set text color to white */
            font-weight: bold;
            transition: color 0.3s ease;
            text-decoration: none; /* Remove underlines */
            padding: 0px 0px; /* Add padding to the links */
            white-space: nowrap; /* Prevent line breaks */
            font-size: 18px; /* Adjust the font size for main category headings */

        }

        nav.navbar-categories .nav-link:hover {
            color: #007bff !important; /* Change text color on hover to a different color */
        }
        </style>

<style>
    /*style for footer */
        .footer {
            background-image: url('<?= base_url('images/bmbback3.png') ?>');
            background-size: cover;
            color: #ffffff; /* White text color on the footer */
            padding: 30px 0;
            margin-bottom: 0; /* Removed top margin */
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

     <!-- Header Section -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="<?= base_url() ?>">
            <img src="<?= base_url('images/bmblogo0.png') ?>" alt="Logo" class="footer-logo" style="max-width: 120px;">
        </a>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <!--<a class="nav-link" href="#aboutus">About Us</a>-->
                    <a class="nav-link" href="<?= base_url('books/main_page') ?>">Home</a>

                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#howitworks">How It Works</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contactus">Contact Us</a>
                </li>
                
                    
            </ul>
            <!-- Search Bar Section -->
            <div class="mx-auto">
                <div class="input-group mb-3 custom-search-bar">
                    <input type="text" class="form-control" placeholder="Search books" aria-label="Search books" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button">Search</button>
                    </div>
                </div>
            </div>
            <ul class="navbar-nav ml-auto">
               
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('books/loginRegister') ?>">Register|Login</a>
                </li>
                <div id="cart-link">
                        <a class="nav-link" href="#">
                            <i class="fas fa-shopping-cart"></i>
                            <span id="cart-count">0</span>
                        </a>
                </div>
            </ul>
        </div>
    </div>
</nav>


<!-- Carousel Section -->
<div id="slider" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="<?= base_url('images/cc1.png') ?>" class="d-block w-100" alt="Slide 1">

        </div>
        
        <div class="carousel-item">
            <img src="<?= base_url('images/c2.png') ?>" class="d-block w-100" alt="Slide 1">

        </div>
        <div class="carousel-item">
            <img src="<?= base_url('images/c3.png') ?>" class="d-block w-100" alt="Slide 1">

        </div>
        
        <!-- Add more carousel items as needed -->
    </div>
    <a class="carousel-control-prev" href="#slider" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#slider" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<div class="container-fluid mt-3">
        <!-- About Us Section -->
        <div id="aboutus">
            <h2>About Us</h2>
            <p>Welcome to Book My Book, your one-stop destination for discovering and acquiring your next favorite reads. At Book My Book, we believe in the transformative power of literature and its ability to transport readers to new worlds, inspire profound thoughts, and ignite the imagination.</p>

    <p>Our mission is to connect readers with the books they love and introduce them to new literary adventures. With a curated collection spanning various genres, from classic literature to contemporary bestsellers, we strive to cater to diverse tastes and preferences.</p>
        </div>

        <!-- How It Works Section -->
        <div id="howitworks">
            <h2>How It Works</h2>
            
            <img src="<?= base_url('images/HowItWork.png') ?>" alt="How It Works Image" class="img-fluid mx-auto" width="900%">

        </div>

        <!-- All Categories Section -->
        <div id="contactus">
            <h2>All Categories</h2>
        </div>
    </div>
<!-- This is my footer -->
<br><br>
    <div class="footer text-center" style="padding-bottom: 0; margin-bottom: 0;">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                <img src="<?= base_url('images/bmblogo.png') ?>" alt="Logo" class="footer-logo">

                    <div class="footer-social">
                    <i class="fab fa-facebook mr-3"></i>
                    <i class="fab fa-twitter mr-3"></i>
                    <i class="fab fa-google"></i>
                </div>
                </div>
                <div class="col-md-4 footer-contact">
                    <h4>Contact Us</h4>
                    <p>Email: contact@bookmybook.com</p>
                    <p>Phone: +123 456 7890</p>
                </div>
                <div class="col-md-4 footer-about">
                    <h4>About Us</h4>
                        <p>Welcome to Book My Book, your one-stop destination for discovering and acquiring your next favorite reads. At Book My Book, we believe in the transformative power of literature and its ability to transport readers to new worlds, inspire profound thoughts, and ignite the imagination.</p>

                </div>
            </div>
        </div>
    
    <!-- For copyright section -->
    <div class="container-fluid mt-3" style="margin: 0; padding: 0;">
    <div class="row">
        <div class="col-md-12 text-center" style="margin: 0; padding: 0;">

            <div style="background-color: #3e2723; color: #fff; padding: 10px;">
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
</html>



