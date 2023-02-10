<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator form</title>
    <link href="css/styles.css" type="text/css" rel="stylesheet">
<style>



* {
    padding:0;
    margin:0;
    box-sizing:border-box;
}


body {
    background: #ddd;
}


h2 {
    text-align:center;
}


p {
    text-align:center;
}



form {
    max-width: 400px;
    margin:20px auto;
}


fieldset {
    padding:10px;
}


label {
    display:block;
    margin-bottom:5px;
    font-weight:bold;
}


input[type=text],
input[type=distance],
input[type=speed],
input[type=hours] {
    width:100%;
    height:30px;
    margin-bottom:10px;
}


input[type=submit] {
    margin-bottom:10px;
}


select {
    display:block;
    margin-bottom:10px;
}



form ul {
    margin-bottom:10px;
    list-style-type:none;
}


.box {
    width:540px;
    padding:10px;
    margin:0 auto;
    background-color:gray;
}


.error {
    color:red;
    font-style:italic;
    text-align:center;
}


/* footer {
    height:60px;
    line-height: 60px;
    background: #ddd; 
    clear:both;
}


footer ul {
    display:flex;
    justify-content: center;
    list-style-type: none;
}


footer li {
    justify-content: center;
    margin:0 15px;
}  */


</style>



<h2> My Travel Calculator</h2>
<!-- https://www.geeksforgeeks.org/how-to-prevent-xss-with-html-php/ -->
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ;?>" method="post">
<fieldset>
<label>NAME*:</label>
<input type="text" name="name" value="<?php if(isset($_POST['name'])) 
echo htmlspecialchars($_POST['name']) ;?>">

<label>How many miles are you traveling*:</label>
<input type="distance" name="distance" value="<?php if(isset($_POST['distance'])) 
echo htmlspecialchars($_POST['distance']) ;?>">

<label>What is the average speed you drive*:?</label>
<input type="speed" name="speed" value="<?php if(isset($_POST['speed'])) 
echo htmlspecialchars($_POST['speed']) ;?>">

<label>How many hours per day wii be spent driving*:</label>
<input type="hours" name="hours" value="<?php if(isset($_POST['hours'])) 
echo htmlspecialchars($_POST['hours']) ;?>">

<!-- time for our radio buttom that has an additional attribute of value -->
<label>Select the average price of gas*:</label>
<ul>
<li><input type="radio" name="gas" value="3.25" <?php  
if(isset($_POST['gas']) && $_POST['gas'] == 3.25) 
echo 'checked="checked"' ;?>> $3.25 / gallon </li>

<li><input type="radio" name="gas" value="3.50" <?php  
if(isset($_POST['gas']) && $_POST['gas'] == 3.50) 
echo 'checked="checked"' ;?>> $3.50 / gallon </li>

<li><input type="radio" name="gas" value="3.75" <?php  
if(isset($_POST['gas']) && $_POST['gas'] == 3.75) 
echo 'checked="checked"' ;?>> $3.75 / gallon </li>

<li><input type="radio" name="gas" value="4.00" <?php  
if(isset($_POST['gas']) && $_POST['gas'] == 4.00) 
echo 'checked="checked"' ;?>> $4.00 / gallon</li>

<li><input type="radio" name="gas" value="4.25" <?php  
if(isset($_POST['gas']) && $_POST['gas'] == 4.25) 
echo 'checked="checked"' ;?>> $4.25 / gallon</li>

<li><input type="radio" name="gas" value="4.50" <?php  
if(isset($_POST['gas']) && $_POST['gas'] == 4.50) 
echo 'checked="checked"' ;?>> $4.50 / gallon</li>

<li><input type="radio" name="gas" value="4.75" <?php  
if(isset($_POST['gas']) && $_POST['gas'] == 4.75) 
echo 'checked="checked"' ;?>> $4.75 / gallon</li>

</ul>

<label>Select your vehicle's average gas mileage (Fuel efficiency)*:</label>

<select name="efficiency">
<option value=""NULL <?php if(isset($_POST['efficiency']) 
&& $_POST['efficiency'] == NULL) 
echo 'selected ="unselected"' ;?>>Select one!</option>

<option value="Terrible @ 10mpg" <?php if(isset($_POST['efficiency']) 
&& $_POST['efficiency'] == 'Terrible @ 10mpg') 
echo 'selected ="selected"' ;?>>Terrible @ 10mpg</option>

<option value="10 mpg or less" <?php if(isset($_POST['efficiency']) 
&& $_POST['efficiency'] == '10 mpg or less') 
echo 'selected ="selected"' ;?>>10 mpg or less</option>

