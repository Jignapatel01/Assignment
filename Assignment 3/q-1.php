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
        Enter Marks of Physics :
        <input type="number" name="m1" placeholder="enter marks*" required><br><br>
        Enter Marks of Chemestry :
        <input type="number" name="m2" placeholder="enter marks*" required><br><br>
        Enter Marks of Biology :
        <input type="number" name="m3" placeholder="enter marks*" required><br><br>
        Enter Marks of Maths :
        <input type="number" name="m4" placeholder="enter marks*" required><br><br>
        Enter Marks of Computer :
        <input type="number" name="m5" placeholder="enter marks*" required><br><br>
        <input type="submit" name="sub" value="submit"><br><br>
        
    </form>

    <?php
        if(isset($_POST['sub']))
        {
            $n1=$_POST['m1'];
            $n2=$_POST['m2'];
            $n3=$_POST['m3'];
            $n4=$_POST['m4'];
            $n5=$_POST['m5'];
        }
        $total_marks=$n1+$n2+$n3+$n4+$n5 ."<br>";
        echo " Total mark :".$total_marks;
        $per= ($total_marks/500)*100 ."<br>";
        echo " Per :".$per;
        

        
if ($per >= 90)
{
    echo  " Grade A+";
}
else if ($per >= 75 && $per < 90)
{ 
    echo " Grade A";
}
else if ($per >= 60 && $per < 75)
   {
      echo " Grade B+";
   } 
else if ($per >= 50 && $per < 60)
    {
        echo " Grade B";
    }
else if ($per >= 33 && $per < 50)
    {
        echo " Grade C";
    }
else
{
    echo " Grade E";
}
    



     ?>
</center>


</body>
</html>