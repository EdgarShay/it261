<?php
// understanding the logic!!
// 1 ruble = 0.017 dollars
// 1 pound sterling = 1.15 dollars
// 1 canadian dollar = .76 dollars
// 1 euro = 1.00 dollars
// 1 yen = .0074 dollars

// rubles = 10007 = 117.11
// pound sterling = 500 = 575
// Canada = 5000 = 3800
// euros = 1200 = 1200
// yen 2000 = 14.80
// 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My currency Logic Exercise</title>

<style>
* {
   padding:0;
   margin:0;
   box-sizing:border-box;
}


#wrapper {
    width:500px;
    margin:30px auto;
}


table {
    border:1px solid orange;
    border-collapse:collapse;
    width:500px;
}


th, td {
    border:1px solid orange;
    padding:8px;
}


h1,h2, h3 {
    text-align:center;
}


</style>

</head>
<body>
 
<div id="wrapper">

<h1>After our world-mind travels, we have returned with the following currencies</h1>   
<ul>
<li>Rubles</li>
<li>Pound Sterling</li>
<li>Canadian Dollar</li>
<li>Euros</li>
<li>Yens</li>
</ul>

<h2>Whatever shall we do?</h2>

<table>

<tr>
<th colspan="2">Currency</th>
<th>Dollars</th>
</tr>

<tr>
<th>Rubles</th>
<td>10007</td>
<td>117.11</td>
</tr>

<tr>
<th>Pound Sterling</th>
<td>500</td>
<td>575</td>
</tr>

<tr>
<th>Canadian Dollars</th>
<td>5000</td>
<td>3800</td>
</tr>

<tr>
<th>Euros</th>
<td>1200</td>
<td>1200</td>
</tr>

<tr>
<th>Yens</th>
<td>2000</td>
<td>14.80</td>
</tr>

</table>



<!-- end wrapper -->
</div>


</body>
</html>























