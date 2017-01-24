<?php

namespace App\Entity;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //将数据模型和数据库表名关联
    protected $table = 'product';
    //绑定主键  默认id
    protected $primaryKey = 'id';

}
