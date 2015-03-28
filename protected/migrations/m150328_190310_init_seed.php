<?php

class m150328_190310_init_seed extends CDbMigration {

    public function up() {
        $this->insert('users', 
            array(
                'username' => 'admin',
                'email'=>'admin@test.com',
                'password'=>'admin',
                'created_at'=>'2015-03-25',
                'updated_at'=>'2015-03-25'
            )
        );
        
        $this->insert('posts', 
            array(
                'title' => 'Sample blog post 1',
                'summary'=>'This blog post shows a few different types of content that\'s supported and styled with Bootstrap. Basic typography, images, and code are all supported.',
                'content'=>'<p>Cum sociis natoque penatibus et magnis <a href="#">dis parturient montes</a>, nascetur ridiculus mus. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Sed posuere consectetur est at lobortis. Cras mattis consectetur purus sit amet fermentum.</p>',
                'user_id'=>'1'                
            )
        );
        
        $this->insert('posts', 
            array(
                'title' => 'Sample blog post 2',
                'summary'=>'This blog post shows a few different types of content that\'s supported and styled with Bootstrap. Basic typography, images, and code are all supported.',
                'content'=>'<p>Cum sociis natoque penatibus et magnis <a href="#">dis parturient montes</a>, nascetur ridiculus mus. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Sed posuere consectetur est at lobortis. Cras mattis consectetur purus sit amet fermentum.</p>',
                'user_id'=>'1'                
            )
        );
        
        $this->insert('posts', 
            array(
                'title' => 'Sample blog post 3',
                'summary'=>'This blog post shows a few different types of content that\'s supported and styled with Bootstrap. Basic typography, images, and code are all supported.',
                'content'=>'<p>Cum sociis natoque penatibus et magnis <a href="#">dis parturient montes</a>, nascetur ridiculus mus. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Sed posuere consectetur est at lobortis. Cras mattis consectetur purus sit amet fermentum.</p>',
                'user_id'=>'1'                
            )
        );
        
        $this->insert('tags', 
            array(
                'tag' => 'yii',                
                'created_at'=>'2015-03-25',
                'updated_at'=>'2015-03-25'
            )
        );
        
        $this->insert('tags', 
            array(
                'tag' => 'datos',                
                'created_at'=>'2015-03-25',
                'updated_at'=>'2015-03-25'
            )
        );
        
        $this->insert('tags', 
            array(
                'tag' => 'prueba',                
                'created_at'=>'2015-03-25',
                'updated_at'=>'2015-03-25'
            )
        );
        
        $this->insert('post_tag', 
            array(
                'post_id' => '1',                
                'tag_id'=>'1'                
            )
        );
        $this->insert('post_tag', 
            array(
                'post_id' => '1',                
                'tag_id'=>'2'                
            )
        );        
        
        $this->insert('post_tag', 
            array(
                'post_id' => '2',                
                'tag_id'=>'1'                
            )
        );
        
        $this->insert('post_tag', 
            array(
                'post_id' => '2',                
                'tag_id'=>'2'                
            )
        );
        
        $this->insert('post_tag', 
            array(
                'post_id' => '3',                
                'tag_id'=>'3'                
            )
        );
    }

    public function safeDown() {
//        $this->truncateTable("post_tag");
//        $this->truncateTable("tags");
//        $this->truncateTable("posts");
//        $this->truncateTable("users");
        echo "m150328_190310_init_seed does not support migration down.\n";
        return false;
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
