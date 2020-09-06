<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<!--jQuery library-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!--Latest compiled and minified JavaScript-->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.js"></script>
<title>Assignment</title>
<style>
.note{
	color:red;
}
</style>
</head>
<body>
<div class="row"style="height:80px;">
<nav class="navbar navbar-inverse navbar-fixed-top">
<div class="container">
<div class="navbar-header">
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
<a href="#" class="navbar-brand">Story World</a>
</div>
</div>
</nav>

<div class="row">
<div class="col-md-4 col-sm-4 col-xs-12"></div>
<div class="col-md-4 col-sm-4 col-xs-12">
<div class="panel panel-primary" style="margin-top:100px">
<div class="panel-heading">
<h3>LOGIN </h3>
</div>
<div class="panel-body">
<p  class="text-warning">Login to read a short story</p>
<form action="Script URL" method="POST">
<div class="form-group">
<label for="email">Email address</label>
<input type="email" class="form-control" name="email" placeholder="Email" id="t1" required>
</div>
<div class="form-group">
<label for="password">Password</label>
<input type="password" class="form-control" name="password" placeholder="Password" id="t2" required>
</div>
</form>
<form action="Script URL" method="POST">
<script>
function sub()
{
var email=document.getElementById("t1").value;
var password=document.getElementById("t2").value;
while(true)
{
if(email == "testing@gmail.com" && password == "test123"){
    alert("Login Successfully");
    window.location.href = "home.php";
	return false;
}
else{
    alert("Sorry wrong input...Please try again with correct one!!!.");
    return false;
}
}
}
</script>
<input type="button" class="btn btn-primary" name="login" value="Login" onclick="sub()">
</form>
<span><b class="note">Note : </b>To access this use following email and password.  <br><b class="valid">Email address : testing@gmail.com</br>Password : test123</b></span>
</div>
<div class="col-md-4 col-sm-4 col-xs-12"></div>

<div class="panel-footer">
Don't have an account? <a href="#">Register<a>
</div>

</div>
</div>






<nav class="navbar navbar-inverse navbar-fixed-bottom" style="height:1px">
<div id="footer">
	<div class="container">
	<center><div class="navbar-text">
	<p>Copyright @ Devesh Chaudhary | Contact Us: +91 9045357097</p>
	</div></center>
	</div>
</div>
</nav>
</body>
</html>