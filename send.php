<?php 
	$message = $_POST['message'];

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Wish wall</title>
 	<link rel="stylesheet" type="text/css" href="css/style.css">
 	<style type="text/css">
 	.wish {
 		background-image: url('bg.jpg');
 		width: 1024px;
 		height: 966px;
 		text-align: center;	
 		border:2px solid;
		border-radius:25px;
		margin: 0 auto;
 	}
 	.title {
 		margin: 0 auto;
 		height: 40px;
 		margin-bottom: 40px;
 		margin-top: 60px;
 	}
 	body {
 		background-color: #f5f5dc;
 		text-align: center;
 	}
 	.text {
 		width: 400px;
 		height: 300px;
 		text-align: center;
 		vertical-align: center;
 		margin: 340px  333px;
 	}
 	</style>
 </head>
 <body>
 <div class="title">
 	<h1 class="submit">Your wish</h1>
 </div>
 <div class="wish">
 	<div class="text">
 		<?php  echo "<p>".$message."</p>";?>
 	</div>
 </div>
 </body>
 </html>