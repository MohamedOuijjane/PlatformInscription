<?php

namespace App\Models;

use CodeIgniter\Model;

class PaymentModel extends Model
{
    protected $table = 'Payments';
    protected $primaryKey = 'id';
    protected $allowedFields = ['registration_id', 'amount', 'status', 'reference', 'payment_date'];
}
