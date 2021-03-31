<?php
    if ($_SERVER['REQUEST_METHOD']== "POST") {

        $string = $_POST['text-con'];

        if (!intval(substr($string, -1)) OR !intval(substr($string, 0, 1)))
        {
            $result = "MATH ERROR";
        }else
        {
            $result = ' = ' . eval('return '. $string . ';');
        }

         echo $result;
    }