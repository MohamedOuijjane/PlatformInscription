<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateExamsTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => ['type' => 'INT', 'auto_increment' => true],
            'level' => ['type' => 'ENUM', 'constraint' => ['A1', 'A2', 'B1', 'B2'], 'null' => false],
            'adresse' => ['type' => 'VARCHAR', 'constraint' => '255', 'null' => false],
            'ville' => ['type' => 'VARCHAR', 'constraint' => '100', 'null' => false],
            'exam_date' => ['type' => 'DATE', 'null' => false],
            'heure' => ['type' => 'TIME', 'null' => false],
            'start_date' => ['type' => 'DATE', 'null' => false],
            'end_date' => ['type' => 'DATE', 'null' => false],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('Exams');
    }

    public function down()
    {
        $this->forge->dropTable('Exams');
    }
}