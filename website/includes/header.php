
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <link href="css/styles.css" type="text/css" rel="stylesheet">
    
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

echo make_links($nav);













// foreach($nav as $key => $value) {
//     if(THIS_PAGE == $key) {
//         echo '<li><a style="color:red;" href=" '.$key.' "> '.$value.' </a></li>';
//     } else {
//         echo '<li><a style="color:green;" href=" '.$key.' "> '.$value.' </a></li>';
//     }
    
    
    
//     }// end foreach
   
    
?>
</ul>

</nav>


<!--end inner header-->
</div>

</header>






