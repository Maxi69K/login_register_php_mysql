<?php session_start(); ?>
<?php require "partials/head.php" ?>
<?php require "partials/navbar.php" ?>
<div class="container">
    <div class="row">
        <div class="col-6 offset-3">
            <?php  ?>
            <?php 
                if(isset($_SESSION['id'])) {
                    echo "<h3>Welcome" . " " . $_SESSION['name'] ."</h3>" . "\n" . "<p>email:" . " " . $_SESSION['email'] ."</p>";
                } else {
                    echo "<h1>Login or Register</h1>";
                }
            ?>
        </div>
    </div>
</div>
<?php require "partials/footer.php" ?>