<?php

namespace App\Models;

use CodeIgniter\Model;

class RentedBooksModel extends Model
{
    protected $table = 'rented_books';

    protected $primaryKey = 'id';

    protected $allowedFields = ['user_id', 'book_id', 'rented_at', 'return_due_date', 'returned','book_name'];

    public function isBookRented($userId, $bookId)
    {
        // Check if the given book is rented by the specified user
        $rentedBook = $this->where('user_id', $userId)
                           ->where('book_id', $bookId)
                           ->where('returned', 0) // Check if 'returned' column has value 0
                           ->first();

        return $rentedBook !== null;
    }
}