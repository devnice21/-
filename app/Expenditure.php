<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Expenditure extends Model
{
    //เลือกตาราง Expenditure
    protected $table = 'expenditures';
    //เลือก fill id
    protected $primaryKey = 'id';
    //เลือก fill Name
    protected $fillable = ['users_id', 'category_id', 'image', 'name', 'content', 'price'];

    public function category(){
        return $this->belongsTo('App\Category', 'category_id', 'id');
    }
}
