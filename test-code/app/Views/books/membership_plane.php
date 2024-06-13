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
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
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
            background-color: #f5f5f5; /* Light background color */
    color: #343a40; /* Dark text color */
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


</style>

<style>
    /* Style for the logout dropdown menu */
.dropdown-menu .dropdown-item {
    border-color: #000; /* Change border color on hover */
    transition: color 0.3s ease; /* Smooth transition */
}

/* Hover effect */
.dropdown-menu .dropdown-item:hover {
    background-color: #f5f9fa; /* Add background color on hover */
}
/* Set a specific width for the dropdown menu */
.dropdown-menu {
    min-width: 10px;
    border:3px; /* Adjust the width as needed */
    
}


/*this is for payment account details dropdown-*/

#membership-dropdown .dropdown-item {
    border-color: #007bff; /* Change border color on hover */
    transition: color 0.3s ease; /* Smooth transition */
}

/* Hover effect */
#membership-dropdown .dropdown-item:hover {
    background-color: #f8f9fa; /* Add background color on hover */
}

/* Set a specific width for the dropdown menu */
#membership-dropdown {
    min-width: 320px; /* Adjust the width as needed */
    min-height: 350px; /* Set max height if needed */
    margin-top: -50px;
    margin-left: 40px;
    position: relative;
    border: 1px solid transparent;
    border-color: #ccc;
    box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1); /* Add box-shadow */
   
}
/* Additional styles for the dropdown menu items */
#membership-dropdown .dropdown-item {
    border: 1px solid transparent; /* Add border to menu items */
    border-color: #ccc;
    box-shadow: 0px 1px 2px rgba(0, 0, 0, 0.3); /* Add box-shadow */
    transition: all 0.3s ease; /* Smooth transition for all properties */
    padding: 8px 8px; /* Add padding to increase space between menu options */
   
}

/* Hover effect */
#membership-dropdown .dropdown-item:hover {
    background-color:#A00303; /* Add background color on hover */
    border-color: #000; /* Change border color on hover */
    color: white ; /* Text color of the active menu item */
}

/* Active (selected) menu item */
#membership-dropdown  .dropdown-item.active {
    background-color: #A00303; /* Background color of the active menu item */
    color: white ; /* Text color of the active menu item */
}
.hidden {
    display: none;
}


</style>
<style>
    #membership button {
    background-color: #570404; /* Dark red background color */
    border: none; /* Remove border */
    color: #ccc; /* White text color */
    padding: 8px 16px; /* Padding */
    border-radius: 5px; /* Rounded corners */
    font-size: 16px; /* Font size */
    margin-top: 20px; /* Add some top margin */
}

#membership button:hover {
    background-color: #A00303; /* Lighter red background color on hover */
    cursor: pointer; /* Change cursor to pointer on hover */
}
#membership h3 {
    font-size: 20px; /* Adjust font size to match the account menu */
    margin-bottom: 20px; /* Add margin to separate from other content */
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
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

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
    <a class="nav-link" href="#footer">
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




<!--middle content-->

<!-- Dropdown menu for user options -->
<div id="dropdown-container">
    <div class="dropdown-menu-left" id="membership-dropdown" aria-labelledby="userDropdown" style="top: 76px; left: 10px; width:10%; ">
        <a class="dropdown-item active" href="#" onclick="showContent('account')">Your Account</a>
        <a class="dropdown-item" href="#" onclick="showContent('orders')">Your Cart</a>
        <a class="dropdown-item" href="#" onclick="showContent('wishlist')">Your Wishlist</a>
       

        <a class="dropdown-item" href="#" onclick="showContent('address')">Your Address</a>
        <a class="dropdown-item" href="#" onclick="showContent('membership')">Your Membership</a>
        <a class="dropdown-item" href="#" onclick="showContent('rentedbooks')">Your Orders</a>
    </div>

    <!-- Content -->
    <div class="content" id="content">
        <!-- Content will be loaded here -->
    </div>

   
    <div class="hidden" id="account">
    <!-- User account details -->
   
    <h2>Your Account</h2>
    <div class="edit-container">
    <div class="edit-container">
    <p id="name">Name:  <?= $name ?> </p><button class="edit-btn" onclick="editField('name')">Edit</button>
</div>

<div class="edit-container">
    <p id="email">Email:   <?= $username?> </p><button class="edit-btn" onclick="editField('email')">Edit</button>
</div>

<div class="edit-container">
    <p id="mobile">Mobile:   <?= $mobile_no?></p> <button class="edit-btn" onclick="editField('mobile')">Edit</button>
</div>

<div class="edit-container">
    <p id="password">Password:   <?= $password?> </p><button class="edit-btn" onclick="editField('password')">Edit</button>
</div>
<div class="edit-container">
    <p id="add">Address:   <?= $address?> </p><button class="edit-btn" onclick="editField('add')">Edit</button>
