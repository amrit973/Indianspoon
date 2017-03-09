<div class="form1">
<?php
$name=$_POST['name'];
if(!empty($name))
{

$query="insert into category (name) values ('$name') ";
$result = mysqli_query($connection,$query) or die ("error querying");
echo "<h2>New Category has been added</h2>";
}

else
{
	echo "Enter something To add";
}
?>

<p><a href="index.php?page=admin">Back To Admin</p>
</div>