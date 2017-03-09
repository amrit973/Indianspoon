<div class=form1>
<?php
     session_start();
     if(!isset($_SESSION['admin']))
     {
     	header("Location:index.php?page=admin");
     }
?>
<h2>Add New Category</h2>
<form method="post" action="index.php?page=entercategory">
<p> <input type="text" name="name" size="40" maxlength="30">
<p> <input type="submit" name="submit" value="submit"></p>
</form>
</div>