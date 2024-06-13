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
 /* Styling for the section */
 .membership-plans {
        background-image: url('<?php echo base_url('images/main5.jpg'); ?>');
        background-size: cover;
        background-position: center;
        color: #000; /* Text color */
        padding: 120px 0; /* Adjust padding as needed */
        text-align: left; /* Align text to the left */
        margin-bottom: 0; /* Remove margin bottom */
    }

    .membership-plans h2 {
        font-size: 36px; /* Increase font size */
        margin-bottom: 20px; /* Increase margin bottom */
        font-weight: bold; /* Add strong weight */
        color: #AA1703; /* Blue color */
        text-align: left; /* Align text to the left */
    }

    .membership-plans p {
        font-size: 18px; /* Increase font size */
        margin-bottom: 30px; /* Increase margin bottom */
        color: #440A02; /* Blue color */
        text-align: left; /* Align text to the left */
    }

    /* Blue horizontal line */
    .membership-plans h2::after {
        content: '';
        display: block;
        width: 200px; /* Width of the line */
        height: 5px; /* Height of the line */
        background-color: #AA1703; /* Blue color */
        margin: 16px 0; /* Adjust margin */
    }

    .membership-plans .content-wrapper {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .membership-plans .content-left {
        flex: 1;
    }

    .membership-plans .content-right {
        flex: 1;
        text-align: right;
    }

    /* Horizontal line */
    .membership-plans hr {
        border: none;
        height: 5px;
        background-color: #333; /* Dark color for the line */
        margin-top: 20px; /* Adjust spacing */
    }
    .membership-plans .content-wrapper {
    background-color: rgba(255, 255, 255, 0.9); /* White with 80% opacity */
    padding: 40px; /* Add padding as needed */
    border-radius: 10px; /* Add border radius for rounded corners */
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1); /* Add box shadow for depth */
}


/*container boxes*/


.yellow-box {
    background-color: rgb(255, 255, 20); /* Yellow */
}

.blue-box {
    background-color: rgb(102, 178, 255); /* Blue */
}

.red-box {
    background-color: rgb(175, 0, 0); /* Red */
}

.col-md-3 {
  
        border: 2px solid #ccc; /* Border color */
        border-radius: 5px; /* Rounded corners */
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Shadow effect */
        margin: 0 auto; /* Center the columns */
        padding-bottom: 10px;
    }

   
    /* Custom button style */
    .btn-custom {
        border: 1px solid #ccc; /* Border color */
        border-radius: 5px; /* Rounded corners */
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Shadow effect */
        background-color: transparent; /* Transparent background */
        color: inherit; /* Inherit text color */
        transition: all 0.3s ease; /* Smooth transition */
        margin-bottom: 10px; 
    }

    /* Hover effect for the button */
    .btn-custom:hover {
        border-color: #007bff; /* Change border color on hover */
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2); /* Change shadow on hover */
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




<!-- Add this script at the end of your main_page.php file 
<script>
    // Function to redirect to bookDetail page with selected subcategory
    function redirectToBookDetail(subcategory) {
        window.location.href = "<?= base_url('books/BookDetail/bookDetail/') ?>" + subcategory;
    }
</script>-->



 <!-- Script Initialization -->
 <script>
        $(document).ready(function(){
            // Check if jQuery is loaded
            if (typeof jQuery === 'undefined') {
                console.error('jQuery is not loaded.');
                return;
            }

            // Check if Slick is loaded
            if (typeof $.fn.slick === 'undefined') {
                console.error('Slick Carousel is not loaded.');
                return;
            }

            // Initialize the slider
            $('#slider').slick({
                slidesToShow: 3, /* Number of slides to show */
                slidesToScroll: 1,
                autoplay: true, /* Enable autoplay */
                autoplaySpeed: 2000 /* Autoplay speed in milliseconds */
            });
        });
    </script>

<!-- changes made in controller also to add getCartCount method and session creation-->
<script>
    document.getElementById('cart-link').addEventListener('click', function (event) {
        event.preventDefault();
        var cartCount = document.getElementById('cart-count').innerText.trim();
        var loggedIn = <?= session('logged_in') ? 'true' : 'false' ?>;
        
        if (!loggedIn) {
            alert("You are not logged in. Please log in to view your cart.");
        } else if (cartCount === '0') {
            alert("Your cart is empty. If you already have an account, Sign In to see your Cart or SignUp.");
        } else {
            // Proceed with other actions for logged-in users or non-empty carts
        }
    });
</script>

    <!-- Search Bar Section 
    <div class="container mt-3">
        <div class="row">
            <div class="col-md-12">
                <div class="input-group mb-3 custom-search-bar">
                    <input type="text" class="form-control" placeholder="Search books" aria-label="Search books" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button">Search</button>
                    </div>
                </div>
            </div>
        </div>-->

    <!-- Tab content -->
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
        <style>
