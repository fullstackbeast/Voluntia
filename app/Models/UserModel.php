<?php

namespace App\Models;

use App\Entities\SelectOption;

class UserModel extends \CodeIgniter\Model
{
    protected $table = 'user';

    protected $allowedFields = ['first_name', 'last_name', 'email', 'password', 'role_id'];

    protected $returnType = 'App\Entities\User';

    protected $useTimestamps = true;

    protected $validationRules = [
        'first_name' => 'required',
        'last_name' => 'required',
        'email' => 'required|valid_email|is_unique[user.email]',
        'password' => 'required',
    ];

    protected $validationMessages = [
        'email' => [
            'is_unique' => 'User.email.is_unique'
        ]
    ];

    protected $beforeInsert = ['hashPassword'];

    protected $beforeUpdate = ['hashPassword'];

    protected function hashPassword(array $data)
    {
        if (isset($data['data']['password'])) {

            $data['data']['password_hash'] = password_hash($data['data']['password'], PASSWORD_DEFAULT);

            unset($data['data']['password']);
        }

        return $data;
    }

    public function findByEmail($email)
    {
        return $this->where('email', $email)
            ->first();
    }

    public function getAllVolunteersPaginated()
    {
        return $this->where('role_id', 2)
            ->paginate(10);
    }

    public function getVolunteersAsOptions ()
    {
        $query = $this->where('role_id', '2')->paginate(10);

        $options = [];

        foreach ($query as $item)
        {
            $option = new SelectOption;
            $option->value = $item->id;
            $option->text = $item->first_name.' '.$item->last_name;

            array_push($options,$option);
        }

        return $options;
    }

    public function getTopVolunteers()
    {
        $volunteers = $this->where('role_id', 2)
            ->join('task', 'task.user_id = user.id')
            ->selectCount('user.id')
            ->paginate(5);

        return $volunteers;
    }


}