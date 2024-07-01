<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Menus extends Model
{
	protected $table = 'menus';
	protected $primaryKey = 'menu_id';
    protected $fillable = [
        'menu_id','parent_id','name','sort','module','icon','created_at','created_by','updated_at','updated_by'
    ];
	
	public $timestamps = false;
}
