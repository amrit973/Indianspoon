<div class="form1">
<?php
session_start();
if(!isset($_SESSION['admin']))
{
	header("Location:index.php");
}
 
$query="update category SET name='".$_SESSION['editcategory']['name']."'where categoryID=".$_SESSION['editcategory']['categoryID'];
$result=mysqli_query($connection,$query) or die("error querying") or die ("error querying");

unset($_SESSION['editcategory']);

?>



<h1> Edit Category</h1>
<p>Category Successfull updated</p>
<p><a href="index.php?page=admin">Back To admin</a></p>
</div>