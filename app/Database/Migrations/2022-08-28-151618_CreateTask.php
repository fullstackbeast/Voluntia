<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTask extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'unsigned'       => true,
                'auto_increment' => true
            ],
            'title' => [
                'type' => 'VARCHAR',
                'constraint' => '128'
            ],
            'is_completed' => [
                'type'    => 'BOOLEAN',
                'null'    => false,
                'default' => false
            ],
            'completed_at' => [
                'type'     => 'DATETIME',
                'null'     => true,
                'default'  => null
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
            ->addUniqueKey('title');

        $this->forge->createTable('task');
    }

    public function down()
    {
        $this->forge->dropTable('task');
    }
}
