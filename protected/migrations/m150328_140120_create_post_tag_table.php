<?php

class m150328_140120_create_post_tag_table extends CDbMigration
{
	public function up()
	{
		$this->createTable('post_tag', array(
            'id' => 'pk',
            'post_id' => 'INT NOT NULL',            
            'tag_id'=>'INT NOT NULL',            
        ));
		$this->addForeignKey(
			'FK_post_id', 
			'post_tag', 
			'post_id', 
			'posts', 
			'id', 
			'CASCADE', 
			'RESTRICT');
		$this->addForeignKey(
			'FK_tag_id', 
			'post_tag', 
			'tag_id', 
			'tags', 
			'id', 
			'CASCADE', 
			'RESTRICT');
	}

	public function down()
	{
		$retorno = false;
		$retorno_txt = "";
		try {
			$this->dropTable('post_tag');	
			$retorno = true;
			$retorno_txt = "m150328_132507_create_post_tag_table down.\n";
		} catch (Exception $e) {
			$retorno_txt = "m150328_132507_create_post_tag_table was not able to be down.\n";
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