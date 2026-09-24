<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Product extends Seeder
{
    public function run()
    {
        $data = [
            [
                'name'  => 'Laptop',
                'price' => '15000000',
            ],
            [
                'name'  => 'Smartphone',
                'price' => '5000000',
            ],
            [
                'name'  => 'Headphones',
                'price' => '750000',
            ],
        ];

        $this->db->table('products')->insertBatch($data);
    }
}
