<?php 
	include 'php_modules/auth.php';
	include 'html_modules/header.php'; 
?>
 
 <body>
	 <div class="container">
		<div class="val">
			<div class="hal">
				<div style="width: 600px; height:400px">	
					<?php include_once 'menu.php';?>	
					
					<p style='text-align:center;'>Willkommen auf der PHP-Demo-Seite, <?php echo $_SESSION["user"]?>.</p>
				</div>	
			</div>
		</div>
	</div>
</body>
</html>