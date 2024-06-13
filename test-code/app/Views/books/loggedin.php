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
        .custom-search-bar {
            background-color: #f8f9fa;
            border: 1px solid #ced4da;
            border-radius: 5px;
            padding: 5px;
        }
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
            background: #e2eaef;
    font-family: "Open Sans", sans-serif;
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
    background-color: rgb(223, 180, 3); /* Yellow */
}

.blue-box {
    background-color: rgb(102, 178, 255); /* Blue */
}

.red-box {
    background-color: rgb(175, 0, 0); /* Red */
}
/* Make font color white for the text inside the boxes */
.yellow-box .card-title,
.blue-box .card-title,
.red-box .card-title {
    color: white;
    font-size: 28px;
}

.yellow-box p,
.blue-box p,
.red-box p {
    color: white;
    font-size: 18px;
    margin: 8px 0;
}

/* Optionally, you can style the button text color */
.btn-custom {
    color: white;
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


</style>

<style>
   /* Style for the logout dropdown menu */
.dropdown-menu .dropdown-item {
    border-color: #007bff; /* Change border color on hover */
    transition: color 0.3s ease; /* Smooth transition */
}

/* Hover effect */
.dropdown-menu .dropdown-item:hover {
    background-color: #f8f9fa; /* Add background color on hover */
}
/* Set a specific width for the dropdown menu */
.dropdown-menu {
    min-width: 120px; /* Adjust the width as needed */
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
            <!-- Search Bar Section removed for this-->


            
            
            <ul class="navbar-nav ml-auto">
               <!-- <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('books/register') ?>">Register</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('books/login') ?>">Login</a>
                </li>-->
                <!-- Replace the Logout button with a dropdown menu -->
                   <!-- Button for Browse Planes -->
            <button class="btn btn-primary"id="browse-planes" onclick="browsePlanes()">Browse Planes</button>
            <style>
            /* CSS for Browse Planes button */
#browse-planes {
  display: inline-block;
  padding: 10px 20px;
  font-size: 16px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  border: none;
  border-radius: 5px;
  background-color:  rgb(175, 0, 0); /* Button color */
  color: #fff; /* Text color */
  transition: background-color 0.3s;
}

#browse-planes:hover {
  background-color:rgb(175, 0, 0); /* Change color on hover */
}

/* Additional styles for primary button */
#browse-planes{
  background-color: rgb(175, 0, 0); /* Button color */
  border: none;
}

#browse-planes:hover {
  background-color: rgb(175, 0, 0); /* Change color on hover */
}

          </style>
<script>
    function browsePlanes() {
        // You can define the functionality of browsing planes here
        // For example, you can redirect the user to a page where they can browse planes
        window.location.href = "#plan"; // Replace "browse_planes.html" with the actual URL of the page where you want to browse planes
    }
</script>
                <li class="nav-item dropdown">
                <?php if (session()->has('user_id')): ?>
    <?php $user_name = $name?>
    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Hello, <?= $user_name ?>
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
                </li>
            </ul>
        </div>
    </div>
</nav>

    <!-- Horizontal Line -->
<hr style="margin-top: 0;">

<!-- How It Works Section -->

<section class="membership-plans">
    <div class="container">
        <div class="content-wrapper">
            <div class="content-left">
                <h2>Find a plan that's right for you</h2>
                <p>
                    Dive into a world of endless stories, captivating characters, and thrilling adventures. Whether you're a fan of suspenseful mysteries, heartwarming romances, or epic fantasies, we've got the perfect book for you. Explore our vast collection of titles from renowned authors and discover your next literary obsession.
                </p>
                <!-- Add your membership plans here -->
            </div>
            <div class="content-right">
                <img src="<?= base_url('images/main6.png') ?>" alt="How It Works Image" class="img-fluid mx-auto" width="900%">
            </div>
        </div>
    </div>
</section>


<!--<div class="container mt-5" id="plan">
    <div class="row">
        <div class="col-md-3">
            <div class="card yellow-box text-center" style="height: 300px;">
                <div class="card-body">
                    <h5 class="card-title title-yellow">Classic</h5>
                    <p style="font-size: 25px;">2500 RS</p>
                    <p>For Year</p>
                    <p>2 books</p>
                    <p>at a time for</p>
                    <p>15 days</p>
                    <a href="<?= base_url('books/membership_plane') ?>"> <button class="btn btn-custom">Choose Plan</button></a>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card blue-box text-center" style="height: 300px;">
                <div class="card-body">
                    <h5 class="card-title title-blue">Premium</h5>
                    <p style="font-size: 25px;">4000 RS</p>
                    <p>For Year</p>
                    <p>3 books</p>
                    <p>at a time for</p>
                    <p>21 days</p>
                    <a href="<?= base_url('books/membership_plane') ?>"> <button class="btn btn-custom">Choose Plan</button></a>
            
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card red-box text-center" style="height: 300px;">
                <div class="card-body">
                    <h5 class="card-title title-red">Family</h5>
                    <p style="font-size: 25px;">5000 RS</p>
                    <p>For Year</p>
                    <p>4 books</p>
                    <p>at a time for</p>
                    <p>30 days</p>
                    
                    <a href="<?= base_url('books/membership_plane') ?>"> <button class="btn btn-custom">Choose Plan</button></a>
            
                </div>
            </div>
        </div>
    </div>
</div>-->
<!-- App\Views\plans.php -->

<!-- books/loggedin.php -->

<div class="container mt-5" id="plan">
    <div class="row">
        <?php
        // Define an array of colors
        $colors = ['yellow-box', 'blue-box', 'red-box']; // Add more colors as needed

        // Initialize a counter for colors
        $colorIndex = 0;
        ?>
        <?php foreach ($membershipPlans as $plan): ?>
            <div class="col-md-3">
                <div class="card <?= $colors[$colorIndex] ?> text-center" style="height: 300px;">
                    <div class="card-body">
                        <h5 class="card-title title-<?= $colors[$colorIndex] ?>"><?= esc($plan['plan_name']) ?></h5>
                        <p style="font-size: 25px;"><?= esc($plan['price']) ?> RS</p>
                        <p>For <?= esc($plan['duration']) ?> year</p>
                        <p><?= esc($plan['description']) ?></p>
                        <!-- Add other plan details as needed -->
                        <a href="<?= base_url('books/choosePlan/' . $plan['plan_id']) ?>">
    <button class="btn btn-custom">Choose Plan</button>
</a>
                   </div>
                </div>
            </div>
            <?php
            // Increment the color index and reset if it exceeds the array length
            $colorIndex = ($colorIndex + 1) % count($colors);
            ?>
        <?php endforeach; ?>
    </div>
</div>


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
<br><br>

<div id="howitworks">
            
            <img src="<?= base_url('images/HowItWork.png') ?>" alt="How It Works Image" class="img-fluid mx-auto" width="900%">

 </div>
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
</body>
</html>