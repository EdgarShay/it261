<?php include('./includes/header.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daily Page</title>
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
    background:lightsalmon;
    float:left;
}



aside {
    width:35%;
    /* height:300px; */
    background:lightgreen;
    float:right;
}

</style>

</head>
<body> 
<div id="wrapper">

<!-- <div id="hero">
<img src="images/twelve.jpg" alt="Twelve is greater than 3"> -->


<!--end hero-->
<!-- </div>  -->

<main>
<h1>Welcome to My Daily Page!</h1>
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

<?php

$days = array(
    "Sunday" => "christopher.jpg",
    "Monday" => "legends.jpg",
    "Tuesday" => "tom.jpg",
    "Wednesday" => "nicole.jpg",
    "Thursday" => "devpatel.jpg",
    "Friday" => "apocalypto.jpg",
    "Saturday" => "bruze-wayne.jpg"
);
?> 


<h2 class="<?php echo $actDay ;?> "><?php echo $day; ?></h2>
<p><?php echo $details; ?></p>
<h2>Don't see your favorite show? Check out 
the days below!</h2>

<ul>
<li><a style="color:<?php
if($today == 'Sunday' ) {
    echo 'green';
    } else {
    echo 'blue';
    }
    ?>" href="daily.php?today=Sunday">Sunday</a></li>


<li><a style="color:<?php
if($today == 'Monday' ) {
    echo 'green';
    } else {
        echo 'blue';
    }
    ?>" href="daily.php?today=Monday">Monday</a></li>


<li><a style="color:<?php
if($today == 'Tuesday' ) {
    echo 'black';
    } else {
        echo 'blue';
    }
    ?>" href="daily.php?today=Tuesday">Tuesday</a></li>


<li><a style="color:<?php
if($today == 'Wednesday' ) {
    echo 'green';
    } else {
        echo 'blue';
    }  
    ?>" href="daily.php?today=Wednesday">Wednesday</a></li>


<li><a style="color:<?php
if($today == 'Thursday' ) {
    echo 'red';
    } else {
        echo 'blue';
    } 
    ?>" href="daily.php?today=Thursday">Thursday</a></li>


<li><a style="color:<?php
if($today == 'Friday' ) {
    echo 'red';
    } else {
        echo 'blue';
    } 
    ?>" href="daily.php?today=Friday">Friday</a></li>


<li><a style="color:<?php
if($today == 'Saturday' ) {
    echo 'purple';
    } else {
        echo 'blue';
    } 
    ?>" href="daily.php?today=Saturday">Saturday</a></li>

</ul>


</main>

<aside>
<h3>This is my aside</h3>
<img src="images/<?php if(isset($days[$today])) 
echo $days[$today]; ?>" alt="My image">

<!-- <p>Ut enim ad minim veniam, quis nostrud 
exercitationullamco laboris nisi ut aliquip
ex ea commodo consequat. Duis aute irure 
dolor in reprehenderit 
in voluptate velit esse cillum dolore eu fugiat 
nulla pariatur.</p> -->
</aside>
<!-- <footer>
    <ul>
        <li>Copyright &copy; 2023</li>
        <li>All Rights Reserved</li>
        <li><a href="">Terms of use</a></li>
        <li><a href="../index.html">Web Design by Edgar</a></li>
        <li><a href="">
        <img src="images/html5.png" alt="HTML 5 logo">
        </a></li>
    </ul>
    
</footer> -->
<!--end wrapper-->
</div> 
</body>
</html>

<?php
include('./includes/footer.php');


