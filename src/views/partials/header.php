<body>

    <header>
        <div class="bb d-flex" id="wrapper">
            <!-- Sidebar -->
            <div class="navbar-nav sidebar-container fixed-top bg-primary">
                <div class="sidebar">
                    <a class="logo text-light" href="/proyecto/index.php">                   
                        <h4><i class="fas fa-book"></i> Biblioteca </h4>
                    </a>
                    
                    <hr class="sidebar-divider my-0">
    
                    <div class="menu">
                        <div><a href="/proyecto/prestamo_circulante.php" class="d-block p-3 text-light nav-link"><i class="fas fa-book-open"></i> Préstamo circulante </a></div>
                        <div><a href="/biblioteca-publica-agustin-codazzi/solicitante/" class="d-block p-3 text-light nav-link"> <i class="fas fa-book-reader"></i> Solicitantes </a> </div>
                        <div> <a href="/proyecto/recursos.php" class="d-block p-3 text-light nav-link"> <i class="fas fa-folder"></i> Recursos </a></div>
                        <div><a href="#" class="d-block p-3 text-light nav-link"><i class="fas fa-user"></i> Usuarios </a></div>
                        <div><a href="<?php echo $helpers->url('session', 'cerrar') ?>" class="d-block p-3 text-light nav-link"> Cerrar </a></div>
                    </div>
                </div>
            </div>
        </div>
    
    <nav class="navbar navbar-light bg-light">
      <span class="navbar-brand mb-0 h1">"Agustín Codazzi"</span>
    </nav>
    
    </header>
