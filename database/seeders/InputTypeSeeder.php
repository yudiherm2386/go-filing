<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\InputTypes;

class InputTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
		$data = [
				[
					"input_type_id" => "1",
					"name" => "Text",
                    "sort" => "10"
                ],
				[
					"input_type_id" => "2",
					"name" => "Text Area",
                    "sort" => "20"
                ],
				[
					"input_type_id" => "3",
					"name" => "Check Box",
                    "sort" => "30"
                ],
				[
					"input_type_id" => "4",
					"name" => "Radio Button",
                    "sort" => "40"
                ],
				[
					"input_type_id" => "5",
					"name" => "Date",
                    "sort" => "50"
                ],
				[
					"input_type_id" => "6",
					"name" => "Combo Box",
                    "sort" => "60"
                ]
			];
			
        foreach ($data as $key => $dt) {
            $obj = new InputTypes();
            $obj->input_type_id = $dt["input_type_id"];
            $obj->name = $dt["name"];
            $obj->sort = $dt["sort"];
            
            $obj->save();
        }	
	}
}
