<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AlterTableUsers extends Migration
{
    public function up()
    {
        $this->forge->addColumn('users', [
            'fullname' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
                'null' => true,
                'after' => 'username'
            ],
            'phone' => [
                'type' => 'VARCHAR',
                'constraint' => 20,
                'null' => true,
                'after' => 'fullname'
            ],
            'address' => [
                'type' => 'TEXT',
                'null' => true,
                'after' => 'phone'
            ],
            'photo' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => true,
                'after' => 'address'
            ]
        ]);
    }

    public function down()
    {
        // drop new columns
		$this->forge->dropColumn('users', ['fullname', 'phone', 'address', 'photo']);
    }
}
