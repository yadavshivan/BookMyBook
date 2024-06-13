<!-- app/Views/loginRegister.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login/Register</title>
    <link rel="stylesheet" href="<?= base_url('css/styles.css') ?>">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
      <!-- Include SweetAlert CDN -->
      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

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

        .container1 {
    height: 750px;
    width: 500px;
    background-color: white;
    position: relative;
    overflow: hidden;
    border-radius: 15px; /* Add border radius for rounded corners */
    border-color: #AA1703;
    box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1); /* Add box shadow */
}

        .btn {
            height: 60px;
            width: 300px;
            margin: 20px auto;
            box-shadow: 10px 10px 30px rgb(254, 215, 188);
            border-radius: 50px;
            display: flex;
            justify-content: space-around;
            align-items: center;
        }

        .login,
        .signup {
            font-size: 22px;
            border: none;
            outline: none;
            background-color: transparent;
            position: relative;
            cursor: pointer;
        }

        .slider {
            height: 60px;
            width: 150px;
            border-radius: 50px;
            background-image: linear-gradient(to right, rgb(255, 195, 110), rgb(255, 146, 91));
            position: absolute;
            top: 20px;
            left: 100px;
            transition: all 0.5s ease-in-out;
        }

        .moveslider {
            left: 250px;
        }

        .form-section {
            height: 500px;
            width: 1000px;
            padding: 20px 0;
            display: flex;
            position: relative;
            transition: all 0.5s ease-in-out;
            left: 0px;
        }

        .form-section-move {
            left: -500px;
        }

        .login-box{
           
            height: 100%;
            width: 500px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 0px 40px;
          
        }
        .signup-box {
            height: 100%;
            width: 500px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 0px 40px;
            margin-top: 80px;
        }

        .login-box {
            gap: 50px;
        }

        .signup-box {
            gap: 30px;
        }

        .ele {
            height: 60px;
            width: 450px;
            outline: none;
            border: none;
            color: rgb(77, 77, 77);
            background-color: rgb(240, 240, 240);
            border-radius: 50px;
            padding-left: 30px;
            font-size: 18px;
        }

        .clkbtn {
            height: 60px;
            width: 150px;
            border-radius: 50px;
            background-image: linear-gradient(to right, rgb(255, 195, 110), rgb(255, 146, 91));
            font-size: 22px;
            border: none;
            cursor: pointer;
            left: 50%;
            transform: translateX(90%);
        }
       


        /* For Responsiveness of the page */

        @media screen and (max-width: 650px) {
    .container1 {
        height: 750px;
        width: 275px;
    }

    .title {
        font-size: 15px;
    }

    .btn {
        height: 50px;
        width: 220px;
        margin: 20px auto;
        position: relative;
        display: flex; /* Added flex display */
        justify-content: space-between; /* Aligns items to the left and right edges */
        align-items: center; /* Centers items vertically */
    }

    .login,
    .signup {
        font-size: 19px;
        position: absolute;
        top: 0;
        left: 0;
    }

    .signup {
        left: auto;
        right: 0;
    }

    .slider {
        height: 50px;
        width: 106px;
        left: 35px;
    }

    .moveslider {
        left: 150px;
    }

    .form-section {
        height: 500px;
        width: 500px;
    }

    .form-section-move {
        left: -250px;
    }

    .login-box,
    .signup-box {
        height: 100%;
        width: 250px;
    }

    .ele {
        height: 50px;
        width: 220px;
        font-size: 15px;
    }

    .clkbtn {
        height: 50px;
        width: 130px;
        font-size: 19px;
        margin-left: -30%;
    }
}

@media screen and (max-width: 320px) {
    .container {
        height: 750px;
        width: 255px;
    }

    .heading {
        font-size: 30px;
    }

    .title {
        font-size: 10px;
    }

    .btn {
        height: 50px;
        width: 200px;
        margin: 20px auto;
    }

    .login,
    .signup {
        font-size: 19px;
    }

    .slider {
        height: 50px;
        width: 100px;
        left: 27px;
    }

    .moveslider {
        left: 127px;
    }

    .form-section {
        height: 500px;
        width: 250px; /* Adjusted width for smaller screens */
    }

    .form-section-move {
        left: 0; /* Adjusted position for smaller screens */
    }

    .login-box,
    .signup-box {
        height: 100%;
        width: 250px;
    }

    .ele {
        height: 50px;
        width: 220px;
        font-size: 15px;
    }

    .clkbtn {
        height: 50px;
        width: 130px;
        font-size: 19px;
        margin-left: -30%;
    }
}

        /* Add space between input fields */
