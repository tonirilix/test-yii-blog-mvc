<?php

class m150328_142040_add_posts_user_id_column extends CDbMigration
{
	public function up()
	{
		$this->addColumn('posts', 'user_id', 'INT');
		$this->addForeignKey(
			'FK_post_user_id', 
			'posts', 
			'user_id', 
			'users', 
			'id', 
			'CASCADE', 
			'RESTRICT');
	}

	public function down()
	{
		$this->dropForeignKey("FK_post_user_id", "posts");
		$this->dropColumn("posts", "user_id");
		return true;
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