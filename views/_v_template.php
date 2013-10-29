<!DOCTYPE html>
<html>
<head>
	<title><?php if(isset($title)) echo $title; ?></title>

	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />	
					
	<!-- Controller Specific JS/CSS -->
	<!--<?php #if(isset($client_files_head)) echo $client_files_head; ?>-->
	<link rel="stylesheet" href="/css/bootstrap.min.css" type="text/css">
    
</head>
<body>
<br>
<div class="container-fluid">
	<div class="row-fluid">
	      <!--Sidebar content-->
			<div id="left-menu" class>
				<ul class="nav nav-tabs">
					<li id="homeTab"> <!--class="active"-->
				    	<a href="/">Home</a>
				  	</li>
				  	<li class="divider-vertical"></li>
				  
				 	<!-- Menu for users who are logged in -->
					<?php if($user): ?>
						<li id="profileTab">
							<a href='/users/profile'>Profile</a>
						</li> 
						<li id="logoutTab" class="pull-right">
				    		<a href='/users/logout'>Log out</a>
				    	</li>
				  
				   	<?php else: ?>
				   		<li id="signupTab">
				   				<a href='/users/signup'>Sign up</a>
				        </li>
				        <li id="loginTab" class="pull-right">
				            	<a href='/users/login'>Log in</a>
				        </li>
				     <?php endif; ?>
				</ul>
			</div>
		</div>
		<div class="span6"></div>
	</div>
	

  
  <div class="span12">
    <br>
  <div>
	<?php if(isset($content)) echo $content; ?>
  
  </div>
  <br>
  <div>
  	<br><br>

  	<?php if(isset($postbox)) echo $postbox; ?>

  </div>
  </div>
</div>

<!--
    <div id='menu'>

        <ul class="nav">


        <a href='/'>Home</a>

        Menu for users who are logged in
        <?php #if($user): ?>

            <a href='/users/logout'>Logout</a>
            <a href='/users/profile'>Profile</a>

         Menu options for users who are not logged in
        <?php #else: ?>

            <a href='/users/signup'>Sign up</a>
            <a href='/users/login'>Log in</a>

        <?php #endif; ?>

    </div>
    <br>

	<?php #if(isset($content)) echo $content; ?>
	-->
</body>
<script type="text/javascript" src="/js/custom.js"></script>
</html>