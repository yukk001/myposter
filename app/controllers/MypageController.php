<?php
/**
 * Created by PhpStorm.
 * User: yuzhaoxi
 * Date: 2017/6/22
 * Time: 15:51
 */

namespace app\controllers;
use Pheasant;
use Pheasant\DomainObject;
use Pheasant\Types;

class MypageController extends BaseController
{

    public function index()
    {
	
        return $this->render('mypage/index',['msg'=>1111111]);//, ['todos' => $todos]
    }

}