<option value="11 - 15 mpg" <?php if(isset($_POST['efficiency']) 
&& $_POST['efficiency'] == '11 - 15 mpg') 
echo 'selected ="selected"' ;?>>11 - 15 mpg</option>

<option value="16 - 20 mpg" <?php if(isset($_POST['efficiency']) 
&& $_POST['efficiency'] == '16 - 20 mpg') 
echo 'selected ="selected"' ;?>>16 - 20 mpg</option>

<option value="21 - 25 mpg" <?php if(isset($_POST['efficiency']) 
&& $_POST['efficiency'] == '21 - 25 mpg') 
echo 'selected ="selected"' ;?>>21 - 25 mpg</option>

<option value="26 - 30 mpg" <?php if(isset($_POST['efficiency']) 
&& $_POST['efficiency'] == '26 - 30 mpg') 
echo 'selected ="selected"' ;?>>26 - 30 mpg</option>

<option value="31 - 35 mpg" <?php if(isset($_POST['efficiency']) 
&& $_POST['efficiency'] == '31 - 35 mpg') 
echo 'selected ="selected"' ;?>>31 - 35 mpg</option>

<option value="36 - 40 mpg" <?php if(isset($_POST['efficiency']) 
&& $_POST['efficiency'] == '36 - 40 mpg') 
echo 'selected ="selected"' ;?>>36 - 40 mpg</option>

<option value="41 - 45 mpg" <?php if(isset($_POST['efficiency']) 
&& $_POST['efficiency'] == '41 - 45 mpg') 
echo 'selected ="selected"' ;?>>41 - 45 mpg</option>

<option value="46 mpg or more" <?php if(isset($_POST['efficiency']) 
&& $_POST['efficiency'] == '46 mpg or more') 
echo 'selected ="selected"' ;?>>46 mpg or more</option>

<option value="Great @ 40mpg" <?php if(isset($_POST['efficiency']) 
&& $_POST['efficiency'] == 'Great @ 40mpg') 
echo 'selected ="selected"' ;?>>Great @ 40mpg</option>


</select>

<input type="submit" value="Calculate Trip">

<p><a href="">Reset</a></p>

</fieldset>

</form> 

<?php
// we will start with the server request method
// then, we will ask ourselves if any fields are empty
// if the fields are not empty, we will elseif they are set

if($_SERVER['REQUEST_METHOD'] == 'POST') {

if(empty($_POST['name'])) {
echo '<p class="error">Please fill out your name!</p>';
}
    
if(empty($_POST['distance'])) {
echo '<p class="error">Please fill out your total driving miles</p>';
}
    
if(empty($_POST['speed'])) {
echo '<p class="error">Please fill out how fast will you be driving</p>';
}
    
if(empty($_POST['hours'])) {
echo '<p class="error">How many hours per day would you like to drive?</p>';
}
 
if(empty($_POST['gas'])) {
echo '<p class="error">Your cost of gas, please!</p>';
}

if($_POST['efficiency'] == NULL) {
echo '<p class="error">Please select your car/s efficiency</p>';
}
    
if(isset($_POST['name'],
$_POST['distance'],
$_POST['speed'],
$_POST['hours'],
$_POST['gas'],
$_POST['efficiency'])) {
$name = $_POST['name'];
$distance = (int)$_POST['distance'];
$speed = (int)$_POST['speed'];
$hours = (int)$_POST['hours'];
$gas = $_POST['gas'];
$efficiency = (int)$_POST['efficiency'];
if($efficiency == 0) {
    $efficiency = 1;
}

$usd = ($distance / $efficiency) * $gas;
if($speed == 0) {
    $speed = 1;
}
    
$drive_time = $distance / $speed;
if($hours == 0) {
    $hours = 1;
}   
$day = ($drive_time / $hours);
$fuel = $distance / $efficiency;

if(!empty($name &&
$distance && $speed && $hours && $gas && $efficiency)) {

    echo '

<div class="box">
<h2>Hello '.$name.'</h2>
<p>Your trip would cost approximately <b> $'.number_format($usd, 2).' USD</b> 
<b> in gas expenses. It would take <b><em>'.number_format($drive_time).'
hrs</em></b> over a period of <b>'.number_format($day, 1).'
days</b>, using <b>~'.number_format($fuel,1)
.' gallons</b> of gas in the process.</p>
</div>';
}

    
    
}
    
} // end server request
    




?>

</body>
</html>