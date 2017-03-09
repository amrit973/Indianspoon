<?php
include 'connect.php';
$query="select * from category";
$result=mysqli_query($connection,$query) or die ("error querying".mysqli_error());

?>