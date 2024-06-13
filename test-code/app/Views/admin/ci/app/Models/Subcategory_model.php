<?php
namespace App\Models;

use CodeIgniter\Model;

class Subcategory_model extends Model {
    protected $table = 'subcategories';
    protected $primaryKey = 's_id';
    protected $allowedFields = ['c_id', 'sub_title', 'number_of_books', 'created_at'];
}