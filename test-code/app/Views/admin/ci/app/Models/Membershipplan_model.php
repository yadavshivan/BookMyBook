<?php

namespace App\Models;

use CodeIgniter\Model;

class Membershipplan_model extends Model
{
    protected $table = 'membershipplans';
    protected $primaryKey = 'plan_id';
    protected $allowedFields = ['plan_name', 'price', 'duration', 'description', 'created_at', 'updated_at'];
}
