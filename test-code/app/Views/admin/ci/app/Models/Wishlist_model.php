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
}
