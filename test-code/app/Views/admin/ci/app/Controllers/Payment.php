<?php

namespace App\Controllers;


use CodeIgniter\Controller;

class Payment extends BaseController
{
    public function index()
    {
        return view('books/payment'); 
    }
   
}
