<?php
    $f1 = 0;
    $f2 = 1;
    $f3=0;
    echo " Fibonacci series"."<br><br>";
    echo $f1;
    echo '<br/>';
    echo $f2 ."<br>";
    while($f1< 10)
    {
        $f1 = $f2;
        $f2 = $f3;
        $f3 = $f1 + $f2;
        echo $f3 ."<br />"; 
    }
?>