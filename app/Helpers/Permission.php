<?php

namespace App\Helpers;

use App\Models\Menus;
use App\Models\UserGroupPrivileges;
use App\Models\UserPrivileges;
use App\Models\Users;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Session;
use stdClass;

/**
 *
 */
class Permission
{
    public static function get()
    {
        $default_privilage = new stdClass();
        $default_privilage->menu_id = 0;
        $default_privilage->has_access = 0;
        $default_privilage->has_add = 0;
        $default_privilage->has_edit = 0;
        $default_privilage->has_delete = 0;

        $current_url = Request::segment(1);
        $menu = Menus::where('module', $current_url)->first();
        if (!$menu) {
            return $default_privilage;
        }
        $privilage = UserGroupPrivileges::where('user_group_id', Auth::user()->user_group_id)
            ->where('menu_id', $menu->menu_id)
            ->select('menu_id','has_access', 'has_add', 'has_edit', 'has_delete')
            ->first();
        if ($privilage) {
            return $privilage;
        } else {
            return $default_privilage;
        }
    }
}