.login-form input,
.registration-form input {
  
   
    margin-right: -20px; /* Optionally adjust the right margin if needed */
    margin-top: 20px;
}
.btn button {
    font-size: 22px;
    border: none; /* Remove border */
    outline: none;
    background-color: transparent;
    position: relative;
    cursor: pointer;
    box-shadow: none; /* Remove box-shadow */
}

.btn button:hover {
    background-color: rgba(0, 0, 0, 0.1); /* Add hover effect */
}
/* Additional CSS for input container */
.input-container {
    position: relative;
    margin-bottom: 10px;
}

.input-container input {
    padding-right: 40px; /* Adjust according to the icon width */
}


.input-container i {
    position: absolute;
    right: 10px; /* Adjust according to the padding-right of input */
    top: 50%;
    transform: translateY(-50%);
    color: #999;
    cursor: pointer;
}

/* Specific CSS for eye icon toggle */
#password-toggle, #confirm-password-toggle {
    z-index: 1;
}

#password-toggle:hover, #confirm-password-toggle:hover {
    color: #333;
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


</style>
    


    <!-- password visibility and invisibility-->
    <script>
    document.addEventListener('DOMContentLoaded', function () {
        const passwordToggle = document.querySelectorAll('.password-toggle');

        // Add click event listener to all password toggles
        passwordToggle.forEach(function (toggle) {
            toggle.addEventListener('click', function () {
                const passwordInput = toggle.previousElementSibling;
                if (passwordInput.getAttribute('type') === 'text') {
                    passwordInput.setAttribute('type', 'password');
                    toggle.classList.remove('fa-eye-slash');
                    toggle.classList.add('fa-eye');
                } else {
                    passwordInput.setAttribute('type', 'text');
                    toggle.classList.remove('fa-eye');
                    toggle.classList.add('fa-eye-slash');
                }
            });
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
    window.location.href = '<?= base_url('main_page') ?>'; // Replace 'YOUR_MAIN_PAGE_URL_HERE' with your main page URL
});
</script>
    


<div class="container1">
 
 <!-- upper button section to select
      the login or signup form -->
 <div class="slider"></div>
 <div class="btn">
     <button class="login">Login</button>
     <button class="signup">Register</button>
 </div>
        <div class="form-section">
            
<!-- login form -->
<div class="login-box">
    <form class="login-form" action="<?= base_url('books/loginRegister/authenticate') ?>" method="post">
        <div class="input-container">
            <input type="email" class="ele" name="username" placeholder="Your Email" required>
            <i class="fas fa-envelope"></i>
        </div>
        <div class="input-container">
            <input type="password" class="ele" name="password" placeholder="Password" required>
            <i class="fas fa-eye password-toggle" id="password-toggle"></i> <!-- Add password-toggle class -->
        </div>
        <button type="submit" class="clkbtn">Login</button>
        <br><br><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; If you don't have accoutn? then register..!!</p>
        <a href="<?= base_url('admin/adminMain_Page') ?>" class="btn btn-secondary">Admin Login</a>
    </form>
</div>

<!-- signup form -->
<div class="signup-box">
    <form class="registration-form" action="<?= base_url('books/loginRegister/save') ?>" method="post">
        <div class="input-container">
            <input type="text" class="ele" name="name" placeholder="Enter your name" required>
            <i class="fas fa-user"></i>
        </div>
        <div class="input-container">
            <input type="email" class="ele" name="username" placeholder="Your Email" required>
            <i class="fas fa-envelope"></i>
        </div>
   <div class="input-container">
        <input type="password" class="ele" id="password" name="password" pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[!@#$%^&*]).{8,}$" placeholder="Password" required oninput="checkPasswordPattern()">
        <i class="fas fa-eye password-toggle" id="password-toggle"></i>
        <p id="password-message" style="color: red; font-size: 14px; display: none;">Password must contain at least one lowercase ,uppercase,numeric digit, and special character, and be at least 8 characters long.</p>
    </div>
        <div class="input-container">
            <input type="password" class="ele" id="confirm_password" name="confirm_password" pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[!@#$%^&*]).{8,}$" placeholder="Confirm Password" required oninput="checkConfirmPasswordPattern()">
            <i class="fas fa-eye password-toggle" id="confirm-password-toggle"></i> <!-- Add password-toggle class -->
             <p id="confirm-password-message" style="color: red; font-size: 14px; display: none;">Password must contain at least one lowercase ,uppercase,numeric digit, and special character, and be at least 8 characters long.</p>
 
        </div>
        <div class="input-container">
            <input type="text" class="ele" name="mobile_no" pattern="[0-9]{10}" placeholder="Mobile Number" required>
            <i class="fas fa-phone"></i>
        </div>
        <div class="input-container">
            <input type="text" class="ele" name="address"  placeholder="Enter Your Address" required>
            <i class="fas fa-address"></i>
        </div>
        <button type="submit" class="clkbtn">Register</button>
    </form>
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



    <!-- Add this script inside the <head> tag -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const loginButton = document.querySelector('.login');
        const signupButton = document.querySelector('.signup');
        const slider = document.querySelector('.slider');
        const formSection = document.querySelector('.form-section');

        // Add click event listener to login button
        loginButton.addEventListener('click', function () {
            slider.classList.remove('moveslider');
            formSection.classList.remove('form-section-move');
        });

        // Add click event listener to signup button
        signupButton.addEventListener('click', function () {
            slider.classList.add('moveslider');
            formSection.classList.add('form-section-move');
        });
    });
</script>

<!-- confirm password validation -->
<script>
     function checkPasswordPattern() {
        var passwordInput = document.getElementById("password");
        var message = document.getElementById("password-message");

        if (!passwordInput.checkValidity()) {
            // If the input doesn't match the pattern, display the message
            message.style.display = "block";
        } else {
            // If the input matches the pattern, hide the message
            message.style.display = "none";
        }
    }
    function checkConfirmPasswordPattern() {
        var confirmPasswordInput = document.getElementById("confirm_password");
        var confirmMessage = document.getElementById("confirm-password-message");

        if (!confirmPasswordInput.checkValidity()) {
            // If the input doesn't match the pattern, display the message
            confirmMessage.style.display = "block";
        } else {
            // If the input matches the pattern, hide the message
            confirmMessage.style.display = "none";
        }
    }
    document.addEventListener('DOMContentLoaded', function () {
        const registrationForm = document.querySelector('.registration-form');
        const passwordInput = document.getElementById('password');
        const confirmPasswordInput = document.getElementById('confirm_password');

        registrationForm.addEventListener('submit', function (event) {
            if (passwordInput.value !== confirmPasswordInput.value) {
                event.preventDefault(); // Prevent form submission
                Swal.fire({
                       icon: 'error',
                       title: 'Oops... Passwords do not match!',
                       text: 'Please make sure the passwords match.',
                    });

            } else if (!passwordInput.value.match(/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[!@#$%^&*]).{8,}$/)) {
                event.preventDefault(); // Prevent form submission
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Password must contain at least one lowercase letter, one uppercase letter, one numeric digit, and one special character, and be at least 8 characters long!',
                });
            }
        });
    });
</script>
<!-- This is for registraion success-->
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

  <!-- Display SweetAlert for success message -->
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



<!-- This is for login failed-->
<script>
  // Check if the error flash message is set
<?php if (session()->has('error')): ?>
    // Display the error message using SweetAlert with an OK button
    Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: '<?= session()->get('error') ?>',
        showConfirmButton: true // Change to true to display the OK button
    });
<?php endif; ?>
</script>

<script>
// Check if there is a wishlist error flash message
<?php if (session()->getFlashdata('wishlist_error')): ?>
    // Display SweetAlert with the error message
    Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: '<?= session()->getFlashdata('wishlist_error') ?>', // Get the error message from flash data
        showConfirmButton: true // Change to true to display the OK button
    });
<?php endif; ?>
</script>

</body>
</html>
