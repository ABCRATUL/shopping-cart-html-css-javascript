
<?php
readfile('login.html');
echo "Good";
$servername = "localhost";
$admin = "root";
$password = "";
$dbname = "db";
$tblname="mypersons";
$conn = new mysqli($servername, $admin, $password, $dbname);
if($conn)
{
	
}
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

else if(isset($_POST['submit'])){

	$username=$_POST['username']; 
    $password=($_POST['password']);



	


$sql="SELECT * FROM $tblname WHERE username='$username' and password=('$password')";
$result=mysqli_query($conn,$sql);

// Mysql_num_row is counting table row
$count=mysqli_num_rows($result);
// Mysql_num_row is counting table row
echo "Good2";
echo $count;
// If result matched $username and $password, table row must be 1 row
if($count>0){
	echo "Good";
    session_start();
	header("Location:frontpage.php");
	//echo ("Logged in");
    $_SESSION['userlogin']="loggedin";
    $_SESSION['loggedin'] = true;
    $_SESSION['username'] = $username;
	//header("Location:frontpage.php");
} elseif($count==0)
{
 echo "Please enter username/password correctly";
}
}
	?>