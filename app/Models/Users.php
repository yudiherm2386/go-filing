<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Users extends Authenticatable
{
	protected $table = 'users';
	protected $primaryKey = 'user_id';
    protected $fillable = [
        'username','email','name','password','remember_token','user_group_id','created_at','created_by','updated_at','updated_by','status'
    ];
	
	public $timestamps = false;
	public function hasGroup() {
		return $this->belongsTo('\App\Models\UserGroups', 'user_group_id', 'user_group_id');
	}
	public function userCreated() {
		return $this->belongsTo('\App\Models\Users', 'created_by', 'user_id');
	}
	public function userUpdated() {
		return $this->belongsTo('\App\Models\Users', 'updated_by', 'user_id');
	}
	public function privilege() {
		return $this->hasMany('\App\Models\UserPrivileges', 'user_id', 'user_id');
	}
}
