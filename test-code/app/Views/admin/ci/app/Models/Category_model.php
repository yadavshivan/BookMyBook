<?php
namespace App\Models;

use CodeIgniter\Model;

class Category_model extends Model {
    protected $table = 'categories';
    protected $primaryKey = 'c_id';
    protected $allowedFields = ['title', 'number_of_books', 'created_at'];
}