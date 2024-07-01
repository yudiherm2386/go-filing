<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Functions;

class FunctionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
		$data = [
				[
					"function_id" => "1",
					"name" => "CMPS",
					"description" => "CMPS",
					"sort" => "1",
                    "status" => "1",
					"created_by" => "1",
					"created_at" => "2024-06-06 19:00:00",
					"updated_by" => null,
                    "updated_at" => null
                ],
				[
					"function_id" => "2",
					"name" => "Construction",
					"description" => "Construction",
					"sort" => "2",
                    "status" => "1",
					"created_by" => "1",
					"created_at" => "2024-06-06 19:00:00",
					"updated_by" => null,
                    "updated_at" => null
                ],
				[
					"function_id" => "3",
					"name" => "O & M",
					"description" => "O & M",
					"sort" => "3",
                    "status" => "1",
					"created_by" => "1",
					"created_at" => "2024-06-06 19:00:00",
					"updated_by" => null,
                    "updated_at" => null
                ],
				[
					"function_id" => "4",
					"name" => "PS",
					"description" => "PS",
					"sort" => "4",
                    "status" => "1",
					"created_by" => "1",
					"created_at" => "2024-06-06 19:00:00",
					"updated_by" => null,
                    "updated_at" => null
                ]
			];
			
        foreach ($data as $key => $dt) {
            $obj = new Functions();
            $obj->function_id = $dt["function_id"];
            $obj->name = $dt["name"];
            $obj->description = $dt["description"];
            $obj->sort = $dt["sort"];
            $obj->status = $dt["status"];
            $obj->created_by = $dt["created_by"];
            $obj->created_at = $dt["created_at"];
            $obj->updated_by = $dt["updated_by"];
            $obj->updated_at = $dt["updated_at"];
            
            $obj->save();
        }	
	}
}
