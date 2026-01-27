<style>
    html,
    body {
        height: 100%;
        margin: 0;
    }

    body {
        display: flex;
        flex-direction: column;
        font-family: Arial, Helvetica, sans-serif;
        background-color: #e2ecff;
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
        color: #01294B;
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

    h1 {
        text-align: center;
        font-size: 45px;
        color: #02203a;
        font-weight: bold;
    }

    .blue-color {
        text-align: center;
        font-size: 20px;
        color: #02203a;
        font-weight: bold;
    }

    main {
        flex: 1;
    }

    footer {
        background: #333;
        color: #fff;
        text-align: center;
        padding: 10px;
    }
</style>

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
    <div style="justify-content: start;" class="barra">
        <a class="pestana" href="../public/index.php">Home</a>
        <a class="pestana" href="../public/viajes.php">Viajes</a>
        <a class="pestana" href="../public/login.php">Iniciar sesión</a>
    </div>
    <div style="justify-content: end;" class="barra">
        <a class="pestana" href="../public/index.php">Home</a>
        <a class="pestana" href="../public/viajes.php">Viajes</a>
    </div>
</nav>