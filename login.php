    <!-- header y demas -->
    <?php include 'includes/header.php'; ?>

    <!-- Menú desplegable -->
    <nav class="nav-menu" id="nav-menu">
        <ul>
            <li><a href="index.php">Inicio</a></li>
            <li><a href="plan-comidas.php">Plan de Comidas</a></li>
            <li><a href="nueva-receta.php">Nueva Receta</a></li>
            <li><a href="mis-recetas.php">Mis Recetas</a></li>
            <li><a href="lista-compras.php">Lista de Compras</a></li>
            <li><a href="planificador-menus.php">Planificador de Menús</a></li>
            <li><a href="cerrar-sesion.php" style="color: red;" >Cerrar Sesión</a></li>

        </ul>
    </nav>

    <main>
    <div class="login-container">
        <div class="alert" id="alert"></div>
            <form action="../logic/validar_usuario.php" method="post" id="loginForm">
                <label for="chk" aria-hidden="true">Iniciar Sesion</label>
                    <div class="alert" id="alert"></div>
                <input type="text"      name="usuario"    placeholder="Usuario"required>
                    <div class="alert" id="alert"></div>
                <input type="password"  name="contraseña" placeholder="Contraseña"required>
                <button type="submit" value="Iniciar Sesión" class="btn">Inicar Sesion</button>
            </form>
            <div class="change">
                ¿Aún no estás Registrado?   <a href="./signup.php">Registrarse</a>
            </div>
        </div>
    </div>
    </main>

    <!-- Pie de Página -->
    <?php include 'includes/footer.php'; ?>