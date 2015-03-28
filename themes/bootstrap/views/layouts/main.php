<?php
$baseUrl = Yii::app()->request->baseUrl;
$baseThemeUrl = Yii::app()->theme->baseUrl."/";
$baseBower = $baseUrl . "/bower_components/";
$baseBootstrap = $baseBower."bootstrap/dist/";
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
  				<a class="blog-nav-item active" href="#">Home</a>
  				<a class="blog-nav-item" href="#">New features</a>
  				<a class="blog-nav-item" href="#">Press</a>
  				<a class="blog-nav-item" href="#">New hires</a>
  				<a class="blog-nav-item" href="#">About</a>
  			</nav>
  		</div>
  	</div>

  	<div class="container">
  		<div class="blog-header">
  			<h1 class="blog-title"><?php echo CHtml::encode(Yii::app()->name); ?> </h1>
  			<p class="lead blog-description">Just a MVC Test.</p>
  		</div>      
  		<div class="row">
  			<div class="col-sm-8 blog-main">
  				<?php echo $content; ?>
  			</div>
  			<div class="col-sm-3 col-sm-offset-1 blog-sidebar">
  				<div class="sidebar-module sidebar-module-inset">
  					<h4>About</h4>
  					<p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
  				</div>
  				<div class="sidebar-module">
  					<h4>Archives</h4>
  					<ol class="list-unstyled">
  						<li><a href="#">March 2014</a></li>
  						<li><a href="#">February 2014</a></li>
  						<li><a href="#">January 2014</a></li>
  						<li><a href="#">December 2013</a></li>
  						<li><a href="#">November 2013</a></li>
  						<li><a href="#">October 2013</a></li>
  						<li><a href="#">September 2013</a></li>
  						<li><a href="#">August 2013</a></li>
  						<li><a href="#">July 2013</a></li>
  						<li><a href="#">June 2013</a></li>
  						<li><a href="#">May 2013</a></li>
  						<li><a href="#">April 2013</a></li>
  					</ol>
  				</div>
  				<div class="sidebar-module">
  					<h4>Elsewhere</h4>
  					<ol class="list-unstyled">
  						<li><a href="#">GitHub</a></li>
  						<li><a href="#">Twitter</a></li>
  						<li><a href="#">Facebook</a></li>
  					</ol>
  				</div>
  			</div><!-- /.blog-sidebar -->
  		</div>  		

  		<footer class="footer">
  			<p>CopyLeft - Tonirilix 2015</p>
  		</footer>

  	</div> <!-- /container -->    
  </body>
  </html>