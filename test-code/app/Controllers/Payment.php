<?php
// app/Controllers/Payment.php
namespace App\Controllers;

use CodeIgniter\Controller;

class Payment extends Controller {
    public function index() {
        return view('books/payment_form');
    }

   public function process() {
    // Retrieve form data
    $amount = $this->request->getPost('amount');
    $firstname = $this->request->getPost('firstname');
    $lastname = $this->request->getPost('lastname');
    $email = $this->request->getPost('email');
    $phone = $this->request->getPost('phone');

    // Generate random transaction ID
    $txnid = substr(hash('sha256', mt_rand() . microtime()), 0, 20);

    // Your PayUMoney Merchant Key and Salt Key
    $key = '6SDYByYH';
    $salt = 'oP7RqS0X5B'; // Note: Changed to lowercase 'b' in salt

    // Construct hash sequence
    $hashSequence = $key . '|' . $txnid . '|' . $amount . '|' . 'Your Product Name' . '|' . 'Your Product Description' . '|' . $firstname . '|' . $email . '||||||||||' . $salt;

    // Generate hash
    $hash = strtolower(hash('sha512', $hashSequence));

    // Redirect to PayUMoney payment gateway
    $payumoneyUrl = 'https://sandboxsecure.payu.in/_payment'; // Sandbox URL, replace with production URL when ready
    $redirectUrl = $payumoneyUrl . '?key=' . $key . '&txnid=' . $txnid . '&amount=' . $amount . '&productinfo=Your Product Name&firstname=' . $firstname . '&lastname=' . $lastname . '&email=' . $email . '&phone=' . $phone . '&hash=' . $hash . '&surl=' . base_url('books/payment/success') . '&furl=' . base_url('books/payment/failure');
    
    return redirect()->to($redirectUrl);
}

    public function success() {
        // Handle payment success
        echo "Payment Successful";
    }

    public function failure() {
        // Handle payment failure
        echo "Payment Failed";
    }
}