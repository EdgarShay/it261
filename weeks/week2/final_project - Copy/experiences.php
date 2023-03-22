<?php
include('config.php'); 
include('./includes/header.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Final Project Website</title>
    <style>
* {
    padding:0;
    margin:0;
    box-sizing: border-box;
}


body {
    background:lightyellow;
}

#wrapper {
    max-width: 1200px;
    margin:30px auto;
}


main {
    float:left;
    width:62%;
}


aside {
    float:right;
    width:35%;
}


aside img {
    display:block;
    margin:10px auto;
}



footer {
    clear:both;
}

/* this way you're not floating */
footer ul {
    display:flex;
    justify-content:center;
}


footer li {
    display:flex;
    justify-content:center;
    margin:15px;
}


p {
    margin-bottom:20px;
    line-height:1.4;
}


ul {
    list-style-type:none;
    margin-left:20px;
}



li p {
    margin:15px 0 20px 0;
}


h1, h2, h3 {
    margin-bottom:10px;
}


img {
    max-width:100%;
}








</style>

</head>
<body>


<div id="wrapper">
<main>
<h1>Do You Want More Fun and Experiencies In Puerto Vallarta?</h1>
<?php
$sql = 'SELECT * FROM experiences';
// now, we have to connect to our database

// $iConn = mysqli_connect(DB_NAME, DB_USER, 
// DB_PASSWORD, DB_HOST) 
// or die(myError(__FILE__,__LINE__,mysqli_connect_error()));






// our config file


ob_start();  // prevents header errors before reading the whole page!
define('DEBUG', 'TRUE');  // We want to see our errors

include('credentials.php');

 


function myError($myFile, $myLine, $errorMsg)
{
if(defined('DEBUG') && DEBUG)
{
 echo 'Error in file: <b> '.$myFile.' </b> on line: <b> '.$myLine.' </b>';
      echo 'Error message: <b> '.$errorMsg.'</b>';
      die();
  }  else {
      echo ' Houston, we have a problem!';
      die();
  }
    
    
}






$iConn = mysqli_connect(DB_HOST, DB_USER, 
DB_PASSWORD, DB_NAME) 
or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

$result = mysqli_query($iConn, $sql) 
or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

// we are asking if the number of rows is greater than 0

if(mysqli_num_rows($result) > 0) {
// we will be reading those rows with a while loop
while($row = mysqli_fetch_assoc($result)) {

echo '
<h2>Information about: '.$row['activities_name'].'</h2>
<ul>
<li><b>Activities Name:</b> '.$row['activities_name'].'</li>
<li><b>Person Name:</b> '.$row['person_name'].'</li>
<li><b>Last Name:</b> '.$row['last_name'].'</li>
<li><b>Birthdate:</b> '.$row['birthdate'].'</li>
<li><b>Room Number:</b> '.$row['room_number'].'</li>
</ul>
<p>For more information about '.$row['activities_name'].', 
click <a href="experiences-view.php?id='.$row['experiences_id'].' ">here</a></p>
';




} // end while





} else {   // end if number of row is greather than 0

echo 'Nobody is home!';
} 

// we are going to release the server

@mysqli_free_result($result);

// close the conection

@mysqli_close($iConn);

?>

</main>




<aside>
<h3>More to Explore in Puerto Vallarta!</h3>
<?php
$photos = array(
    'photo1-1.jpg', 
    'photo2-1.jpg', 
    'photo3-1.jpg', 
    'photo4-1.jpg',
    'photo5-1.jpg',
    'photo6-1.jpg'
  );

  function random_image($photos) {
    // If the photos array is empty, return an error message
    if (empty($photos)) {
      return '<p>No images available.</p>';
    }
  
    $index = rand(0, count($photos) - 1);
    $filename = $photos[$index];
    $filepath = 'images/' . $filename;
  
    // If the image file doesn't exist, return an error message
    if (!file_exists($filepath)) {
      return '<p>Image not found.</p>';
    }
  
    return '<img src="' . $filepath . '" alt="' . $filename . '">';
  }
  
  echo random_image($photos);
?>



</aside>
</div> 
<!-- end wrapper -->


</body>
</html>




<?php
include('./includes/footer.php'); ?>






















