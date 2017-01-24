<?php

namespace App\Entity;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //将数据模型和数据库表名关联
    protected $table = 'category';
    //绑定主键  默认id
    protected $primaryKey = 'id';

}
