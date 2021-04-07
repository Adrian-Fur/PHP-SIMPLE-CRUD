<?php
include "db.php";
include "functions.php";

createRows();
?>
<?php include "includes/header.php"; ?>
<div class="container">
        <div class="col-6 form-control-lg">

        <h1 class="text-center">Create User</h1>

        <form action="login_create.php" method="post">
        <div class="form-group">
        <labrel for="username">Username</labrel>
        <input type="text" name="username"  class="form-control" placeholder="Your Username">
        </div>
        <div class="form-group">
        <labrel for="password">Password</labrel>
        <input type="password" name="password" class="form-control" placeholder = "Your Password">
        </div>
    
       <input class="btn btn-primary" type="submit" name="submit" value="CREATE">

        </form>
        </div>
</div>
    
<?php include "includes/footer.php" ?>