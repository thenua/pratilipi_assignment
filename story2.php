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

    $query="SELECT * FROM counter_table1 WHERE ip_address='$visitor_ip'";
    $result=mysqli_query($connection,$query);

    if(!$result){
        die("retriving Query Error<br>".$query);
    }
    $total_visitors=mysqli_num_rows($result);
    if($total_visitors<1){
        $query="INSERT INTO counter_table1(ip_address) VALUES('$visitor_ip')";
        $result=mysqli_query($connection,$query);
    }

    $query="SELECT * FROM counter_table1";
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
<center><h2>Thristy Crow<h2></center>
</div>
<div class="panel-body">
    <p style="font-size:18px;"><i>
    It was a hot summer’s day. A thirsty crow flew into a village in search of water. The crow flew over the houses, fields, and trees. But he didn’t find any water. After a long time, he came across a farm. Under one of the trees on the farm was a pitcher of water.

Happy that he found some water finally, he swooped down to the tree and then down to the ground. He quickly moved towards the pitcher and looked inside. There was very little water in the pot. The crow put his beak inside the pitcher but could not reach the water. The water level was too low, and the narrow opening prevented his neck from going all the way down.

He tried to push the vessel down to let the water out, but it was too heavy. The crow was disappointed. He was really thirsty and needed a drink of water badly. He could have given up and flown to another farm, looking for water.

But he didn’t. Instead, he looked around and thought, “What else can I do?” He saw that there were a lot of pebbles on the farm. And, he had an idea! He collected a pebble and put it into the pitcher. He collected another pebble and another and put them all in the pitcher. As he added more and more stones, the water level came up to the brim.
The crow drank the water and flew back home happily!
</i></p>
</div>
<div class="panel-footer"> <p style="font-size:18px;"><b>Moral---></b>Necessity is the mother of invention.</p></div>
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