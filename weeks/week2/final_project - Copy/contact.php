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
<h3>Please Fill out our activities request form</h3>
<!-- <h2>We are going to learn PHP!</h2> -->
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
sed do eiusmod tempor incididunt et dolore magna
aliqua. Dolore eu fugiat nulla pariatur.</p>
<!-- <h2>Monday is Reserved for Succession.</h2>
<p>Succession is a show on Showtime about whatever.
This series is based on the Murdock Family.</p> -->

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ;?>" 
method="post">
<fieldset>
<legend>Activities Request Form</legend>


<label>First Name</label>
<input type="text" name="first_name" value="<?php if(isset($_POST['first_name']))
echo htmlspecialchars($_POST['first_name']) ;?>">
<span class="error"><?php echo $first_name_err ;?></span>

<label>Last Name</label>
<input type="text" name="last_name" value="<?php if(isset($_POST['last_name']))
echo htmlspecialchars($_POST['last_name']) ;?>">
<span class="error"><?php echo $last_name_err ;?></span>

<label>Email</label>
<input type="email" name="email" value="<?php if(isset($_POST['email']))
echo htmlspecialchars($_POST['email']) ;?>">
<span class="error"><?php echo $email_err ;?></span>

<label>Phone Number</label>
<input type="tel" name="phone_number" placeholder="xxx-xxx-xxxx" value=" <?php if(isset($_POST['phone_number']))
echo htmlspecialchars($_POST['phone_number']) ;?>">
<span class="error"><?php echo $phone_number_err ;?></span>


<label>Gender</label>

    <!-- will come back to gender once we will be adding the sticky 
    part of the form -->
<ul>
<li>
<input type="radio" name="gender" value="female" <?php if(isset($_POST['gender'])
&& $_POST['gender'] == 'female' )  echo 'checked = "checked"' ;?>>Female
</li>

<li>
<input type="radio" name="gender" value="male" <?php if(isset($_POST['gender'])
&& $_POST['gender'] == 'male' )  echo 'checked = "checked"' ;?>>Male
</li>

<li>
<input type="radio" name="gender" value="neither" <?php if(isset($_POST['gender'])
&& $_POST['gender'] == 'neither' )  echo 'checked = "checked"' ;?>>Neither
</li>
</ul>
<span class="error"><?php echo $gender_err ;?></span>


<label>Choose your day</label>

    <!-- will come back to gender once we will be adding the sticky 
    part of the form -->
<ul>
<li>
<input type="radio" name="choose your day" value="monday" <?php if(isset($_POST['choose your day'])
&& $_POST['choose your day'] == 'monday' )  echo 'checked = "checked"' ;?>>Monday
</li>

<li>
<input type="radio" name="choose your day" value="tuesday" <?php if(isset($_POST['choose your day'])
&& $_POST['choose your day'] == 'tuesday' )  echo 'checked = "checked"' ;?>>Tuesday
</li>


<li>
<input type="radio" name="choose your day" value="wednesday" <?php if(isset($_POST['choose your day'])
&& $_POST['choose your day'] == 'wednesday' )  echo 'checked = "checked"' ;?>>Wednesday
</li>

<li>
<input type="radio" name="choose your day" value="thursday" <?php if(isset($_POST['choose your day'])
&& $_POST['choose your day'] == 'thursday' )  echo 'checked = "checked"' ;?>>Thursday
</li>

<li>
<input type="radio" name="choose your day" value="friday" <?php if(isset($_POST['choose your day'])
&& $_POST['choose your day'] == 'friday' )  echo 'checked = "checked"' ;?>>Friday
</li>

<li>
<input type="radio" name="choose your day" value="saturday" <?php if(isset($_POST['choose your day'])
&& $_POST['choose your day'] == 'saturday' )  echo 'checked = "checked"' ;?>>Saturday
</li>

<li>
<input type="radio" name="choose your day" value="sunday" <?php if(isset($_POST['choose your day'])
&& $_POST['choose your day'] == 'sunday' )  echo 'checked = "checked"' ;?>>Sunday
</li>
</ul>
<span class="error"><?php echo $choose_your_day_err ;?></span>


<label>Activities!</label>
<ul>
    <!-- we will return to the wine portion to add additional 
    wines when we are adding the sticky part of our form -->
<li>
<input type="checkbox" name="activities[]" value="surf" <?php if(isset($_POST['activities'])
&& in_array('surf', $activities)) echo 'checked = "checked"'  ;?>>Surf
</li>

<li>
<input type="checkbox" name="activities[]" value="horseback_riding_tour " <?php if(isset($_POST['activities'])
&& in_array('horseback_riding_tour', $activities)) echo 'checked = "checked"'  ;?>>Horseback Riding Tour
</li>

<li>
<input type="checkbox" name="activities[]" value="combo_aventure_tour" <?php if(isset($_POST['activities'])
&& in_array('combo_aventure_tour', $activities)) echo 'checked = "checked"'  ;?>>Combo Aventure Tour
</li>

<li>
<input type="checkbox" name="activities[]" value="wine_beer_tours" <?php if(isset($_POST['activities'])
&& in_array('wine_beer_tours', $activities)) echo 'checked = "checked"'  ;?>>Wine Beer Tours
</li>

<li>
<input type="checkbox" name="activities[]" value="canopy_river_zipline" <?php if(isset($_POST['activities'])
&& in_array('canopy_river_zipline', $activities)) echo 'checked = "checked"'  ;?>>Canopy River Zipline
</li>

<li>
<input type="checkbox" name="activities[]" value="scuba_diving" <?php if(isset($_POST['activities'])
&& in_array('scuba_diving', $activities)) echo 'checked = "checked"'  ;?>>Scuba Diving
</li>

<li>
<input type="checkbox" name="activities[]" value="snorkeling" <?php if(isset($_POST['activities'])
&& in_array('snorkeling', $activities)) echo 'checked = "checked"'  ;?>>Snorkeling
</li>

<li>
<input type="checkbox" name="activities[]" value="swimming_with_dolphins" <?php if(isset($_POST['activities'])
&& in_array('swimming_with_dolphins', $activities)) echo 'checked = "checked"'  ;?>>Swimming With Dolphins
</li>
</ul>
<span class="error"><?php echo $experiences_err ;?></span>


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
<h3>Have Fun and Relax</h3>

<img src="images/predator.jpg" alt="Predator Image"> 

</aside>

<!--end wrapper-->
</div> 
<!-- </body> -->
<!-- </html> -->

<?php include('./includes/footer.php'); 

