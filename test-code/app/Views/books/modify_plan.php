<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login/Register</title>
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
            window.location.href = '<?= base_url('books/main_page') ?>';
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
<!-- Add your custom script -->
<script>
    $(document).ready(function() {
        // Add click event listener to the cross button
        const crossButton = document.querySelector('.cross-button');
        crossButton.addEventListener('click', function() {
            window.location.href = '<?= base_url('books//loggedin') ?>';
        });

        // Initialize Bootstrap tabs
        $('.nav-pills a').on('click', function(e) {
            e.preventDefault();
            $(this).tab('show');
        });

        // Set current date in the date input field
        const currentDate = new Date().toISOString().split('T')[0];
        document.querySelector('input[name="date"]').value = currentDate;

        // Function to calculate and set expiry date
        function setExpiryDate() {
            const selectedDate = new Date(document.querySelector('input[name="date"]').value);
            const expiryDate = new Date(selectedDate);
            expiryDate.setFullYear(selectedDate.getFullYear() + 1);
            const formattedExpiryDate = expiryDate.toISOString().split('T')[0];
            document.querySelector('input[name="expdate"]').value = formattedExpiryDate;
        }

        // Calculate and set initial expiry date
        setExpiryDate();

        // Add event listener for date input change
        document.querySelector('input[name="date"]').addEventListener('change', setExpiryDate);
    });
</script>
</script>
<div class="container py-5">
    <div class="row">
        <div class="col-lg-6 mx-auto">
            <div class="card ">
                <div class="card-header">
                    <div class="bg-white shadow-sm pt-4 pl-2 pr-2 pb-2">                    
                        <ul role="tablist" class="nav nav-pills rounded nav-fill mb-4 text-center">
                                <li class="nav-item">
                                     <i class="fas fa-user mr-2 "></i> Your Plan
                                </li>
                        </ul>
                    </div> <!-- End -->
                    <div class="tab-content">
                        <!-- user plan info-->
                        <div id="your-plan" class="tab-pane fade show active pt-3">
                        <form action="<?= base_url('LoginRegister/modifyPlan') ?>" method="post">
                        <?php if ($selectedPlanData): ?>
                       <div class="form-group">
                       
                                    <label for="username">
                                        <h6>Choosed Plan</h6>
                                    </label> 
                                    <input type="hidden" name="rental" value="<?= $selectedPlanData['rental_limit']; ?>" required class="form-control ">
                                    <input type="hidden" name="return_dur" value="<?= $selectedPlanData['return_duration']; ?>" required class="form-control ">
                                    <input type="hidden" name="plan_id" value="<?= $selectedPlanData['plan_id']; ?>">
                                    <input type="text" name="plan" value="<?= $selectedPlanData['plan_name']; ?>" required class="form-control "> 
                                </div>                        
                                <div class="form-group"> 
                                    <label for="cardNumber">
                                        <h6>Price</h6>
                                    </label>
                                    <input type="number" name="price" value="<?= $selectedPlanData['price']; ?>" required class="form-control "> 
                                </div>
                                <div class="form-group"> 
                                    <label for="cardNumber">
                                        <h6>Duration</h6>
                                    </label>
                                    <input type="number" name="duration"  value="<?= $selectedPlanData['duration']; ?>" class="form-control "> 
                                </div>
                                <div class="form-group"> 
                                    <label for="cardNumber">
                                        <h6>Description</h6>
                                    </label>
                                    <input type="text" name="description"  value="<?= $selectedPlanData['description']; ?>" class="form-control "> 
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
                                   
                                    <button type="submit"class="subscribe btn btn-primary btn-block shadow-sm">Modify plan</button>
                                    <?php else: ?>
                                       <p>No data found for the selected plan ID.</p>
                                    <?php endif; ?>
                                    
                                </form>
                        </div>
                    </div> <!-- End user info-->
                    <?php if (session()->getFlashdata('success')): ?>
    <div class="alert alert-success">
        <?= session()->getFlashdata('success') ?>
    </div>
<?php endif; ?>

<!-- Display error flash message if it exists -->
<?php if (session()->getFlashdata('error')): ?>
    <div class="alert alert-danger">
        <?= session()->getFlashdata('error') ?>
    </div>
<?php endif; ?>
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











