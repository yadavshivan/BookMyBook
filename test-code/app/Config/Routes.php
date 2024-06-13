<?php

use App\Controllers\BookController;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
//$routes->get('/', 'Home::index');
//$routes->get('/books', 'BookController::welcome'); // Change the controller method if needed
//$routes->get('books/index','BookController::index');
//$routes->get('/books', 'BookController::index');
// Routes for RegisterController
$routes->get('main_page','BookController::index_home');
//$routes->get('books/register', 'Register::index');
//$routes->post('books/register/save', 'Register::save');


//For serach bar
$routes->post('books/search', 'BookController::search');

//About us page route 
$routes->get('books/about','BookController::About');

// How it works route 
$routes->get('books/howitWorks','BookController::HowItWorks');

// Add a route for the LoginRegister controller
$routes->add('books/loginRegister', 'LoginRegister::index');
// Add a route for the authentication method
$routes->post('books/loginRegister/authenticate', 'LoginRegister::authenticate');
$routes->get('books/loggedin', 'LoginRegister::loggedin');

$routes->get('books/membership_plane', 'LoginRegister::membershipPlan');

$routes->get('books/membership_plane', 'LoginRegister::updateAccountDetails');





$routes->get('books/membership_plane', 'Membership_plan::index'); 
$routes->post('loginRegister/updateAccountDetails', 'LoginRegister::updateAccountDetails');
$routes->post('membership_plane/updateAccountDetails', 'LoginRegister::updateAccountDetails');
$routes->post('books/loginRegister/getCartCount', 'LoginRegister::getCartCount'); // Add this route

$routes->get('books/payment', 'Payment::index'); 
$routes->post('books/payment/processPayment', 'Payment::processPayment');
$routes->get('books/payment/payment_success', 'Payment::paymentSuccess');
$routes->get('books/payment/payment_failure', 'Payment::paymentFailure');

$routes->get('books/choosePlan/(:num)', 'LoginRegister::choosePlan/$1'); // Route to choose a plan
$routes->post('LoginRegister/add_plan', 'LoginRegister::add_plan');
$routes->get('/books/showUserPlans', 'LoginRegister::showUserPlans');

$routes->post('books/loggedin_modify', 'LoginRegister::index_loggedinModify');
$routes->get('books/chooseModifyPlan/(:num)', 'LoginRegister::chooseModifyPlan/$1'); // Route to choose modify a plan
$routes->post('LoginRegister/modifyPlan', 'LoginRegister::modifyPlan');

$routes->get('books/singleBookDetail', 'SingleBookDetail::index'); 
$routes->get('books/singleBookDetail/(:num)', 'BookDetail::singleBookDetail/$1');
$routes->post('singleBookDetail/addToCart', 'BookDetail::addToCart');
$routes->post('singleBookDetail/addToWishlist', 'BookDetail::addToWishlist');

$routes->get('books/loggedin/logout', 'LoginRegister::logout');//FOr logout


// routes.php or routes.php in app/Config folder
$routes->post('books/removeFromWishlist', 'LoginRegister::removeFromWishlist');
$routes->post('books/removeFromCart', 'LoginRegister::removeFromCart');


// Add a route for the save method
$routes->post('books/loginRegister/save', 'LoginRegister::save');

$routes->get('cartc/cartCount', 'Cartc::cartCount');//For cart count

// Routes for LoginController
//$routes->get('books/login', 'Login::index');
//$routes->post('books/login/authenticate', 'Login::authenticate');
//$routes->get('books/loggedin', 'Login::loggedin');
//adminAddBook route
//$routes->add('books/adminAddBook', 'Admin::index_adminAddBook');
$routes->add('admin/adminMain_Page', 'Admin::index');


$routes->get('admin/addCategory', 'Admin::addCategory');
$routes->post('admin/processAddCategory', 'Admin::processAddCategory');

// app/Config/Routes.php

$routes->get('admin/addSubcategory', 'Admin::addSubcategory');
$routes->post('admin/processAddSubcategory', 'Admin::processAddSubcategory');

// app/Config/Routes.php

$routes->get('admin/addBook', 'Admin::addBook');

$routes->get('admin/getSubcategories/(:num)', 'Admin::getSubcategories/$1');

$routes->post('admin/processAddBook', 'Admin::processAddBook');
$routes->get('admin/editBook/(:num)', 'Admin::editBook/$1');//Edit book
$routes->post('admin/updateBook/(:num)', 'Admin::updateBook/$1');//update book

//to viewBooks
$routes->get('admin/view_Books', 'Admin::viewBooks');



$routes->get('admin/deleteBook/(:num)', 'Admin::deleteBook/$1');//Delete book


$routes->get('books/bookDetail/(:num)', 'BookDetail::bookDetail/$1');
//new cart methods 
$routes->post('bookDetail/addToCart/(:num)', 'BookDetail::addToCart/$1');
$routes->get('bookDetail/addToCart/(:num)', 'BookDetail::addToCart/$1');
$routes->post('bookDetail/addToCart', 'BookDetail::addToCart');
$routes->post('bookDetail/addToWishlist', 'BookDetail::addToWishlist');

$routes->post('bookDetail/addToWishlist', 'BookDetail::addToWishlist');



$routes->post('addToCart', 'BookDetail::addToCart');


//admin addMembershipPlan
$routes->get('admin/addMembershipPlan','Admin::addMembershipPlan');//view membeshp plan
$routes->post('admin/addMembershipPlan', 'Admin::addMembershipPlan');//add membership plan data to the database
$routes->get('admin/viewMembershipPlan', 'Admin::viewMembershipPlan');//view membership plan
$routes->get('admin/editMembershipPlan/(:num)', 'Admin::editMembershipPlan/$1');//edit membership plan
$routes->post('admin/updateMembershipPlan/(:num)', 'Admin::updateMembershipPlan/$1');//update membership plan
$routes->get('admin/deleteMembershipPlan/(:num)', 'Admin::deleteMembershipPlan/$1');//delete membership plan


//$routes->post('books/bookDetail/addToCart/(:num)', 'BookDetail::addToCart/$1');
// app/Config/Routes.php
$routes->get('books/bookDetail/addToCart/(:num)', 'Cartc::addToCart/$1');
// app/Config/Routes.php
$routes->post('books/bookDetail/addToCart/(:num)', 'Cartc::addToCart/$1');
// routes.php


// Route for BookController
$routes->get('/', 'BookController::index');

// Default route
$routes->setDefaultController('Main_page');
$routes->setDefaultMethod('index');

//kidsbook
//$routes->get('books/bookDetail', 'BookDetail::bookDetail');
// app/config/Routes.php



//$routes->get('books/kidsbook/3to5year', 'Kidsbook::index_3to5year');