</div>


    <!-- Done button -->
    <button class="btn btn-success" onclick="saveChanges()">Done</button>
</div>
                  

<script>
    function editField(fieldName) {
        // Replace the field text with an input field
        var fieldValue = document.getElementById(fieldName).innerText.split(":")[1].trim();
        document.getElementById(fieldName).innerHTML = `
            <input type="text" id="${fieldName}-input" value="${fieldValue}">
            <button class="btn btn-success" onclick="saveField('${fieldName}')">Save</button>
        `;
    }

    function saveField(fieldName) {
        // Update the field text with the input value
        var newValue = document.getElementById(`${fieldName}-input`).value;
        document.getElementById(fieldName).innerText = fieldName.charAt(0).toUpperCase() + fieldName.slice(1) + ": " + newValue;

        // For demonstration, you can log the edited value
        console.log(fieldName.charAt(0).toUpperCase() + fieldName.slice(1) + ": " + newValue);
    }
</script>

<style>
  /* Style for the edit buttons */
.edit-btn {
    background-color: rgba(204, 204, 204,0.4); /* Light grey background in RGB */
    border: 1px solid transparent;
    border-color: #000;
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    cursor: pointer;
    color: black;
    outline: none;
    margin-top: -20px;
    margin-left: 300px; /* Center the button horizontally */
    display: block; /* Ensure the button occupies full width */
}
/* Container for each edit button */
.edit-container {
    clear: both; /* Clear the floats */
}
/* Style for the "Done" button */
.btn-success {
    background-color:#570404; /* Green background color */
    border-color: #ccc; /* Green border color */
    color: #ccc; /* White text color */
}

/* Hover effect for the "Done" button */
.btn-success:hover {
    background-color: #570404; /* Darker green background color on hover */
    border-color: #ccc; /* Darker green border color on hover */
}
</style>

<div class="hidden" id="orders">
    <!-- User's cart items -->
    <h2>Books is in Cart</h2>
    <ul>
    <?php foreach ($cartItems as $item): ?>
                <?php echo $item['bname']; ?>
                <li>
                <form action="<?php echo base_url('books/removeFromCart'); ?>" method="post">
                    <input type="hidden" name="item_id" value="<?php echo $item['bname']; ?>">&nbsp; <!-- Change 'item_id' to 'item_name' -->
                    <button class="edit-btn"type="submit">Remove</button>
                </form>
    </li>
        <?php endforeach; ?>
    </ul>
</div>


   <!-- Add this section to display wishlist items -->

   <div class="hidden" id="wishlist">
    <h2>Books is in Wishlist</h2>
    <ul>
        <?php foreach ($wishlistItems as $item): ?>
                <?php echo $item['bname']; ?>
                <li>
                <form action="<?php echo base_url('books/removeFromWishlist'); ?>" method="post">
                    <input type="hidden" name="item_name" value="<?php echo $item['bname']; ?>"> <!-- Change 'item_id' to 'item_name' -->
                    <button class="edit-btn"type="submit">Remove</button>
                </form>
                </li>
        <?php endforeach; ?>
    </ul>
</div>


    <div class="hidden" id="address">
        <!-- User's address -->
        <h2 id="addname">Welcome,  <?= $name ?>!</h2>
    <p>Your username: <?= $username ?></p>
    <p>Your mobile number: <?= $mobile_no ?></p>
    <p>Your Address: <?= $address ?></p>
    </div>

    <div class="hidden" id="membership">
    <form action="<?= base_url('books/loggedin_modify') ?>" method="post">
    <!-- User's membership details -->
    <h2>Your Membership Plan</h2>
    <?php foreach ($plans as $plan): ?>
       <b><p>Hello, <?= $name ?> !!</p></b> 
        <p><b>Your Plan: </b><?= $plan['plan_name']; ?></p>
        <p><b>Price: </b><?= $plan['price']; ?></p>
        <p><b>Duration: </b><?= $plan['duration']; ?> year</p>
        <p><b>Rental Book Limit: </b><?= $plan['rental_limit']; ?></p>
        <p><b>Start Date: </b><?= $plan['start_date']; ?></p>
        <p><b>Expiry Date: </b><?= $plan['expiry_date']; ?></p>
       <!-- Include hidden input field for plan ID -->
      
       <input type="hidden" name="user_id" value="<?= $id ?>">

        <button type="submit" class="btn btn-primary">Modify Plan</button>
    <?php endforeach; ?>
    </form>
    </div>
    <div class="hidden" id="rentedbooks">
    <!-- User's cart items -->
    <h2>Rented Books</h2>
    <table class="table">
        <thead>
            <tr>
                <th>Book Name</th>
                <th>Rented At</th>
                <th>Return Due Date</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($rentedBooks as $book): ?>
            <tr>
                <td><?php echo $book['book_name']; ?></td>
                <td><?php echo $book['rented_at']; ?></td>
                <td><?php echo $book['return_due_date']; ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>




    
    </div>


