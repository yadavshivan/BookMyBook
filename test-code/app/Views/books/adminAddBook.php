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
    <!-- Slick Carousel CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Slick Carousel JS -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
</head>
<style>
        /* Customize your slider styles here */
        #slider {
            width: 80%; /* Set the width of your slider container */
            margin: auto; /* Center the slider */
        }
        .slider-item {
            text-align: center;
            padding: 20px;
        }
    </style>

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
        /*Style for body*/

        body {
            background-color: white; /* Light background color */
            color: #343a40; /* Dark text color */
            margin: 0;
        }
        #howitworks img {
    margin: 0;
    padding: 0;
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
    <style>
        /*Style for Large dropdoen list  */
    .large-dropdown {
        width: 100vw; /* Set the width to 100% of the viewport width */
        position: absolute;
        top: 30px; /* Adjust the top position based on your header's height */
        left: -600px;/* Adjust the large dropdown place */
        background-color: #fff; /* Set background color if needed */
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 1;
    }

    .large-dropdown .col-md-2 {
        padding: 10px;
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
</style>

</head>
<body>

   <!-- Header Section -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="<?= base_url() ?>">
            <img src="<?= base_url('images/bmblogo0.png') ?>" alt="Logo" class="footer-logo" style="max-width: 120px;">
        </a>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                <li><a href="<?= base_url('admin/addCategory') ?>">Add Category</a></li>
                </li>
                <li class="nav-item">
                <li><a href="<?= base_url('admin/addSubcategory') ?>">Add Subcategory</a></li>
                </li>
                <li class="nav-item">
                <li><a href="<?= base_url('admin/addBook') ?>">Add Book</a></li>
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
                    <a class="nav-link" href="<?= base_url('books/register') ?>">Register</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('books/login') ?>">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" id="cart-link">
                        <i class="fas fa-shopping-cart"></i>
                        <span id="cart-count">0</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>



<!-- Categories Section -->
<nav class="navbar navbar-expand-lg navbar-light bg-light navbar-categories">
    <div class="container">
        <div class="collapse navbar-collapse" id="navbarCategories">
            <!-- Horizontal List of Categories -->
            <ul class="navbar-nav">
                <!-- New and Noteworthy Category -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="newAndNoteworthyDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        New and Noteworthy
                    </a>
                    <div class="dropdown-menu" aria-labelledby="newAndNoteworthyDropdown">
                        <a class="dropdown-item" href="#">Fiction</a>
                        <a class="dropdown-item" href="#">Non-Fiction</a>
                        <a class="dropdown-item" href="#">Mystery</a>
                        <!-- Add more subcategories as needed -->
                    </div>
                </li>

                <!-- Top 50 Category -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="top50Dropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Top 50
                    </a>
                    <div class="dropdown-menu" aria-labelledby="top50Dropdown">
                        <a class="dropdown-item" href="#">Best Sellers</a>
                        <a class="dropdown-item" href="#">Classics</a>
                        <a class="dropdown-item" href="#">Sci-Fi</a>
                        <!-- Add more subcategories as needed -->
                    </div>
                </li>
                <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="crosswordRecommendsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Crossword Recommends
    </a>
    <div class="dropdown-menu" aria-labelledby="crosswordRecommendsDropdown">
        <a class="dropdown-item" href="#">Fiction</a>
        <a class="dropdown-item" href="#">Non-Fiction</a>
        <a class="dropdown-item" href="#">Mystery</a>
        <!-- Add more subcategories as needed -->
    </div>
</li>


                <!-- Books Category with Multi-column Dropdown -->
<!-- Books Category with Full-width and Large Dropdown -->
<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="booksDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Books
    </a>
    <div class="dropdown-menu large-dropdown" aria-labelledby="booksDropdown">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-2">
                    <h6>Fiction</h6>
                    <a class="dropdown-item" href="#">General and Literary</a>
                    <a class="dropdown-item" href="#">Crime Mystery Thriller</a>
                    <a class="dropdown-item" href="#">Classic</a>
                    <a class="dropdown-item" href="#">Quick reads</a>
                    <a class="dropdown-item" href="#">Romance</a>
                    <a class="dropdown-item" href="#">Mythological Fiction</a>

                </div>
                <div class="col-md-2">
                    <h6>Non Fiction</h6>
                    <a class="dropdown-item" href="#">Self Improved</a>
                    <a class="dropdown-item" href="#">Biography</a>
                    <a class="dropdown-item" href="#">Philosophy</a>
                    <a class="dropdown-item" href="#">History</a>
                    <a class="dropdown-item" href="#">Maths and Science</a>
                    <a class="dropdown-item" href="#">Health Fitness Diet</a>
                    <a class="dropdown-item" href="#"></a>

                </div>
                <div class="col-md-2">
                    <h6>Business and Management</h6>
                    <a class="dropdown-item" href="#">Finance</a>
                    <a class="dropdown-item" href="#">Entrepreneurship</a>
                    <a class="dropdown-item" href="#">Management</a>
                    <a class="dropdown-item" href="#">Careers</a>
                    <a class="dropdown-item" href="#">Economics</a>
                </div>
                <div class="col-md-2">
                    <h6>Kids Books</h6>
                    <a class="dropdown-item" href="#">0-2 years</a>
                    <a class="dropdown-item" href="#">3-5 years</a>
                    <a class="dropdown-item" href="#">6-8 years</a>
                    <a class="dropdown-item" href="#">9-12 years</a>
                    <a class="dropdown-item" href="#">Activity and Puzzles</a>
                    <a class="dropdown-item" href="#">Comics</a>
                    <a class="dropdown-item" href="#">Early learning</a>
                    <a class="dropdown-item" href="#">Child Mythology</a>
                    <a class="dropdown-item" href="#">Picture Book</a>
                    <a class="dropdown-item" href="#">Chapter Book</a>
                    <a class="dropdown-item" href="#">Young Classic</a>
                </div>
                <div class="col-md-2">
                    <h6>Regional Books</h6>
                    <a class="dropdown-item" href="#">Marathi</a>
                    <a class="dropdown-item" href="#">Hindi</a>
                    <a class="dropdown-item" href="#">Gujarati</a>
                    <a class="dropdown-item" href="#">Tamil</a>
                    <a class="dropdown-item" href="#">Telgu</a>
                    <a class="dropdown-item" href="#">Punjabi</a>
                    <a class="dropdown-item" href="#">Kannada</a>
                    <a class="dropdown-item" href="#">Bengail</a>
                    <a class="dropdown-item" href="#"></a>
                </div>
                <div class="col-md-2">
                    <h6>Featured Books</h6>
                    <a class="dropdown-item" href="#">Book of the Month</a>
                    <a class="dropdown-item" href="#">Award Winners</a>
                    <a class="dropdown-item" href="#">Script to screen</a>
                    <a class="dropdown-item" href="#">Bestsellers</a>
                    <a class="dropdown-item" href="#"></a>
                </div>
            </div>
        </div>
    </div>
</li>

<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="kidsbook" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Kids Book
    </a>
    <div class="dropdown-menu" aria-labelledby="kidsBookDropdown">
    <a class="dropdown-item" href="<?= base_url('books/kidsbook/0to2year') ?>">0-2 years</a>
                    <a class="dropdown-item" href="<?= base_url('books/kidsbook/3to5year') ?>">3-5 years</a>
                    <a class="dropdown-item" href="#">6-8 years</a>
                    <a class="dropdown-item" href="#">9-12 years</a>
                    <a class="dropdown-item" href="#">Activity and Puzzles</a>
                    <a class="dropdown-item" href="#">Comics</a>
                    <a class="dropdown-item" href="#">Early learning</a>
                    <a class="dropdown-item" href="#">Child Mythology</a>
                    <a class="dropdown-item" href="#">Picture Book</a>
                    <a class="dropdown-item" href="#">Chapter Book</a>
                    <a class="dropdown-item" href="#">Young Classic</a>
    </div>
</li>

                
               
                <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="youngAdultDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Young Adult
    </a>
    <div class="dropdown-menu" aria-labelledby="youngAdultDropdown">
        <a class="dropdown-item" href="#">Fantasy</a>
        <a class="dropdown-item" href="#">Science Fiction</a>
        <a class="dropdown-item" href="#">Romance</a>
        <!-- Add more subcategories as needed -->
    </div>
</li>


<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="toysGamesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Toys and Games
    </a>
    <div class="dropdown-menu" aria-labelledby="toysGamesDropdown">
        <a class="dropdown-item" href="#">Board Games</a>
        <a class="dropdown-item" href="#">Outdoor Toys</a>
        <a class="dropdown-item" href="#">Educational Toys</a>
        <!-- Add more subcategories as needed -->
    </div>
</li>


<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="stationeryGiftsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Stationery Gifts
    </a>
    <div class="dropdown-menu" aria-labelledby="stationeryGiftsDropdown">
        <a class="dropdown-item" href="#">Notebooks</a>
        <a class="dropdown-item" href="#">Pens and Pencils</a>
        <a class="dropdown-item" href="#">Desk Accessories</a>
        <!-- Add more subcategories as needed -->
    </div>
</li>


    </ul>
        </div>
    </div>
</nav>



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


<script>
    document.getElementById('cart-link').addEventListener('click', function () {
        var cartCount = document.getElementById('cart-count').innerText;
        if (cartCount === '0') {
            alert("Your cart is empty. If you already have an account, Sign In to see your Cart or SignUp.");
            // You can navigate to a new webpage here if needed
        } else {
            // Navigate to the cart page or perform other actions for non-empty cart
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

    <!-- File: App/Views/add_book_form.php -->



    <h2>Add a New Book</h2>

    <?php if (isset($success)) : ?>
        <p style="color: green;"><?= $success ?></p>
    <?php endif; ?>

    <?php if (isset($validation)) : ?>
        <ul style="color: red;">
            <?php foreach ($validation->getErrors() as $error) : ?>
                <li><?= $error ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>

   <!-- <form action="<?= base_url('book/addBook') ?>" method="post" enctype="multipart/form-data">
        <label for="title">Title:</label>
        <input type="text" name="title" required>

        <label for="author">Author:</label>
        <input type="text" name="author" required>

        <label for="category">Category:</label>
        <input type="text" name="category" required>

        <label for="description">Description:</label>
        <textarea name="description" required></textarea>

        <label for="image">Image:</label>
        <input type="file" name="image" accept="image/*" required>

        <button type="submit">Submit</button>
    </form>-->
    <h1>Admin Dashboard</h1>

    <!-- Navigation Links -->
    <ul>
        <li><a href="<?= base_url('admin/addCategory') ?>">Add Category</a></li>
        <li><a href="<?= base_url('admin/addSubcategory') ?>">Add Subcategory</a></li>
        <li><a href="<?= base_url('admin/addBook') ?>">Add Book</a></li>
    </ul>




        


    
    

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
