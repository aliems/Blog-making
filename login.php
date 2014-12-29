	<link href="temp/assets/css/bootstrap.css" rel="stylesheet">
    <link href="temp/assets/css/main.css" rel="stylesheet">
	<?php
	include 'temp/header2.php';

	if(isset($_GET['error'])){
		$error = $_GET['error'];
	if($error == 'username'){
		echo "username or password is incorrect";
	}else{
		echo "error";
	}
	}
	?>
	
	<div class="container" style="width:35%;" >
 		<form action="login2.php" method="post" class="form-signin" role="form">
 			<h2 class="form-signin-heading">Please sign in</h2>
 			<label for="inputUsername" class="sr-only">User Name</label>
  			<input type="text" name="username" class="form-control" placeholder="User Name" required autofocus>
  			<label for="inputPassword" class="sr-only">Password</label>
  			<input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
  			<div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      </form>
		
	</div>
	</div>
	<?php
	include 'temp/footer.php';
	?>
<script src="temp/assets/js/bootstrap.js"></script>
</body>
</html>