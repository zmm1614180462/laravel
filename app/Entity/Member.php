<?php

namespace App\Entity;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    //将数据模型和数据库表名关联
    protected $table = 'member';
    //绑定主键  默认id
    protected $primaryKey = 'id';
    //是否维护时间戳 默认是true
    //public  $timestamps = 'false';
}
