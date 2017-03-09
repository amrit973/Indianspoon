<html>

<head>
</head>

<body>

<div class="newitem ">
<?php
if(!isset($_GET['page']))
{
  header("Location:index.php");
}

   else
  {
  $query="select stock.recipeID,stock.name,stock.thumbnail,category.name as catname from stock join category on stock.categoryID=category.categoryID where stock.categoryID=".$_GET['categoryID'];
  $result = mysqli_query($connection,$query) or die ("error querying");
  $result_main=mysqli_fetch_assoc($result);
    if($result_main==0)
    {
      echo "sorry no recipes are available";
    }
    else
    {

      echo "<h1>".$result_main['catname']."</h1>";
    foreach ($result as $category) 
      {
         echo "<div class='item6'>";
          echo "<a href='index.php?page=item&recipeID=".$category['recipeID']."'>";
          echo "<img class='img-thumbnail img-responsive'   src='images/".$category['thumbnail']."'>";
           echo "<p>".$category['name']."</p></a>";
           echo "</div>";
      
     }
}
}


?>
</div>
</body>
</html>