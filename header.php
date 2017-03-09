<?php include 'nav.php'; ?> 
 <div class="navbar navbar-inverse navbar-fixed-top navbar-custom">
       <div class="container">
       <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
           <div class="navbar-header">
              <a class="navbar-brand" href="index.php">Indain Spoon</a>
              </div>
              <div class="collapse navbar-collapse" id="myNavbar">
             <ul class="nav navbar-nav">
             <?php
                       foreach($result as $key)
                        echo "<li><a href='index.php?page=category&categoryID=".$key['categoryID']."'>".$key['name']."</a></li>";
             ?>
             </ul>
           

           
           
                     <form class="navbar-form pull-left responsive" method="post" action="index.php?page=search">
              <input type="text" class="form-control" placeholder="Search Recipies..." id="searchInput" name="search">
              <button type="submit" class="btn btn-default">
              <span class="glyphicon glyphicon-search" style="font-size:1.3em;"></span></button>
            </form><!-- end navbar form---->       

            
            <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Sign Up</a></li>
      <li><a href="index.php?page=admin"><span class="glyphicon glyphicon-user"></span> Admin </a></li>
    </ul>
            
           </div>
         
       </div> 
   </div><!---navbar-->
