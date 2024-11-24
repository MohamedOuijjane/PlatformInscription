<?php

namespace App\Models;

use CodeIgniter\Model;

class ExamModel extends Model
{
    protected $table = 'Exams';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'level', 'adresse', 'ville', 'exam_date', 'heure', 'start_date', 'end_date'
    ];
}
