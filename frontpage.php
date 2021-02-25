<?php
include 'indexsuccess.php';
?>
<!DOCTYPE html>
<html>
<?php
if(isset($_SESSION["cart_item"])) {
    $total_quantity = 0;
    $total_price = 0;
}
?>
<head>
<style>
body{
background-color:pink;
}
</style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="frontpagebuttons.css"/>
	<script src="cartinsertion.js"></script>
    <title>FrontPage</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            $('#content').load("cart.php");
        });
    </script>
</head>
<body>
<div id="background">
    <img src="" class="stretch" alt="" />
</div>
<div class="shopperstop">
    <h4 style="font-family:verdana;"><i><center>Gaming Store</center></i></h4>
    <h3><center><b>Welcome</b></center></h3>
</div>
<div class="position">
    <button style="" class="waves-effect waves-light btn" id="loginbutton" onClick="Javascript:window.location.href = 'login.php';"> Login</button>
    <button style="" class="waves-effect waves-light btn" id="registerbutton" onClick="Javascript:window.location.href = 'registration.php';">Register</button>
</div>
</br>
</br>
<div id="content"></div>
</body>
</html>)