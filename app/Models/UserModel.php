<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table      = 'users';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'username','firstname','lastname','address','phone_number','birth_date', 'email', 'password', 'CIN', 'role', 'created_at', 'updated_at'
    ];
}
