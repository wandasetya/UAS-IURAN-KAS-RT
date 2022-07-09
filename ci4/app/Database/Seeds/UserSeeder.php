<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $model = model('UserModel');
		$model->insert([
		'username' => 'wandasetya',
		'useremail' => 'wandasetya04@gmail.com',
		'userpassword' => password_hash('wanda123', PASSWORD_DEFAULT),
		]);
    }
}
