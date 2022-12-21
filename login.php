<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
<title>Login Page</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>
body{
    color: #fff;
	background: #000000;
	font-family: 'Roboto', sans-serif;
}
.login-control {
	height: 40px;
	box-shadow: none;
	color: #969fa4;
}
.login-control:focus {
	border-color: #5cb85c;
}
.login-control, .btn {        
	border-radius: 3px;
}
.login-form {
	width: 450px;
	margin: 0 auto;
	padding: 30px 0;
  	font-size: 15px;
}
.login-form h2 {
	color: #636363;
	margin: 0 0 15px;
	position: relative;
	text-align: center;
}
.login-form h2:before, .login-form h2:after {
	content: "";
	height: 2px;
	width: 30%;
	background: #d4d4d4;
	position: absolute;
	top: 50%;
	z-index: 2;
}	
.login-form h2:before {
	left: 0;
}
.login-form h2:after {
	right: 0;
}
.login-form .hint-text {
	color: #999;
	margin-bottom: 30px;
	text-align: center;
}
.login-form form {
	color: #999;
	border-radius: 3px;
	margin-bottom: 15px;
	background: #f2f3f7;
	box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
	padding: 30px;
}
.login-form .form-group {
	margin-bottom: 20px;
}
.login-form input[type="checkbox"] {
	margin-top: 3px;
}
.login-form .btn {        
	font-size: 16px;
	font-weight: bold;		
	min-width: 140px;
	outline: none !important;
}
.login-form a {
	color: #fff;
	text-decoration: underline;
}
.login-form a:hover {
	text-decoration: bold;
}
.login-form form a {
	color: #5cb85c;
	text-decoration: none;
}	
.login-form form a:hover {
	text-decoration: underline;
}  
</style>
</head>
<body>
<div class="login-form">
   
   <form action="loginsql.php" method="post">
        <h2>Login</h2>
        <p class="hint-text">Please enter your email and password</p>
        <div class="form-group">
           <input type="email" class="form-control" name="email" placeholder="Email" required="required">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" name="pass" placeholder="Password" required="required">
        </div>
        <div class="form-group">
			<label class="form-check-label"><input type="checkbox" required="required"><a href="#">Remember me</a></label>
		</div>
		<div class="form-group">
            <input type="submit" name="sub" class=" btn-success btn-lg btn-block " value="Login">
        </div>
    </form>
    <div class="text-center">Want to Create New account? <a href="loginpage1.php">Register</a></div>
</div>    
</body>
</html>