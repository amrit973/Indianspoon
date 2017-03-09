<html>
<head>
</head>

<body>
<?php
if(!isset($_GET['recipeID']))
{
	header("Location:index.php"); 
}
$query="select * from stock where recipeID=".$_GET['recipeID'];
$result =mysqli_query($connection,$query)or die("error querying");
foreach($result as $desc)
{
	?>

	<div class="row">
  <div class="col-lg-3">
  </div>

  <div class="col-lg-6">
  <div class="heading">
  <?php echo "<h1>".$desc['name']."</h1>"; ?>
  </div>
  </div>

  <div class="col-lg-3">
  </div>

 </div> 

   
 <div class="row">
     <div class="col-lg-8" >
              <div class="h2">
               <img src="images2/<?php echo $desc['thumbnail']?>"  class="img-responsive img-rounded">
            </div>
     </div>

    <div class="col-lg-4">
              <div class="h2">
              <div class="head">
               <h2>Ingredients</h2>
               </div>
              <div class="item2">
              <?php echo "<p>".$desc['ingriedent']."</p>";?>
              </div>
            </div>
     </div>

 </div>
 

 <div class="row">
    <div class="col-lg-12">
        <div class="h3">
        <h2>Recipe:</h2>
         <div class="item1">
             <?php  echo "<p>".$desc['method']."</p>";?>
              </div>

        </div>
    </div>

 </div>






<?php	
}
?>

</body>
</html>




