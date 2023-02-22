<?php 
include('config.php');
include('./includes/header.php'); ?>


<!-- <!DOCTYPE html>  
<html lang="en"> 
 <head>  
    <meta charset="UTF-8">  
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Contact Page</title> 
    <style>
* {
    padding:0;
    margin:0;
    box-sizing:border-box;
}


body {
    background-image: url(images/tulumm.jpg);
    font-family:Verdana, Geneva, Tahoma, sans-serif;
}


header {
    background:aqua;
    padding:20px 0;
}


main {
    width:62%;
    /* height:400px; */
    background:lightblue;
    float:left;
}



aside {
    width:35%;
    /* height:300px; */
    background:lightgreen;
    float:right;
}


form {
    max-width: 500px;
    margin:20 px auto;
    /* border: 1px solid red; */
}


fieldset {
    padding:10px;
    border:1px solid black;
    max-width: 500px;
    padding-bottom:20px;
    
}


label {
    display:block;
    margin-bottom:5px;
    font-weight:bold;
}

input[type=number] 
input[type=text],
input[type=email] {
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


/* .box {
    width:420px;
    padding:10px;
    margin:0 auto;
    margin:20 px auto;
    padding-bottom:30px;
} */


.error {
    color:red;
    font-style:italic;
    text-align:center;
}


legend {
    text-align:center;
}



</style>  -->



<!-- </head> -->
<!-- <body>  -->
<div id="wrapper">

<!-- <div id="hero">
<img src="images/twelve.jpg" alt="Twelve is greater than 3"> -->


<!--end hero-->
<!-- </div>  -->


<main>
<h1>Welcome to Our Contact Page!</h1>
<!-- <h2>We are going to learn PHP!</h2> -->
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
sed do eiusmod tempor incididunt ut labore et dolore magna
aliqua. Ut enim ad minim veniam, quis nostrud 
exercitationullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit 
in voluptate velit esse cillum dolore eu fugiat 
nulla pariatur.</p>
<!-- <h2>Monday is Reserved for Succession.</h2>
<p>Succession is a show on Showtime about whatever.
This series is based on the Murdock Family.</p> -->

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ;?>" 
method="post">
<fieldset>
<legend>Tequila Rancho Alegre</legend>


<label>Name</label>
<input type="text" name="name" value="<?php if(isset($_POST['name']))
echo htmlspecialchars($_POST['name']) ;?>">
<span class="error"><?php echo $name_err ;?></span>

<label>Email</label>
<input type="email" name="email" value="<?php if(isset($_POST['email']))
echo htmlspecialchars($_POST['email']) ;?>">
<span class="error"><?php echo $email_err ;?></span>

<label>pick your day</label>
<ul>
    <!-- will come back to gender once we will be adding the sticky 
    part of the form -->
<li>
<input type="radio" name="pick your day" value="cinco de mayo" <?php if(isset($_POST['pick your day'])
&& $_POST['pick your day'] == 'cinco de mayo' )  echo 'checked = "checked"' ;?>>Cinco De Mayo
</li>

<li>
<input type="radio" name="pick your day" value="san valentin" <?php if(isset($_POST['pick your day'])
&& $_POST['pick your day'] == 'san valentin' )  echo 'checked = "checked"' ;?>>San Valentin
</li>

<li>
<input type="radio" name="pick your day" value="day of the death" <?php if(isset($_POST['pick your day'])
&& $_POST['pick your day'] == 'day of the death' )  echo 'checked = "checked"' ;?>>Day Of The Death
</li>
</ul>
<span class="error"><?php echo $pick_your_day_err ;?></span>


<label>Phone</label>
<input type="tel" name="phone" placeholder="xxx-xxx-xxxx" value=" <?php if(isset($_POST['phone']))
echo htmlspecialchars($_POST['phone']) ;?>">
<span class="error"><?php echo $phone_err ;?></span>


<label>Choose your Tequila!</label>
<ul>
    <!-- we will return to the wine portion to add additional 
    wines when we are adding the sticky part of our form -->
<li>
<input type="checkbox" name="tequila[]" value="anejo premium" <?php if(isset($_POST['tequila'])
&& in_array('anejo premium', $tequila)) echo 'checked = "checked"'  ;?>>Anejo premium
</li>

<li>
<input type="checkbox" name="tequila[]" value="reposado 1900" <?php if(isset($_POST['tequila'])
&& in_array('reposado 1900', $tequila)) echo 'checked = "checked"'  ;?>>Reposado 1900
</li>

<li>
<input type="checkbox" name="tequila[]" value="extra anejo" <?php if(isset($_POST['tequila'])
&& in_array('extra anejo', $tequila)) echo 'checked = "checked"'  ;?>>Extra Anejo
</li>

<li>
<input type="checkbox" name="tequila[]" value="blanco selection" <?php if(isset($_POST['tequila'])
&& in_array('blanco selection', $tequila)) echo 'checked = "checked"'  ;?>>Blanco selection
</li>

<li>
<input type="checkbox" name="tequila[]" value="cristalino" <?php if(isset($_POST['tequila'])
&& in_array('cristalino', $tequila)) echo 'checked = "checked"'  ;?>>Cristalino
</li>
</ul>
<span class="error"><?php echo $tequila_err ;?></span>


<label>Regions</label>
<select name="regions">
    <!-- We will return to options to add additional option
when we make our form sticky!-->
<option value="" NULL <?php if(isset($_POST['regions']) && $_POST['regions']
== NULL) echo 'selected = "unselected"'  ;?>>Select One!</option>

<option value="nw" <?php if(isset($_POST['regions']) && $_POST['regions']
== 'nw') echo 'selected = "selected"'  ;?>>Northwest</option>

<option value="sw" <?php if(isset($_POST['regions']) && $_POST['regions']
== 'sw') echo 'selected = "selected"'  ;?>>Southwest</option>

<option value="mw" <?php if(isset($_POST['regions']) && $_POST['regions']
== 'mw') echo 'selected = "selected"'  ;?>>Midwest</option>

<option value="ec" <?php if(isset($_POST['regions']) && $_POST['regions']
== 'ec') echo 'selected = "selected"'  ;?>>East Coast!</option>

<option value="ne" <?php if(isset($_POST['regions']) && $_POST['regions']
== 'ne') echo 'selected = "selected"'  ;?>>Northeast!</option>
</select>
<span class="error"><?php echo $regions_err ;?></span>


<label>Comments</label>
<textarea name="comments"><?php if(isset($_POST['comments'])) echo 
htmlspecialchars($_POST['comments'])  ;?></textarea>
<span class="error"><?php echo $comments_err ;?></span>


<label>Privacy</label>
<ul>
    <!-- will come back to gender once we will be adding the sticky 
    part of the form -->
<li>
<input type="radio" name="privacy" value="yes" <?php if(isset($_POST['privacy'])
&& $_POST['privacy'] == 'yes' )  echo 'checked = "checked" ' ;?>>Privacy
</li>
</ul>
<span class="error"><?php echo $privacy_err ;?></span>


<input type="submit" value="Submit">
<input type="button" onclick="window.location.href='<?php 
echo $_SERVER['PHP_SELF']  ;?>'" value="Reset">


</fieldset>
</form>







 



<?php
include('./includes/form.php') ; ?>


</main>

<aside>
<h3>This is my aside</h3>



</aside>

<!--end wrapper-->
</div> 
<!-- </body> -->
<!-- </html> -->

<?php include('./includes/footer.php'); 

