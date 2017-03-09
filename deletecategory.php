<div class="form1">

<?php
$query="delete from category where categoryID=".$_GET['categoryID'];
$result=mysqli_query($connection,$query) or die("error queryinhg");
?>


<h2>Category has been Successfully Deleted</h2>
<p><a href="index.php?page=admin">Return To Admin Panel</a></p>
</div>