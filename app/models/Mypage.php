<?php
/**
 * Created by PhpStorm.
 * User: yuzhaoxi
 * Date: 2017/6/22
 * Time: 15:54
 */

namespace app\models;

use Pheasant\DomainObject;
use Pheasant\Types;

class Mypage extends DomainObject
{
    public function properties()
    {
        return array(
            'id'   => new Types\SequenceType(),
            'title'    => new Types\StringType(255, 'required'),
            'status'   => new Types\BooleanType(),
        );
    }
}