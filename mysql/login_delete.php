<?php include "db.php";
include "functions.php";

    deleteRows();

?>
<?php include "includes/header.php"; ?>
<div class="container">
       <h1 class="text-center">Choose ID to Delete</h1>
        <div class="form-group">
        <form action="login_delete.php" method="post">
            <select name="id" id="">
            <?php
            showAllData();
            ?>
            </select>
            <br>
            <br>
       <input class="btn btn-primary" type="submit" name="submit" value="DELETE">
        </form>
        </div>

</div>
    
<?php include "includes/footer.php" ?>