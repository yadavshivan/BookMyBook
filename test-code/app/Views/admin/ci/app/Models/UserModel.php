<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $allowedFields = ['name', 'username', 'password', 'mobile_no','address']; // Add 'name' and 'mobile_no' to allowed fields
}
