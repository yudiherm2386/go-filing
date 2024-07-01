<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class UserGroups extends Model
{
	protected $table = 'user_groups';
	protected $primaryKey = 'user_group_id';
    protected $fillable = [
        'name','created_at','created_by','updated_at','updated_by'
    ];
	
	public $timestamps = false;
	public function hasUser() {
		return $this->hasMany('\App\Models\Users', 'user_group_id', 'user_group_id');
	}
	public function userCreated() {
		return $this->belongsTo('\App\Models\Users', 'created_by', 'user_id');
	}
	public function userUpdated() {
		return $this->belongsTo('\App\Models\Users', 'updated_by', 'user_id');
	}
	public function privilege() {
		return $this->hasMany('\App\Models\UserGroupPrivileges', 'user_group_id', 'user_group_id');
	}
}
