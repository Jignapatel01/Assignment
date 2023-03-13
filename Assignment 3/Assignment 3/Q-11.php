<?php

// An Array function is create an array as array().

// Array is declare in Three types.
// 1. Index array
    // it define direct value in array.
// 2. Associacte Array
      //  it define name and value store in array.
// 3. Multidimensional Array
       //it define one or more array.


 // Convert JSON string to Array         
    //JSON stand for Javascript object Notation
    //JSON used its function for encode and decode array data.
    //EX:
    ?>

    <?php
    
    $jsonString = '{"India":"ind","United of America":"USA","Canada":"cnd","United Kingdomn":"UK"}';
    $phpArray = json_decode($jsonString, true);
    
    var_dump($phpArray);
    ?>

