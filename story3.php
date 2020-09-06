<?php
       $server="sql306.epizy.com";
       $username="epiz_26673751";
       $password="lEK31VucpA7qb";
       $dbname="epiz_26673751_counter";
       
   
       $connection=mysqli_connect($server,$username,$password,$dbname);
    if(mysqli_connect_errno()){
    die("Error connecting to the Database");
    }

    $visitor_ip=$_SERVER['REMOTE_ADDR'];

    $query="SELECT * FROM counter_table2 WHERE ip_address='$visitor_ip'";
    $result=mysqli_query($connection,$query);

    if(!$result){
        die("retriving Query Error<br>".$query);
    }
    $total_visitors=mysqli_num_rows($result);
    if($total_visitors<1){
        $query="INSERT INTO counter_table2(ip_address) VALUES('$visitor_ip')";
        $result=mysqli_query($connection,$query);
    }

    $query="SELECT * FROM counter_table2";
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
<center><h2>The Lion and the mouse<h2></center>
</div>
<div class="panel-body">
    <p style="font-size:18px;"><i>
    A lion was once sleeping in the jungle when a mouse started running up and down his body just for fun. This disturbed the lion’s sleep, and he woke up quite angry. He was about to eat the mouse when the mouse desperately requested the lion to set him free. “I promise you, I will be of great help to you someday if you save me.” The lion laughed at the mouse’s confidence and let him go.

One day, a few hunters came into the forest and took the lion with them. They tied him up against a tree. The lion was struggling to get out and started to whimper. Soon, the mouse walked past and noticed the lion in trouble. Quickly, he ran and gnawed on the ropes to set the lion free. Both of them sped off into the jungle.
</i></p>
</div>
<div class="panel-footer"> <p style="font-size:18px;"><b>Moral---></b>A small act of kindness can go a long way.</p></div>
<a href="home.php" class="btn btn-success">Return</a>
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