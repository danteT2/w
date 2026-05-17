<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .container{
            border:2px solid black;
            background-color:steelblue;
            color:white;
            width:400px;
            text-align:center;
            margin:50px auto;
        }
        .container h1{
            color:black;
        }
        .container hr{
            width:80%;
        }
        
    </style>
</head>
<body>
    <div class="container">
        <h1>PHP Array</h1>
        <hr><br>
        <div class="result">
        <?php
            
            $students= array("Karan","Himesh","Swaraj","Onkar","Hardik");
            echo "Indexed Array: <br>";
            foreach($students as $stud){
                echo "&bull; ".$stud."<br>";
            }

            echo "<br><hr><br>";

            $people = array("1"=>"Karan", "2"=>"Himesh", "3"=>"Swaraj", "4"=>"Onkar", "5"=>"Hardik");
            echo "Assosiative Array: <br> Rollno:  Name:  <br>";
            foreach($people as $rn => $person){
                echo $rn . " : " . $person ."<br>";
            }
            
            echo "<br><hr><br>";

            echo "Multidimensional Array: <br>";
            $marks= array(
                array("r\c", " c1"," c2"),
                array("r1",11,90),
                array("r2",12,100),
                array("r3",13,85)
            );

            foreach($marks as $sub){
                foreach($sub as $mk){
                    echo $mk . " ";
                }
                echo "<br>";
            }
        ?>
        <br><br>
    </div>
</body>
</html>