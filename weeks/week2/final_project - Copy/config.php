





<?php 

ob_start();

define('THIS_PAGE', basename($_SERVER['PHP_SELF']));


include('credentials.php');

switch(THIS_PAGE) {
    case 'index.php';
    $title = 'HOME page of our Final Project';
    $body = 'home';
    break;

    case 'about.php';
    $title = 'About page of our Final Project';
    $body = 'about inner';
    break;

    case 'daily.php';
    $title = 'Switch page of our Final Project';
    $body = 'daily inner';
    break;

    case 'experiences.php';
    $title = 'Project page of our Final Project';
    $body = 'project inner';
    break;

    case 'contact.php';
    $title = 'Contact page of our Final Project';
    $body = 'contact inner';
    break;

    // case 'gallery.php';
    // $title = 'Gallery page of our Website Project';
    // $body = 'gallery inner';
    // break;
}


// our navigational array!
$nav = array(
    'index.php' => 'Home',
     'about.php' => 'About',
      'daily.php' => 'Switch',
       'experiences.php' => 'Experiences',
        'contact.php' => 'Contact',
         'login.php'   => 'Logout',
);


function make_links($nav) {
    $my_return = ''; 
    foreach($nav as $key => $value) {    
    if(THIS_PAGE == $key) {
    $my_return .= '<li><a style="color:red;" href="'.$key.'"> 
    '.$value.'</a></li>';
    } else {
    $my_return .= '<li><a style="color:green;" href=" '.$key.'"> 
    '.$value.'</a></li>';
    
    
    }
    
    
    }  // end foreach
    return $my_return;
    
    
    
    }  // end function
    


// thi is the beginning of the switch for homework 3!!!!
if(isset($_GET['today'])) {
$today = $_GET['today'] ;
} else {
$today = date('l');
}

switch($today) {

case 'Saturday';
$actDay = 'black';
$day = 'Monday is Reserved Swiming with wild dolphins';
$details = 'Swimming with wild dolphins is a magical experience. 
This particular excursion from Puerto Vallarta gives you 
the chance to swim with dolphins in their own natural environment.';
$picture = 'dolphins.jpg';
$altTag = 'Swiming with dolphins';
$background2 = 'Dolphins';
break;

case 'Sunday';
$actDay = 'green';
$day = 'Sunday is Reserved Snorkeling at Los Arcos National Park';
$details = 'There are a lot of great snorkeling areas in and 
around Puerto Vallarta, but Los Arcos National Park is one 
of my favorites! The best way to experience this gorgeous park 
is with a tour group where you can be guided by a 
marine biologist guide and learn about the diverse wildlife 
that you are going to see.';
$picture = 'arcos.jpg';
$altTag = 'Snorkeling At Los Arcos National Park';
$background2 = 'Los Arcos National Park';
break;

case 'Monday';
$actDay = 'green';
$day = 'Monday is reserved for Parasailing';
$details = 'One of the most popular water activities in 
Puerto Vallarta doesn\'t even get you wet. Parasailing is when 
you get toed by a boat and sail through the air. Not only does 
this activity get the blood pumping but it\'s also incredibly scenic.';
$picture = 'parasailing.jpg';
$altTag = 'Parasailing';
$background2 = 'Parasailing';
break;

case 'Tuesday';
$actDay = 'purple';
$day = 'Tuesday is reserved for Whale Watching';
$details ='Whale watching in Puerto Vallarta is another 
activity on the water that\'s very popular. The whale watching season 
in Puerto Vallarta runs from December to April with multiple tours in 
Banderas Bay running every day during this time. On the tours, you\'ll 
head out for around 4 hours in search of Humpback Whales. You may also 
see dolphins and seals too.';
$picture = 'whale.jpg';
$background2 = 'Whale Watching';
$altTag = 'Whale Watching';
break;

case 'Wednesday';
$actDay = 'green';
$day = 'Wednesday is reserved for Visiting the Vallarta Botanical Gardens';
$details = 'The Vallarta Botanical Gardens is one of the best 
ways to enjoy the flora and fauna of Puerto Vallarta. 
The gardens are actually privately owned and were set up to 
showcase the diversity of the region and to protect it.';
$picture = 'botanical.jpg';
$background2 = 'Visiting the Botanical Gardens';
$altTag = 'Botanical Gardens';
break;

case 'Thursday';
$actDay = 'red';
$day = 'Thursday is reserved for Skydiving';
$details = 'Skydiving is the closest we humans have gotten to flying 
and it feels amazing! If you\'ve jumped before then you know 
exactly what we\'re talking about, and if you\'re taking the leap 
for the first time, prepare to have your mind blown.';
$picture = 'skydiving.jpg';
$altTag = 'Skydiving';
$background2 = 'Skydiving';
break;

case 'Friday';
$actDay = 'red';
$day = 'Friday is reserved for Zona Romantica';
$details = 'Puerto Vallarta\'s Romantic Zone isn\'t just 
couples, This vibrant area is lined with cool shops, street vendors, 
art galleries, restaurants, making it a popular families, travelers, 
and everyone in between.';
$picture = 'zona-romantica.jpg';
$altTag = 'Visiting Zone Romantica';
$background2 = 'Zone Romantica';
break;

}

