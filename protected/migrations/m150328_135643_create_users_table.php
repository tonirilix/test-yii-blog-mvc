<?php

class m150328_135643_create_users_table extends CDbMigration
{
	public function up()
	{
		 $this->createTable('users', array(
            'id' => 'pk',
            'username' => 'string NOT NULL',
            'email'=>'string NOT NULL',            
            'password'=>'string NOT NULL',
            'created_at'=>'datetime',
            'updated_at'=>'datetime'
        ));
		$this->createIndex('username', 'users', 'username', true);
		$this->createIndex('email', 'users', 'email', true);
	}
	
	public function down()
	{
		$retorno = false;
		$retorno_txt = "";
		try {
			$this->dropTable('users');	
			$retorno = true;
			$retorno_txt = "m150328_132507_create_users_table down.\n";
		} catch (Exception $e) {
			$retorno_txt = "m150328_132507_create_users_table was not able to be down.\n";
		}        
		echo $retorno_txt;
		return $retorno;
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