<?php

class m150328_134315_create_tags_table extends CDbMigration
{
	public function up()
	{
		 $this->createTable('tags', array(
            'id' => 'pk',
            'tag' => 'string NOT NULL',            
            'created_at'=>'datetime',
            'updated_at'=>'datetime'
        ));
		$this->createIndex('tag', 'tags', 'tag', true);
	}
	
	public function down()
	{
		$retorno = false;
		$retorno_txt = "";
		try {
			$this->dropTable('tags');	
			$retorno = true;
			$retorno_txt = "m150328_132507_create_tags_table down.\n";
		} catch (Exception $e) {
			$retorno_txt = "m150328_132507_create_tags_table was not able to be down.\n";
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