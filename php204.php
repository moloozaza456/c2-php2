<?php
    $x = 5; //Global Variable
    echo $x;

    function myTest(){
        global $x;
        $v = 10; //Local Variable
        echo $v;
    }
    myTest();
?>