body {
    background: #e2eaef;
    font-family: "Open Sans", sans-serif;
}
h2 {
    color: #000;
    font-size: 26px;
    font-weight: 300;
    text-align: center;
    text-transform: uppercase;
    position: relative;
    margin: 30px 0 60px;
}
h2::after {
    content: "";
    width: 100px;
    position: absolute;
    margin: 0 auto;
    height: 4px;
    border-radius: 1px;
    background:  #AA1703;
    left: 0;
    right: 0;
    bottom: -20px;
}
.carousel {
    margin: 20px auto;
    padding: 0 70px;
}
.carousel .item {
    color:  #AA1703;
    min-height: 325px;
    text-align: center;
    overflow: hidden;
  
}
.carousel .thumb-wrapper {
    padding: 25px 15px;
    background: #fff;
    border-radius: 6px;
    text-align: center;
    position: relative;
    box-shadow: 0 2px 3px rgba(0,0,0,0.2);
    background-color:rgba(85,220,235,0.2);
}
.carousel .item .img-box {
    height: 140px;
    margin-bottom: 20px;
    width: 100%;
    position: relative;
  
}
.carousel .item img {   
    max-width: 100%;
    max-height: 100%;
    display: inline-block;
    position: absolute;
    bottom: 0;
    margin: 0 auto;
    left: 0;
    right: 0;
}
.carousel .item h4 {
    font-size: 18px;
}
.carousel .item h4, .carousel .item p, .carousel .item ul {
    margin-bottom: 5px;
}
.carousel .thumb-content .btn {
    color: #AA1703;
    font-size: 11px;
    text-transform: uppercase;
    font-weight: bold;
    background: none;
    border: 1px solid  #AA1703;
    padding: 6px 14px;
    margin-top: 5px;
    line-height: 16px;
    border-radius: 20px;
}
.carousel .thumb-content .btn:hover, .carousel .thumb-content .btn:focus {
    color: #fff;
    background: #AA1703;
    box-shadow: none;
}
.carousel .thumb-content .btn i {
    font-size: 14px;
    font-weight: bold;
    margin-left: 5px;
}
.carousel .item-price {
    font-size: 13px;
    padding: 2px 0;
}
.carousel .item-price strike {
    opacity: 0.7;
    margin-right: 5px;
}
.carousel-control-prev, .carousel-control-next {
    height: 44px;
    width: 40px;
    background: #AA1703;    
    margin: auto 0;
    border-radius: 4px;
    opacity: 0.8;
}
.carousel-control-prev:hover, .carousel-control-next:hover {
    background:  #AA1703;
    opacity: 1;
}
.carousel-control-prev i, .carousel-control-next i {
    font-size: 36px;
    position: absolute;
    top: 50%;
    display: inline-block;
    margin: -19px 0 0 0;
    z-index: 5;
    left: 0;
    right: 0;
    color: #fff;
    text-shadow: none;
    font-weight: bold;
}
.carousel-control-prev i {
    margin-left: -2px;
}
.carousel-control-next i {
    margin-right: -4px;
}       
.carousel-indicators {
    bottom: -50px;
}
.carousel-indicators li, .carousel-indicators li.active {
    width: 10px;
    height: 10px;
    margin: 4px;
    border-radius: 50%;
    border: none;
}
.carousel-indicators li {   
    background: rgba(0, 0, 0, 0.2);
}
.carousel-indicators li.active {    
    background: rgba(0, 0, 0, 0.6);
}
.carousel .wish-icon {
    position: absolute;
    right: 10px;
    top: 10px;
    z-index: 99;
    cursor: pointer;
    font-size: 16px;
    color: #abb0b8;
}
.carousel .wish-icon .fa-heart {
    color: #ff6161;
}
.star-rating li {
    padding: 0;
}
.star-rating i {
    font-size: 14px;
    color: #ffc000;
}
</style>
<script>
$(document).ready(function(){
    $(".wish-icon i").click(function(){
        $(this).toggleClass("fa-heart fa-heart-o");
    });
}); 
</script>

