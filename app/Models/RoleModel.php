<?php
namespace App\Models;
class RoleModel extends \CodeIgniter\Model
{

    protected $table = 'role';

    protected $returnType = 'App\Entities\Role';

    protected $useTimestamps = true;

    protected $validationRules = [
        'name' => 'required'
    ];

    protected $validationMessages = [
        'name' => [
            'required' => 'Enter a value for name'
        ]
    ];

}