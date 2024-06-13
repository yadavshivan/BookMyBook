<!-- app/Views/singleBookDetails.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book My Book</title>
    <link rel="stylesheet" href="<?= base_url('css/styles.css') ?>">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <style>
        /* Your CSS styles here */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Poppins", sans-serif;
        }

        body {
          
            background-image: rgb(245,241,241);
            background-size: cover; /* Adjusts the background image size to cover the entire body */
            background-repeat: no-repeat; /* Prevents the background image from repeating */   /* You can add more styles like background-position, background-attachment, etc. */
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            gap: 30px;
            background: #e2eaef;
         font-family: "Open Sans", sans-serif;
          
            
        }

        .heading {
            color: green;
        }

        .title {
            font-weight: 400;
            letter-spacing: 1.5px;
        }
/* css for cross button */
.cross-button {
    position: fixed;
    top: 20px;
    right: 20px;
    cursor: pointer;
    z-index: 1000; /* Ensure it appears above other elements */
}

.cross-button i {
    font-size: 24px;
    color: #333;
}

.logo {
    position: absolute;
    top: 20px;
    left: 20px;
    z-index: 1000; /* Ensure it appears above other elements */
}

.logo img {
    max-width: 140px; /* Adjust the maximum width of the logo */
    max-height: 140px; /* Adjust the maximum height of the logo */
    width: auto; /* Let the width adjust according to the max-width */
    height: auto; /* Let the height adjust according to the max-height */
}

@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800&display=swap");



.card {
    background-color: #fff;
    position: relative;
    width: 600px;
    border: none;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1), 0 4px 8px #3498db; /* Add colored box shadow */
}


   .card-image{

    padding: 30px;
    display: flex;
        align-items: center;
        justify-content: center;
   }


   .card-inner{

        padding: 20px;

   }

   .price span{

    color: orange;
    font-weight: 600;
    font-size: 20px;

   }

   .price sup{

        color: orange;
    font-weight: 600;
    font-size: 14px;
    top: -3px;

   }


   .details{

    border-radius: 20px;

   width: 110px;
    height: 40px;
    display: flex;
    justify-content: center;
    align-items: center;
   }


   .wishlist{
     

     width: 40px;
     height: 40px;
     border-radius: 50%;
     color: #f7a754;
         background: #fdeddc;
     display: flex;
     justify-content: center;
     align-items: center;
     cursor: pointer;
     transition: 0.5s all;
     font-size: 15px;

   }


   .wishlist:hover{
    
     color: #fff;
         background: #f7a754;
     
   }

   .cart{

        width: 40px;
     height: 40px;
     border-radius: 50%;
     color: #fff;
         background: green;
     display: flex;
     justify-content: center;
     align-items: center;
     cursor: pointer;
     transition: 0.5s all;
     margin-left: 5px;
     font-size: 15px;

   }

   .book-description-content {
    display: -webkit-box;
    -webkit-line-clamp: 2; /* Limit the description to 2 lines */
    -webkit-box-orient: vertical;
    overflow: hidden;
}

.description-container.expanded .book-description-content {
    -webkit-line-clamp: unset; /* Remove the line clamp to show all lines */
}
.show-more {
        color: #AA1703;
    }

</style>
<!-- Include Bootstrap JavaScript -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.bundle.min.js"></script>

<!-- Add your custom script -->
<script>
    $(document).ready(function() {
        // Add click event listener to the cross button
        const crossButton = document.querySelector('.cross-button');
        crossButton.addEventListener('click', function() {
            window.location.href = '<?= base_url("books/bookDetail/2") ?>';
        });

        // Initialize Bootstrap tabs
        $('.nav-pills a').on('click', function(e) {
            e.preventDefault();
            $(this).tab('show');
        });
    });
</script>

</head>
<body>
<!-- Logo -->
<div class="logo">
    <img src="<?= base_url('images/logo1.png') ?>" alt="Logo">
</div>

<br><br>

<!-- Cross button -->
<div class="cross-button">
    <i class="fas fa-times"></i>
</div>

<script>
// Add click event listener to the cross button
const crossButton = document.querySelector('.cross-button');
crossButton.addEventListener('click', function() {
    window.location.href = '<?= base_url('books/bookDetail/2') ?>'; 
});
</script>
    

<!-- main content of page-->
<div class="container d-flex justify-content-center align-items-center">

