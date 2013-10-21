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
	<div id="menu">
		<ul class="nav nav-tabs">
			<li class="active">
		    	<a href="/">Home</a>
		  	</li>
		  	<li class="divider-vertical"></li>
		  
		 	<!-- Menu for users who are logged in -->
			<?php if($user): ?>
				<li class="active">
						<a href='/users/logout'>Logout</a>
				</li> 
				<li class="divider-vertical"></li>
				<li class="active">
		    	        <a href='/users/profile'>Profile</a>
		    	</li>
		  
		   	<?php else: ?>
		   		<li class="active">
		   				<a href='/users/signup'>Sign up</a>
		        </li>
		        <li class="active"></li>
		        <li>
		            	<a href='/users/login'>Log in</a>
		        </li>
		     <?php endif; ?>
		</ul>
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

    </div> -->
    <br>

	<?php if(isset($content)) echo $content; ?>

	<!--<?php if(isset($client_files_body)) echo $client_files_body; ?>-->
</body>
<!--type="text/javascript" src="bootstrap/js/bootstrap.min.js"-->
</html>