<?php

namespace App\Controllers;

use App\Models\Category_model;
use App\Models\Subcategory_model;
use App\Models\Book_model;
use App\Models\Membershipplan_model;


use CodeIgniter\Controller;

class Admin extends Controller
{
     
    public function index()
{
    // Comment out complex code sections here
    // Fetch counts
    /*
    $bookCount = $this->getBookCount();
    $categoryCount = $this->getCategoryCount();
    $subcategoryCount = $this->getSubcategoryCount();
    $membershipPlanCount = $this->getMembershipPlanCount();

    // Load the view with counts
    return view('admin/adminMain_Page', compact('bookCount', 'categoryCount', 'subcategoryCount', 'membershipPlanCount'));
    */
    
    // Load the view without counts for now
    return view('admin/adminMain_Page');
}

     
     public function addCategory() {
       
        return view('admin/addCategory');
    }


    public function processAddCategory() {
       
        $categoryModel = new Category_model();

    $data = [
        'title' => $this->request->getPost('title'),
        'number_of_books' => $this->request->getPost('number_of_books'),
        'created_date' => date('Y-m-d H:i:s'),
    ];

    // Perform necessary validations
    $validation = \Config\Services::validation();
    $validation->setRules([
        'title' => 'required',
        'number_of_books' => 'required|numeric',
    ]);

    if (!$validation->run($data)) {
        // Validation failed
        return redirect()->to('admin/addCategory')->withInput()->with('errors', $validation->getErrors());
    }

    // Try to insert data
    try {
        $categoryModel->insert($data);
    } catch (\Exception $e) {
        // Handle database-related errors
        return redirect()->to('admin/addCategory')->withInput()->with('error', 'Failed to insert data. ' . $e->getMessage());
    }

    // Redirect to the addCategory page or any other page based on the result
    return redirect()->to('admin/addCategory')->with('success', 'Data inserted successfully.');


    }
    public function addSubcategory() {
        $categoryModel = new Category_model();
    $data['categories'] = $categoryModel->findAll(); // Adjust this based on your data retrieval logic

    return view('admin/addSubcategory', $data);

    }

    public function processAddSubcategory() {
        $subcategoryModel = new Subcategory_model();
    
        $data = [
            'c_id' => $this->request->getPost('c_id'),
            'sub_title' => $this->request->getPost('sub_title'),
            'number_of_books' => $this->request->getPost('number_of_books'),
            'created_at' => date('Y-m-d H:i:s'),
        ];
    
        // Perform necessary validations
        $validation = \Config\Services::validation();
        $validation->setRules([
            'c_id' => 'required', // Assuming this is the input field name for category_id
            'sub_title' => 'required',
            'number_of_books' => 'required|numeric',
        ]);
    
        if (!$validation->run($data)) {
            // Validation failed
            return redirect()->to('admin/addSubcategory')->withInput()->with('errors', $validation->getErrors());
        }
    
        // Try to insert data
        try {
            $subcategoryModel->insert($data);
        } catch (\Exception $e) {
            // Handle database-related errors
            return redirect()->to('admin/addSubcategory')->withInput()->with('error', 'Failed to insert data. ' . $e->getMessage());
        }
    
        // Redirect to the addSubcategory page or any other page based on the result
        return redirect()->to('admin/addSubcategory')->with('success', 'Data inserted successfully.');
    }
    public function addBook() {

        $categoryModel = new Category_model();
        $data['categories'] = $categoryModel->findAll(); 
        // For example, fetch categories for dropdown
        //$data['categories'] = $this->your_category_model->getAllCategories();

        $bookModel = new Book_model();
        $data['books'] = $bookModel->findAll(); // Fetch all books


        // Load the view with the fetched data
        return view('admin/addBook', $data);
    }

