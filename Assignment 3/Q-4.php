<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<center>
    <form method="post">
        Enter 1st number:
        <input type="text" name="A" required><br><br>
        Enter 2nd number:
        <input type="text" name="B" required><br><br>
        Enter 3rd number:
        <input type="text" name="C" required><br><br>
        <input type="submit" name="cal" value="submit"><br>
</form>



<?php
    if(isset($_POST["cal"]))
    {
        $A=$_POST["A"];
        $B=$_POST["B"];
        $C=$_POST["C"];
        if($A>$B && $A>$C)
        {
            echo " max number is :".$A;
        } 
         elseif ($B>$C && $B>$A) 
         {
             echo " max number is :".$B;
         }
        elseif($C>$A && $C>$B)
        {
            echo " max number is :".$C;
        }
        else
        {
            return 0;
        }
    }


  ?>
</center>
</body>
</html>