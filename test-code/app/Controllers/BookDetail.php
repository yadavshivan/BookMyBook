<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;
use App\Models\Book_model;
use App\Models\Cart_model;
use App\Models\Category_model;
use App\Models\Subcategory_model;
use App\Models\Wishlist_model;
use App\Models\Plan_model;
use App\Models\RentedBooksModel;

class BookDetail extends BaseController {

    public function bookDetail($subcategoryId) {
        // Fetch books related to the subcategory
        $bookModel = new Book_model();
        $data['books'] = $bookModel->getBooksBySubcategory($subcategoryId);
    
        // Check if the book is already in the cart for each book
        $userId = session()->get('user_id');
        $cartModel = new Cart_model();
        $wishlistModel = new Wishlist_model();
        $rentedBooksModel = new RentedBooksModel();
        $data['is_in_cart'] = [];
        $data['is_in_wishlist'] = [];
        $data['is_rented'] = []; // Define the variable to store rental information
    
        foreach ($data['books'] as $book) {
            $is_in_cart = $cartModel->isBookInCart($userId, $book['b_id']);
            $is_in_wishlist = $wishlistModel->isBookInWishlist($userId, $book['b_id']);
            $is_rented = $rentedBooksModel->isBookRented($userId, $book['b_id']);            // Assuming you have a method like this in your model
            $data['is_in_cart'][$book['b_id']] = $is_in_cart;
            $data['is_in_wishlist'][$book['b_id']] = $is_in_wishlist;
            $data['is_rented'][$book['b_id']] = $is_rented;
        }
    
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
    
        // Load the view to display book details
        return view('books/bookDetail', $data);
    }
    
/**Add a method in your controller to handle the renting action
public function rentBook()
{
    $bookId = $this->request->getPost('book_id');

    // Check if the user is logged in
    if (!session()->has('user_id')) {
        // User is not logged in, set the error message and redirect to login/register page
        return redirect()->to(base_url('books/loginRegister'))->with('error', 'Please login or register to rent books.');
    }

    try {
        // Initialize models
        $rentedBooksModel = new RentedBooksModel();
        $planModel = new Plan_model();
        $booksModel = new Book_Model();
        // Check if the user has an active plan that allows renting books
        $userId = session()->get('user_id');
        $activePlan = $planModel
            ->where('user_id', $userId)
            ->where('is_active', true)
            ->first();

        if (!$activePlan) {
            // User does not have an active plan, handle accordingly (perhaps show an alert)
            echo "<script>alert('You do not have an active plan that allows renting books.'); window.history.back();</script>";
            return;
        }

        // Check if the user has reached their book rental limit based on the plan
        // Assuming 'rental_limit' is a field in the 'plans' table
        if ($activePlan['rental_limit'] <= 0) {
            // User has reached the rental limit for the current plan, handle accordingly (perhaps show an alert)
            echo "<script>alert('You have reached the rental limit for your plan.'); window.history.back();</script>";
            return;
        }
         // Fetch book name based on book ID
         $book = $booksModel->find($bookId);
         $bookName = $book['bname'];
         // Calculate return due date based on return_duration of the plan
         $returnDueDate = date('Y-m-d H:i:s', strtotime('+' . $activePlan['return_duration'] . ' days'));
        
        // Insert a record into the rented books table
        $data = [
            'user_id' => $userId,
            'book_id' => $bookId,
             'book_name' => $bookName,
            'rented_at' => date('Y-m-d H:i:s'),
            'return_due_date' => $returnDueDate
        ];
        $rentedBooksModel->insert($data);

        // Decrement the rental limit for the user's plan
        // Assuming 'rental_limit' is a field in the 'plans' table
        $planModel->update($activePlan['id'], ['rental_limit' => $activePlan['rental_limit'] - 1]);

        // Redirect back with success message or alert
        echo "<script>alert('Book rented successfully.'); window.history.back();</script>";
    } catch (\Exception $e) {
        // Log the exception for debugging
        log_message('error', 'Error renting book: ' . $e->getMessage() . ' - ' . $e->getTraceAsString());

        // Return a more detailed error message for debugging
        echo "<script>alert('Error renting book: " . $e->getMessage() . "'); window.history.back();</script>";
    }
    $bookId = $this->request->getPost('book_id');

    // Check if 'rented_books' session variable exists
    if (session()->has('rented_books')) {
        // Retrieve the rented books array from session
        $rentedBooks = session()->get('rented_books');
        // Add the rented book ID to the array
        $rentedBooks[] = $bookId;
        // Update the session variable with the new array
        session()->set('rented_books', $rentedBooks);
    } else {
        // If 'rented_books' session variable doesn't exist, create it
        // with the rented book ID as an array
        session()->set('rented_books', [$bookId]);
    }   
}
**/
// Add a method in your controller to handle the renting action
public function rentBook()
{
    $bookId = $this->request->getPost('book_id');

    // Check if the user is logged in
    if (!session()->has('user_id')) {
        // User is not logged in, set the error message and redirect to login/register page
        return redirect()->to(base_url('books/loginRegister'))->with('error', 'Please login or register to rent books.');
    }

    try {
        // Initialize models
        $rentedBooksModel = new RentedBooksModel();
        $planModel = new Plan_model();
        $booksModel = new Book_Model();
        
        // Check if the user has an active plan that allows renting books
        $userId = session()->get('user_id');
        $activePlan = $planModel
            ->where('user_id', $userId)
            ->where('is_active', true)
            ->first();

        if (!$activePlan) {
            // User does not have an active plan, handle accordingly (perhaps show an alert)
            echo "<script>alert('You do not have an active plan that allows renting books.'); window.history.back();</script>";
            return;
        }

        // Fetch book name based on book ID
        $book = $booksModel->find($bookId);
        $bookName = $book['bname'];
        
        // Calculate return due date based on return_duration of the plan
        $returnDueDate = date('Y-m-d H:i:s', strtotime('+' . $activePlan['return_duration'] . ' days'));
        
        // Get the number of books already rented by the user
        $rentedBooksCount = $rentedBooksModel
            ->where('user_id', $userId)
            ->countAllResults();
        
        // Calculate the new rental limit based on the difference between the old and new plan's rental limit
        $newRentalLimit = $activePlan['rental_limit'] - $rentedBooksCount;
        
        // Insert a record into the rented books table if the user has not reached the new rental limit
        if ($newRentalLimit > 0) {
            $data = [
                'user_id' => $userId,
                'book_id' => $bookId,
                'book_name' => $bookName,
                'rented_at' => date('Y-m-d H:i:s'),
                'return_due_date' => $returnDueDate
            ];
            $rentedBooksModel->insert($data);
            
            // Redirect back with success message or alert
            echo "<script>alert('Book rented successfully.'); window.history.back();</script>";
        } else {
            // User has reached the new rental limit, show an alert
            echo "<script>alert('You have reached the rental limit for your plan.'); window.history.back();</script>";
            return;
        }
    } catch (\Exception $e) {
        // Log the exception for debugging
        log_message('error', 'Error renting book: ' . $e->getMessage() . ' - ' . $e->getTraceAsString());

        // Return a more detailed error message for debugging
        echo "<script>alert('Error renting book: " . $e->getMessage() . "'); window.history.back();</script>";
    }
    $bookId = $this->request->getPost('book_id');

    // Check if 'rented_books' session variable exists
    if (session()->has('rented_books')) {
        // Retrieve the rented books array from session
        $rentedBooks = session()->get('rented_books');
        // Add the rented book ID to the array
        $rentedBooks[] = $bookId;
        // Update the session variable with the new array
        session()->set('rented_books', $rentedBooks);
    } else {
        // If 'rented_books' session variable doesn't exist, create it
        // with the rented book ID as an array
        session()->set('rented_books', [$bookId]);
    }   
}


