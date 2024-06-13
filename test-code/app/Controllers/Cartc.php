<?php

namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\Wishlist_model;
use App\Models\Book_model;
use App\Models\Cart_model;

class Cartc extends BaseController {

    public function addToCart($bookId)
    {
        // Check if user is logged in
        if (!session()->has('user_id')) {
            session()->setFlashdata('error', 'Please log in to add items to your cart.');
    
            return redirect()->to('books/loginRegister')->with('error', 'Please log in to add items to your cart.');
        }
    

        // Get user ID from session
    $userId = session()->get('user_id');

    // Save book to the cart
    $cartModel = new Cart_model();
    $data = [
        'user_id' => $userId,
        'book_id' => $bookId
    ];
    $cartModel->insert($data);

    // Set a flag indicating the book is in the cart
    $bookModel = new Book_model();
    $bookModel->update($bookId, ['is_in_cart' => true]);

    // Redirect back to the book detail page
    return redirect()->to(base_url("books/bookDetail/{$bookId}"))->with('success', 'Book added to cart successfully.');
}
public function addToWishlist($bookId)
{
    // Check if user is logged in
    if (!session()->has('user_id')) {
        session()->setFlashdata('error', 'Please log in to add items to your wishlist.');

        return redirect()->to('books/loginRegister')->with('error', 'Please log in to add items to your wishlist.');
    }


    // Get user ID from session
    $userId = session()->get('user_id');

    // Save book to the wishlist
    $wishlistModel = new Wishlist_model();
    $data = [
        'user_id' => $userId,
        'book_id' => $bookId
    ];
    $wishlistModel->insert($data);

    // Set a flag indicating the book is in the wishlist
    $bookModel = new Book_model();
    $bookModel->update($bookId, ['is_in_wishlist' => true]);

    // Redirect back to the book detail page
    return redirect()->to(base_url("books/bookDetail/{$bookId}"))->with('success', 'Book added to wishlist successfully.');
}

public function cartCount()
    {
        // Check if user is logged in
        if (!session()->has('user_id')) {
            echo json_encode(['count' => 0]);
            return;
        }

        // Get user ID from session
        $userId = session()->get('user_id');

        // Get cart count for the user
        $cartModel = new Cart_model();
        $cartCount = $cartModel->where('user_id', $userId)->countAllResults();

        echo json_encode(['count' => $cartCount]);
    }
}