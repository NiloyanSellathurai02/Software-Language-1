<?php 

$user = $_GET["user"];


function showInfo ($members,$user) {
  foreach($members as $member){
        if($user == $member["firstName"]){
            foreach($member as $info){
                echo $info ."<br>";
            }
        }
    }

}


include_once("array.php");

showInfo($members, $user);