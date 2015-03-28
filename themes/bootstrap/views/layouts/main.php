<?php
$baseUrl = Yii::app()->request->baseUrl;
$baseThemeUrl = Yii::app()->theme->baseUrl . "/";
$baseBower = $baseUrl . "/bower_components/";
$baseBootstrap = $baseBower . "bootstrap/dist/";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="../../favicon.ico">

        <title>
            <?php echo CHtml::encode(Yii::app()->name); ?> 
            - 
            <?php echo CHtml::encode($this->pageTitle); ?>
        </title>    

        <!-- Bootstrap core CSS -->
        <link href="<?= $baseBootstrap; ?>css/bootstrap.min.css" rel="stylesheet">    
        <!--<link href="<?= $baseThemeUrl; ?>css/jumbotron-narrow.css" rel="stylesheet"> -->
        <link href="<?= $baseThemeUrl; ?>css/blog.css" rel="stylesheet">    

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
          <![endif]-->
    </head>

    <body>
        <div class="blog-masthead">
            <div class="container">
                <nav class="blog-nav">
                    <a class="blog-nav-item active" href="<?php echo $baseUrl; ?> ">Home</a>
                    <a class="blog-nav-item" href="#">New features</a>
                    <a class="blog-nav-item" href="#">Press</a>
                    <a class="blog-nav-item" href="#">New hires</a>
                    <a class="blog-nav-item" href="#">About</a>
                    <?php if(Yii::app()->user->isGuest): ?>                                       
                    <?php echo CHtml::link('Login', array('site/login'),array('class'=>'blog-nav-item')); ?>
                    <?php endif; ?>
                </nav>
            </div>
        </div>

        <div class="container">
            <div class="blog-header">
                <h1 class="blog-title"><?php echo CHtml::encode(Yii::app()->name); ?> </h1>
                <p class="lead blog-description">Just a MVC Test.</p>
            </div>      
            <div class="row">
                <?php echo $content; ?>                
            </div>  		

            <footer class="footer">
                <p><?php echo Yii::app()->params['copyrightInfo']; ?></p>
            </footer>

        </div> <!-- /container -->    
    </body>
</html>