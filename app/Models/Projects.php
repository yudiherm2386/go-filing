<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Projects extends Model
{
	protected $table = 'projects';
	protected $primaryKey = 'project_id';
    protected $fillable = [
		'function_id','box_id', 'updated_by', 'meta_text', 'project_text', 'project_value',
		'status','created_at','created_by','updated_at'
    ];
	
	public $timestamps = false;
	public function hasFunction() {
		return $this->belongsTo('\App\Models\Functions', 'function_id', 'function_id');
	}
	public function hasBox() {
		return $this->belongsTo('\App\Models\Boxs', 'box_id', 'box_id');
	}
	public function userCreated() {
		return $this->belongsTo('\App\Models\Users', 'created_by', 'user_id');
	}
	public function userUpdated() {
		return $this->belongsTo('\App\Models\Users', 'updated_by', 'user_id');
	}
	public function hasStatus() {
		return $this->belongsTo('\App\Models\ProjectStatus', 'status', 'project_status_id');
	}
}
