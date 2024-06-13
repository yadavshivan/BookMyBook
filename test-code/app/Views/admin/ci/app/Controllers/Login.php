<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;

class Login extends Controller
{
    public function index()
    {
        return view('books/login');
    }

    public function authenticate()
    {
        $model = new UserModel();

        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $user = $model->where('username', $username)->first();

        if ($user && $password === $user['password']) {
            // Set session data for the logged-in user
            $userData = [
                'user_id' => $user['id'],
                'username' => $user['username'],
                'logged_in' => true,
            ];

            session()->set($userData);
            session()->setFlashdata('success', 'Login successful!');

            return redirect()->to('books/loggedin');
        } else {
            // Failed login
            // Set a flash message to display on failed login
            session()->setFlashdata('error', 'Invalid username or password. Please register yourself.');

            return redirect()->to('books/login');
        }
    }
    public function loggedin()
{
    return view('books/loggedin');
}

}
