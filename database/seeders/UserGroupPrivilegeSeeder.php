<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\UserGroupPrivileges;

class UserGroupPrivilegeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
		$data = [
				[
					"user_group_privilege_id" => "1",
					"user_group_id" => "1",
					"menu_id" => "1",
					"sort" => "10",
					"has_access" => "1",
					"has_add" => "1",
					"has_edit" => "1",
					"has_delete" => "1"
                ],
				[
					"user_group_privilege_id" => "2",
					"user_group_id" => "1",
					"menu_id" => "2",
					"sort" => "20",
					"has_access" => "1",
					"has_add" => "1",
					"has_edit" => "1",
					"has_delete" => "1"
                ],
				[
					"user_group_privilege_id" => "3",
					"user_group_id" => "1",
					"menu_id" => "3",
					"sort" => "30",
					"has_access" => "1",
					"has_add" => "1",
					"has_edit" => "1",
					"has_delete" => "1"
                ],
				[
					"user_group_privilege_id" => "4",
					"user_group_id" => "1",
					"menu_id" => "4",
					"sort" => "40",
					"has_access" => "1",
					"has_add" => "1",
					"has_edit" => "1",
					"has_delete" => "1"
                ],
				[
					"user_group_privilege_id" => "5",
					"user_group_id" => "1",
					"menu_id" => "5",
					"sort" => "11",
					"has_access" => "1",
					"has_add" => "1",
					"has_edit" => "1",
					"has_delete" => "1"
                ],
				[
					"user_group_privilege_id" => "6",
					"user_group_id" => "1",
					"menu_id" => "6",
					"sort" => "21",
					"has_access" => "1",
					"has_add" => "1",
					"has_edit" => "1",
					"has_delete" => "1"
                ],
				[
					"user_group_privilege_id" => "7",
					"user_group_id" => "1",
					"menu_id" => "7",
					"sort" => "22",
					"has_access" => "1",
					"has_add" => "1",
					"has_edit" => "1",
					"has_delete" => "1"
                ],
				[
					"user_group_privilege_id" => "8",
					"user_group_id" => "1",
					"menu_id" => "8",
					"sort" => "31",
					"has_access" => "1",
					"has_add" => "1",
					"has_edit" => "1",
					"has_delete" => "1"
                ],
				[
					"user_group_privilege_id" => "9",
					"user_group_id" => "1",
					"menu_id" => "9",
					"sort" => "32",
					"has_access" => "1",
					"has_add" => "1",
					"has_edit" => "1",
					"has_delete" => "1"
                ],
				[
					"user_group_privilege_id" => "10",
					"user_group_id" => "1",
					"menu_id" => "10",
					"sort" => "41",
					"has_access" => "1",
					"has_add" => "1",
					"has_edit" => "1",
					"has_delete" => "1"
                ],
				[
					"user_group_privilege_id" => "11",
					"user_group_id" => "1",
					"menu_id" => "11",
					"sort" => "42",
					"has_access" => "1",
					"has_add" => "1",
					"has_edit" => "1",
					"has_delete" => "1"
                ]
			];
			
			
        foreach ($data as $key => $dt) {
            $obj = new UserGroupPrivileges();
            $obj->user_group_privilege_id = $dt["user_group_privilege_id"];
            $obj->user_group_id = $dt["user_group_id"];
            $obj->menu_id = $dt["menu_id"];
            $obj->sort = $dt["sort"];
            $obj->has_access = $dt["has_access"];
            $obj->has_add = $dt["has_add"];
            $obj->has_edit = $dt["has_edit"];
            $obj->has_delete = $dt["has_delete"];
            
            $obj->save();
        }	
	}
}