    public function addToCart()
{
    $bookId = $this->request->getPost('book_id');
    $action = $this->request->getPost('action');

    // Check if the user is logged in
    if (!session()->has('user_id')) {
        // User is not logged in, set the error message and redirect to login/register page
        return redirect()->to(base_url('books/loginRegister'))->with('error', 'Please login or register to add items to your cart.');
    }

    try {
        // Initialize cart model
        $cartModel = new Cart_model();

        if ($action == 'add') {
            // Check if the book is already in the cart
            $isInCart = $cartModel
                ->where('user_id', session()->get('user_id'))
                ->where('book_id', $bookId)
                ->countAllResults() > 0;

            if ($isInCart) {
                // Book is already in the cart, handle accordingly (perhaps show an alert)
                echo "<script>alert('Book is already in the cart.'); window.history.back();</script>";
                return;
            }

            // Add the book to the cart
            $data = [
                'user_id' => session()->get('user_id'),
                'book_id' => $bookId,
                'created_at' => date('Y-m-d H:i:s')
            ];
            $cartModel->insert($data);

            // Redirect back with success message or alert
            echo "<script>alert('Book added to cart successfully.'); window.history.back();</script>";
        } elseif ($action == 'remove') {
            // Remove the book from the cart
            $deleted = $cartModel
                ->where('user_id', session()->get('user_id'))
                ->where('book_id', $bookId)
                ->delete();

            if ($deleted) {
                // Book removed from cart successfully, handle accordingly (perhaps show an alert)
                echo "<script>alert('Book removed from cart successfully.'); window.history.back();</script>";
            } else {
                // Book not found in cart, handle accordingly (perhaps show an alert)
                echo "<script>alert('Book not found in cart.'); window.history.back();</script>";
            }
        } elseif ($action == 'rent') {
            // Rent the book (you need to implement the renting functionality)
            // For demonstration purposes, let's just show an alert
            return $this->rentBook();
        }
      else {
            // Invalid action specified, handle accordingly (perhaps show an alert)
            echo "<script>alert('Invalid action specified.'); window.history.back();</script>";
        }
    } catch (\Exception $e) {
        // Log the exception for debugging
        log_message('error', 'Error modifying cart: ' . $e->getMessage() . ' - ' . $e->getTraceAsString());

        // Return a more detailed error message for debugging
        echo "<script>alert('Error modifying cart: " . $e->getMessage() . "'); window.history.back();</script>";
    }
}

    
public function addToWishlist()
{
    $bookId = $this->request->getPost('book_id');
    $action = $this->request->getPost('action');

    // Check if the user is logged in
    if (!session()->has('user_id')) {
        // User is not logged in, handle the scenario accordingly
        return redirect()->to(base_url('books/loginRegister'))->with('error', 'Please login or register to add items to your cart.');
    }
    try {
        // Initialize wishlist model
        $wishlistModel = new Wishlist_model();

        if ($action == 'add') {
            // Check if the book is already in the wishlist
            $isInWishlist = $wishlistModel
                ->where('user_id', session()->get('user_id'))
                ->where('book_id', $bookId)
                ->countAllResults() > 0;

            if ($isInWishlist) {
                echo "<script>alert('Book is already in the wishlist.'); window.history.back();</script>";
                return;
            }

            // Add the book to the wishlist
            $data = [
                'user_id' => session()->get('user_id'),
                'book_id' => $bookId,
                'created_at' => date('Y-m-d H:i:s')
            ];
            $wishlistModel->insert($data);

            echo "<script>alert('Book added to wishlist successfully.'); window.history.back();</script>";
        } elseif ($action == 'remove') {
            // Remove the book from the wishlist
            $deleted = $wishlistModel
                ->where('user_id', session()->get('user_id'))
                ->where('book_id', $bookId)
                ->delete();

            if ($deleted) {
                echo "<script>alert('Book removed from wishlist successfully.'); window.history.back();</script>";
            } else {
                echo "<script>alert('Book not found in wishlist.'); window.history.back();</script>";
            }
        } else {
            echo "<script>alert('Invalid action specified.'); window.history.back();</script>";
        }
    } catch (\Exception $e) {
        // Log the exception for debugging
        log_message('error', 'Error modifying wishlist: ' . $e->getMessage() . ' - ' . $e->getTraceAsString());

        // Return a more detailed error message for debugging
        echo "<script>alert('Error modifying wishlist: " . $e->getMessage() . "'); window.history.back();</script>";
    }
}

public function singleBookDetail($bookId)
    {
        // Load model if needed
        $bookModel = new \App\Models\Book_model(); // Assuming you have a model for books
        // Fetch the specific book data from the database using the book id
        $book = $bookModel->find($bookId);
        // Pass the book data to the view
        $data['book'] = $book;
         // Load the view to display book details
         return view('books/singleBookDetail', $data);
    }
}