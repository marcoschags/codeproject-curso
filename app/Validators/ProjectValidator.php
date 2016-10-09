<?php
/**
 * Created by PhpStorm.
 * User: Marcos
 * Date: 22/09/2016
 * Time: 22:22
 */

namespace CodeProject\Vallidators;


use Prettus\Validator\LaravelValidator;

class ProjectValidator extends LaravelValidator
{
    protected $rules =[
        'owner_id' => 'required|integer',
        'client_id' => 'required|integer',
        'name' => 'required',
        'progress' => 'required',
        'status' => 'required',
        'due_date' => 'required',
    ];
}