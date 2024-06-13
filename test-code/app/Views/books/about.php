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


<section class="py-3 py-md-5">
  <div class="container">
    <div class="row gy-3 gy-md-4 gy-lg-0 align-items-lg-center">
      <div class="col-12 col-lg-6 col-xl-5"> 
        <img class="img-fluid rounded" loading="lazy" src="<?= base_url('images/about.jpg') ?>" alt="About 1">
      </div>
      <div class="col-12 col-lg-6 col-xl-7">
        <div class="row justify-content-xl-center">
          <div class="col-12 col-xl-11">
            <h2 class="mb-3">Who Are We?</h2>
            <p class="lead fs-4 text-secondary mb-3">Welcome to Book My Book
At Book My Book, we are on a mission to celebrate the magic of literature and connect readers with captivating stories. Our passion for books goes beyond the pages, driving us to create a platform that resonates with fellow book enthusiasts.</p>
            <p class="mb-5"></p>
            <div class="row gy-4 gy-md-0 gx-xxl-5X">
              <div class="col-12 col-md-6">
                <div class="d-flex">
                  <div class="me-4 text-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-gear-fill" viewBox="0 0 16 16">
                      <path d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872l-.1-.34zM8 10.93a2.929 2.929 0 1 1 0-5.86 2.929 2.929 0 0 1 0 5.858z" />
                    </svg>
                  </div>
                  <div>
                    <h2 class="h4 mb-3">Diverse Reading, One Click Away!</h2>
                    <p class="text-secondary mb-0">At Book My Book, we're all about giving you a diverse reading experience with just a click. Our website is designed to suit all tastes and preferences. Whether you love exciting thrillers, heartwarming romance, mind-bending sci-fi, or thought-provoking non-fiction, we've got you covered. Book My Book is your go-to digital place for the books you love!.</p>
                  </div>
                </div>
              </div>
              <div class="col-12 col-md-6">
                <div class="d-flex">
                  <div class="me-4 text-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-fire" viewBox="0 0 16 16">
                      <path d="M8 16c3.314 0 6-2 6-5.5 0-1.5-.5-4-2.5-6 .25 1.5-1.25 2-1.25 2C11 4 9 .5 6 0c.357 2 .5 4-2 6-1.25 1-2 2.729-2 4.5C2 14 4.686 16 8 16Zm0-1c-1.657 0-3-1-3-2.75 0-.75.25-2 1.25-3C6.125 10 7 10.5 7 10.5c-.375-1.25.5-3.25 2-3.5-.179 1-.25 2 1 3 .625.5 1 1.364 1 2.25C11 14 9.657 15 8 15Z" />
                    </svg>
                  </div>
                  <div>
                    <h2 class="h4 mb-3">Our Vision</h2>
                    <p class="text-secondary mb-0">Our vision is simple yet powerful – to be the go-to destination for book lovers seeking inspiration, entertainment, and a sense of belonging. We believe that books have the power to ignite imaginations, broaden perspectives, and create connections that transcend borders.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
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
    <div class="container-fluid mt-3"style="background-color: #AA1703; color: #AAA8A8; padding: 10px;">
    <div class="row">
        <div class="col-md-12 text-center">

            <div >
                &copy; Book My Book. All Rights Reserved.
            </div>
    </div>
    </div>
    
</div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
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