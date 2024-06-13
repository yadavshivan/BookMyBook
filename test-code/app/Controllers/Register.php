<?php
namespace App\Controllers;

use App\Controllers\BaseController;

class Register extends BaseController
{
    public function index()
    {
        return view('books/register');
    }

    public function save()
    {
        // Validation rules
        $validationRules = [
            'username' => 'required|valid_email',
            'password' => 'required|min_length[4]',
        ];

        if (!$this->validate($validationRules)) {
            // Validation failed
            return redirect()->to(base_url('books/register'))->withInput()->with('errors', $this->validator->getErrors());
        }

        // Validation passed, proceed with saving data
        $model = new \App\Models\UserModel(); // your actual model class
        $data = [
            'username' => $this->request->getPost('username'),
            'password' => $this->request->getPost('password'),
        ];

        $model->insert($data);
        // If registration is successful
        $userIsRegistered = true;

        if ($userIsRegistered) {
            // Set a success flash message for the registration
            session()->setFlashdata('success', 'Registration successful! Please log in.');

            return redirect()->to(base_url('books/login'));
        }
    }
    
}
?>
