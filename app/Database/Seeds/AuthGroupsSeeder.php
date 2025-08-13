<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class AuthGroupsSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'name'        => 'superuser',
                'description' => 'Administrator, punya semua akses'
            ],
            [
                'name'        => 'admin',
                'description' => 'Manajer, punya akses ke halaman admin'
            ],
            [
                'name'        => 'cs',
                'description' => 'Customer Service, punya akses ke halaman CS'
            ],
        ];

        $this->db->table('auth_groups')->insertBatch($data);
    }
}