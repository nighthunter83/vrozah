<?php

class m130819_122942_create_tables extends CDbMigration
{
	public function up()
	{
        $this->createTable('{{product}}', array(
            'id' => 'integer',
            'product_type' => 'integer',
            'name' => 'string',
            'desc' => 'string',
            'pictureUrls' => 'string',
            'price' => 'integer',
        ));

        $this->createTable('{{user_info}}', array(
            'first_name' => 'string',
            'last_name' => 'string',
            'phone' => 'string',
            'email' => 'string',
        ));

        $this->createTable('{{delivery_info}}', array(
            'name' => 'string',
            'phone' => 'string',
            'address_type' => 'integer',
            'street' => 'string',
            'house' => 'string',
            'body' => 'string',
            'structure' => 'string',
            'porch' => 'string',
            'floor' => 'string',
            'subway' => 'string',
            'company_name' => 'string',
            'additional_info' => 'string',
        ));

        $this->createTable('{{order_item}}', array(
            'id' => 'integer',
            'product' => 'integer',
            'count' => 'integer',
        ));

        $this->createTable('{{order}}', array(
            'id' => 'integer',
            'date_add' => 'datetime',
            'status' => 'integer',
            'user_info' => 'integer',
            'delivery_info' => 'integer',
            'order_items' => 'integer',
        ));
	}

	public function down()
	{
		$this->dropTable('{{product}}');
        $this->dropTable('{{user_info}}');
        $this->dropTable('{{delivery_info}}');
        $this->dropTable('{{order_item}}');
        $this->dropTable('{{order}}');
	}

	/*
	// Use safeUp/safeDown to do migration with transaction
	public function safeUp()
	{
	}

	public function safeDown()
	{
	}
	*/
}