<?php

    $a = 5;
    $b = 10;

    echo "a=$a: before swapping  </br>";
    echo "b=$b: before swapping </br></br>";

    /*
    // Swapping variables with the help of temporary third variable

    $temp = $a;
    $a = $b;
    $b = $temp;
    */

     //Swapping variables without using third variable

    $a = $a+$b;
    $b = $a-$b;
    $a = $a-$b;

    echo "a=$a: after swapping </br>";
    echo "b=$b: after swapping </br></br>";
    

?>