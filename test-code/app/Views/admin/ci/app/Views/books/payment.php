
<?php

$planName = urldecode($_GET['plan_name']);
$price = $_GET['price'];
$duration = $_GET['duration'];
$description = urldecode($_GET['description']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>
    <link rel="stylesheet" href="<?= base_url('css/styles.css') ?>">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    
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
/* Add rounded corners to elements with the "rounded" class */
.rounded {
    border-radius: 1rem;
}

/* Style navigation pills - set text color to #555 for inactive links */
.nav-pills .nav-link {
    color: #555;
}

/* Style active navigation link - set text color to white */
.nav-pills .nav-link.active {
    color: white;
}

/* Style radio input - add right margin of 5px */
input[type="radio"] {
    margin-right: 5px;
}

/* Make text bold for elements with the "bold" class */
.bold {
    font-weight: bold;
}
.btn-primary {
    background-color: #009 ; /* Change this color to your desired background color */
   
}

.btn-primary.clicked {
        background-color: #AA1703; /* Change this color to your desired background color */
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
            window.location.href = '<?= base_url('main_page') ?>';
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
    window.location.href = '<?= base_url('books/main_page') ?>'; // Replace 'YOUR_MAIN_PAGE_URL_HERE' with your main page URL
});
</script>
    
<div class="container py-5">
 
   
    <div class="row">
        <div class="col-lg-6 mx-auto">
            <div class="card ">
                <div class="card-header">
                    <div class="bg-white shadow-sm pt-4 pl-2 pr-2 pb-2">
                        <!-- Credit card form tabs
                        <ul role="tablist" class="nav bg-light nav-pills rounded nav-fill mb-3">
                            <li class="nav-item"> <a data-toggle="pill" href="#your-plan" class="nav-link active "> <i class="fas fa-user mr-2"></i> Your Plan </a> </li>
                             
                            <li class="nav-item"> <a data-toggle="pill" href="#paypal" class="nav-link "> <i class="fab fa-paypal mr-2"></i> Paypal </a> </li>
                            <li class="nav-item"> <a data-toggle="pill" href="#net-banking" class="nav-link "> <i class="fas fa-mobile-alt mr-2"></i> Net Banking </a> </li>
                        </ul>-->
                        <ul role="tablist" class="nav nav-pills rounded nav-fill mb-4 text-center">
                                <li class="nav-item">
                                     <i class="fas fa-user mr-2 "></i> Your Plan
                                </li>
                        </ul>

                    </div> <!-- End -->

                    <div class="tab-content">
                        <!-- user plan info-->
                        <div id="your-plan" class="tab-pane fade show active pt-3">
                            <form role="form" onsubmit="event.preventDefault()">
                                <div class="form-group"> 
                                    <label for="username">
                                        <h6>Choosed Plan</h6>
                                    </label> 
                                    <input type="text" name="plan" value="<?= $planName ?>" required class="form-control " disabled> 
                                </div>
                               
                                <div class="form-group"> 
                                    <label for="cardNumber">
                                        <h6>Price</h6>
                                    </label>
                                    <input type="number" name="price" value="<?= $price?>" required class="form-control "disabled> 
                                </div>

                                <div class="form-group"> 
                                    <label for="cardNumber">
                                        <h6>Duration</h6>
                                    </label>
                                    <input type="number" name="duration"  value="<?= $duration?>" class="form-control "disabled> 
                                </div>
                                <div class="form-group"> 
                                    <label for="cardNumber">
                                        <h6>Description</h6>
                                    </label>
                                    <input type="text" name="description"  value="<?= $description?>" class="form-control "disabled> 
                                </div>
                                <div class="form-group"> 
                                    <label for="cardNumber">
                                        <h6>Date</h6>
                                    </label>
                                    <input type="date" name="date" placeholder="Card Owner Name" required class="form-control "> 
                                </div>
                                <div class="form-group"> 
                                    <label for="cardNumber">
                                        <h6>Plan Expiry Date</h6>
                                    </label>
                                    <input type="date" name="expdate" placeholder="Card Owner Name" required class="form-control "> 
                                </div>
                                <div class="card-footer"> 
                                    <a data-toggle="pill" href="#credit-card" ><button type="button" class="subscribe btn btn-primary btn-block shadow-sm"> Next </button></a>
                            </form>
                        </div>
                    </div> <!-- End user info-->
                   <div id="payment-option">
                    <div class="tab-pane fade show pt-3" >
                    <ul role="tablist" class="nav nav-pills rounded nav-fill mb-3 text-center">
                            <li class="nav-item"> <a data-toggle="pill" href="#credit-card" class="nav-link "> <i class="fas fa-credit-card mr-2 "></i> Credit Card </a> </li>
                             
                             <li class="nav-item"> <a data-toggle="pill" href="#paypal" class="nav-link "> <i class="fab fa-paypal mr-2"></i> Paypal </a> </li>
                             <li class="nav-item"> <a data-toggle="pill" href="#net-banking" class="nav-link "> <i class="fas fa-mobile-alt mr-2"></i> Net Banking </a> </li>
                    </ul>
                    </div>
                    </div>

                    <!-- Credit card form content -->
                    <div class="tab-content">
                        <!-- credit card info-->
                        <div id="credit-card" class="tab-pane fade show pt-3">
                            <form role="form" onsubmit="event.preventDefault()">

                                <div class="form-group"> <label for="username">
                                        <h6>Card Owner</h6>
                                    </label> <input type="text" name="username" placeholder="Card Owner Name" required class="form-control " required> </div>
                                <div class="form-group"> <label for="cardNumber">
                                        <h6>Card number</h6>
                                    </label>
                                    <div class="input-group"> <input type="text" name="cardNumber" placeholder="Valid card number" class="form-control " required>
                                        <div class="input-group-append"> <span class="input-group-text text-muted"> <i class="fab fa-cc-visa mx-1"></i> <i class="fab fa-cc-mastercard mx-1"></i> <i class="fab fa-cc-amex mx-1"></i> </span> </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-8">
                                        <div class="form-group"> <label><span class="hidden-xs">
                                                    <h6>Expiration Date</h6>
                                                </span></label>
                                            <div class="input-group"> <input type="number" placeholder="MM" name="" class="form-control" required> <input type="number" placeholder="YY" name="" class="form-control" required> </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group mb-4"> <label data-toggle="tooltip" title="Three digit CV code on the back of your card">
                                                <h6>CVV <i class="fa fa-question-circle d-inline"></i></h6>
                                            </label> <input type="text" class="form-control" required> </div>
                                    </div>
                                </div>
                                <div class="card-footer"> <button type="button" class="subscribe btn btn-primary btn-block shadow-sm"> Confirm Payment </button>
                            </form>
                        </div>
                    </div> <!-- End -->
                    <!-- Paypal info -->
                    <div id="paypal" class="tab-pane fade pt-3">
                        <h6 class="pb-2">Select your paypal account type</h6>
                        <div class="form-group "> <label class="radio-inline"> <input type="radio" name="optradio" checked> Domestic </label> <label class="radio-inline"> <input type="radio" name="optradio" class="ml-5">International </label></div>
                        <p> <button type="button" class="btn btn-primary "><i class="fab fa-paypal mr-2"></i> Log into my Paypal</button> </p>
                        <p class="text-muted"> Note: After clicking on the button, you will be directed to a secure gateway for payment. After completing the payment process, you will be redirected back to the website to view details of your order. </p>
                    </div> <!-- End -->
                    <!-- bank transfer info -->
                    <div id="net-banking" class="tab-pane fade pt-3">
                        <div class="form-group "> <label for="Select Your Bank">
                                <h6>Select your Bank</h6>
                            </label> <select class="form-control" id="ccmonth">
                                <option value="" selected disabled>--Please select your Bank--</option>
                                <option>Bank 1</option>
                                <option>Bank 2</option>
                                <option>Bank 3</option>
                                <option>Bank 4</option>
                                <option>Bank 5</option>
                                <option>Bank 6</option>
                                <option>Bank 7</option>
                                <option>Bank 8</option>
                                <option>Bank 9</option>
                                <option>Bank 10</option>
                            </select> </div>
                        <div class="form-group">
                            <p> <button type="button" class="btn btn-primary "><i class="fas fa-mobile-alt mr-2"></i> Proceed Payment</button> </p>
                        </div>
                        <p class="text-muted">Note: After clicking on the button, you will be directed to a secure gateway for payment. After completing the payment process, you will be redirected back to the website to view details of your order. </p>
                    </div> <!-- End -->
                    <!-- End -->
                </div>
            </div>
        </div>
    </div>
   
    <script>
        $(function() {
  $('[data-toggle="tooltip"]').tooltip()
})
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

</body>
</html>












