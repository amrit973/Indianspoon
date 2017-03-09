<div class=form1>
<?php
     session_start();
     if(!isset($_SESSION['admin']))
     {
     	header("Location:index.php");
     }
?>
<h2>Delete Category</h2>
<?php
 $query="select * from category";
 $result=mysqli_query($connection,$query);
 foreach($result as $key)
 {
    echo "<a href='index.php?page=deletecategoryconfirm&categoryID=".$key['categoryID']."'>";
 	echo "<h2>".$key['name']."</h2></a>";
 }
?>
</div>