 
 <?php     //adder-wrong.php

if (isset($_POST['num1'])) {
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$myTotal = 0; 
$myTotal -= $num1 + $Num2;

echo '<h2>You added '. $num1 .' and ' .$num2. '</h2>';
echo '<p> and the answer is <br><span style="color:red;">'.$myTotal.'!</span></p>';
echo '<p><a href="">Reset page</a></p>';
}

?>

<!doctype html>
<html>
<head>
<title>My Adder Assignment</title>
<meta charset="UTF-8">
<style>


h1 {
    color: green;
    text-align:center; 
}


h2 {
        font-size:1.5em;
        text-align: center;
}



body {
    
    margin: 10px;
    vertical-align: midle;
    background:lightblue;
} 

fieldset {
    border:1px solid #800;
    padding:10px;
} 


form {
    max-width:350px;
    margin:0 auto;
    border: 1px solid red;
    padding: 10px;
}    


p {
        color:red;
        text-align: center;
    }



</style>
</head>
<body>
<h1>Adder.php</h1>
<!-- <fieldset> -->
<form action="" method="post">
<label>Enter the first number:</label>
<input type="text" name="Num1"><br>

<label>Enter the second number:</label>
<input type="text" name="num2"><br>
<input type="submit" value="Add Em!!"> 
<!-- </fieldset> -->

 </form>

 <h2>You added 2 and 4</h2><p> and the answer is <br>
 6!</p><p><a href="">Reset Page</a></p>

</body>
</html>



<!-- typografical errors -->

<!-- Line three, the curly bracket needs to be separete from the parenthesis -->
<!-- Line six, the variable $Num2 should be $num2 -->
<!-- Line six, $mytotal should be initialized with a value before substracting -->
<!-- Line 9, the sintax for echo statement is incorrect and the <style> tag it should not be there -->
<!-- Line 10, the <a> tag for the rest page should have a href attribute to linking to the rest page -->
<!-- Line 19, the form tag should be with out quotes and it needs the open form action-->
<!-- Line 20, the name attribute of the first input field is Num1 but in the PHP code is num1 and should be placed in another line separed-->
<!-- Line 21, the label tag open is missing and the input tag should be separated on another line-->
<!-- Line 22, the label tag open is missing and the input tag should be separated on another line-->
<!-- Line 23, there is a missing quote in the input submit value -->
<!-- Line 29, the quote, semicolon, open bracket and close php should not be there-->


