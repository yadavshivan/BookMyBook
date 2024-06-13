<?php
namespace App\Models;

use CodeIgniter\Model;

class Book_model extends Model {
    protected $table = 'books';
    protected $primaryKey = 'b_id';
    protected $allowedFields = ['s_id', 'bname', 'author', 'publisher', 'quantity_available', 'description', 'image_path', 'created_at', 'is_in_cart', 'is_in_wishlist'];

    public function getBooksBySubcategory($subcategoryId) {
        return $this->where('s_id', $subcategoryId)->findAll();
    }

    //This is to retrive all book data with category and subcategory is firslty used for editBOok
    public function getBookDetails($bookId) {
        return $this->select('books.*, subcategories.*, categories.*')
                    ->join('subcategories', 'subcategories.s_id = books.s_id')
                    ->join('categories', 'categories.c_id = subcategories.c_id')
                    ->where('books.b_id', $bookId)
                    ->first();
    }
    

    public function getBookById($b_id)
    {
        return $this->find($b_id);
    }


 // Method to search for books based on keyword
    public function searchBooks($keyword)
    {
        return $this->like('bname', $keyword)
                    ->orWhere('author', $keyword)
                    ->orWhere('publisher', $keyword)
                    ->findAll();
    }

}