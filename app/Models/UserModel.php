<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $allowedFields = ['username', 'email','phone_number', 'password', 'role', 'created_at', 'updated_at'];
    protected $useTimestamps = true;
    protected $returnType = 'array'; // This makes the model work with arrays
}

