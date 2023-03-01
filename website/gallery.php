<?php
$people['Carmelo_Anthony'] = 'antho_Basketball Player NBA ALL-Star.';
$people['Blake_Griffin'] = 'griff_Basketball Player Named Player of the year.';
$people['Derrick_Roses'] = 'roses_Basketball Player He Played with NY Nicks.';
$people['Juan_Toscano'] = 'tosca_Basketball Player With Utta Jazz.';
$people['Stephen_Curry'] = 'curry_Basketball Player for Golden State Warriors.';
$people['Kyrie_Irving'] = 'irvin_Named Rookie of the year for Broklyn Nets.';
$people['Vince_Carter'] = 'carte_Was a Forward Basketball Player in the NBA.';
$people['Scotty_Pippen'] = 'pippe_Played In the NBA with the Chicago Bulls.';
$people['Michael_Jordan'] = 'jorda_Basketball Player With the Chicago Bulls.';
$people['Dennis_Rodman'] = 'rodma_Famous Basketball Player With the Chicago Bulls.';
$people['Allen_Iverson'] = 'ivers_Famous Basketball Player with Philadelphia 76ers.';
// variable, key, and value
// $name               $image

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Week 7, class exercise - pictures</title>
    <style>

table {
    border:1px solid red;
    border-collapse:collapse;
}


td {
    border:1px solid red;
}





    </style>

</head>
<body>
 <table>
<?php foreach($people as $name => $image)   :?>
<tr>
<td><img src="images/<?php echo substr($image, 0, 5);?>.jpg" 
alt="<?php echo str_replace('_', ' ', $name)     ;?>" ></td>
<td><?php echo str_replace('_', ' ', $name)     ;?></td>
<td><?php echo substr($people[$name], strpos($people[$name], '_') + 1)     ;?></td>
<td><img src="images/<?php echo substr($image, 0, 5);?>_2.jpg" 
alt="<?php echo str_replace('_', ' ', $name);?>"></td>
</tr>
<?php endforeach ; ?>
</table>
</body>
</html