<div class="container alignCenter">
    <h1>wPanel</h1>
</div>
<nav class="navbar navbar-light bg-light">
    <div class="container">
        <p><?php echo "<strong>".$_SESSION['Nombre']."</strong> <br> <strong>".$_SESSION['Apellido']."</strong>"?></p>
        <form class="d-flex">
            <a href="cerrar.php">Salir <i class="bi bi-box-arrow-right"></i></a>
        </form>
    </div>
</nav>
