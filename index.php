<?php 
include_once('conect.php');

if (isset($_POST['submit'])) {
	
$name= $_POST['name'];
$email= $_POST['email'];
$add= $_POST['addrss'];
$dob =$_POST['dob'];
if(mysqli_query(mysqli_connect('localhost','root','','students'),"insert into students_records (name,email,address,dob) values('$name','$email','$add','$dob')")){
	
	echo "sumitted";
	# code...
}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="" method="post">
	
	Name<br><input type="text" name="name"><br>
	Email<br><input type="text" name="email"><br>
	Addrss<br><input type="text" name="addrss"><br>
	DateOfBirth<br><input type="text" name="dob"><br>
	<br><input type="submit" name="submit"><br>



</form>


</body>
</html>