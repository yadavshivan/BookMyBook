<?php

namespace App\Controllers;

use App\Models\Membershipplan_model;
use App\Models\Wishlist_model;
use CodeIgniter\Controller;

class Membership_plan extends BaseController
{
   public function index()
{
    // Check if user is logged in
    if (!session()->has('user_id')) {
        session()->setFlashdata('error', 'Please log in to view your wishlist.');
        return redirect()->to('books/loginRegister')->with('error', 'Please log in to view your wishlist.');
    }

    // Get the user ID from the session
    $userId = session('user_id');

    // Load the Wishlist_model
    $wishlistModel = new Wishlist_model();

    // Get wishlist items for the logged-in user
    $wishlistItems = $wishlistModel->getWishlistItems($userId);

    // Pass the user ID and wishlist items to the view
    $data = [
        'userId' => $userId,
        'wishlistItems' => $wishlistItems,
    ];

    return view('membership_plane', $data);
}

   
}
