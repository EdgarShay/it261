<?php 
include('config.php');
include('./includes/header.php'); ?>





<div id="wrapper">

<div id="hero">
<img src="images/twelve.jpg" alt="Twelve is greater than 3">

<!--end hero-->
</div> 


<?php
echo '<h2>We are going to display our images, using the random function</h2>';


$photos[0] = 'photo1';
$photos[1] = 'photo2';
$photos[2] = 'photo3';
$photos[3] = 'photo4';
$photos[4] = 'photo5';

$i = rand(0, 4);

$selected_image = ''.$photos[$i].'.jpg';
echo '<img src="images/'.$selected_image.'" alt="'.$photos[$i].'" >';


echo '<h2>Let\'s create a function</h2>';

function random_images($photos) {
$my_return = '';
$i = rand(0, 4);
$selected_image = ''.$photos[$i].'.jpg';
$my_return = '<img src="images/'.$selected_image.'" alt="'.$photos[$i].'" >';
return $my_return;
} // end function

echo random_images($photos);
?>











<main>
<h1>Welcome to our Web App Programming Class!</h1>
<h2>We are going to learn PHP!</h2>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
sed do eiusmod tempor incididunt ut labore et dolore magna
aliqua. Ut enim ad minim veniam, quis nostrud 
exercitationullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit 
in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
<h2>Another Headline 2!</h2>
<p>Sed ut perspiciatis unde omnis iste natus error 
sit voluptatem accusantium doloremque laudantium, totam rem
aperiam, eaque ipsa quae ab illo inventore veritatis 
et quasi architecto beatae vitae dicta sunt explicabo. 
Nemo enim ipsam voluptatem quia voluptas sit aspernatur 
aut odit aut fugit, sed quia consequuntur magni dolores 
eos qui ratione voluptatem sequi nesciunt. Neque porro 
quisquam est, qui dolorem ipsum quia dolor sit amet, 
consectetur,</p>
</main>

<aside>
<h3>This is our headline three in our beautiful aside</h3>
<p>Ut enim ad minim veniam, quis nostrud 
exercitationullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit 
in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>

</aside>

<!--end wrapper-->
</div> 

<?php
include('./includes/footer.php');