// my form's php

$first_name = '';
$last_name = '';
$email = '';
$phone_number = '';
$gender = '';
$choose_your_day = '';
$activities = '';
$regions = '';
$comments = '';
$privacy = '';




$first_name_err = '';
$last_name_err = '';
$email_err = '';
$phone_number_err = '';
$gender_err = '';
$choose_your_day_err = '';
$activities_err = '';
$regions = '';
$comments_err = '';
$privacy_err = '';


if($_SERVER['REQUEST_METHOD'] == 'POST') {

if(empty($_POST['first_name'])) {
$name_err = 'Please fill out your first name';
} else {   
$name = $_POST['first_name'];
}

if(empty($_POST['last_name'])) {
$name_err = 'Please fill out your last name';
} else {   
$name = $_POST['last_name'];
}

if(empty($_POST['email'])) {
$email_err = 'Please fill out your email so that we can span you!';
} else {   
$email = $_POST['email'];
}

if(empty($_POST['phone_number'])) {
$email_err = 'Please fill out your phone number!';
} else {   
$email = $_POST['phone_number'];
}
    
if(empty($_POST['gender'])) {
$email_err = 'Please fill out your gender!';
} else {   
$email = $_POST['gender'];
}

if(empty($_POST['choose_your_day'])) {
$choose_your_day_err = 'Please choose your favorite day';
} else {   
$choose_your_day = $_POST['choose_your_day'];
}

if(empty($_POST['activities'])) {
$phone_err = 'Please choose your favorite activities';
} else {   
$phone = $_POST['activities'];
}
    
if(empty($_POST['comments'])) {
$comments_err = 'Please share your thoughts with us';
} else {   
$comments = $_POST['comments'];
}
          
if(empty($_POST['privacy'])) {
$privacy_err = 'Please agree to our privacy policy';
} else {   
$privacy = $_POST['privacy'];
}

if($_POST['regions'] == NULL) {
$regions_err = 'Please select your region!';
} else {
$regions = $_POST['regions']; 
}

// wines function 

function my_activities($activities) {
$my_return = '';

if(!empty($POST['activities'])) {
$my_return = implode(', ', $_POST['activities']);


} else {
    $activities_err = 'Please choose your favorites activities!';
}

return $my_return;


} // function


if(isset($_POST['first_name'],
$_POST['last_name'],
$_POST['email'],
$_POST['phone_number'],
$_POST['gender'],
$_POST['choose_your_day'],
$_POST['activities'],
$_POST['regions'],
$_POST['comments'],
$_POST['privacy'])) {


$to = '.';
$subject = 'Test Email on ' .date('m/d/y, h i A');
$body = '
First Name : '.$first_name.'  .PHP_EOL.
Last Name : '.$last_name.'  .PHP_EOL.
Email : '.$email.'  .PHP_EOL.
Phone Number : '.$phone_number.'  .PHP_EOL.
Gender : '.$gender.'  .PHP_EOL.
Choose_your_day : '.$choose_your_day.'  .PHP_EOL.
Activities : '.my_activities($activities).'  .PHP_EOL.
Regions : '.$regions.'  .PHP_EOL.
Comments : '.$comments.' .PHP_EOL.
Privacy : '.$privacy.'  .PHP_EOL.
';


$headers = array(
'From' => 'edgarshay23@gmail.com'
);


if(!empty($first_name && 
$last_name && 
$email && 
$phone_number && 
$gender &&
$choose_your_day && 
$activities && 
$regions && 
$comments && 
$privacy)) {



mail($to, $subject, $body, $headers);
header('Location:thx.php');

}


}  // end isset




}  // ende server request method
?>
