<?php
/**
 * Created by PhpStorm.
 * User: Marcos
 * Date: 22/09/2016
 * Time: 22:22
 */

namespace CodeProject\Vallidators;


use Prettus\Validator\LaravelValidator;

class ClientValidator extends LaravelValidator
{
    protected $rules =[
        'name' => 'required|max:255',
        'responsible' => 'required|max:255',
        'email' => 'required|email',
        'phone' => 'required',
        'address' => 'required',
    ];
}