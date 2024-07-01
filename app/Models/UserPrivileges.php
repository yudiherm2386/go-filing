<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserPrivileges extends Model
{
	protected $table="user_privileges";
	protected $primaryKey = "user_privilege_id";
    protected $fillable = [
        'user_id','function_id','has_access'
    ];
	
	public $timestamps = false;
	public function hasFunction() {
		return $this->belongsTo('\App\Models\Functions', 'function_id', 'function_id');
	}
	public function hasUser() {
		return $this->belongsTo('\App\Models\Users', 'user_id', 'user_id');
	}
}
