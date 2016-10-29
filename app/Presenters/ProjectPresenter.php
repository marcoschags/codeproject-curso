<?php
/**
 * Created by PhpStorm.
 * User: marco
 * Date: 29/10/2016
 * Time: 07:44
 */

namespace CodeProject\Presenters;

use CodeProject\Transformers\ProjectTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

class ProjectPresenter extends FractalPresenter
{
    public function getTransformer()
    {
       return new ProjectTransformer();
    }
}