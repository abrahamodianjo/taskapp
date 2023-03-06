<?php 

namespace App\Models;

Class TaskModel extends \CodeIgniter\Model
{
    protected $table = 'task';

    protected $allowedFields = ['description'];

    protected $validationRules = [
        'description' => 'required'
    ];

    protected $validationMessages = [
        'description' =>[
            'required' => 'please enter a description'
        ]
    ];
}