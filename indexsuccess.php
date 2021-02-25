<?php
session_start();
if (isset($_SESSION['username'])) : ?>

    <p>
        Welcome
        <strong><italic>
            <?php echo $_SESSION['username'];
            $_SESSION['userLogin']="Loggedin";
            //header("Location:frontpage.php");
            ?>

            </italic>
        </strong>
    </p>
    <p>
        <a href="logout.php?logout='1'" name="logout" id="logout" style="color: red;">
            Click here to Logout
        </a>

    </p>
<html>
<head>
    <script src="validation.js"></script>
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>
<body>

<input type="button" class="btn waves-effect waves-light" value="Home" id="myButton" onclick="home()" style="float: right;"/>
</body>
</html>
<?php endif ?>