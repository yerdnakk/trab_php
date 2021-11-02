<?php
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>

<?php if(isset($_SESSION['message'])): ?>
    <div class="alert alert-<?php echo $_SESSION['message']['type']; ?>" role="alert">
        <?= $_SESSION['message']['msg']; ?>
    </div>
    <?php unset($_SESSION['message']); ?>
<?php endif; ?>   
<div class="card">
<div class="card-body">
<header>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-11 text-right">
                <nav>
                    <ul>
                        <li><a href="index.php">Painel</a></li>
                        <li><a href="create.php">Novo produto</a></li>               
                        <li><?= 'Welcome, <strong>'. $_SESSION['username']. '</strong> (<a href="logout.php">Sair</a>)'; ?></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>