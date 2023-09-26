<?php

//Creating a array with the team members




function showMembers ($members) {
    foreach($members as $member){
        echo "<a href= members-view.php?user=".$member['firstName'].">".$member['firstName']."</a><br>";
    }


}


include_once("array.php");

showMembers($members);
