<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Functions extends Model
{
	protected $table = 'functions';
	protected $primaryKey = 'function_id';
    protected $fillable = [
        'name','description','sort','status','created_at','created_by','updated_at','updated_by'
    ];
	
	public $timestamps = false;
	
	public function hasBox() {
		return $this->hasMany('\App\Models\Boxs', 'function_id', 'function_id');
	}
	public function hasProject() {
		return $this->hasMany('\App\Models\Projects', 'function_id', 'function_id');
	}
	public function userCreated() {
		return $this->belongsTo('\App\Models\Users', 'created_by', 'user_id');
	}
	public function userUpdated() {
		return $this->belongsTo('\App\Models\Users', 'updated_by', 'user_id');
	}
}
