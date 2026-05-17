<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prac 10</title>
    <style>
        body{
            font-family:arial,sans-serif;
        }
        .container{
            border:2px solid black;
            width:50%;
            margin:50px auto;
            background-color:steelblue;
            color:white;
            text-align:center;
            border-radius:10px;
            box-shadow:0px 0px 20px black;
        }
        .container input{
            margin:3px auto;
            background-color:lavender;
            width:70%;
            border:1px solid white;
            border-radius:5px;
            padding:2px;
        }
        .container button{
            margin:10px auto;
            background-color:coral;
            border:1px solid black;
            color:white;
            padding:2px 5px;
        }
        .container button:hover{
            background-color:brown;
            transition-duration:0.3s;
        }

        .result{
            margin:10px auto;
            padding:15px;
            border:1px solid white;
            width:60%;
            border-radius:7px;
            background-color:rgba(130,10,100,0.3);
            text-align:left;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Student Form</h2>
        <form action="#" method="POST">

        <input type="text" name="name" placeholder="Enter ur Name">
        <br>
        <input type="number" name="age" placeholder="Enter ur Age">
        <br>
        <button type="submit">Submit</button>
        </form>

        <hr style="width:90%">

        <div class="result">
           <?php
                if($_SERVER["REQUEST_METHOD"]==="POST"){
                    $name=$_POST["name"];
                    $age =$_POST["age"];

                    echo "Name entered is : ".$name."<br><hr>";
                    echo "Age entered is  : ".$age;
                }
           ?>
        </div>

    </div>
</body>
</html>