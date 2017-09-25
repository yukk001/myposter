<?php
namespace app\controllers;
use Pheasant;
use Pheasant\DomainObject;
use Pheasant\Types;

class IndexController extends BaseController
{

    public function index()
    {
        return $this->render('index/index',['msg'=>1111111]);//, ['todos' => $todos]
    }

}
