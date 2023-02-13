<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form 1 in week 6</title>
    <link href="css/styles.css" type="text/css" rel="stylesheet">
</head>
<body>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ;?>" 
method="post">
<fieldset>
<legend>Contact Edgar</legend>


<label>First Name</label>
<input type="text" name="first_name" value="<?php if(isset($_POST['first_name']))
echohtmlspecialchars($_POST['first_name']) ;?>">

<label>Last Name</label>
<input type="text" name="last_name" value="<?php if(isset($_POST['last_name']))
echohtmlspecialchars($_POST['last_name']) ;?>">

<label>Email</label>
<input type="email" name="email" value="<?php if(isset($_POST['email']))
echohtmlspecialchars($_POST['email']) ;?>">

<label>Gender</label>
<ul>
    <!-- will come back to gender once we will be adding the sticky 
    part of the form -->
<li>
<input type="radio" name="gender" value="female" <?php if(isset($_POST['gender'])
&& $_POST['gender'] == 'female' )  echo 'checked = "checked" ' ;?>>Female
</li>

<li>
<input type="radio" name="gender" value="male" <?php if(isset($_POST['gender'])
&& $_POST['gender'] == 'male' )  echo 'checked = "checked" ' ;?>>Male
</li>

<li>
<input type="radio" name="gender" value="neither" <?php if(isset($_POST['gender'])
&& $_POST['gender'] == 'neither' )  echo 'checked = "checked" ' ;?>>Neither
</li>
</ul>

<label>Phone</label>
<input type="tel" name="phone"value=" <?php if(isset($_POST['phone']))
echohtmlspecialchars($_POST['phone']) ;?>">

<label>Favorite Wines</label>
<ul>
    <!-- we will return to the wine portion to add additional 
    wines when we are adding the sticky part of our form -->
<li>
<input type="checkbox" name="wines[]" value="cab" <?php if(isset($_POST['wines'])
&& in_array('cab', $wines)) ;?>>Cabernet
</li>

<li>
<input type="checkbox" name="wines[]" value="merlot" <?php if(isset($_POST['wines'])
&& in_array('merlot', $wines)) ;?>>Merlot
</li>

<li>
<input type="checkbox" name="wines[]" value="syrah" <?php if(isset($_POST['wines'])
&& in_array('syrah', $wines)) ;?>>Syrah
</li>

<li>
<input type="checkbox" name="wines[]" value="red" <?php if(isset($_POST['wines'])
&& in_array('red', $wines)) ;?>>Red Blend
</li>

<li>
<input type="checkbox" name="wines[]" value="malbec" <?php if(isset($_POST['wines'])
&& in_array('malbec', $wines)) ;?>>Malbec
</li>

</ul>

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

<label>Comments</label>
<textarea name="comments"><?php if(isset($_POST['comments'])) echo 
htmlspecialchars($_POST['comments'])  ;?></textarea>

<label>Privacy</label>
<ul>
    <!-- will come back to gender once we will be adding the sticky 
    part of the form -->
<li>
<input type="radio" name="privacy" value="yes" <?php if(isset($_POST['privacy'])
&& $_POST['privacy'] == 'yes' )  echo 'checked = "checked" ' ;?>>Privacy
</li>
</ul>

<input type="submit" value="Send it!">



</fieldset>
</form>
    
</body>
</html>