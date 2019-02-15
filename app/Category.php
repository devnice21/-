<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //เลือกตาราง Category
    protected $table = 'categories';
    //เลือก fill id
    protected $primaryKey = 'id';
    //เลือก fill Name
    protected $fillable = ['users_id', 'name', 'status'];
}
