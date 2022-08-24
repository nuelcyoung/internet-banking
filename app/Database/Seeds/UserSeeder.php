<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use App\Models\UserModel;

class UserSeeder extends Seeder
{
    public function run()
    {
        $user_object = new UserModel();

		$user_object->insertBatch([
			[
				"firstname" => "Admin",
                "lastname" => "Young",
                "gender"=>"Male",
                "dob"=>"1964-12-23",
				"email" => "admin@mail.com",
				"phone_no" => "7899654125",
				"role" => "admin",
				"password" => password_hash("12345678", PASSWORD_DEFAULT)
			],
			[
				"firstname" => "User",
                "lastname" => "Young",
                "gender"=>"Male",
                "dob"=>"1964-12-23",
				"email" => "prabhat@mail.com",
				"phone_no" => "8888888888",
				"role" => "client",
				"password" => password_hash("12345678", PASSWORD_DEFAULT)
			]
		]);
    }
}
