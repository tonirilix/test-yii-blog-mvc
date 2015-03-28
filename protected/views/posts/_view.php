<?php
/* @var $this PostsController */
/* @var $data Posts */
?>

<div class="blog-post">
    <h2 class="blog-post-title">
        <?php echo CHtml::link($data->title, $data->url); ?>        
    </h2>
    <p class="blog-post-meta">
        <?php echo $data->obtenerFechaCreacionFormateada(); ?> 
        by 
        <a href="#"><?php echo $data->user->username ?></a>
    </p>

    <p>
        <?php echo CHtml::encode($data->summary); ?>
    </p>
    <hr>
    <?php echo CHtml::encode($data->content); ?>    
</div><!-- /.blog-post -->