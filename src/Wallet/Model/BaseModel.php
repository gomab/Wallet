<?php
/**
 * Created by PhpStorm.
 * User: gomab
 * Date: 4/19/18
 * Time: 3:19 PM
 */

namespace Wallet\Model;


use RedBeanPHP\SimpleModel;

class BaseModel extends SimpleModel
{
    public $slug;
    public $createdAt;
    public $updatedAt;
}