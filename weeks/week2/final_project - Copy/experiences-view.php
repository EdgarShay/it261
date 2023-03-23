<?php
// this will be our people-view page, which of course starts with our 
// include, pointing to our config, BUT NOT our header include!

include('config.php');

// is our get set - is is isset?

if(isset($_GET['id'])) {
   $id = (int)$_GET['id'];
} else {
    header('Location:experiences.php');
}

// we will now select from the table people id = id

$sql = 'SELECT * FROM experiences WHERE experiences_id = '.$id.'';

$iConn = mysqli_connect(DB_HOST, DB_USER, 
DB_PASSWORD, DB_NAME) 
or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

$result = mysqli_query($iConn, $sql) 
or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

if(mysqli_num_rows($result) > 0) {
while($row = mysqli_fetch_assoc($result)) {
$activities_name =  stripcslashes($row['activities_name']);
$person_name =  stripcslashes($row['person_name']);
$last_name =  stripcslashes($row['last_name']);
$birthdate =  stripcslashes($row['birthdate']);
$room_number =  stripcslashes($row['room_number']);
$details =  stripcslashes($row['details']);
$blurb =  stripcslashes($row['blurb']);
$feedback = '';


}  // close while       

} else { // end if statement

$feedback = 'There is a problem!!!';

}  // end else

include('./includes/header.php');
?>

<div id="wrapper">
<main>
<h1>Welcome to our experiences Page!</h1>
<h2>Introducing you to <?php echo $activities_name  ;?>'s Page</h2>
<ul>
<?php
echo '
<li><b>Activities Name: </b>'.$activities_name.'</li>
<li><b>Person Name: </b>'.$person_name.'</li>
<li><b>Last Name: </b>'.$last_name.'</li>
<li><b>Birthdate: </b>'.$birthdate.'</li>
<li><b>Room Number: </b>'.$room_number.'</li>
<li>
<p>'.$details.'</p>
</li>
';
?>
</ul>
<p><a href="experiences.php">Return to the experiences page!</a></p>


</main>


<aside>
<h3>Explore Local Culture</h3>
<figure>
<img src="./images/experiences<?php echo $id;?>.jpg" 
alt="<?php echo $activities_name;?>">
<figcaption>
<?php
echo '
'.$activities_name.' '.$person_name.', '.$room_number.'

';

?>
</figcaption>
</figure>
<p><i><?php
echo $blurb;
?></i></p>
</aside>

<?php

// we are going to release the server

@mysqli_free_result($result);

// close the conection

@mysqli_close($iConn);



?>

</div>
<!-- end wrapper -->


<?php
include('./includes/footer.php');
