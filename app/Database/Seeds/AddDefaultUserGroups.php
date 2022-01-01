<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class AddDefaultUserGroups extends Seeder
{
    public function run()
    {
        $groups = [
            [
                'name' => 'admin',
                'description' => 'admin'
            ],
            [
                'name' => 'member',
                'description' => 'member'
            ],
        ];

        foreach ($groups as $group) {
            $this->db->table('auth_groups')->insert($group);
        }
    }
}
