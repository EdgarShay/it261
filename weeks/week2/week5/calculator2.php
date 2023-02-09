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


footer {
    height:60px;
    line-height: 60px;
    /* background: #ddd; */
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
}


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
$_POST['email'],
$_POST['amount'],
$_POST['currency'],
$_POST['bank'])) {
$name = $_POST['name'];
$email = $_POST['email'];
$amount =floatval($_POST['amount']);
$currency =floatval($_POST['currency']);
$bank = $_POST['bank'];
$dollars = $amount * $currency;
    
    
if(!empty($name && $email && $amount && $currency && $bank)) {
    
echo '
    
<div class="box">
<fieldset>
<h2>Hello '.$name.',</h2>
<p>You now have <b> $'.number_format($dollars, 2).' American dollars</b> 
and it will be deposited <b>in '.$bank.'</b> and we will email you at <b>
'.$email.'</b> in the next 24 hours!</p>
</fieldset>
</div>
';
    
if($dollars >= 1000) {
echo "<div class='box happy'>
<h2> I am REALLY happy, because I have $$dollars American Dollars</h2>
          
<iframe width='540' height='370'
    src='https://www.youtube.com/embed/O5APc0z49wg'>
        </iframe>
          
    </div>"; 
} else {
    echo "<div class='box sad'>
    <h2>I am NOT happy because I have $$dollars American Dollars</h2>
           
    <iframe width='540' height='370'
        src='https://www.youtube.com/embed/l5aZJBLAu1E'>
        </iframe>
          
    </div>";
}
    
}
    
    
}
    
} // end server request
    




?>

</body>
</html>