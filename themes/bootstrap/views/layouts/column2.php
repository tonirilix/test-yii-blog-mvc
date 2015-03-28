<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>
<div class="col-sm-8 blog-main">
    <?php echo $content; ?>
</div>
<div class="col-sm-3 col-sm-offset-1 blog-sidebar">
    <div class="sidebar-module">        
        <?php if (!Yii::app()->user->isGuest): ?>    
            <h4>Operaciones</h4>
            <?php
            $this->widget('MenuOperaciones');                        
        endif;
        ?>
    </div>
    <div class="sidebar-module sidebar-module-inset">
        <h4>About</h4>
        <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
    </div>    
    <div class="sidebar-module">
        <h4>tags</h4>
        <ol class="list-unstyled">
            <?php $this->widget('TagsList'); ?>            
        </ol>
    </div>
    <div class="sidebar-module">
        <h4>Elsewhere</h4>
        <ol class="list-unstyled">
            <li><a href="https://github.com/tonirilix">GitHub</a></li>
            <li><a href="https://twitter.com/tonirilix">Twitter</a></li>            
        </ol>
    </div>
</div><!-- /.blog-sidebar -->
<?php $this->endContent(); ?>