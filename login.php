<div class="row">

<div class="col-lg-4">
</div>

<div class="col-lg-4">
<div class="form1">

<h2 >Please Enter Your Details</h2>
<hr>
<form role="form" method="post" action="index.php?page=admin">
<div class="form-group">
     <label for="username">Username: </label>
     <input type="text" class="form-control" name="username" placeholder="Firstname">

     
     <label for="Password">Password:</label>
     <input type="password" class="form-control" name="password" placeholder="Password"><br>
     <?php
        if(isset($_POST['login']) && !isset($_SESSION['admin']))
            echo "<h3> Wrong Username or Password </h3>";
     ?>
     <button type="submit" class="btn btn-success" name="login">Submit</button>



</div>
</form>
</div>
</div>

    <div class="col-lg-4">
    </div>
</div>