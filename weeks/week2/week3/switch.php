<?php
//class coffee exercise
// if today is Friday, it will be pumpkin latte day
// INTRODUCING the isset() function
// then we will introduce our first global variable
// our switch

// starting the switch
// if $GET['today'] is set, $today, then all is well, but it is not set therefore the else is the day!
// else, today is TODAY

//GLOBAL VARIABLES are capitalized and start with $_GET


// what is the isset fuction - is asking if something has been set?

//$variables = 'This is our variable';
// if(isset($variable)) {
//     echo 'Variable has been set';
// } else
// echo 'Variable has not been set!';

// echo '<br>';

// if(isset($_GET['today'])) {
//     echo 'Today has been set';
// } else {
//     echo 'NOT!!!!!!!!';
// }

if(isset($_GET['today'])) {
    $today = $_GET['today'] ;
} else {
    $today = date('l');
}

switch($today) {
case 'Friday' :
$coffee = '<h2>Friday is our Pumpkin Latte Day!</h2>';
$pic = 'pumpkin.jpg';
$alt = 'Pumpkin Latte';
$content = '<p>The moment Fall hits, we rush to our local coffee shop and order 
<b>a pumpkin spice latte</b>. We love them so much, we took it upon ourselves 
to try making it at home. This recipe is easy and I bet you have most, 
if not everything, you need to make it at home right now. It also 
comes together in under 10 minutes!</p>';
break;

case 'Saturday' :
$coffee = '<h2>Saturday is our Green Tea Latte Day!</h2>';
$pic = 'green-tea.jpg';
$alt = 'Green Tea';
$content = '<p> <b>A green tea latte is simply a latte</b> made with green tea 
instead of espresso. Traditional lattes are a blend of steamed milk 
and espresso, but in a green tea latte, we remove the coffee 
and use tea in its place.</p>';
break;

case 'Sunday' :
$coffee = '<h2>Sunday is our Regular Joe Day!</h2>';
$pic = 'coffee.png';
$alt = 'Regular Coffee';
$content = '<p> Boston commuters have their routines timed down 
to the minute. Most folks can tell if they \ll be late to work 
by the length of the line at Dunkin\' Donuts.
That\'s why “coffee regular" is such a comforting phrase.
For anyone who\'s lived here more than a week,
 “coffee regular" means “coffee with cream and sugar.</p>';
break;

case 'Monday' :
$coffee = '<h2>Monday is our Latte Day!</h2>';
$pic = 'latte.jpg';
$alt = 'Our Latte';
$content = '<p> <b>Caffè latte</b>
often shortened to just latte in English, 
is a coffee beverage of Italian origin made with espresso 
and steamed milk. Variants include the chocolate-flavored 
mocha or replacing the coffee with another beverage base 
such as masala chai (spiced Indian tea), mate, matcha, 
turmeric or rooibos; alternatives to milk, 
such as soy milk or almond milk, are also used.</p>';
break;

case 'Tuesday' :
$coffee = '<h2>Tuesday is our Americano Day!</h2>';
$pic = 'americano.jpg';
$alt = 'Americano';
$content = '<p> <b>Caffè Americano</b> is a type of coffee drink 
prepared by diluting an espresso with hot water, 
giving it a similar strength to, but different flavor from, 
traditionally brewed coffee. Its strength varies with the 
number of shots of espresso and amount of water added.</p>';
break;

case 'Wednesday' :
$coffee = '<h2>Wednesday is our Frapuccino!</h2>';
$pic = 'frap.jpg';
$alt = 'Our Frapuccino';
$content = '<p> <b>Frappuccino</b> is a line of blended iced 
coffee drinks sold by Starbucks. It consists of coffee or crème base, 
blended with ice and ingredients such as flavored 
syrups and usually topped with whipped cream and or spices.</p>';
break;

case 'Thursday' :
$coffee = '<h2>Thursday is our Capuccino Day!</h2>';
$pic = 'cap.jpg';
$alt = 'Our Capuccino';
$content = '<p> <b>A cappuccino</b> is an espresso-based coffee drink 
that originated in Austria and was later popularized in Italy 
and is prepared with steamed milk foam. Variations of the drink 
involve the use of cream instead of milk, using non-dairy milk 
substitutes and flavoring with cinnamon or chocolate powder.</p>';
break;


}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch Classwork Exercise</title>
    <style>

* {
    padding:0;
    margin:0;
    box-sizing:border-box;
}



#wrapper {
    width:940px;
    margin:20px auto;
}


h1, h2, img {
    margin-bottom:10px;
}


p {
    margin-bottom:20px;
}



    </style>
</head>
<body>
<div id="wrapper">
<h1>My Wonderful Switch Classwork Exercise (Not the daily homework)</h1> 
<?php
echo $coffee;
?>
<img src="./images/<?php echo $pic;?>" alt="<?php echo $alt;?>">
<?php echo $content; ?>
<h2>Check out our Daily Specials</h2>
<p><i>Please complete ALL of the days of the week!!!</i></p>
<ul>
<li><a href="switch.php?today=Sunday">Sunday</a></li>
<li><a href="switch.php?today=Monday">Monday</a></li>
<li><a href="switch.php?today=Tuesday">Tuesday</a></li>
<li><a href="switch.php?today=Wednesday">Wednesday</a></li>
<li><a href="switch.php?today=Thursday">Thursday</a></li>
<li><a href="switch.php?today=Friday">Friday</a></li>
<li><a href="switch.php?today=Saturday">Saturday</a></li>
</ul>

</div>
    <!-- end wrapper -->
</body>
</html>






