<?php
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>

<?php if(isset($_SESSION['message'])){ ?>
    <div class="alert alert-<?= $_SESSION['message']['type']; ?>" role="alert">
        <?= $_SESSION['message']['msg']; ?>
    </div>
    <?php unset($_SESSION['message']); ?>
<?php } ?>   
<div class="card">
<div class="card-body">
<header>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-11 text-right">
                <nav>
                    <ul>
                        <li><a class="btn btn-primary" href="create.php">Novo produto</a></li>               
                        <li><?= '<strong>'. $_SESSION['username']. '</strong> (<a href="logout.php">Sair</a>)'; ?></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>