<!--script for dispaying selected content-->
<script>
    var menuClicked = false; // Variable to track if a menu item has been clicked

    // Function to run when the window loads
    window.onload = function() {
        // Show the content of the first dropdown item if no menu item has been clicked
        if (!menuClicked) {
            showContent('account');
            // Add the 'active' class to the first dropdown item
            var firstDropdownItem = document.querySelector('.dropdown-item');
            firstDropdownItem.classList.add('active');
        }
    };

    function showContent(contentId) {
        // Set menuClicked to true when a menu item is clicked
        menuClicked = true;

        // Hide all content elements
        var contents = document.getElementsByClassName('hidden');
        for (var i = 0; i < contents.length; i++) {
            contents[i].style.display = 'none';
        }

        // Show the selected content
        var selectedContent = document.getElementById('account');
        if (selectedContent) {
            selectedContent.style.display = 'block';
            // Adjust the width of the selected content to occupy the remaining width of the page
            selectedContent.style.width = 'calc(100% - ' + (document.getElementById('membership-dropdown').offsetWidth + 40) + 'px)'; // Adding 20px for space
            // Position the selected content to the right of the membership dropdown with some space
            selectedContent.style.position = 'absolute';
            selectedContent.style.top = '150px'; // Adjust top position as needed
           
            selectedContent.style.left = (document.getElementById('membership-dropdown').offsetLeft + document.getElementById('membership-dropdown').offsetWidth + 40) + 'px'; // Adding 20px for space
         

        }

        // Show the content corresponding to the selected menu item except for the account
        var selectedContent1 = document.getElementById(contentId);
        if (selectedContent1 && contentId !== 'account') {
            selectedContent1.style.display = 'block';
            // Adjust the width of the selected content to occupy the remaining width of the page
            selectedContent1.style.width = 'calc(100% - ' + (document.getElementById('membership-dropdown').offsetWidth + 300) + 'px)'; // Adding 20px for space
            // Position the selected content to the right of the membership dropdown with some space
            selectedContent1.style.position = 'absolute';
            selectedContent1.style.top = '5px'; // Adjust top position as needed
            selectedContent1.style.left = (document.getElementById('membership-dropdown').offsetLeft + document.getElementById('membership-dropdown').offsetWidth + 100) + 'px'; // Adding 20px for space
        }

        // Add 'active' class to the clicked dropdown item
        document.getElementById(contentId + '-dropdown-item').classList.add('active');
    }


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


<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

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
    <script>
    function editField(fieldName) {
        // Replace the field text with an input field
        var fieldValue = document.getElementById(fieldName).innerText.split(":")[1].trim();
        document.getElementById(fieldName).innerHTML = `
            <input type="text" id="${fieldName}-input" value="${fieldValue}">
            <button class="btn btn-success" onclick="saveField('${fieldName}')">Save</button>
        `;
    }

    function saveField(fieldName) {
        // Update the field text with the input value
        var newValue = document.getElementById(`${fieldName}-input`).value;
        document.getElementById(fieldName).innerText = fieldName.charAt(0).toUpperCase() + fieldName.slice(1) + ": " + newValue;

        // For demonstration, you can log the edited value
        console.log(fieldName.charAt(0).toUpperCase() + fieldName.slice(1) + ": " + newValue);
    }
</script>
   <script>
function saveChanges() {
    // Update the field values
    
    var name = document.getElementById('name').innerText.split(":")[1].trim();
    var email = document.getElementById('email').innerText.split(":")[1].trim();
    var mobile = document.getElementById('mobile').innerText.split(":")[1].trim();
    var password = document.getElementById('password').innerText.split(":")[1].trim();
    var address = document.getElementById('add').innerText.split(":")[1].trim();
    // Make an AJAX request to update the user details
    $.ajax({
        url: '<?= base_url('loginRegister/updateAccountDetails') ?>',
        method: 'POST',
        data: {
            name: name,
            email: email,
            mobile: mobile,
            password: password,
            add: address
        },
        success: function(response) {
            // Parse the JSON response
            var responseData = JSON.parse(response);

            // Check if the update was successful
            if (responseData.status === 'success') {
                alert(responseData.message); // Optionally, show a success message
                
                // Update the user name in the navigation bar
                document.getElementById('userDropdown').innerText = 'Hello, ' + name;

                // Update the account details on the page
                document.getElementById('name').innerText = 'Name: ' + name;
                document.getElementById('email').innerText = 'Email: ' + email;
                document.getElementById('mobile').innerText = 'Mobile: ' + mobile;
                document.getElementById('password').innerText = 'Password: ' + password;
                document.getElementById('add').innerText = 'Address: ' + address;
            } else {
                alert(responseData.message); // Show an error message
            }
        },
        error: function(xhr, status, error) {
            console.error(xhr.responseText);
            alert('An error occurred while updating account details. Please try again.');
        }
    });
}

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
