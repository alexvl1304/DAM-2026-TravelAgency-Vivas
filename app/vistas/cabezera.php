<?php
if(!isset($_SESSION)){
    session_start();
}
?>

<nav class="cabezera">
    <img style="display:flex; max-width: 350px; height: auto" src="../assets/imagenes-pagina/logo.png" alt="logo">
    <div class="info">
        <p>
            contact@easypeasytravel.com
        </p>
        <p>
            +34 689 38 20 93
        </p>
    </div>
</nav>
<nav style="display: flex;">
    <div style="flex: 1; justify-content: start;" class="barra">
        <a class="pestana" href="../public/index.php">Home</a>
        <a class="pestana" href="../public/todos-viajes.php">Viajes</a>
        <?php
        if (isset($_SESSION["user"]) && $_SESSION["user"]["admin"] == 1) {
            ?>
            <a class="pestana" href="../public/viajes.php">Base de datos</a>
            <?php
        }
        ?>
    </div>
    <?php
    if (isset($_SESSION["user"])) {
        ?>
        <div style="flex: 1; justify-content: end;" class="user">
            <a style="display: flex;" href="../public/pagina-usuario.php">
                <img style="max-height: 60px; flex: 1; margin-top: 2px; margin-bottom: 2px;" src="../assets/imagenes-pagina/user.png" alt="">
            </a>
        </div>
        <?php
    } else {
        ?>
        <div style="flex: 1; justify-content: end;" class="barra">
            <a class="pestana" href="../public/login.php">Iniciar sesión</a>
        </div>
        <?php
    }
    ?>
</nav>