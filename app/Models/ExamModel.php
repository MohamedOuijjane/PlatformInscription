<?php

namespace App\Models;

use CodeIgniter\Model;

class ExamModel extends Model
{
    protected $table = 'Exams';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'name', 'level', 'location', 'exam_date', 'start_date', 'end_date'
    ];
}
