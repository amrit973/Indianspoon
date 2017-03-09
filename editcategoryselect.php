<div class="form1">
<?php
session_start();
if(!isset($_SESSION['admin']))
{
	header("Location:index.php");
}
 unset($_SESSION['editcategory']);
$query="select * from category";
$result=mysqli_query($connection,$query) or die("error querying") or die ("error querying");



?>



<h1> Edit Category</h1>
<?php

foreach ($result as $key) 
{
  ?>
<p> <a href="index.php?page=editcategory&categoryID=<?php echo $key['categoryID']?>"><?php echo $key['name']?></a></p>

<?php  
}


?>
</div>