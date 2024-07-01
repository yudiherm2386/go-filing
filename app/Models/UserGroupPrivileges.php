<?php

namespace App\models;
use Illuminate\Database\Eloquent\Model;

class UserGroupPrivileges extends Model
{
	protected $table="user_group_privileges";
	protected $primaryKey = "user_group_privilege_id";
    protected $fillable = [
        'user_group_id','menu_id','sort','has_access','has_add','has_edit','has_delete'
    ];
	
	public $timestamps = false;
	public function hasMenu() {
		return $this->belongsTo('\App\Models\Menus', 'menu_id', 'menu_id');
	}
	public function hasGroup() {
		return $this->belongsTo('App\Modesls\UserGroups', 'user_group_id', 'user_group_id');
	}
}
