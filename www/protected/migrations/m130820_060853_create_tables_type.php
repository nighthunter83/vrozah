<?php

class m130820_060853_create_tables_type extends CDbMigration
{
	public function up()
	{
        $this->createTable('{{product_type}}', array(
            'id' => 'pk',
            'type' => 'integer',
            'title' => 'string',
        ));

        $this->insert('{{product_type}}', array(
            'type' => '0',
            'title' => 'Цветы',
        ));

        $this->createTable('{{address_type}}', array(
            'id' => 'pk',
            'type' => 'integer',
            'title' => 'string',
        ));

        $this->insert('{{address_type}}', array(
            'type' => '0',
            'title' => 'Офис',
        ));
        $this->insert('{{address_type}}', array(
            'type' => '1',
            'title' => 'Квартира',
        ));
        $this->insert('{{address_type}}', array(
            'type' => '2',
            'title' => 'Загородный дом',
        ));
        $this->insert('{{address_type}}', array(
            'type' => '3',
            'title' => 'Больница',
        ));
        $this->insert('{{address_type}}', array(
            'type' => '4',
            'title' => 'Общежитие',
        ));
        $this->insert('{{address_type}}', array(
            'type' => '5',
            'title' => 'Гостиница',
        ));

        $this->createTable('{{order_status}}', array(
            'id' => 'pk',
            'type' => 'integer',
            'title' => 'string',
        ));

        $this->insert('{{order_status}}', array(
            'type' => '0',
            'title' => 'Ждет оплаты',
        ));
        $this->insert('{{order_status}}', array(
            'type' => '1',
            'title' => 'Ожидает курьера',
        ));
        $this->insert('{{order_status}}', array(
            'type' => '2',
            'title' => 'Передан курьеру',
        ));
        $this->insert('{{order_status}}', array(
            'type' => '3',
            'title' => 'Доставлен',
        ));
        $this->insert('{{order_status}}', array(
            'type' => '4',
            'title' => 'Отменен',
        ));
	}

	public function down()
	{
		$this->dropTable('{{product_type}}');
        $this->dropTable('{{address_type}}');
        $this->dropTable('{{order_status}}');
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