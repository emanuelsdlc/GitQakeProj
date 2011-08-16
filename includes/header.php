<!DOCTYPE html>

<html>

    <head>
        <title>Qake - <?php if($_GET['__title']) echo $_GET['__title']; ?></title>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" >
        <meta name="author" content="Qake" />
        <link rel="icon" href="/favicon.ico" />
	<link rel="shortcut icon" href="/favicon.ico" />
        <link rel="stylesheet" href="./includes/style.css" type="text/css" media="all" />
        <script type="text/javascript" src="./includes/global.js"></script>
    </head>

    <body>
    	
    	<div id="overflow-nav">
    		<div class="container">
    			<section id="search-box">
    				<form action="search_result.php">
    					<input type="text" id="search" name="search" /> <input type="submit" value="search" />
    				</form>
    			</section>
    		</div>
    	</div>
    	<div class="container">
    		<header id="header">
    			<a href="http://www.qake.info/"><img src="http://www.qake.info/images/cake-logo.png" alt="Qake Logo" title="Qake.info" border="0"/> </a><span>Welcome to Qake!</span>
    		</header>
    		<div id="main">