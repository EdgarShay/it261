<?php

define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

switch(THIS_PAGE) {
    case 'index.php';
    $title = 'HOME page of our Website Project';
    $body = 'home';
    break;

    case 'about.php';
    $title = 'About page of our Website Project';
    $body = 'about inner';
    break;

    case 'daily.php';
    $title = 'Daily page of our Website Project';
    $body = 'daily inner';
    break;

    case 'project.php';
    $title = 'Project page of our Website Project';
    $body = 'project inner';
    break;

    case 'contact.php';
    $title = 'Contact page of our Website Project';
    $body = 'contact inner';
    break;

    case 'gallery.php';
    $title = 'Gallery page of our Website Project';
    $body = 'gallery inner';
    break;
}


// our navigational array!
$nav = array(
    'index.php' => 'Home',
     'about.php' => 'About',
      'daily.php' => 'Daily',
       'project.php' => 'Project',
        'contact.php' => 'Contact',
         'gallery.php' => 'Gallery',
);

// thi is the beginning of the switch for homework 3!!!!
if(isset($_GET['today'])) {
$today = $_GET['today'] ;
} else {
$today = date('l');
}

switch($today) {

case 'Saturday';
$actDay = 'black';
$day = 'Saturday is Dexter Day';
$details = 'Dexter Morgan ia a Miami-based blood
splatter expert who doesn\'t just solve murders;
he commits them too. In fact, he\'s a serial killer --
but he only murders the guilty, so he feels justified 
with his lifestyle choices. His policewoman sister 
and his cop co-workers have no idea that Dexter lives
a double life; howeever, adoptive fathers harrys 
knows his secret, and does, in fact, help Dexter
with his skills. " It\'s a unique brand of justice
for which charming Dexter feels a psychological
hunger.';
$picture = 'dexter.jpg';
$altTag = 'Dexter';
$background2 = 'blood';

break;

case 'Sunday';
$actDay = 'orange';
$day = 'Sunday is reserved for homeland';
$details = 'Homeland is a show on Showtime
about whatever. the main character is Clair
Danes.... etec';
$picture = 'carrie.jpg';
$altTag = 'Carrie';
$background2 = 'Homeland';
break;

case 'Monday';
$actDay = 'green';
$day = 'Monday is reserved for Succession';
$details = 'Succession is a show on Showtime
about whatever. This series is based on the
Murdock Family';
$picture = 'succession.jpg';
$altTag = 'Succession';
$background2 = 'money';
break;

case 'Tuesday';
$actDay = 'purple';
$day = 'Tuesday is reserved for Watchmen';
$details = 'Watchmen is an American dystopian 
superhero drama limited television series based on
the 1986 DC Comics series of the same title, created
by Alan Moore and Dave Gibbons. The TV series was
created for HBO by Damon Lindelof, who also reserved
as an executive producer and writer.';
$picture = 'regina.jpg';
$background2 = '';
$altTag = 'Regina';
break;

case 'Wednesday';
$actDay = 'green';
$day = 'Wednesday is reserved for the Loudest Voice';
$details = 'Roger Ailes and his Network...etc';
$picture = 'russell.jpg';
$background2 = '';
$altTag = 'Russell';
break;

case 'Thursday';
$actDay = 'orange';
$day = 'Thursday is reserved for the Night of';
$details = 'intense drama of what happens
if you are in the wrong place and the wrong time!';
$picture = 'night.jpg';
$altTag = 'The night of';
$background2 = '';
break;

case 'Friday';
$actDay = 'red';
$day = 'Friday is reserved for the Undoing';
$details = 'Nicole Kidman and Hugh Grant star in this
limited series of "who done it...?';
$picture = 'nicole.jpg';
$altTag = 'Nicole';
$background2 = '';
break;

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <link href="css/styles.css" type="text/css" rel="stylesheet">
</head>
<body class="<?php echo $body ;?>">
   
<header>
<div class="inner-header">
<a href="index.php">

<img id="logo" src="images/logo.png" alt="logo">
</a>

<!-- <nav>
<ul>
<li><a href="">Home</a></li>
<li><a href="">About</a></li>
<li><a href="">Daily</a></li>
<li><a href="">Project</a></li>
<li><a href="">Contact</a></li>
<li><a href="">Gallery</a></li>
</ul>
</nav> -->

<nav>
<ul>
<?php
foreach($nav as $key => $value) {
    if(THIS_PAGE == $key) {
        echo '<li><a style="color:red;" href=" '.$key.' "> '.$value.' </a></li>';
    } else {
        echo '<li><a style="color:green;" href=" '.$key.' "> '.$value.' </a></li>';
    }
    
    
    
    }// end foreach
    echo '</ul>';
    
?>
</ul>

</nav>


<!--end inner header-->
</div>

</header>