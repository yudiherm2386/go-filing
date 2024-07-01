<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class ProjectStatus extends Model
{
	protected $table = 'project_status';
	protected $primaryKey = 'project_status_id';
    protected $fillable = [
        'name','created_at','created_by','updated_at','updated_by'
    ];
	
	public $timestamps = false;
	public function userCreated() {
		return $this->belongsTo('\App\Models\Users', 'created_by', 'user_id');
	}
	public function userUpdated() {
		return $this->belongsTo('\App\Models\Users', 'updated_by', 'user_id');
	}
}
