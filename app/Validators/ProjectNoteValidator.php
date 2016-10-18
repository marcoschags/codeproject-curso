<?php
/**
 * Created by PhpStorm.
 * User: Marcos
 * Date: 22/09/2016
 * Time: 22:22
 */

namespace CodeProject\Vallidators;


use Prettus\Validator\LaravelValidator;

class ProjectNoteValidator extends LaravelValidator
{
    protected $rules =[
        'project_id' => 'required|integer',
        'title' => 'required',
        'note' => 'required',
    ];
}