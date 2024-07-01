<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\UserGroups;

class UserGroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
		$data = [
				[
					"user_group_id" => "1",
					"name" => "Administrator",
					"description" => "Administrator",
                    "status" => "1",
					"created_by" => "1",
					"created_at" => "2024-06-06 19:00:00",
					"updated_by" => null,
                    "updated_at" => null
                ],
				[
					"user_group_id" => "2",
					"name" => "Construction",
					"description" => "Construction",
                    "status" => "1",
					"created_by" => "1",
					"created_at" => "2024-06-06 19:00:00",
					"updated_by" => null,
                    "updated_at" => null
                ],
				[
					"user_group_id" => "3",
					"name" => "CMPS",
					"description" => "CMPS",
                    "status" => "1",
					"created_by" => "1",
					"created_at" => "2024-06-06 19:00:00",
					"updated_by" => null,
                    "updated_at" => null
                ],
				[
					"user_group_id" => "4",
					"name" => "O & M",
					"description" => "O & M",
                    "status" => "1",
					"created_by" => "1",
					"created_at" => "2024-06-06 19:00:00",
					"updated_by" => null,
                    "updated_at" => null
                ],
				[
					"user_group_id" => "5",
					"name" => "PMO",
					"description" => "PMO",
                    "status" => "1",
					"created_by" => "1",
					"created_at" => "2024-06-06 19:00:00",
					"updated_by" => null,
                    "updated_at" => null
                ],
				[
					"user_group_id" => "6",
					"name" => "Unit Admin",
					"description" => "Unit Admin",
                    "status" => "1",
					"created_by" => "1",
					"created_at" => "2024-06-06 19:00:00",
					"updated_by" => null,
                    "updated_at" => null
                ],
				[
					"user_group_id" => "7",
					"name" => "Project Admin",
					"description" => "Project Admin",
                    "status" => "1",
					"created_by" => "1",
					"created_at" => "2024-06-06 19:00:00",
					"updated_by" => null,
                    "updated_at" => null
                ],
				[
					"user_group_id" => "8",
					"name" => "HR",
					"description" => "HR",
                    "status" => "1",
					"created_by" => "1",
					"created_at" => "2024-06-06 19:00:00",
					"updated_by" => null,
                    "updated_at" => null
                ],
				[
					"user_group_id" => "9",
					"name" => "GA",
					"description" => "GA",
                    "status" => "1",
					"created_by" => "1",
					"created_at" => "2024-06-06 19:00:00",
					"updated_by" => null,
                    "updated_at" => null
                ],
				[
					"user_group_id" => "10",
					"name" => "EPC",
					"description" => "EPC",
                    "status" => "1",
					"created_by" => "1",
					"created_at" => "2024-06-06 19:00:00",
					"updated_by" => null,
                    "updated_at" => null
                ],
				[
					"user_group_id" => "11",
					"name" => "TMPP",
					"description" => "TMPP",
                    "status" => "1",
					"created_by" => "1",
					"created_at" => "2024-06-06 19:00:00",
					"updated_by" => null,
                    "updated_at" => null
                ],
				[
					"user_group_id" => "12",
					"name" => "Procurement",
					"description" => "Procurement",
                    "status" => "1",
					"created_by" => "1",
					"created_at" => "2024-06-06 19:00:00",
					"updated_by" => null,
                    "updated_at" => null
                ],
				[
					"user_group_id" => "13",
					"name" => "Finance",
					"description" => "Finance",
                    "status" => "1",
					"created_by" => "1",
					"created_at" => "2024-06-06 19:00:00",
					"updated_by" => null,
                    "updated_at" => null
                ],
				[
					"user_group_id" => "14",
					"name" => "MGR",
					"description" => "MGR",
                    "status" => "1",
					"created_by" => "1",
					"created_at" => "2024-06-06 19:00:00",
					"updated_by" => null,
                    "updated_at" => null
                ],
				[
					"user_group_id" => "15",
					"name" => "VP",
					"description" => "VP",
                    "status" => "1",
					"created_by" => "1",
					"created_at" => "2024-06-06 19:00:00",
					"updated_by" => null,
                    "updated_at" => null
                ],
				[
					"user_group_id" => "16",
					"name" => "DIRUT",
					"description" => "DIRUT",
                    "status" => "1",
					"created_by" => "1",
					"created_at" => "2024-06-06 19:00:00",
					"updated_by" => null,
                    "updated_at" => null
                ],
				[
					"user_group_id" => "17",
					"name" => "Progress Analysis",
					"description" => "Progress Analysis",
                    "status" => "1",
					"created_by" => "1",
					"created_at" => "2024-06-06 19:00:00",
					"updated_by" => null,
                    "updated_at" => null
                ],
				[
					"user_group_id" => "18",
					"name" => "Cost Analysis",
					"description" => "Cost Analysis",
                    "status" => "1",
					"created_by" => "1",
					"created_at" => "2024-06-06 19:00:00",
					"updated_by" => null,
                    "updated_at" => null
                ],
				[
					"user_group_id" => "19",
					"name" => "Project Manager",
					"description" => "Project Manager",
                    "status" => "1",
					"created_by" => "1",
					"created_at" => "2024-06-06 19:00:00",
					"updated_by" => null,
                    "updated_at" => null
                ]
			];
			
        foreach ($data as $key => $dt) {
            $obj = new UserGroups();
            $obj->user_group_id = $dt["user_group_id"];
            $obj->name = $dt["name"];
            $obj->description = $dt["description"];
            $obj->status = $dt["status"];
            $obj->created_by = $dt["created_by"];
            $obj->created_at = $dt["created_at"];
            $obj->updated_by = $dt["updated_by"];
            $obj->updated_at = $dt["updated_at"];
            
            $obj->save();
        }	
	}
}
