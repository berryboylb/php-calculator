<?php
    if ($_SERVER['REQUEST_METHOD']== "POST") {

        $string = $_POST['text-con'];

        
        $result =   eval('return '. $string . ';');
        

         echo $result;
    }