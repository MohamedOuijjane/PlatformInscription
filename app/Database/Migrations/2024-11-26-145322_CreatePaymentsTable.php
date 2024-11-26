<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreatePaymentsTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => ['type' => 'INT', 'auto_increment' => true],
            'registration_id' => ['type' => 'INT', 'null' => false],
            'amount' => ['type' => 'DECIMAL', 'constraint' => '10,2', 'null' => false],
            'status' => ['type' => 'ENUM', 'constraint' => ['paid', 'pending', 'unpaid'], 'default' => 'pending'],
            'reference' => ['type' => 'VARCHAR', 'constraint' => '100', 'null' => false],
            'payment_date' => ['type' => 'DATE', 'null' => true]
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('registration_id', 'Registrations', 'id');
        $this->forge->createTable('Payments');
    }

    public function down()
    {
        $this->forge->dropTable('Payments');
    }
}
