<?php $__env->startSection('content'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style type="text/css">
		.bu1
		{
			color: white;
			background-color: rgb(5, 99, 209);
		}
		.bu1:hover
		{
			background-color: rgb(5, 143, 209);
		}
		.man
		{
			border-radius: 10px;
		}
	</style>
</head>
<body style="background-color: black;
  		color: white;">
	<div class="container">
		<div class="jumbotron text-center">
			<h1 style="color: black;">Login</h1>
		</div>
		<form class="form1" method="GET" action="/login/access">
		<?php echo e(csrf_field()); ?>

			<div class="form-group">
				<label for="Username">Username</label>
				<input type="text" class="form-control man" name="user" placeholder="Enter your username">
			</div>
			<div class="form-group">
				<label for="Password">Password</label>
				<input type="password" class="form-control man" name="pass" placeholder="Enter your password">
			</div>
			<br>
			<div class="form-group">
				<button class="form-control man bu1" type="submit" name="submit">Login</button>
			</div>
		</form>
		<br>
		<br>
		<h3>Follow us on</h3>
		<br>
		<div class="row follows">
		<div class="col">
		<a href="#" class="fa fa-facebook"></a>
	</div>
	<div class="col">
		<a href="#" class="fa fa-instagram"></a>
	</div>
	<div class="col">
		<a href="#" class="fa fa-telegram"></a>
	</div>
	<div class="col">
		<a href="#" class="fa fa-twitter"></a>
	</div>
	</div>
	</div>
</body>
</html>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('navbarsbootsdtrap', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\sharath\manilara\resources\views/login.blade.php ENDPATH**/ ?>