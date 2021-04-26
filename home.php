<!DOCTYPE html>
<html>
<head>
	<title>CEYA WIKI</title>
	<?php include('dbconn.php'); ?>
	<?php include('session.php'); ?>
		<link rel="stylesheet" href="style.css">
	  <script src="vendors/jquery-1.7.2.min.js"></script>
     <script src="vendors/bootstrap.js"></script>
	<link rel="stylesheet" href="navbar.css">

</head>
<body>
	<div id="container">


		<div class="navbar">
			<ul>
				<li><a href="home.php">Home</a></li>
				<li><a href="create_post.php">Post</a></li>
				<li><a href="create_article.php">Article</a></li>
				<li>
				<a href="create_wiki.php">Create Wiki</a>
				</li>
				<li style="float:right"><a class="active" href="login.php">Login</a></li>
				<li style="float:right"><a class="active" href="signup.php">Register</a></li>
				<li style="float:right"><a class="active" href="logout.php"<?php echo $member_row['firstname']." ".$member_row['lastname']; ?>>Logout</a></li>
			</ul>
		</div>

		<br>
	
			<h1>Welcome to the CEYA WIKI</h1>

			<div id="intro">
				<div class="row">
					<p></p>
				</div>

			</div>
		

					
</body>

  <?php include('footer.php');?>

</html>