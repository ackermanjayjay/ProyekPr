<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Webrobot extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id'          => [
				'type'           => 'INT',
				'constraint'     => 5,
				'unsigned'       => true,
				'auto_increment' => true
			],
			'nama'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
			],
			'nim'      => [
				'type'           => 'VARCHAR',
				'constraint'     => 100,
				
			],
			'status' => [
				'type'           => 'VARCHAR',
				'constraint'           => 100,
			],
			'created_at DATETIME DEFAULT CURRENT_TIMESTAMP'
		
		]);
		$this->forge->addKey('id', TRUE);
		$this->forge->createTable('robot', TRUE);
	}

	public function down()
	{
		//mengahpus table new
		$this->forge->dropTable('robot');
	}
}
