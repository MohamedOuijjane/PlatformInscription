<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateRegistrationsTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'auto_increment' => true
            ],
            'user_id' => [
                'type' => 'INT',
                'null' => false
            ],
            'exam_id' => [
                'type' => 'INT',
                'null' => false
            ],
            'registration_date' => [
                'type' => 'DATE',
                'null' => false
            ],
            'payment_reference' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => true
            ],
            'payment_status' => [
                'type' => 'ENUM',
                'constraint' => ['paid', 'pending', 'unpaid'],
                'default' => 'unpaid'
            ],
            'amount' => [
                'type' => 'FLOAT',
                'null' => true
            ],
            'payment_date' => [
                'type' => 'DATE',
                'null' => true
            ]
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('user_id', 'Users', 'id');
        $this->forge->addForeignKey('exam_id', 'Exams', 'id');
        $this->forge->createTable('Registrations');
    }

    public function down()
    {
        $this->forge->dropTable('Registrations');
    }
}
