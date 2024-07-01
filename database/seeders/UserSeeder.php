<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Users;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
		$data = [
				[
					"user_id" => "1",
					"username" => "admin",
					"email" => "admin@gmail.com",
					"name" => "Administrator",
					"password" => "d326d0d97f930c451bc5f5839ce44482668654d00d2c6689847efbf4f1717c295ee7ec2b74fd6cffb2fc30186820d1d4c4f86835170751e67ddd9ecfbb282f61",
					"remember_token" => null,
					"user_group_id" => "1",
					"status" => "1",
                    "created_by" => "1",
                    "created_at" => "2024-06-06 19:00:00",
                    "updated_by" => null,
                    "updated_at" => null
				]
			];
			
			
        foreach ($data as $key => $dt) {
            $obj = new Users();
            $obj->user_id = $dt["user_id"];
            $obj->username = $dt["username"];
            $obj->email = $dt["email"];
            $obj->name = $dt["name"];
            $obj->password = $dt["password"];
            $obj->remember_token = $dt["remember_token"];
            $obj->user_group_id = $dt["user_group_id"];
            $obj->status = $dt["status"];
            $obj->created_by = $dt["created_by"];
            $obj->created_at = $dt["created_at"];
            $obj->updated_by = $dt["updated_by"];
            $obj->updated_at = $dt["updated_at"];
            
            $obj->save();
        }	
	}
}
