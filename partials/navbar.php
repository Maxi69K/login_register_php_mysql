<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">PHP App</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                
                <?php if (isset($_SESSION['id'])) : ?>
                    <a class="nav-link" href="logout.php">Logout</a>
                <?php else : ?>
                    <a class="nav-link" aria-current="page" href="index.php">Home</a>
                    <a class="nav-link" href="login.view.php">Login</a>
                    <a class="nav-link" href="register.view.php">Register</a>
                <?php endif ?>

            </div>
        </div>
    </div>
</nav>