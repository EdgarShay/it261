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
input[type=miles],
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
    width:400px;
    padding:10px;
    margin:0 auto;
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
<label>NAME</label>
<input type="text" name="name" value="<?php if(isset($_POST['name'])) 
echo htmlspecialchars($_POST['name']) ;?>">

<label>Total miles driving?</label>
<input type="miles" name="miles" value="<?php if(isset($_POST['miles'])) 
echo htmlspecialchars($_POST['miles']) ;?>">

<label>How fast do you typically drive?</label>
<input type="speed" name="speed" value="<?php if(isset($_POST['speed'])) 
echo htmlspecialchars($_POST['speed']) ;?>">

<label>How many hours per day do you plan on driving?</label>
<input type="hours" name="hours" value="<?php if(isset($_POST['hours'])) 
echo htmlspecialchars($_POST['hours']) ;?>">

<!-- time for our radio buttom that has an additional attribute of value -->
<label>Price of gas</label>
<ul>
<li><input type="radio" name="price" value="3.00" <?php  
if(isset($_POST['price']) && $_POST['price'] == 3.00) 
echo 'checked="checked"' ;?>> $3.00 </li>

<li><input type="radio" name="price" value="3.50" <?php  
if(isset($_POST['price']) && $_POST['price'] == 3.50) 
echo 'checked="checked"' ;?>> $3.50 </li>

<li><input type="radio" name="currency" value="4.00" <?php  
if(isset($_POST['price']) && $_POST['price'] == 4.00) 
echo 'checked="checked"' ;?>> $4.00 </li>

</ul>

<label>Fuel efficiency</label>

<select name="efficiency">
<option value=""NULL <?php if(isset($_POST['efficiency']) 
&& $_POST['efficiency'] == NULL) 
echo 'selected ="unselected"' ;?>>Select one!</option>

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

<input type="submit" value="Calculate">

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
    
if(empty($_POST['miles'])) {
echo '<p class="error">Please fill out your total driving miles</p>';
}
    
if(empty($_POST['speed'])) {
echo '<p class="error">Please fill out how fast will you be driving</p>';
}
    
if(empty($_POST['hours'])) {
echo '<p class="error">How many hours per day would you like to drive?</p>';
}
 
if(empty($_POST['price'])) {
echo '<p class="error">Your cost of gas, please!</p>';
}

if($_POST['efficiency'] == NULL) {
echo '<p class="error">Please select your car/s efficiency</p>';
}
    
if(isset($_POST['name'],
$_POST['miles'],
$_POST['speed'],
$_POST['hours'],
$_POST['price'],
$_POST['efficiency'])) {
$name = $_POST['name'];
$miles = $_POST['miles'];
$speed =floatval($_POST['speed']);
$price =floatval($_POST['hours']);
$price =floatval($_POST['price']);
$efficiency = $_POST['efficiency'];
$gas = $speed * $price;
    
    





    
    
}
    
} // end server request
    




?>

</body>
</html>