<link href="temp/assets/css/bootstrap.css" rel="stylesheet">
<link href="temp/assets/css/main.css" rel="stylesheet">

<?php
	include 'temp/header1.php';
?>

<div class="container" style="width:35%;">
	<h2>Sign Up</h2>
		<form action="signup.php" method="post" class="form-signup" role="form">
  			<input type="text" name="username" class="form-control" placeholder="User Name" required autofocus>
  			<input type="text" name="fullname" class="form-control" placeholder="Full name" required autofocus>
  			<input type="text" name="password" class="form-control" placeholder="Password" required autofocus>
  			<input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address" required autofocus>
  			
   			<button class="btn btn-lg btn-primary btn-block" type="submit">Sign up</button>
		</form>
	</div>


<?php
	include 'temp/footer.php';
?>