<div class="container-xl">
    <div class="row">
        <div class="col-md-12">
            <h2>All Categories</h2>
            <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="0">
            <!-- Carousel indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>   
            <!-- Wrapper for carousel items -->
            <div class="carousel-inner">
                <div class="item carousel-item active">
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="thumb-wrapper">
                                <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                                <div class="img-box">
                                    <img src="<?= base_url('images/6to8y2.png') ?>" class="img-fluid" alt=""width=80% height="100%">                                 
                                </div>
                                <div class="thumb-content">
                                    <h4>Kids Books</h4>                                 
                                    <div class="star-rating">
                                        <ul class="list-inline">
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                        </ul>
                                    </div>
                                   
                                    <a href="<?= base_url('books/bookDetail/2') ?>" class="btn btn-primary">Go</a>
                                </div>                      
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="thumb-wrapper">
                                <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                                <div class="img-box">
                                    <img src="<?= base_url('images/Fantacy1.png') ?>" class="img-fluid" alt="Headphone">
                                </div>
                                <div class="thumb-content">
                                    <h4>Young & Adult</h4>                                 
                                    <div class="star-rating">
                                        <ul class="list-inline">
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                        </ul>
                                    </div>
                                   
                                    <a href="<?= base_url('books/bookDetail/13') ?>" class="btn btn-primary">Go</a>
                                </div>                      
                            </div>
                        </div>      
                        <div class="col-sm-3">
                            <div class="thumb-wrapper">
                                <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                                <div class="img-box">
                                    <img src="<?= base_url('images/JandL1.png') ?>" class="img-fluid" alt="Macbook">
                                </div>
                                <div class="thumb-content">
                                    <h4>Fiction</h4>                                  
                                    <div class="star-rating">
                                        <ul class="list-inline">
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star-half-o"></i></li>
                                        </ul>
                                    </div>
                                  
                                    <a href="<?= base_url('books/bookDetail/18') ?>" class="btn btn-primary">Go</a>
                                </div>                      
                            </div>
                        </div>                              
                        <div class="col-sm-3">
                            <div class="thumb-wrapper">
                                <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                                <div class="img-box">
                                    <img src="<?= base_url('images/e3.png') ?>" class="img-fluid" alt="Nikon">
                                </div>
                                <div class="thumb-content">
                                    <h4>Non Fiction</h4>                                 
                                    <div class="star-rating">
                                        <ul class="list-inline">
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                        </ul>
                                    </div>
                                 
                                    <a href="<?= base_url('books/bookDetail/23') ?>" class="btn btn-primary">Go</a>
                                </div>                      
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item carousel-item">
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="thumb-wrapper">
                                <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                                <div class="img-box">
                                    <img src="<?= base_url('images/Finance2.png') ?>" class="img-fluid" alt="Play Station">
                                </div>
                                <div class="thumb-content">
                                    <h4>Business & Management</h4>
                                  
                                    <div class="star-rating">
                                        <ul class="list-inline">
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                        </ul>
                                    </div>
                                    <a href="<?= base_url('books/bookDetail/29') ?>" class="btn btn-primary">Go</a>
                                </div>                      
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="thumb-wrapper">
                                <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                                <div class="img-box">
                                    <img src="<?= base_url('images/HistFant2_1.png') ?>" class="img-fluid" alt="Macbook">
                                </div>
                                <div class="thumb-content">
                                    <h4>Historical Mystery</h4>
                                   
                                    <div class="star-rating">
                                        <ul class="list-inline">
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star-half-o"></i></li>
                                        </ul>
                                    </div>
                                    <a href="<?= base_url('books/bookDetail/29') ?>" class="btn btn-primary">Go</a>
                                </div>                      
                            </div>
                        </div>                                                      
                   </div>
                </div>

            </div>
            <!-- Carousel controls -->
            <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
                <i class="fa fa-angle-left"></i>
            </a>
            <a class="carousel-control-next" href="#myCarousel" data-slide="next">
                <i class="fa fa-angle-right"></i>
            </a>
        </div>
        </div>
    </div>
</div>
</div>
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
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<script>
    // Function to fetch and update cart count
    function updateCartCount() {
        // Make an AJAX request to your controller method to get the cart count
        $.ajax({
            url: '<?= base_url('cartc/cartCount') ?>', // URL of your controller method
            type: 'GET',
            dataType: 'json',
            success: function(response) {
                // Update the cart count on the page
                $('#cart-count').text(response.count);
            },
            error: function(xhr, status, error) {
                console.error(xhr.responseText);
            }
        });
    }
    // Call the function initially to set the cart count
    updateCartCount();
</script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
   
   <script>
    
    // Function to fetch and update cart count
    function updateCartCount() {
        // Make an AJAX request to your controller method to get the cart count
        $.ajax({
            url: '<?= base_url('cartc/cartCount') ?>', // URL of your controller method
            type: 'GET',
            dataType: 'json',
            success: function(response) {
                // Update the cart count on the page
                $('#cart-count').text(response.count);
            },
            error: function(xhr, status, error) {
                console.error(xhr.responseText);
            }
        });
    }
    // Call the function initially to set the cart count
    updateCartCount();
</script>
    
</body>
</html>
