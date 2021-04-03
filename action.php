<?php
    if ($_SERVER['REQUEST_METHOD']== "POST") {

        $string = $_POST['text-con'];

        if(strlen($string) > 16){
            echo "Math Error";
        } else {

            $result =   eval('return '. $string . ';');
        }

        // $result =   eval('return '. $string . ';');


        
       
        

        //  echo $result;
    }