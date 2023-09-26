<?php 
require('./tools.php');
date_default_timezone_set('Europe/Amsterdam');

function changeColor(){
    if(date(format:'H,M') < 12){
        echo "
        <style>
            body{background-color:blue}
        
        </style>
        ";

        echo date(format:'H');
    }else{
        echo "
        <style>
            body{background-color:red}
        
        </style>
        ";
    }
};

changeColor();


//Random values veranderen.
$a=["red","green","blue","yellow","brown"];
$random_keys=array_rand($a);
echo $a[$random_keys]."<br>";

?>