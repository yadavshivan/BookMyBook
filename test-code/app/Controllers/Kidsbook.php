<?php
namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;

class Kidsbook extends BaseController
{
    public function index_0to2year()
    {
        // Load the 0to2year view
        return view('books/kidsbook/0to2year');
    }

    public function index_3to5year()
    {
        // Load the 0to2year view
        return view('books/kidsbook/3to5year');
    }
}

