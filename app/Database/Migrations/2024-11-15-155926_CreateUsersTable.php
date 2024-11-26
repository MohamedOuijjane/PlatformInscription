<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateUsersTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'auto_increment' => true
            ],
            'username' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'unique' => true,
                'null' => false
            ],
            'firstname' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => false
            ],
            'lastname' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => false
            ],
            'email' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'unique' => true,
                'null' => false
            ],
            'password' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => false
            ],
            'phone_number' => [
                'type' => 'VARCHAR',
                'constraint' => '20',
                'null' => true
            ],
            'address' => [
                'type' => 'TEXT',
                'null' => true
            ],
            'birth_date' => [
                'type' => 'DATE',
                'null' => true
            ],
            'role' => [
                'type' => 'ENUM',
                'constraint' => ['admin', 'client'],
                'default' => 'client'
            ],
            'created_at' => [
                'type' => 'TIMESTAMP',
                'null' => true,
                'default' => null
            ],
            'updated_at' => [
                'type' => 'TIMESTAMP',
                'null' => true,
                'default' => null,
                'on update' => 'CURRENT_TIMESTAMP'
            ],
            'CIN' => [
                'type' => 'VARCHAR',
                'constraint' => '20',
                'null' => true
            ],
        ]);

        // Définir la clé primaire
        $this->forge->addKey('id', true);

        // Ajouter une contrainte unique sur les colonnes username et email
        $this->forge->addUniqueKey('username');
        $this->forge->addUniqueKey('email');

        // Créer la table
        $this->forge->createTable('Users');
    }

    public function down()
    {
        // Supprimer la table
        $this->forge->dropTable('Users');
    }
}
