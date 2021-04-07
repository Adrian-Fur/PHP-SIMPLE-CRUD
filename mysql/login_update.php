<?php include "db.php";
include "functions.php";

    updateTable();

?>
<?php include "includes/header.php"; ?>
<div class="container">
        <div class="col-6 form-control-lg">
        <h1 class="text-center">Update</h1>
        
        <form action="login_update.php" method="post">
        <div class="form-group">
        <labrel for="username">Username</labrel>
        <input type="text" name="username"  class="form-control" placeholder="Username to update">
        </div>
        <div class="form-group">
        <labrel for="password">Password</labrel>
        <input type="password" name="password" class="form-control" placeholder="Password to update">
        </div>
        <div class="form-group">
        <p>Choose ID to Update</p>
            <select name="id" id="">
            <?php
            showAllData();
            ?>
            </select>
            <br>
            <br>
       <input class="btn btn-primary" type="submit" name="submit" value="UPDATE">

        </form>
        </div>
</div>
    
<?php include "includes/footer.php" ?>