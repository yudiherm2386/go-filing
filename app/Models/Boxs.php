<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Boxs extends Model
{
	protected $table = 'boxs';
	protected $primaryKey = 'box_id';
    protected $fillable = [
        'function_id','parent_id','name','description','created_at','created_by','updated_at','updated_by'
    ];
	
	public $timestamps = false;
	public function hasFunction() {
		return $this->belongsTo('\App\Models\Functions', 'function_id', 'function__id');
	}
	public function hasParent() {
		return $this->belongsTo('\App\Models\Boxs', 'parent_id', 'box_id');
	}
	public function userCreated() {
		return $this->belongsTo('\App\Models\Users', 'created_by', 'user_id');
	}
	public function userUpdated() {
		return $this->belongsTo('\App\Models\Users', 'updated_by', 'user_id');
	}
}
