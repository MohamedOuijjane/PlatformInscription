<?php

namespace App\Models;

use CodeIgniter\Model;

class RegistrationsModel extends Model
{
    protected $table = 'registrations';
    protected $primaryKey = 'id';
    protected $allowedFields = ['user_id', 'exam_id', 'registration_date', 'payment_reference', 'payment_status', 'payment_date', 'amount'];
}
