<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>

    <style>
        body{
            background-color:steelblue;
            font-family:arial, sans-serif;
        }
        .container{
            border:2px solid black;
            width:50%;
            margin:60px auto;
            padding:20px;
            text-align:center;
            background-color:beige;
            color:black;
            border-radius:10px;
            box-shadow:0 0px 30px black;
        }

        .welcome{
            color:steelblue;
            text-decoration:underline solid maroon;
        }
        .date{
            border:1px solid maroon;
            margin:15px auto;
            padding:5px;
            width:50%;
            background-color:lightcoral;
            color:white; 
            font-style:italic;
            font-weight:bold;
        }
        .time{
            border:1px solid maroon;
            margin:15px auto;
            padding:5px;
            width:50%;
            background-color:brown;
            color:white;
            font-style:italic;
            font-weight:bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>This is created using PHP</h1>
        <hr>

        <div class="welcome">
            <h3>Welcome</h3>
        </div>

        <?php
        date_default_timezone_set("Asia/Kolkata");
        ?>

        <div class="date">
            <?php
                echo "Current Date: ".date("l, d F Y")."<br>";
            ?>
        </div>

        <div class="time">
            <?php
                echo "Current Time: ".date("h:i:s a");
            ?>
        </div>

    </div>
</body>
</html> 