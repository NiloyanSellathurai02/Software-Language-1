<?php 
//Hier defineer ik mijn voornaam in
$name = "Niloyan";
//Hier defineer ik mijn achternaam
$lastName = 'Sellathurai';
//Hier defineer ik mijn leeftijd
$age = 22;
//hier defineer ik mijn e-mailadres
$email = 'n.sellathurai07@outlook.com';
//Hier defineer ik mijn geslacht
$gender = 'Man';
//Hier defineer ik mijn geboorteplaats
$birthplace = 'Amsterdam';
// Hier defineer ik hoelang ik ben in cm
$length = "163";
//Hier defineer ik hoeveel ik weeg in kg
$weight = '75';
//Hier defineer ik of een nederlandse nationaliteit heb
$haveaDutchPassport = true;
//Hier defineer ik mijn toekomst baan
$futureJob = 'Fullstack Web Engineer';

$datum = date("d/m/Y");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Welkom <?php echo $name?><span></span> <?php echo $lastName?></h1>
    <h2><?php echo "Today is " . date("d/m/Y") . "<br>" ?> </h2>
    <p>Email : <?php echo $email ?> </p>
    <p>Leeftijd: <?php echo $age ?></p>
    <p>Geslacht: <?php echo $gender ?></p>
    <p>Geboorteplaats: <?php echo $birthplace ?></p>
    <p>Lengte: <?php echo $length ?> CM</p>
    <p>Gewicht: <?php echo $weight ?> KG</p>
    <p>Toekomstbaan: <?php echo $futureJob ?></p>
    <p> Getrouwd : <?php echo $haveaDutchPassport?> </p>
    

    <script src="app.js"></script>
</body>
</html>