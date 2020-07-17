<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Products extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'product_id'          => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => TRUE,
				'auto_increment' => TRUE
			],
			'product_name'       => [
				'type'           => 'VARCHAR',
				'constraint'     => 100,
			],
			'product_description' => [
				'type'           => 'TEXT',
				'null'           => TRUE,
			],
		]);
		$this->forge->addKey('product_id', TRUE);
		$this->forge->createTable('products');
	}

	public function down()
	{
		//
	}
}
