<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book My Book - Search Results</title>
    <!-- Include your stylesheets -->
    <link rel="stylesheet" href="<?= base_url('css/styles.css') ?>">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <style>
        /* Include your custom CSS styles here */
        /* All the CSS styles from your provided code */
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
   
.btn-primary,
    .btn-primary:hover,
    .btn-primary:active,
    .btn-primary:focus {
        background-color: #AA1703;
        border-color: #AA1703;
    }

    .btn-outline-primary {
        color:  #0396aa;
        border-color:   #0396aa;
    }

    .btn-outline-primary:hover {
        color: #fff;
        background-color:#0396aa;
        border-color:   #0396aa;
    }
    .btn-outline-primary:focus,
    .btn-outline-primary:active {
        color: #fff;
        background-color: #AA1703;
        border-color: #AA1703;
        box-shadow: none; /* Remove default box-shadow */
    }
    .btn-add-to-cart {
        background-color: #aa6b03;
        border-color: #aa6b03;
    }

    .btn-add-to-cart:hover {
        background-color:#aa6b03;
        border-color:#aa6b03;
    }

    .btn-add-to-cart:focus,
    .btn-add-to-cart:active {
        background-color: #aa6b03;
        border-color:#aa6b03;
        box-shadow: none;
    }
  
h6{
    padding-top: 10px;
    font-size: 18px;
}

    /* Style for the disabled "Add to Cart" button 
.btn-add-to-cart[disabled] {
    background-color: #ccc;
    cursor: not-allowed; 
} */

    </style>
</head>

<body>
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
             

              <li class="nav-item dropdown">
                    <?php if (session()->has('user_id')): ?>
                        <!-- If user is logged in -->
                      
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

    <!-- Search results section -->
    <section style="background-color: #eee;">
        <?php if (empty($books)): ?>
            <p>No books found for this search query.</p>
        <?php else: ?>
            <?php foreach ($books as $book): ?>
                <div class="container py-2">
                    <div class="row justify-content-center mb-3">
                        <div class="col-md-12 col-xl-10">
                            <div class="card shadow-0 border rounded-3">
                                <div class="card-body">
                                    <!-- Your card content goes here -->
                                    <!-- Book image -->
                                    <div class="row">
                                        <div class="col-md-12 col-lg-3 col-xl-3 mb-4 mb-lg-0">
                                            <div class="bg-image hover-zoom ripple rounded ripple-surface">
                                                <img src="<?= base_url($book['image_path']) ?>" alt="Book Cover" class="w-100" />
                                                <a href="#!">
                                                    <div class="hover-overlay">
                                                        <div class="mask" style="background-color: rgba(253, 253, 253, 0.15);"></div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6 col-xl-6">
                                            <!-- Book details -->
                                            <h3 class="book-title"><?= $book['bname'] ?></h3>
                                            <p class="book-author">Author: <?= $book['author'] ?></p>
                                            <p class="book-publisher">Publisher: <?= $book['publisher'] ?></p>
                                            <p class="quantity-available">Quantity Available: <?= $book['quantity_available'] ?></p>
                                            <!-- Add more details as needed -->
                                        </div>
                                        
                                        <div class="col-md-6 col-lg-3 col-xl-3 border-sm-start-none border-start">
                                            <!-- Add to Cart button -->

                                           <!--data is send to the single book detail page-->
                                        <a href="<?= base_url('books/singleBookDetail/' . $book['b_id']) ?>">
                                            <button class="btn btn-primary btn-sm w-100" type="button">Details</button>
                                        </a>
                                 
<!-- Add to Cart Button -->
<form class="add-to-cart-form" action="<?= base_url('bookDetail/addToCart') ?>" method="post">
    <input type="hidden" name="book_id" value="<?= $book['b_id'] ?>">
    <?php if (session()->has('user_id')): ?>
        <!-- If user is logged in -->
        <?php if ($is_in_cart[$book['b_id']]): ?>
            <!-- Temporatily i disabled the button but when it get active it will remove book from cart -->
            <!-- If the book is already in the cart, display the Remove from Cart button -->
            <button type="submit" class="btn btn-primary btn-sm mt-2 w-100" name="action" value="remove" disabled="">Rent now </button>
        <?php else: ?>
            <!-- If the book is not in the cart, display the Add to Cart button -->
            <button type="submit" class="btn btn-primary custom-btn-bg btn-sm mt-2 w-100" name="action" value="add">Add to Cart</button>
        <?php endif; ?>
    <?php else: ?>
        <!-- If user is not logged in, display Add to Cart button (disabled) -->
<a href="<?= base_url('books/loginRegister') ?>" class="btn btn-outline-primary mt-2 btn-sm w-100">Add to cart</a>
    <?php endif; ?>
</form>

<!-- Add to Wishlist Button -->
<form class="add-to-wishlist-form" action="<?= base_url('bookDetail/addToWishlist') ?>" method="post">
    <input type="hidden" name="book_id" value="<?= $book['b_id'] ?>">
    <?php if (session()->has('user_id')): ?>
        <!-- If user is logged in -->
        <?php if ($is_in_wishlist[$book['b_id']]): ?>
            <button type="submit" class="btn btn-primary btn-sm mt-2 w-100" name="action" value="remove">Remove From Wishlist</button>
        <?php else: ?>
            <button type="submit" class="btn btn-primary custom-btn-bg btn-sm mt-2 w-100" name="action" value="add">Add to Wishlist</button>
      <?php endif; ?>
    <?php else: ?>
        <!-- If user is not logged in, display "Login/Register" button -->
        <a href="<?= base_url('books/loginRegister') ?>" class="btn btn-outline-primary mt-2 btn-sm w-100">Add to wishlist</a>
    <?php endif; ?>
    <div class="error-message" style="color: red;"></div> <!-- Error message container -->
</form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
    </section>
    <!-- Footer Section -->
     <!--footer section-->

    
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
    <!-- Include your JavaScript code here -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Your custom JavaScript code -->
    <script>
        // JavaScript code for adding books to cart
        // Add your JavaScript code as needed
    </script>
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
