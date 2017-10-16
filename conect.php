<?php
 $a=mysqli_connect('localhost','root','','students') or die('not connected');
 mysqli_select_db($a,'students') or die("db not connected");

?>