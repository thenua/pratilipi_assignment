<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!--jQuery library-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!--Latest compiled and minified JavaScript-->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.js"></script>
    <title>Assignment</title>
    <style>
    .thumbnail{
        height:400px;
        width:400px;
        padding:40px;
    }
    </style>
</head>
<body>
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
<div class="collapse navbar-collapse" id="myNavbar">
<ul class="nav navbar-nav navbar-right">
<li>
<a href="logout.php"><span class="glyphicon glyphicon-user"></span> Logout</a></li>
</ul>
</div>
</div>
</nav>
<div class="container">
    <center> <h1 style="margin-top:55px"> Welcome to Story World</h1></center>
   <h1> Here we have some popular stories for you... Please check it once!!!</h1>
    <div class="row">
    <div class="col-sm-4">
    <div class="thumbnail">
    <img src="1.jpg" alt="1.jpg">
    <div class="caption">
    <h3> The Rabbit and Tortoise</h3>
    <p>Read your first story.</p>
    <center><a href="story1.php" class="btn btn-primary">Continue Reading</a></center>
    </div>
    </div>
    </div>
    <div class="col-sm-4">
    <div class="thumbnail">
    <img src="2.jpg" alt="2.jpg">
    <div class="caption">
    <h3> Thristy Crow</h3>
    <p>Read your second story.</p>
    <center><a href="story2.php" class="btn btn-primary">Continue Reading</a></center>
    </div>
    </div>
    </div>
    <div class="col-sm-4">
    <div class="thumbnail">
    <img src="3.jpg" alt="3.jpg" height="600px">
    <div class="caption">
    <h3> The Lion and the mouse</h3>
    <p>Read your third story.</p>
    <center><a href="story3.php" class="btn btn-primary">Continue Reading</a></center>
    </div>
    </div>
    </div>
</body>
</html>