<?php

namespace App\Models;

use CodeIgniter\Model;

class Cart_model extends Model
{
    protected $table = 'cart';
    protected $primaryKey = 'id';
    protected $allowedFields = ['user_id', 'book_id']; // Remove 'is_in_cart' field if not needed

  
   


   
    public function addToCart($userId, $bookId)
    {
        // Check if the book is already in the cart for the user
        if ($this->isBookInCart($userId, $bookId)) {
            return false; // Book already exists in cart
        }

        // Add the book to the cart
        $cartData = [
            'user_id' => $userId,
            'book_id' => $bookId
        ];
        $this->insert($cartData);
        return true;
    }

    public function isBookInCart($userId, $bookId)
    {
        return $this->where('user_id', $userId)
                    ->where('book_id', $bookId)
                    ->countAllResults() > 0;
    }
 

   public function getCartItemsWithBookDetails($userId)
   {
       return $this->select('books.bname, books.b_id as book_id')
                   ->join('books', 'books.b_id = cart.book_id')
                   ->where('cart.user_id', $userId)
                   ->findAll();
   }
   

  
   public function removeItemById($itemId)
    {
        // Join the 'books' table to fetch the book_id associated with the book name
        $cartItems = $this->join('books', 'books.b_id = cart.book_id')
                             ->where('books.bname', $itemId)
                             ->first();
    
        if ($cartItems) {
            return $this->where('book_id', $cartItems['book_id'])->delete();
        }
    
        return false; 
    }
    
   
}
