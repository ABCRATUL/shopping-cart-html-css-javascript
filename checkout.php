
<!Doctype html>
<html>
<head>
</head>
<script src="cartinsertion.js"></script>

<body>
<p>Your total price is Rs<p id="demo"></p></p>
</body>
<script>
var favoritemovie = sessionStorage.getItem("favoriteMovie");

document.getElementById("demo").innerHTML = favoritemovie;
//alert(favoritemovie);
</script>
</html>
<?php
session_start();


//$total-cart = $_POST['total-cart'];
//$total-cart=$_POST['total-cart'];


//echo  "Your total price is $_SESSION['total-cart']";



if(empty($_SESSION['userLogin'])||$_SESSION['userLogin']=='')
{
echo "Please login";
//die();

}
else if($_SESSION['loggedin']==true){
	$action = isset($_POST['action']) ? $_POST['action'] : '';
echo "Good";
//


}
?>

<!Doctype html>


<head>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

<script src="cartinsertion.js"></script>


</head>
<body>



</body>