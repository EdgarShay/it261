<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator form</title>
    <link href="css/styles.css" type="text/css" rel="stylesheet">
</head>
<body>


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
<li><input type="radio" name="currency" value="0.017" <?php  
if(isset($_POST['currency']) && $_POST['currency'] == 0.017) 
echo 'checked="checked"' ;?>> $3.00 </li>

<li><input type="radio" name="currency" value="0.76" <?php  
if(isset($_POST['currency']) && $_POST['currency'] == 0.76) 
echo 'checked="checked"' ;?>> $3.50 </li>

<li><input type="radio" name="currency" value="1.15" <?php  
if(isset($_POST['currency']) && $_POST['currency'] == 1.15) 
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

</select>

<input type="submit" value="Convert it">

<p><a href="">Reset it!</a></p>

</fieldset>

</form> 

<?php
// we will start with the server request method
// then, we will ask ourselves if any fields are empty
// if the fields are not empty, we will elseif they are set


?>

</body>
</html>