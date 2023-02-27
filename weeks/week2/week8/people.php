<?php
include('config.php'); 
include('./includes/header.php');
?>
<div id="wrapper">
<main>
    <h1>Welcome to our People Database Class Exercise!</h1>
<?php
$sql = 'SELECT * FROM people';
// now, we have to connect to our database

// $iConn = mysqli_connect(DB_NAME, DB_USER, 
// DB_PASSWORD, DB_HOST) 
// or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

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
<h2>Information about: '.$row['first_name'].'</h2>
<ul>
<li><b>First Name:</b> '.$row['first_name'].'</li>
<li><b>Last Name:</b> '.$row['last_name'].'</li>
<li><b>Last Name:</b> '.$row['birthdate'].'</li>
</ul>
<p>For more information about '.$row['first_name'].', 
click <a href="people-view.php?id='.$row['people_id'].' ">here</a></p>
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
<h3>I will displaying my random images here!</h3>
<?php
$photos = array(
    'photo1-1.jpg', 
    'photo2-1.jpg', 
    'photo3-1.jpg', 
    'photo4-1.jpg', 
    'photo5-1.jpg'
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

<?php
include('./includes/footer.php');





