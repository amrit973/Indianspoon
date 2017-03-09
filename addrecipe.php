<?php
   session_start();
   if(!isset($_SESSION['admin']))
   {
   	header("Location:index.php");
   }
$query="select * from category";
$result=mysqli_query($connection,$query) or die("error");

?>

<div class="form1">
<p><a href="index.php?page=admin">Back To Admin</a></p>
<h2>Enter the details of the new recipe</h2>
<form method="post" action="index.php?page=confirmaddrecipe" enctype="multipart/form-data">
<p>Recipe  name:<input type="text" name="name"></p>
<p>Thumbnail:<input type="text" name="thumbnail"></p>
<p>Category:<select name="categoryID">
<?php
foreach($result as $stock)
{
	?>
	<option value="<?php echo $stock['categoryID']?> "><?php echo $stock['name']?></option>
	<?php
}


?>
</select>

</p>
<p>Ingredient:<textarea name="ingredient" cols=60 rows=5>
</textarea>
</p>
<p>Method:<textarea name="method" cols=60 rows=5>
</textarea>
</p>
<input type="submit" name="submit" value="submit">
</form>

</div>