<nav class="mb-1 navbar navbar-expand-lg navbar-dark cyan">
    <a class="navbar-brand" href="#">PRESTAMOS <b>$$$</b></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4" aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle waves-effect waves-light" id="navbarDropdownMenuLink-4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user"></i> Perfil </a>
                <div class="dropdown-menu dropdown-menu-right dropdown-cyan" aria-labelledby="navbarDropdownMenuLink-4">
                    <a class="dropdown-item waves-effect waves-light" href="#">Editar Informacion</a>
                    <?php if (isset($_SESSION['precod'])) { ?> 

                        <a class="dropdown-item waves-effect waves-light" href="../logout"> Salir</a> 
                    <?php } else 
                            { ?>
                             <a class="dropdown-item waves-effect waves-light" href="logout"> Salir</a> 
                    <?php } ?> </div>
            </li>
        </ul>
    </div>
</nav>