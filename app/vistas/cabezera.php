<style>
    body {
        margin: 0;
        font-family: Arial, Helvetica, sans-serif;
    }

    .barra {
        display: flex;
        gap: 20px;
        background-color: #294b7e;
        padding: 15px 30px;
        font-size: 20px;
    }

    .cabezera {
        display: flex;
        gap: 20px;
        align-items: center;
        font-size: 20px;
        font-weight: bold;
        color: #01294B
    }

    .pestana {
        color: white;
        text-decoration: none;
        font-weight: bold;
    }

    .info {
        margin-left: auto;
        padding-right: 30px;
    }
</style>
<nav class="cabezera">
    <img style="display:flex; max-width: 350px; height: auto" src="../assets/logo.png" alt="logo">
    <div class="info">
        <p>
            contact@easypeasytravel.com
        </p>
        <p>
            +34 689 38 20 93
        </p>
    </div>
</nav>
<nav class="barra">
    <a class="pestana" href="../public/index.php">Home</a>
    <a class="pestana" href="../public/viajes.php">Viajes</a>
</nav>