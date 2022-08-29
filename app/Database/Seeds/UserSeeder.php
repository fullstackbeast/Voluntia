<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $model = new \App\Models\UserModel;

        $data = [
            'first_name'     => 'Toyyib',
            'last_name'     => 'Omolola',
            'email'    => 'admin@voluntia.com',
            'password' => 'password',
            'role_id' => 1
        ];

        $model->skipValidation(true)
            ->protect(false)
            ->insert($data);

        dd($model->errors());
    }
}
