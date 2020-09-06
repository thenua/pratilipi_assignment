<?php
    $hostname="localhost";
    $db_user="root";
    $db_pass=" ";
    $db_name="counter";

    $connection=mysqli_connect($hostname,$db_user,$db_pass,$db_name);
    if(mysqli_connect_errno()){
    die("Error connecting to the Database");
    }

    $visitor_ip=$_SERVER['REMOTE_ADDR'];

    $query="SELECT * FROM counter_table WHERE ip_address='$visitor_ip'";
    $result=mysqli_query($connection,$query);

    if(!$result){
        die("retriving Query Error<br>".$query);
    }
    $total_visitors=mysqli_num_rows($result);
    if($total_visitors<1){
        $query="INSERT INTO counter_table(ip_address) VALUES('$visitor_ip')";
        $result=mysqli_query($connection,$query);
    }

    $query="SELECT * FROM counter_table";
    $result=mysqli_query($connection,$query);

    if(!$result){
        die("retriving Query Error<br>".$query);
    }
    $total_visitors=mysqli_num_rows($result)
?>
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
    <style type="text/css">
        .wrapper{
            height:180px;
            width:290px;
            background-color:skyblue;
            margin: auto;
            text-align:center;
            border:1px solid white;
            box-shadow: 2px 2px 10px gray;
        }
        h1{
            background-color: mediumseagreen;
            color:white;
            border-bottom:2px solid white;
        }
        h3{
            font-size:3em;
            margin-bottom:20px;
            color:red;
        }
        h1,h3{
            padding:20px;
            margin:0px;
        }
        
    </style>
</head>
<body>
<div class="container">
<div class="row row_style">
<div class="col-xs-8">
<div class="panel panel-default">
<div class="panel-heading">
<center><h2>Rabbit and Tortoise Story<h2></center>
</div>
<div class="panel-body">
    <p style="font-size:18px;"><i>One day a rabbit was boasting about how fast he could run. He was laughing at the turtle for being so slow. Much to the rabbit’s surprise, the turtle challenged him to a race. The rabbit thought this was a good joke and accepted the challenge. The fox was to be the umpire of the race. As the race began, the rabbit raced way ahead of the turtle, just like everyone thought.

The rabbit got to the halfway point and could not see the turtle anywhere. He was hot and tired and decided to stop and take a short nap. Even if the turtle passed him, he would be able to race to the finish line ahead of him. All this time the turtle kept walking step by step by step. He never quit no matter how hot or tired he got. He just kept going.

However, the rabbit slept longer than he had thought and woke up. He could not see the turtle anywhere! He went at full speed to the finish line but found the turtle there waiting for him.
</i></p>
</div>
<div class="panel-footer"> <p style="font-size:18px;"><b>Moral---></b>never underestimate the weakest opponent.</p>
<a href="home.php" class="btn btn-success">Return</a> 
</div>
</div>
</div>
<div class="col-xs-4">
<div class="wrapper">
    <h1>
        Total Visitors
    </h1>
    <h3><?php echo $total_visitors; ?></h3>
    </div>
</div>
</div>
</div>
</body>
</html>