<html>
<head>
	<title>Ninja Assist</title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>

<style>
	img {
		width: 500px;
	}
</style>
<body>
	<div id="container">
		<div class="row">
			<div class="col-md-6">
				<h1>Ninja Assist</h1>
				<p>Got issues? Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
				</p>
			<div>
				<img src="../assets/coding_dojo.png">
			</div>
			</div>
			<div class="col-md-3">
				<h1>Login</h1>
				<form role="form" action="" method="post">
				   <div class="form-group">
				      <label for="email">Email:</label>
				      <input type="email" class="form-control" id="email" placeholder="Enter email">
				   </div>
				   <div class="form-group">
				      <label for="pwd">Password:</label>
				      <input type="password" class="form-control" id="pwd" placeholder="Enter password">
				   </div>
				   <button type="submit" class="btn btn-default">Login</button>
				</form>		
				<h2>Register</h2>
					  <p>Don't have an account?  Sign up!</p>
				<form role="form" action="user/register" method="post">
				    <div class="form-group">
				      <label for="usr">Name:</label>
				      <input type="text" class="form-control" id="name">
				      <label for="pwd">Email Address:</label>
				      <input type="email" class="form-control" id="email">
				      <label for="password">Password:</label>
				      <input type="password" class="form-control" id="pwd">
				      <label for="pwd">Confirm Password:</label>
				      <input type="password" class="form-control" id="pwd">
				  </div>
				  <div>
				      <button type="submit" class="btn btn-default">Sign up</button>
				  </div>
				</form>		
			</div>
		</div>
	</div>
</body>
</html>