<?php session_start();
include('condb.php');

  $ID = $_SESSION['ID'];
  $name = $_SESSION['name'];
  $level = $_SESSION['level'];
 	if($level!='ADMIN'){
    Header("Location: ../logout.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>EGAT InventoryApp</title>
</head>
<center>
<body>
	<form action="logout.php">
	<h1>Admin Page</h1>
	<h3> สวัสดี คุณ <?php echo $name; ?> สถานะ <?php echo $level; ?> </h3>
	<input type="submit" value="ออกจากระบบ">
	</form>
</body>
</center>
</html>
