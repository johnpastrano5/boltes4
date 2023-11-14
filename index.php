<?php  
session_start();

      include("connection.php");
      include("functions.php"); 

      $user_data = check_login($con);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Boltes Four</title>
</head>
<body>

    <a href="logout.php">Logout</a>
    <h1>Oops! This is the index page</h1>

    <br>
    Welcome! <?php echo $user_data['user_name']; ?>
</body>
</html>