<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateUser extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'unsigned'       => true,
                'auto_increment' => true
            ],
            'first_name' => [
                'type'           => 'VARCHAR',
                'constraint'     => '128',
            ],
            'last_name' => [
                'type'           => 'VARCHAR',
                'constraint'     => '128',
            ],
            'email' => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
            ],
            'password_hash' => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
            ],
            'created_at' => [
                'type'     => 'DATETIME',
                'null'     => true,
                'default'  => null
            ],
            'updated_at' => [
                'type'     => 'DATETIME',
                'null'     => true,
                'default'  => null
            ]
        ]);

        $this->forge->addPrimaryKey('id')
            ->addUniqueKey('email');

        $this->forge->createTable('user');
    }

    public function down()
    {
        $this->forge->dropTable('user');
    }
}
