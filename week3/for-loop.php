<?php
// this file will demostrate for loops and in addition to placing your php inside your HTML!!!
// The for loop - Loops through a block of code a specified number of times.
// for (init counter; test counter; increment counter) { code to be executed for each iteration; }

// celcius and fahrenheit


// $far = ($celsius * 9/5) + 32;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Celsius Table</title>
    <style>
* {
    padding:0;
    margin:0;
    box-sizing:border-box;
}


table {
    width:500px;
    margin:20px auto;
    border-collapse:collapse;
    border:1px solid lightblue;
}


td, th  {
    border:1px solid lightblue;
    border-collapse:collapse;
    padding:5px;
}


h1, h2 {
    text-align:center;
    margin: 10px 0;
    color:green; 
}



    </style>
</head>
<body>
    <h1>My Celcius / fahrenheit Table!</h1>

<table>
<tr>
<th>Celcius</th>
<th>fahrenheit</th>
</tr>
<?php
for($cel = 0; $cel <= 100; $cel += 5) {
    $far = ($cel * 9/5) + 32;
echo '<tr>';
echo '<td> '.$cel.' degrees </td>';
echo '<td> '.$far.' degrees </td>';
echo '</tr>';
}

?>
<table>

<h1>My Celcius / fahrenheit Table!</h1>

<table>
<tr>
<th>Celcius</th>
<th>fahrenheit</th>
</tr>
<?php
for($cel = 0; $cel <= 100; $cel += 2) {
    $far = ($cel * 9/5) + 32;
echo '<tr>';
echo '<td> '.$cel.' degrees </td>';
echo '<td> '.$far.' degrees </td>';
echo '</tr>';
}

?>
<table>

<h2>You will now complete a kilometer/miles table on your own!</h2>

<table>
<tr>
<th>Kilometers</th>
<th>miles</th>
</tr>
<?php 
for($kil = 0; $kil <= 20; $kil += 0.6213) {
    $mil = ($kil * 0.6213);
echo '<tr>';
echo '<td> '.$kil.' distance </td>';
echo '<td> '.$mil.' distance </td>';
echo '</tr>';
}

?>
<table>

</body>
</html>




