<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddRoleToUser extends Migration
{
    public function up()
    {
        $this->forge->addColumn('user', [
            'role_id' => [
                'type'       => 'INT',
                'unsigned'   => true
            ]
        ]);

        $sql = "ALTER TABLE user
                ADD CONSTRAINT user_role_id_fk
				FOREIGN KEY (role_id) REFERENCES role(id)
				ON DELETE CASCADE ON UPDATE CASCADE";

        $this->db->simpleQuery($sql);
    }

    public function down()
    {
        $this->forge->dropForeignKey('user', 'user_role_id_fk');
        $this->forge->dropColumn('user', 'role_id');
    }
}
