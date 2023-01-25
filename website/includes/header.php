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
$day = 'Saturday is Bruce Wayne Day';
$details = 'A young Bruce Wayne (Christian Bale) travels to 
the Far East, where he\'s trained in the martial arts 
by Henri Ducard (Liam Neeson), a member of the mysterious 
League of Shadows. When Ducard reveals the League\'s true 
purpose -- the complete destruction of Gotham City -- 
Wayne returns to Gotham intent on cleaning up the city 
without resorting to murder. With the help of Alfred 
(Michael Caine), his loyal butler, and Lucius Fox 
(Morgan Freeman), a tech expert at Wayne Enterprises, 
Batman is born.';
$picture = 'bruze-wayne.jpg';
$altTag = 'bruze Wayne';
$background2 = 'Batman';
break;

case 'Sunday';
$actDay = 'green';
$day = 'Sunday is reserved for Superman';
$details = 'Just before the destruction of the planet Krypton, 
scientist Jor-El (Marlon Brando) sends his infant 
son Kal-El on a spaceship to Earth. Raised by kindly 
farmers Jonathan (Glenn Ford) and Martha Kent (Phyllis Thaxter), 
young Clark (Christopher Reeve) discovers the source 
of his superhuman powers and moves to 
Metropolis to fight evil.';
$picture = 'christopher.jpg';
$altTag = 'Christopher Reeve';
$background2 = 'Superman';
break;

case 'Monday';
$actDay = 'green';
$day = 'Monday is reserved for Leyends Of The Fall';
$details = 'In early 20th-century Montana, Col. 
William Ludlow (Anthony Hopkins) lives in the wilderness
with his sons, Tristan (Brad Pitt), Alfred (Aidan Quinn) 
and Samuel (Henry Thomas). Eventually, the unconventional 
but close-knit family encounters tragedy when Samuel is 
killed in World War I.';
$picture = 'leyends.jpg';
$altTag = 'Brad Pitt';
$background2 = 'Leyends Of The Fall';
break;

case 'Tuesday';
$actDay = 'purple';
$day = 'Tuesday is reserved for Far and Away';
$details ='Joseph (Tom Cruise) and his landlord\'s daughter, 
Shannon (Nicole Kidman), travel from Ireland to America 
in hopes of claiming free land in Oklahoma. 
The pair get sidetracked in Boston, where Joseph 
takes up boxing to support himself. 
When he loses a pivotal fight, the two are left penniless.';
$picture = 'tom.jpg';
$background2 = 'Far and Away';
$altTag = 'Tom Cruise';
break;

case 'Wednesday';
$actDay = 'green';
$day = 'Wednesday is reserved for Eyes Wide Shut';
$details = 'After Dr. Bill Hartford\'s (Tom Cruise) wife, 
Alice (Nicole Kidman), admits to having sexual fantasies 
about a man she met, Bill becomes obsessed 
with having a sexual encounter. He discovers an 
underground sexual group and attends one of their 
meetings -- and quickly discovers that he is in over his head.';
$picture = 'nicole.jpg';
$background2 = 'Eyes Wide Shut';
$altTag = 'Nicole Kidman';
break;

case 'Thursday';
$actDay = 'red';
$day = 'Thursday is reserved for Lion';
$details = 'Five year old Saroo gets lost on a train 
which takes him thousands of miles across India, 
away from home and family. Saroo must learn to survive 
alone in Kolkata, before ultimately being adopted 
by an Australian couple.';
$picture = 'devpatel.jpg';
$altTag = 'Dev patel';
$background2 = 'Lion';
break;

case 'Friday';
$actDay = 'red';
$day = 'Friday is reserved for Apocalypto';
$details = 'The Mayan kingdom is at the height of its 
opulence and power but the foundations of the empire 
are beginning to crumble.';
$picture = 'apocalypto.jpg';
$altTag = 'Rudy Youngblood';
$background2 = 'Apocalypto';
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