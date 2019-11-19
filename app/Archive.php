<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Archive extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    protected $fillable = ['name','description','inventory_id'];
    public  function  inventory(){
        return $this->belongsTo('App\Inventory');  //one to many
    }
}
