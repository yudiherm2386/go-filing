<?php
namespace App\Helpers;

use Illuminate\Support\Facades\Session;
use App\Models\UserGroupPrivileges;
use App\Models\Menus;
use App\Models\UserPrivileges;

class MenuHelper {
	public static function HasChildren($rows, $id) {
		foreach ($rows as $row) {
			if ($row->hasMenu->parent_id == $id)
				return true;
		}
		
		return false;
	}

    public static function Generate($menuId=0, $parentId=0) {
        $userGroupId = \Auth::user()->user_group_id;
        $name = \Auth::user()->name;
        $menus = UserGroupPrivileges::where('user_group_id', $userGroupId)->with('hasMenu')->orderBy('sort', 'asc')->get();
        $menuData = Menus::find($menuId);
        $name = str_replace(' ','&nbsp;',$name);

        self::Menu($menuId,$menus,$parentId,$menuData->parent_id);
	}

	public static function Menu($menuId=0, $menus=null, $parentId=0, $parentSource=0,$open='') {
		foreach ($menus as $key=>$row) {
			if ($row->has_access == 1) {
				if ($row->hasMenu->parent_id == $parentId) {
					if (self::HasChildren($menus, $row->menu_id)) {
                        echo '<h3 class="font-bold pl-4 text-[#9BA0AB]">'.$row->hasMenu->name.'</h3>';
                        echo self::Menu($menuId,$menus,$row->menu_id,$parentSource,$open);
					}
					else {
                        $color = "text-gray-500";
                        if ($menuId == $row->hasMenu->menu_id) {
                            $color = "text-blue-600";
                        }

						echo '<a
                            class="py-4 pl-6 flex hover:bg-black/10 duration-100"
                            href="'.$row->hasMenu->module.'"
                        >';
                            
                            echo $row->hasMenu->icon;

                            echo '<div class="pl-4 '.$color.'">'.$row->hasMenu->name.'</div>';
                        echo '</a>';
					}
				}
			}
		}

	}
}