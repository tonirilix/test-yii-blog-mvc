<?php

class m150328_132507_create_posts_table extends CDbMigration {

    public function up() {
        $this->createTable('posts', array(
            'id' => 'pk',
            'title' => 'string NOT NULL',
            'summary' => 'text',
            'content' => 'text',
            'created_at' => 'datetime',
            'updated_at' => 'datetime'
        ));
    }

    public function down() {
        $retorno = false;
        try {
            $this->dropTable('posts');
            $retorno = true;
        } catch (Exception $e) {
            
        }
        echo "m150328_132507_create_posts_table down.\n";
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
