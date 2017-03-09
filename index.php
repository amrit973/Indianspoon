<html>

<head>
<title>Indian Spoon</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="font/bootstrap-social.css">
</head>


<body>
<div class="container" id="main">
<?php include 'header.php';?>
 <?php
    if(!isset($_GET['page']))
            {

                   include 'carousel.php';
         }

       else
             {
                 $page=$_GET['page'];
                 include("$page.php");
             }
          ?>


</div>
<?php include 'footer.php'; ?>
<script src="jjquery.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>