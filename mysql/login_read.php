<?php include "db.php";
include "functions.php";
?>

<?php include "includes/header.php"; ?>
<div class="container">
        <div class="col-6">
<pre>
        <?php
        readRows();
        ?>        
</pre>
        </div>
</div>
    
<?php include "includes/footer.php" ?>