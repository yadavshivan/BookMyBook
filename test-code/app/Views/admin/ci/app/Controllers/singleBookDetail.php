<?php

namespace App\Controllers;
use App\Models\UserModel;
use CodeIgniter\Controller;
use App\Models\Book_model;
use App\Models\Cart_model;
use App\Models\Category_model;
use App\Models\Subcategory_model;
use App\Models\Wishlist_model;


class SingleBookDetail extends BaseController
{
    public function index()
    {
        // Retrieve book details from URL parameters
        $data = [
            'bookId' => $this->request->getVar('id'),
            'bookName' => urldecode($this->request->getVar('bname')),
            'author' => urldecode($this->request->getVar('author')),
            'publisher' => urldecode($this->request->getVar('publisher')),
            'quantityAvailable' => $this->request->getVar('quantity'),
            'description' => urldecode($this->request->getVar('description')),
            'imagePath' => $this->request->getVar('image_path')
        ];

        // Pass the book details to the view
        return view('books/singleBookDetail', $data);
    }
   
}
