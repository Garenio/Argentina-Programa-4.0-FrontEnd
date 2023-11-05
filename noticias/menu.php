<?php
extract($_REQUEST);
if (!isset($_SESSION['usuario_logueado'])) {
    $is_logged = false;
    $_SESSION['rol'] = 'visitante';
    $rol = $_SESSION['rol'];
} else {
    $is_logged = true;
    $nombre = $_SESSION['nombre'];
    $rol = $_SESSION['rol'];
}
?>

<!-- MENÚ NAVBAR PARA TODO EL SITIO -->
<nav class="navbar navbar-expand-lg shadow mb-5">
    <div class="container">
        <a href="index.php" class="navbar-brand">
            <img src="../imagenes/logos/logo.png" alt="" width="200">
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a href="../noticias/index.php" class="nav-link link-underline">Inicio</a>
                </li>
                <li class="nav-item">
                    <a href="../noticias/index.php?categoria=Tecnologia" class="nav-link">Tecnología</a>
                </li>
                <li class="nav-item">
                    <a href="../noticias/index.php?categoria=Gaming" class="nav-link">Gaming</a>
                </li>
                <li class="nav-item">
                    <a href="../noticias/index.php?categoria=Reviews" class="nav-link">Reviews</a>
                </li>
            </ul>

            <div class="navbar-nav">
                <?php if ($is_logged): ?>
                    <div class="dropdown">
                        <a href="#" class="nav-link dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <?= $nombre ?>
                        </a>
                        <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1">
                            <?php if ($rol == "admin"): ?>
                                <li>
                                    <h6 class="dropdown-header">Opciones de Administrador</h6>
                                </li>
                                <li><a class="dropdown-item" href="../admin/mis_publicaciones.php">Gestión de usuarios</a></li>
                                <li><a class="dropdown-item" href="../admin/todas_publicaciones.php">Gestión de artículos</a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider" />
                                </li>
                            <?php else: ?>
                                <li></li>
                            <?php endif ?>
                            <li>
                                <h6 class="dropdown-header">Opciones de Autor</h6>
                            </li>
                            <li><a class="dropdown-item" href="../admin/index.php">Ver mis artículos</a></li>
                            <li><a class="dropdown-item" href="form_agregar.php">Crear un artículo</a></li>
                            <li>
                                <hr class="dropdown-divider" />
                            </li>
                            <li><a class="dropdown-item" href="../backend/logout.php">Cerrar sesión</a></li>
                        </ul>
                    </div>
                <?php else: ?>
                    <a class="nav-link text-center" href="../admin/agregar_usuario.php">Registro</a>
                    <a href="../admin/form_login.php" class="btn btn-outline-light img-fluid">
                        Ingresar
                    </a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</nav>