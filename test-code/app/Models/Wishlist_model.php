<?php

namespace App\Models;

use CodeIgniter\Model;

class Wishlist_model extends Model
{
    protected $table = 'wishlist';
    protected $primaryKey = 'id';
    protected $allowedFields = ['user_id', 'book_id'];

   //Fetch wishlist items with book details
   public function getWishlistItems($userId)
   {
       return $this->select('books.bname, books.b_id as book_id') // Specify table alias for book_id
                   ->join('books', 'books.b_id = wishlist.book_id')
                   ->where('wishlist.user_id', $userId)
                   ->findAll();
                   
   }
   

    

    public function addToWishlist($userId, $bookId)
    {
        // Check if the book is already in the wishlist for the user
        if ($this->isBookInWishlist($userId, $bookId)) {
            return false; // Book already exists in wishlist
        }

        // Add the book to the wishlist
        $wishlistData = [
            'user_id' => $userId,
            'book_id' => $bookId
        ];
        $this->insert($wishlistData);
        return true;
    }

    public function isBookInWishlist($userId, $bookId)
    {
        return $this->where('user_id', $userId)
                    ->where('book_id', $bookId)
                    ->countAllResults() > 0;
    }
    public function removeItemByName($itemName)
    {
        // Join the 'books' table to fetch the book_id associated with the book name
        $wishlistItem = $this->join('books', 'books.b_id = wishlist.book_id')
                             ->where('books.bname', $itemName)
                             ->first();
    
        // If the wishlist item is found, remove it from the wishlist
        if ($wishlistItem) {
            return $this->where('book_id', $wishlistItem['book_id'])->delete();
        }
    
        return false; // Item not found in wishlist
    }
    
}
