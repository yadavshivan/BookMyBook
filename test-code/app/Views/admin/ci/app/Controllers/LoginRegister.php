<?php

namespace App\Controllers;

use App\Models\Cart_model;
use App\Models\Membershipplan_model;
use App\Models\UserModel;
use CodeIgniter\Controller;
use App\Models\Category_model;
use App\Models\Subcategory_model;
use App\Models\Wishlist_model;
class LoginRegister extends Controller
{
    public function index()
    {
        return view('books/loginRegister');
    }

    public function authenticate()
    {
        $model = new UserModel();

        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $user = $model->where('username', $username)->first();

        if ($user && $password === $user['password']) {            // Set session data for the logged-in user
            $userData = [
                'user_id' => $user['id'],
                'username' => $user['username'],
                'logged_in' => true,
                'cart_count' => $this->getCartCount($user['id']), // Get cart count for the logged-in user
                'name' => $user['name'],
                'password' => $user['password'],
                'mobile_no' => $user['mobile_no'],
            ];

            session()->set($userData);
            session()->setFlashdata('success', 'Login successful!');

            return redirect()->to('books/loggedin');
        } else {
            // Failed login
            // Set a flash message to display on failed login
            session()->setFlashdata('error', 'Invalid username or password. Please register yourself.');

            return redirect()->to('books/loginRegister');
        }
    }

    public function save()
    {
        // Validation rules
        $validationRules = [
            'name' => 'required',
            'username' => 'required|valid_email|is_unique[users.username]',

            //'username' => 'required|valid_email',

            'password' => 'required|min_length[4]',
            //'confirm_password' => 'required|matches[password]',

            'mobile_no' => 'required|numeric',

        ];

        if (!$this->validate($validationRules)) {
            // Validation failed
            return redirect()->to(base_url('books/loginRegister'))->withInput()->with('errors', $this->validator->getErrors());
        }

        // Validation passed, proceed with saving data
        $model = new UserModel();
        $data = [
            'name' => $this->request->getPost('name'),

            'username' => $this->request->getPost('username'),
            'password' => $this->request->getPost('password'),
            'mobile_no' => $this->request->getPost('mobile_no'),
            

        ];

        $model->insert($data);

        // If registration is successful
        $userIsRegistered = true;

        if ($userIsRegistered) {
            // Set a success flash message for the registration
            session()->setFlashdata('success', 'Registration successful! Please log in.');

            return redirect()->to(base_url('books/loginRegister'));
        }
    }

   public function loggedin()
{   
    // Check if user is logged in
    if (!session()->get('logged_in')) {
        return redirect()->to('books/loginRegister');
    }

    // Fetch user data from session
    $user_id = session()->get('user_id');

    // Fetch user data from database
    $model = new UserModel();
    $user = $model->find($user_id);

    // Fetch membership plan data
    $membershipPlanModel = new Membershipplan_model();
    $membershipPlans = $membershipPlanModel->findAll();

    // Fetch categories and their subcategories
    $categoryModel = new Category_model();
    $subcategoryModel = new Subcategory_model();

    // Fetch all categories from the database
    $categories = $categoryModel->findAll();
    $data['categories'] = [];

    // Fetch subcategories for each category
    foreach ($categories as $category) {
        $category['subcategories'] = $subcategoryModel->where('c_id', $category['c_id'])->findAll();
        $data['categories'][] = $category;
    }

    // Pass user data, membership plans, categories, and subcategories to the view
    $data['name'] = $user['name']; // Fetching the user's name from the database
    $data['username'] = $user['username'];
    $data['membershipPlans'] = $membershipPlans;
    // Add any other data you want to pass to the view

    return view('books/loggedin', $data);
}

    
    public function logout()
{
    // Destroy user session
    session()->destroy();

    // Redirect to the login page or any other page after logout
    return redirect()->to('books/loginRegister')->with('success', 'Logged out successfully.');
}

//Code to add cart count to the cart button
public function getCartCount($userId) {
    $model = new Cart_model(); 
    $cartCount = $model->where('user_id', $userId)->countAllResults();
    return $cartCount;
}

public function memershipPlan()
{   
    // Check if the user is logged in
    if (!session()->get('logged_in')) {
        return redirect()->to('books/loginRegister');
    }

    // Fetch user ID from the session
    $userId = session()->get('user_id');

    // Load the Wishlist_model
    $wishlistModel = new Wishlist_model();

    // Fetch wishlist items for the user
    $wishlistItems = $wishlistModel->getWishlistItems($userId);

    // Load the UserModel to fetch user data
    $userModel = new UserModel();

    // Fetch user data from the database
    $user = $userModel->find($userId);

    // Fetch mobile number and password from user data
    $mobile_no = $user['mobile_no'];
    $password = $user['password'];

    // Load the Category_model and Subcategory_model
    $categoryModel = new Category_model();
    $subcategoryModel = new Subcategory_model();

    // Fetch all categories from the database
    $categories = $categoryModel->findAll();
    $data['categories'] = [];

    // Fetch subcategories for each category
    foreach ($categories as $category) {
        $category['subcategories'] = $subcategoryModel->where('c_id', $category['c_id'])->findAll();
        $data['categories'][] = $category;
    }

    // Pass user data, wishlist items, and categories data to the view
    $data['name'] = $user['name']; // Fetching the user's name from the database
    $data['username'] = $user['username'];
    $data['wishlistItems'] = $wishlistItems;
    $data['mobile_no'] = $mobile_no;
    $data['password'] = $password; // Adding password to the data array

    // Load the membership_plane view and pass the data
    return view('books/membership_plane', $data);
}
    public function updateAccountDetails()
    {
        // Retrieve data from the AJAX request
        $name = $this->request->getPost('name');
        $email = $this->request->getPost('email');
        $mobile = $this->request->getPost('mobile');
        $password = $this->request->getPost('password');
    
        // Get user ID from the session
        $userId = session()->get('user_id');
    
        // Update the user's account details in the database
        $model = new UserModel();
        $model->update($userId, [
            'name' => $name,
            'username' => $email,
            'mobile_no' => $mobile,
            'password' => $password,
        ]);
    
        // Update the session variable with the new name
        $userData = [
            'user_id' => $userId,
            'name' => $name,
            'username' => $email,
            'mobile_no' => $mobile,
            'password' => $password,
        ];
    
        // Update the user data in the session
        session()->set($userData);
    
        // Respond with JSON indicating success or failure
        if ($model->affectedRows() > 0) {
            echo json_encode(['status' => 'success', 'message' => 'Account details updated successfully']);
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Error updating account details']);
        }
    }
    

}
