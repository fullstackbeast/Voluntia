<?php

namespace App\Database\Seeds;

use App\Models\RoleModel;
use CodeIgniter\Database\Seeder;

class RoleSeeder extends Seeder
{
    public function run()
    {
        $model = new RoleModel;

        $data = [
            [
                'name' => 'admin'
            ],
            [
                'name' => 'volunteer'
            ],

        ];

        $model->protect(false)
            ->insertBatch($data);

        dd($model->errors());
    }
}
