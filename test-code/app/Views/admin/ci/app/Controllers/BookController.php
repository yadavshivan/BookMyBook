<?php

namespace App\Controllers;
use App\Models\Category_model;
use App\Models\Subcategory_model;
use App\Models\Book_model;
use App\Models\Wishlist_model;
use App\Models\UserModel;
use App\Models\Cart_model;
class BookController extends BaseController
{
    public function index()
    {
         $categoryModel = new Category_model();
        $subcategoryModel = new Subcategory_model();

        // Fetch all categories and their subcategories from the database
        $categories = $categoryModel->findAll();
        $data['categories'] = [];

        foreach ($categories as $category) {
            $category['subcategories'] = $subcategoryModel->where('c_id', $category['c_id'])->findAll();
            $data['categories'][] = $category;
        }

        // Pass categories data to the view
        return view('main_page', $data);
    }
    //Changes done to fetch data dynamically
    public function index_home()
    {
         $categoryModel = new Category_model();
        $subcategoryModel = new Subcategory_model();

        // Fetch all categories and their subcategories from the database
        $categories = $categoryModel->findAll();
        $data['categories'] = [];

        foreach ($categories as $category) {
            $category['subcategories'] = $subcategoryModel->where('c_id', $category['c_id'])->findAll();
            $data['categories'][] = $category;
        }

        // Pass categories data to the view
        return view('main_page', $data);
    }

    public function About()
    {
         $categoryModel = new Category_model();
        $subcategoryModel = new Subcategory_model();

        // Fetch all categories and their subcategories from the database
        $categories = $categoryModel->findAll();
        $data['categories'] = [];

        foreach ($categories as $category) {
            $category['subcategories'] = $subcategoryModel->where('c_id', $category['c_id'])->findAll();
            $data['categories'][] = $category;
        }

        
        return view('books/about', $data);
    }
    public function HowItWorks()
    {

        $categoryModel = new Category_model();
        $subcategoryModel = new Subcategory_model();

        // Fetch all categories and their subcategories from the database
        $categories = $categoryModel->findAll();
        $data['categories'] = [];

        foreach ($categories as $category) {
            $category['subcategories'] = $subcategoryModel->where('c_id', $category['c_id'])->findAll();
            $data['categories'][] = $category;
        }

        return view('books/howitWorks', $data);
    }
   
public function search()
{
    $this->book_model = new \App\Models\Book_model(); // Instantiate the Book_model
    $keyword = $this->request->getPost('keyword');
    $books = $this->book_model->searchBooks($keyword);

    // Fetch categories and subcategories
    $categoryModel = new Category_model();
    $subcategoryModel = new Subcategory_model();
    $categories = $categoryModel->findAll();
    $data['categories'] = [];

    foreach ($categories as $category) {
        $category['subcategories'] = $subcategoryModel->where('c_id', $category['c_id'])->findAll();
        $data['categories'][] = $category;
    }

    // Check if the books are already in the cart and wishlist for the current user
    $userId = session()->get('user_id');
    $cartModel = new Cart_model();
    $wishlistModel = new Wishlist_model();
    $data['is_in_cart'] = [];
    $data['is_in_wishlist'] = [];

    foreach ($books as $book) {
        $is_in_cart = $cartModel->isBookInCart($userId, $book['b_id']);
        $is_in_wishlist = $wishlistModel->isBookInWishlist($userId, $book['b_id']);
        $data['is_in_cart'][$book['b_id']] = $is_in_cart;
        $data['is_in_wishlist'][$book['b_id']] = $is_in_wishlist;
    }

    // Pass categories, subcategories, and search results to the view
    return view('books/search', ['books' => $books, 'categories' => $data['categories'], 'is_in_cart' => $data['is_in_cart'], 'is_in_wishlist' => $data['is_in_wishlist']]);
}




    
}
