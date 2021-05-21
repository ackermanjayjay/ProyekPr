<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Orang extends Seeder
{
	public function run()
	{
		
		$user_data = [
			[
			'nama'=> 'Admin',
			'nim'=>'55',
			'status'=>'Admin'		
			],
		];
		foreach($user_data as $pengguna)
		{
			$this->db->table('robot')->insert($pengguna);
		}
	}
}
