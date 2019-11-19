<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class position extends Model
{
    protected $fillable = ['name','code','department_id'];

    protected $guarded = ['id'];

    use SoftDeletes;
    protected $dates = ['deleted_at'];

    public  function  department(){
        return $this->belongsTo('App\department');
    }

    public  function  employee(){
        return $this->hasMany('App\Employee');
    }
}
