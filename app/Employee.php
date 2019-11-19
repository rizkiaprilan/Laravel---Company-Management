<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Employee extends Model
{
    protected $fillable = ['nip','name','address','email','position_id'];

    protected $guarded = ['id'];

    use SoftDeletes;
    protected $dates = ['deleted_at'];

    public  function  position(){
        return $this->belongsTo('App\Position');  //one to many
    }
    public  function  inventory(){
        return $this->belongsToMany('App\Inventory');  //many to many
    }
}
