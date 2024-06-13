<?php
namespace App\Models;

use CodeIgniter\Model;

class Plan_model extends Model {
    protected $table = 'plans';
    protected $primaryKey = 'id'; // Assuming 'id' is the primary key
    protected $allowedFields = ['user_id','plan_id', 'plan_name', 'price', 'duration', 'description', 'start_date', 'expiry_date','is_active','rental_limit','return_duration'];
    
}