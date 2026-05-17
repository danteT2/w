<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <style>
        .container{
            width:400px;
            margin:50px auto;
            padding:20px;
            border:1px solid black;
            border-radius:10px;
            background-color:lightblue;
            text-align:center;
        }

        .result{
            margin-top:20px;
            font-size:20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>String Manipulation Program</h2>
    
        <form method="POST">
            <input type="text" placeholder="Enter a string string" name="str">
            <br><br>
            <button type="submit">Submit</button>
        </form>

        <div class="result">
            <?php
            if($_SERVER["REQUEST_METHOD"]==="POST"){
                $txt= $_POST["str"];

                echo "Original String: ".$txt."<br><hr>";
                echo "String Length  : ".strlen($txt)."<br><hr>";
                echo "Reversed String: ".strrev($txt)."<br><hr>";
                echo "Substring (first 5 char): ".substr($txt,0,5)."<br><hr>";
                echo "Upper case string: ".strtoupper($txt)."<br><hr>";
                echo "Lower case string: ".strtolower($txt);
            }
            ?>
        </div>
    </div>
</body>
</html>