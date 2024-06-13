<!-- app/Views/payment_form.php -->
<html>
<head>
    <title>PayUMoney Payment Form</title>
</head>
<body>
    <h1>PayUMoney Payment Form</h1>
    <form method="post" action="<?php echo base_url('books/payment/process'); ?>">
        <label for="amount">Amount:</label>
        <input type="text" name="amount" id="amount" required>
        <br>

        <label for="firstname">First Name:</label>
        <input type="text" name="firstname" id="firstname" required>
        <br>

        <label for="lastname">Last Name:</label>
        <input type="text" name="lastname" id="lastname" required>
        <br>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required>
        <br>

        <label for="phone">Phone:</label>
        <input type="tel" name="phone" id="phone" required>
        <br>

        <!-- Add more fields as needed -->

        <button type="submit">Pay Now</button>
    </form>
</body>
</html>
