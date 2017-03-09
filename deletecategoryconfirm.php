<div class="form1">
<?php
     session_start();
     if(!isset($_SESSION['admin']))
     {
     	header("Location:index.php");
     }
?>
<h2>Confirm Category For Deletion</h2>
<?php
 $query="select * from category where categoryID=".$_GET['categoryID'];
 $result=mysqli_query($connection,$query);
 $result_main=mysqli_fetch_assoc($result);
?>

<?php
$stock="select * from stock where categoryID=".$_GET['categoryID'];
$check=mysqli_query($connection,$stock) or die("error querying 2");
$count=mysqli_num_rows($check);
if($count>0)
{
    echo "Warning! There are ".$count." category item in the category they will alse be removed from database";	
}

?>

<p><?php echo "Do You Really wish to delete".$result_main['name']; ?></p>
<p><a href="index.php?page=deletecategory&categoryID=<?php echo $result_main['categoryID']?>" >Yes</a></p>
<p><a href="index.php?page=deletecategoryselect"> No go back</a></p>
<p><a href="index.php?page=admin">Take to Admin panel</a></p>

</div>