    // In your Admin controller
public function getSubcategories($categoryId) {
    $subcategoryModel = new Subcategory_model();
    $subcategories = $subcategoryModel->where('c_id', $categoryId)->findAll();

    return $this->response->setJSON($subcategories);
}


  
/*Code to store original path but it is not checked */
public function processAddBook() {
    // Handle the form submission logic for adding a book here
    // Retrieve form data using $this->request->getPost('input_name')

    // Handle image upload
    $imagePath = '';

    // Check if the file was uploaded successfully
    if ($imageFile = $this->request->getFile('image_path')) {
        // Get the original file name provided by the user
        $originalName = $imageFile->getName();

        // Move the uploaded file to the desired directory with the original name
        $imageFile->move(ROOTPATH . 'images', $originalName);

        // Set the image path to store in the database
        $imagePath = 'images/' . $originalName;
    }
    // Prepare data for insertion
    $data = [
        's_id' => $this->request->getPost('s_id'),
        'bname' => $this->request->getPost('bname'),
        'author' => $this->request->getPost('author'),
        'publisher' => $this->request->getPost('publisher'),
        'quantity_available' => $this->request->getPost('quantity_available'),
        'description' => $this->request->getPost('description'),
        'image_path' => $imagePath,
        'created_at' => date('Y-m-d H:i:s'),
        // Add other fields as needed
    ];

    // Validate the data if required

    // Try to insert data
    try {
        $bookModel = new Book_model();
        $bookModel->insert($data);
    } catch (\Exception $e) {
        // Handle database-related errors
        return redirect()->to('admin/addBook')->withInput()->with('error', 'Failed to insert data. ' . $e->getMessage());
    }


    // Redirect to the addBook page or any other page based on the result
    return redirect()->to('admin/addBook')->with('success', 'Data inserted successfully.');

    
}
//edit boko

    // Admin controller
    //Edit book 
public function editBook($bookId) {
    $bookModel = new Book_model();
    $book = $bookModel->getBookDetails($bookId);
    
    return view('admin/editBook', ['book' => $book]);
}

    
    




    //Update book
    public function updateBook($bookId)
    {
        // Ensure that the form was submitted
        if ($this->request->getMethod() === 'post') {
            // Fetch the book model
            $bookModel = new Book_model();

            // Find the book by ID
            $book = $bookModel->find($bookId);

            // Ensure the book exists
            if ($book) {
                // Update the book data
                $bookData = [
                    // Update book fields based on form input
                    'bname' => $this->request->getPost('bname'),
                    'author' => $this->request->getPost('author'),
                    'publisher' => $this->request->getPost('publisher'),
                    'quantity_available' => $this->request->getPost('quantity_available'),
                    'description' => $this->request->getPost('description'),
                    //'image_path' => $this->request->getPost('image_path'),
                    'created_at' => $this->request->getPost('created_at'),
                    // Add other fields as needed
                ];

                 // Handle image upload
    $newImage = $this->request->getFile('image_path');
    if ($newImage->isValid() && !$newImage->hasMoved()) {
        // Generate a new file name or use existing logic if any
        $imageName = $newImage->getRandomName();
        // Move the uploaded file to the desired directory
        $newImage->move('./path/to/upload/directory', $imageName);
        // Update the image path in the data array
        $bookData['image_path'] = '/path/to/upload/directory/' . $imageName;
    }

                // Update the book in the database
                $bookModel->update($bookId, $bookData);

                // Redirect to a success page or display a success message
                return redirect()->to('admin/view_Books')->with('success', 'Book updated successfully.');
            } else {
                // Redirect or show an error message if the book does not exist
                return redirect()->back()->withInput()->with('error', 'Book not found.');
            }
        } else {
            // Redirect or show an error message if the form was not submitted
            return redirect()->back()->withInput()->with('error', 'Invalid request.');
        }
    }
//Delte book 
public function deleteBook($bookId)
{
    $bookModel = new Book_model();
    
    // Load the book by ID
    $book = $bookModel->find($bookId);
    
    if ($book) {
        // Delete the book
        $bookModel->delete($bookId);
        // Redirect or show a success message
        return redirect()->to('admin/addBook')->with('success', 'Book deleted successfully.');
    } else {
        // Book not found, redirect or show an error message
        return redirect()->to('admin/addBook')->with('error', 'Book not found.');
    }
}

//viewBooks 
public function viewBooks()
    {
        $bookModel = new Book_model();
        
        // Fetch all books from the database
        $books = $bookModel->findAll();

         $categoryModel = new Category_model();
    $categories = $categoryModel->findAll();
        // Pass the book data to the view
        //return view('admin/view_Books', ['books' => $books]);
        // Pass both books and categories to the view
    return view('admin/view_Books', ['books' => $books, 'categories' => $categories]);
    }
//Function to get bookd by subcategories 
    
public function getBooksBySubcategory($subcategoryId) {
    $bookModel = new Book_model();
    $books = $bookModel->where('s_id', $subcategoryId)->findAll();

    return $this->response->setJSON($books);
}


   
public function addMembershipPlan()
{
    // Validate form submission
    if ($this->request->getMethod() === 'post') {
        $rules = [
            'plan_name' => 'required',
            'price' => 'required|numeric',
            'duration' => 'required|integer',
            'description' => 'required',
        ];

        if ($this->validate($rules)) {
            $membershipPlanModel = new Membershipplan_model();

            // Prepare data to insert into database
            $data = [
                'plan_name' => $this->request->getVar('plan_name'),
                'price' => $this->request->getVar('price'),
                'duration' => $this->request->getVar('duration'),
                'description' => $this->request->getVar('description'),
            ];

            // Insert data into database
            if ($membershipPlanModel->save($data)) {
                // Redirect to a success page or reload the page
                return redirect()->to(base_url('admin/addMembershipPlan'))->with('success', 'Membership plan added successfully.');
            } else {
                // Return an error message if the insertion fails
                return redirect()->to(base_url('admin/addMembershipPlan'))->with('error', 'Failed to add membership plan. Please try again.');
            }
        } else {
            // Return validation errors to the view
            return view('admin/addMembershipPlan', ['validation' => $this->validator]);
        }
    }

    // Load the add membership plan form view
    return view('admin/addMembershipPlan');
}

public function viewMembershipPlan()
    {
        $membershipPlanModel = new Membershipplan_model();
        $data['membershipPlans'] = $membershipPlanModel->findAll();
        
        return view('admin/viewMembershipPlan', $data);
    }


