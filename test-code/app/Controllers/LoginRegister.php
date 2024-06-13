<?php

namespace App\Controllers;

use App\Models\Cart_model;
use App\Models\Membershipplan_model;
use App\Models\UserModel;
use CodeIgniter\Controller;
use App\Models\Category_model;
use App\Models\Subcategory_model;
use App\Models\Wishlist_model;
use App\Models\Plan_model;
use App\Models\RentedBooksModel;
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
                'address' => $user['address'],
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
            'address' => 'required',
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
            'address' => $this->request->getPost('add'),
            

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

public function membershipPlan()
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

    // Load the Cart_model
    $cartModel = new Cart_model();

    // Fetch cart items for the user
  // Fetch cart items for the user including book details
  $cartItems = $cartModel->getCartItemsWithBookDetails($userId);

    // Load the UserModel to fetch user data
    $userModel = new UserModel();

    // Fetch user data from the database
    $user = $userModel->find($userId);

    // Fetch mobile number and password from user data
    $mobile_no = $user['mobile_no'];
    $password = $user['password'];
    $address = $user['address'];

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

    // Pass user data, cart items, wishlist items, and categories data to the view
    $data['id'] = $user['id']; 
    $data['name'] = $user['name']; // Fetching the user's name from the database
    $data['username'] = $user['username'];
    $data['cartItems'] = $cartItems;
    $data['wishlistItems'] = $wishlistItems;
    $data['mobile_no'] = $mobile_no;
    $data['password'] = $password; // Adding password to the data array
    $data['address'] = $address;
    // Load the Plan_model
    $planModel = new Plan_model();

    // Fetch plans for the user
    $plans = $planModel->where('user_id', $userId)->findAll();

    // Pass user data, cart items, wishlist items, categories data, and plans to the view
    $data['plans'] = $plans;

    // Load the RentedBooks_model
    $rentedBooksModel = new RentedBooksModel();

    // Fetch rented books for the user
    $rentedBooks = $rentedBooksModel->where('user_id', $userId)->findAll();

    // Pass rented books data to the view
    $data['rentedBooks'] = $rentedBooks;

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
    $address = $this->request->getPost('add');
    // Get user ID from the session
    $userId = session()->get('user_id');

    // Update the user's account details in the database
    $model = new UserModel();
    $model->update($userId, [
        'name' => $name,
        'username' => $email,
        'mobile_no' => $mobile,
        'password' => $password,
        'address' => $address,
    ]);

    // Update the session variable with the new name
    $userData = [
        'user_id' => $userId,
        'name' => $name,
        'username' => $email,
        'mobile_no' => $mobile,
        'password' => $password,
        'address' => $address,
    ];

    // Update the user data in the session
    session()->set($userData);

    // Respond with JSON indicating success or failure
    if ($model->affectedRows() > 0) {
        return json_encode(['status' => 'success', 'message' => 'Account details updated successfully']);
    } else {
        return json_encode(['status' => 'error', 'message' => 'Error updating account details']);
    }
}


   
    public function removeFromWishlist()
    {
        // Check if the form is submitted
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["item_name"])) {
            // Retrieve the item name from the form submission
            $itemName = $_POST["item_name"];
            
            // Load the Wishlist_model
            $wishlistModel = new Wishlist_model();
    
            // Remove the item from the wishlist
            $wishlistModel->removeItemByName($itemName); // Implement this method in your Wishlist_model
            
            // Set a success flash message
            session()->setFlashdata('success', 'Item removed from wishlist successfully.');
    
            // Redirect back to the membership plan page after removing the item
            return redirect()->to('books/membership_plane');
        } else {
            // Handle invalid form submission
            return redirect()->to('books/membership_plane')->with('error', 'Invalid request.');
        }
    }
    
    public function removeFromCart()
{
    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["item_id"])) {
        // Retrieve the item ID from the form submission
        $itemId = $_POST["item_id"];
        
        // Load the Cart_model
        $cartModel = new Cart_model();

        // Remove the item from the cart
        $cartModel->removeItemById($itemId); // Implement this method in your Cart_model
        
        // Set a success flash message
        session()->setFlashdata('success', 'Item removed from cart successfully.');

        // Redirect back to the membership plan page after removing the item
        return redirect()->to('books/membership_plane');
    } else {
        // Handle invalid form submission
        return redirect()->to('books/membership_plane')->with('error', 'Invalid request.');
    }
}
public function choosePlan($planId) {
    // Load the MembershipPlan_model
    $membershipPlanModel = new MembershipPlan_model();
   
    // Find all membership plans
    $membershipPlans = $membershipPlanModel->findAll();
    
    // Find data for the selected plan ID
    $selectedPlanData = $membershipPlanModel->find($planId);

    // Prepare data to be passed to the view
    $data = [
        'membershipPlans' => $membershipPlans,
        'selectedPlanData' => $selectedPlanData
    ];

    // Load the view and pass the data
    return view('books/payment', $data);
}
public function add_plan()
{
    // Retrieve form data
    $plan_name = $this->request->getPost('plan');
    $rental_limit = $this->request->getPost('rental');
    $return_duration = $this->request->getPost('return_dur');
    $price = $this->request->getPost('price');
    $duration = $this->request->getPost('duration');
    $description = $this->request->getPost('description');
    $date = $this->request->getPost('date');
    $expiry_date = $this->request->getPost('expdate');
    
    // Retrieve user ID from session or wherever it's stored in your application
    $userId = session()->get('user_id');

    // Load Plan_model
    $plan_model = new Plan_model();
 // Load Membershipplan_model
 $membershipPlanModel = new Membershipplan_model();

 // Fetch plan_id based on plan_name
 $plan = $membershipPlanModel->where('plan_name', $plan_name)->first();
 $plan_id = $plan['plan_id'];
    // Check if the user already has an active plan
    $activePlan = $plan_model->where('user_id', $userId)
                             ->where('is_active', true)
                             ->first();

                             if ($activePlan) {
                                session()->setFlashdata('error', 'You already have an active plan. Please cancel it or before selecting a new plan.');
                                return redirect()->back();
                            }

    // Form data
    $data = [
        'user_id' => $userId,
        'plan_name' => $plan_name,
        'plan_id' => $plan_id, // Insert plan_id
        'price' => $price,
        'duration' => $duration,
        'description' => $description,
        'start_date' => $date, // Assuming the 'start_date' is the same as the 'date' from the form
        'expiry_date' => $expiry_date,
        'is_active' => true,  // Set the new plan as active
        'rental_limit'=> $rental_limit,
        'return_duration'=>$return_duration
    ];

    // Insert data into the database
    $plan_model->insert($data);

    // Redirect to success page with a success message
    return redirect()->to('books/membership_plane')->with('success', 'Plan added successfully');
}


