<?php

namespace App\Models;

use CodeIgniter\Model;//seharusnya I besar

class Usermodel extends Model
{
    protected $table = 'userss';
    protected $allowedFields = ['name', 'email', 'created_at'];
}
