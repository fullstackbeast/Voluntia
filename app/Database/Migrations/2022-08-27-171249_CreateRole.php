<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateRole extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'unsigned'       => true,
                'auto_increment' => true
            ],
            'name' => [
                'type'           => 'VARCHAR',
                'constraint'     => '128',
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
            ->addUniqueKey('name');

        $this->forge->createTable('role');
    }

    public function down()
    {
        $this->forge->dropTable('role');
    }
}