public function index_loggedinModify()
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
    $data['id'] = $user['id'];
    $data['username'] = $user['username'];
    $data['membershipPlans'] = $membershipPlans;
    // Add any other data you want to pass to the view
        // Load the 0to2year view
        return view('books/loggedin_modify',$data);

    }

    
public function chooseModifyPlan($planId) {
    // Load the MembershipPlan_model
    $membershipPlanModel = new MembershipPlan_model();
   
    // Find all membership plans
    $membershipPlans = $membershipPlanModel->findAll();
    
    // Find data for the selected plan ID
    $selectedPlanData = $membershipPlanModel->find($planId);

    // Prepare data to be passed to the view
    $data = [
        'membershipPlans' => $membershipPlans,
        'selectedPlanData' => $selectedPlanData
    ];

    // Load the view and pass the data
    return view('books/modify_plan', $data);
}
public function modifyPlan()
{
   // Retrieve form data
$rental_limit = $this->request->getPost('rental');
$return_duration = $this->request->getPost('return_dur');
$plan_id = $this->request->getPost('plan_id');
$plan_name = $this->request->getPost('plan');
$price = $this->request->getPost('price');
$duration = $this->request->getPost('duration');
$description = $this->request->getPost('description');
$date = $this->request->getPost('date');
$expiry_date = $this->request->getPost('expdate');

// Retrieve user ID from session or wherever it's stored in your application
$userId = session()->get('user_id');

// Load Plan_model
$plan_model = new Plan_model();

// Form data
$data = [
    'plan_id' => $plan_id,
    'plan_name' => $plan_name,
    'price' => $price,
    'duration' => $duration,
    'description' => $description,
    'start_date' => $date,
    'expiry_date' => $expiry_date,
    'is_active' => true,
    'rental_limit'=> $rental_limit,
    'return_duration'=>$return_duration
];

// Update data in the database for the user's active plan
$plan_model->where('user_id', $userId)
           ->where('is_active', true)
           ->set($data)
           ->update();

// Redirect to success page with a success message
return redirect()->to('books/membership_plane')->with('success', 'Plan updated successfully');

}


}


