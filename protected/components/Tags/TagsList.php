<?php

Yii::import('zii.widgets.CPortlet');

class TagsList extends CPortlet {    

    protected function renderContent() {        
        $tags = Tags::model()->obtenerTagsModels(null);

        foreach ($tags as $tag) {
            $link = CHtml::link(CHtml::encode($tag->tag), array('posts/index', 'tag' => $tag->tag));
            
            echo CHtml::tag('li', array(
                'class' => 'tag',                
                    ), $link) . "\n";            
        }
    }

}