    //Editi membership plan
     // Edit membership plan
     public function editMembershipPlan($planId)
     {
         $membershipPlanModel = new Membershipplan_model();
 
         // Find the plan by ID
         $plan = $membershipPlanModel->find($planId);
 
         if (!$plan) {
             return redirect()->back()->with('error', 'Membership plan not found.');
         }
 
         // Pass the plan data to the view
         return view('admin/editMembershipPlan', ['plan' => $plan]);
     }

     //Update membership plan 
     public function updateMembershipPlan($planId)
    {
        // Load the model
        $membershipPlanModel = new Membershipplan_model();

        // Find the plan by ID
        $plan = $membershipPlanModel->find($planId);

        // If the plan doesn't exist, redirect back with an error message
        if (!$plan) {
            return redirect()->back()->with('error', 'Membership plan not found.');
        }

        // Validate the form data
        $validationRules = [
            'plan_name' => 'required',
            'price' => 'required|numeric',
            'duration' => 'required|integer',
            'description' => 'required',
        ];

        if (!$this->validate($validationRules)) {
            // If validation fails, redirect back with validation errors
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        // Get the form data
        $formData = [
            'plan_name' => $this->request->getPost('plan_name'),
            'price' => $this->request->getPost('price'),
            'duration' => $this->request->getPost('duration'),
            'description' => $this->request->getPost('description'),
        ];

        // Update the plan data
        $membershipPlanModel->update($planId, $formData);

        // Redirect to the viewMembershipPlan page with a success message
        return redirect()->to('admin/viewMembershipPlan')->with('success', 'Membership plan updated successfully.');
    }

    // Delete membership plan
    public function deleteMembershipPlan($planId)
    {
        // Load the model
        $membershipPlanModel = new Membershipplan_model();

        // Check if the plan exists
        $plan = $membershipPlanModel->find($planId);
        if (!$plan) {
            return redirect()->back()->with('error', 'Membership plan not found.');
        }

        // Delete the plan
        $membershipPlanModel->delete($planId);

        // Redirect to the viewMembershipPlans page with a success message
        return redirect()->to('admin/viewMembershipPlan')->with('success', 'Membership plan deleted successfully.');
    }

    // Helper methods for fetching counts
private function getBookCount() {
    $bookModel = new Book_model();
    return $bookModel->countAll();
}

private function getCategoryCount() {
    $categoryModel = new Category_model();
    return $categoryModel->countAll();
}

private function getSubcategoryCount() {
    $subcategoryModel = new Subcategory_model();
    return $subcategoryModel->countAll();
}

private function getMembershipPlanCount() {
   
        $membershipPlanModel = new Membershipplan_model();
        return $membershipPlanModel->countAll();
    }

    
}