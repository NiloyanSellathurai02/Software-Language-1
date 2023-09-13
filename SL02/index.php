
<?php 
//Hierbij de naam van de groep gedefineerd

$myDetails = [
   'Niloyan', //firstName
        'Sellathurai',// Lastname
        22 //age
];

$group = [
    $firstPerson = [
        'Niloyan', //firstName
        'Sellathurai',// Lastname
        22, //age
        'Front-end Developer' //role
    ],
    $secondPerson = [
        'Sam', // firstName
        'Maijer', //lastName
        20, //age
        'Back-end Developer' // role
    ],

    $thirdPerson = [
        'Fouad',//firstName
        'Taissate',//lastName
        21,//Age
        'Front-end Developer' //role
    ]
    ];

    foreach($group as $persons){
        echo implode($persons) . "<br>";
    };


?>