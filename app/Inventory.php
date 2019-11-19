<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Inventory extends Model
{
    protected $fillable = ['name','description'];

    use SoftDeletes;
    protected $dates = ['deleted_at'];

    public  function  archive(){
        return $this->hasOne('App\Archive');  //one to many
    }

    public  function  employee(){
        return $this->belongsToMany('App\Employee');  //many to many
    }
}