<div class="card">
   
    <div class="card-image">
    <img src="<?= base_url( $book['image_path']) ?>" width="250" alt="Book Cover">
    </div>  
   
    <div class="card-inner">
    <h3 class="book-title">Book Name: <?= $book['bname'] ?> </h3>
        <div class="mt-1 mb-0 text-muted small">
            <h6 class="book-author">Author: <?= $book['author'] ?></h6>
        </div>
        <div class="mb-2 text-muted small">
            <h6 class="book-publisher">Publisher: <?= $book['publisher'] ?></h6>
        </div>
        <div class="mb-2 text-muted small">
            <h6 class="quantity-available">Quantity Available: <?= $book['quantity_available'] ?></h6>
        </div>
        <div class="mb-2 text-muted small description-container">
            <h6 class="book-description-content">Description : <?= $book['description'] ?></h6>
            <button class="btn btn-link show-more">Show more</button>
        </div>
        <div class="mt-3 d-flex justify-content-between align-items-center">
            <div class="d-flex flex-row">
                <span class="wishlist" data-book-id="<?= $book['b_id'] ?>"><i class="fa fa-heart"></i></span>

                <span class="cart" data-book-id="<?= $book['b_id'] ?>"><i class="fa fa-shopping-cart"></i></span>

            </div>
        </div>
    </div>
</div>
</div>
<!--script fot show more discription option-->
<script>
    document.addEventListener("DOMContentLoaded", function() {
        var showMoreBtns = document.querySelectorAll(".show-more");
        showMoreBtns.forEach(function(btn) {
            btn.addEventListener("click", function() {
                var descriptionContainer = this.parentElement;
                descriptionContainer.classList.toggle("expanded");
                if (descriptionContainer.classList.contains("expanded")) {
                    btn.textContent = "Show less";
                } else {
                    btn.textContent = "Show more";
                }
            });
        });
    });
</script>

</div>
 </div>
  <!-- For copyright section -->
  <div class="container-fluid mt-3" style="margin: 0; padding: 0;">
    <div class="row">
        <div class="col-md-12 text-center" style="margin: 0; padding: 0;">

            <div style=" color: #AA1703; padding: 10px;">
                &copy; Book My Book. All Rights Reserved.
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        $('.cart').click(function() {
            var bookId = $(this).data('book-id');
            var action = 'add';            
            // Check if user is logged in
            if (isLoggedIn()) {
                addToCart(bookId, action);
            } else {
                // Redirect to the login page
                window.location.href = '<?= base_url("books/loginRegister"); ?>';
            }
        });
    });
    function isLoggedIn() {
        // Implement logic to check if the user is logged in
        return <?php echo session()->has('user_id') ? 'true' : 'false'; ?>;
    }
    function addToCart(bookId, action) {
        $.ajax({
            url: '<?php echo base_url("singleBookDetail/addToCart"); ?>',
            type: 'POST',
            data: {book_id: bookId, action: action},
            dataType: 'html', // Expecting HTML response
            success: function(response) {
                // Check if the response contains JavaScript code
                if (response.indexOf('<script>') !== -1) {
                    // Execute JavaScript code if present
                    $('body').append(response);
                } else {
                    // Otherwise, alert the response
                    alert(response);
                }
            },
            error: function(xhr, status, error) {
                alert('An error occurred while processing your request: ' + error);
            }
        });
    }
</script>

<script>
    $(document).ready(function() {
        $('.wishlist').click(function() {
            var bookId = $(this).data('book-id');
            var action = 'add'; 
            // Check if user is logged in
            if (isLoggedIn()) {
                addToWishlist(bookId, action);
            } else {
                // Redirect to the login page
                window.location.href = '<?= base_url("books/loginRegister"); ?>';
            }
        });
    });
    function isLoggedIn() {
        // Implement logic to check if the user is logged in
        return <?php echo session()->has('user_id') ? 'true' : 'false'; ?>;
    }

    function addToWishlist(bookId, action) {
        $.ajax({
            url: '<?php echo base_url("singleBookDetail/addToWishlist"); ?>',
            type: 'POST',
            data: {book_id: bookId, action: action},
            dataType: 'html', // Expecting HTML response
            success: function(response) {
                // Check if the response contains JavaScript code
                if (response.indexOf('<script>') !== -1) {
                    // Execute JavaScript code if present
                    $('body').append(response);
                } else {
                    // Otherwise, alert the response
                    alert(response);
                }
            },
            error: function(xhr, status, error) {
                alert('An error occurred while processing your request: ' + error);
            }
        });
    }
</script>

</body>
</html>
