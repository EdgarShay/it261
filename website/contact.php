<?php 
include('config.php');
include('./includes/header.php'); ?>


<!-- <!DOCTYPE html>  -->
<!-- <html lang="en"> -->
<!-- <head>  -->
    <!-- <meta charset="UTF-8">  -->
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <!-- <title>Daily Page</title>  -->
    <!-- <style>
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

</style>   -->

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

