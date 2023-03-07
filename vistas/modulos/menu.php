<nav class="navbar navbar-expand-lg" style="background-color:#DC60F5;">
<a class="navbar-brand" href="#" style="color:black"></a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
    <li class="nav-item active">
        <a class="nav-link" href="index.php?accion=principal" style="color:black"><i class="fa-solid fa-house"></i><span class="sr-only">(current)</span></a>
    </li>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false" style="color:black"><i class="fa-solid fa-file-arrow-up"></i> 
        ALTAS
        </a>
        <div class="dropdown-menu">
        <a class="dropdown-item" href="index.php?accion=alta_persona">Alta Personas</a>
        <a class="dropdown-item" href="index.php?accion=alta_puesto">Alta Puesto</a>
        <button type="button" class="btn btn-light" data-toggle="modal" data-target="#staticBackdrop">
        Alta Departamento
        </button>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="#">Something else here</a>
        </div>
    </li>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false" style="color:black"><i class="fa-solid fa-eye"></i> 
        MOSTRAR
        </a>
        <div class="dropdown-menu">
        <a class="dropdown-item" href="index.php?accion=mostrar_persona">Mostrar Personas</a>
        <a class="dropdown-item" href="index.php?accion=mostrar_puesto">Mostrar Puesto</a>
        <a class="dropdown-item" href="index.php?accion=mostrar_departamento">Mostrar Departamento</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="#">Something else here</a>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link disabled" style="color:black">Disabled</a>
    </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit" style="color:black">Search</button>
    </form>
</div>
</nav>