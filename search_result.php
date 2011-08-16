
<?php 
	$_GET['__title'] = "Search result";
	include_once("./includes/header.php"); 
?>

<section>
	<header><h1>Search Result</h1></header>
	<?php 
		$search_type = substr($_GET['search'], 0, 1);
		$search_query = substr($_GET['search'], 0);
		if($search_type == "@"){
			for($i = 0; $i < 20; $i++){
	?>
				<section class="search_result_list">
					<img src="http://a1.twimg.com/profile_images/1497500068/cake-logo_normal.png" />
					<b>Qake</b> Using @Tag<br/>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed <em><?php echo $search_query; ?></em> do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad mini
				</section>		
	<?php	
			}		
		}else if($search_type == "#"){
			for($i = 0; $i < 20; $i++){
	?>
				<section class="search_result_list">
					<img src="http://a1.twimg.com/profile_images/1497500068/cake-logo_normal.png" />
					<b>Qake</b> Using #Tag<br/>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed <em><?php echo $search_query; ?></em> do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad mini
				</section>		
	<?php	
			}
		}else{
			for($i = 0; $i < 5; $i++){
	?>
				<section class="search_result_list">
					<img src="http://a1.twimg.com/profile_images/1497500068/cake-logo_normal.png" />
					<b>Qake</b> Using #Tag<br/>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed <em><?php echo "@".$search_query; ?></em> do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad mini
				</section>	
				
				<section class="search_result_list">
					<img src="http://a1.twimg.com/profile_images/1497500068/cake-logo_normal.png" />
					<b>Qake</b> Using @Tag<br/>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed <em><?php echo "#".$search_query; ?></em> do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad mini
				</section>		
	<?php	
			}
		}
	?>
</section>




<?php include_once("./includes/footer.php"); ?>