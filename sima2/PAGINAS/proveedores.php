<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>S.I.M.A</title>
    <link rel="stylesheet" href="../CSS/bootstrap.css">
    <link rel="stylesheet" href="../CSS/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="../CSS/menu.css">
    <!--script-->
    <script type="text/javascript" src="../JS/jquery-3.6.0.min.js"></script>
    <script src="../JS/bootstrap.min.js"></script>
    <script src="../JS/llamados.js"></script>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-">
                <div class="menu-expanded" id="menu" >
                    <!--header-->
                    <div id="header">

                        <div id="title"><span>S.I.M.A</span></div>
                    </div>
                    <!--profile-->
                    <div id="profile">
                        <div id="avatar">
                            <img src="../assets/img/avatar-male.png" alt="avatar">
                        </div>
                        <div id="name">
                            <span>empleado</span>
                        </div>
                    </div>
                    <!--lateral-navigation-->
                    <div id="menu-navigation">
                        <div class="navigation">
                            <a href="../PAGINAS/inicio.php">
                                <div class="icon">
                                    <i class = "zmdi zmdi-desktop-windows" > </i>
                                </div>
                                <div class="title"onclick="timeline()">INICIO</div>
                            </a>

                        </div>
                        <div class="navigation">
                            <a href="../PAGINAS/clientes.php">
                                <div class="icon">
                                    <i class = "zmdi zmdi-accounts-list"> </i>
                                </div>
                                <div class="title ">CLIENTES</div>
                            </a>
                        </div>
                        <div class="navigation">
                            <a href="../PAGINAS/ventas.php">>
                                <div class="icon">
                                    <i class = "zmdi zmdi-money-box"> </i>
                                </div>
                                <div class="title">VENTAS</div>
                            </a>
                        </div>
                        <div class="navigation">
                                <a href="../PAGINAS/inventario.php">>
                                    <div class="icon">
                                        <i class = "zmdi zmdi-store"> </i>
                                    </div>
                                    <div class="title">INVENTARIO</div>
                                </a>
                        </div>
                            <div class="navigation">
                                <a href="../PAGINAS/mantenimientos.php">>
                                    <div class="icon">
                                        <i class = "zmdi zmdi-wrench"> </i>
                                    </div>
                                    <div class="title">MANTENIMIENTOS</div>
                                </a>
                            </div>
                            <div class="navigation">
                                <a href="../PAGINAS/proveedores.php">>
                                    <div class="icon">
                                        <i class = "zmdi zmdi-truck"> </i>
                                    </div>
                                    <div class="title">PROVEEDORES</div>
                                </a>
                            </div>
                            <div class="navigation">
                                <a href="../PAGINAS/pedidos.php">>
                                    <div class="icon">
                                        <i class = "zmdi zmdi-store"> </i>
                                    </div>
                                    <div class="title">PEDIDOS</div>
                                </a>
                        </div>
                            <div class="navigation">
                                <a href="../PAGINAS/empleados.php">>
                                    <div class="icon">
                                        <i class = "zmdi zmdi-account"> </i>
                                    </div>
                                    <div class="title">USUARIOS</div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    <!--sup nav-->
    <div class="col-12 sup sticky-top">
        <nav class="navbar sticky-top navbar-expand-lg navbar-light sup">
            <div class="container-fluid">
                <img src="../IMAGES/sima logo.jpeg"width="50px" alt="S.I.M.A">
                <ul class="navbar-nav ml-auto nav-flex-icons">
                    <li nav-item>
                        
                        <a class="nav-link" href="">
                            <i class = "zmdi zmdi-power"> </i>
                        </a>
                    </li>
                    <li nav-item>
                        <a class="nav-link" href="">
                            <i class = "zmdi zmdi-notifications"> </i>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <div class="container-fluid">
        <div class="row">
    
    <div class="col-12 d-inline-flex" >
        <!--container modal-->
        <div id="contenido" >
            <div class="row">
                <div class="col- form-check ">
                <!-- Button action modal -->
                <button type="button" class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#exampleModal">
                    nuevo
                </button>
                
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">nuevo proveedor</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form class="row g-3 needs-validation" validate>
                                    <div class="col-md-12">
                                        <label for="validationCustom02" class="form-label"></label>
                                        <input type="number" class="form-control" id="validationCustom01" placeholder="documento" required>
                                        <div class="valid-feedback">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                    <input type="text" class="form-control" id="validationCustom02" placeholder="nombre completo" required>
                                    <div class="valid-feedback">
                                    </div>
                                    </div>
                                    <div class="col-md-12">
                                        <input type="tel" class="form-control" id="validationCustom04" placeholder="tel" required>  
                                        <div class="valid-feedback">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <input type="text" name="ciudad" class="form-control" placeholder="Ingrese Ciudad" required>  
                                        <div class="valid-feedback">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <input type="text" name="marca" class="form-control" placeholder="marca que provee" required>  
                                        <div class="valid-feedback">
                                        </div>
                                    </div>
                                        
                                    <div class="col-12">
                                        <button class="btn btn-primary" type="submit">Guardar</button>
                                        <button class="btn btn-primary" type="reset">limpiar</button>
    
                                    </div>
                                    </div>
                                    
                                </form> 
                            </div>
                            <div class="modal-footer">                 
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>                
            </div>
        </div>
        <ul class="nav nav-tabs ">
            <li class="nav-item">
                <a class="nav-link " id="btn-search"><i class = "zmdi zmdi-search"> </i></a>
            </li>
            <input class="form-control form-control-dark w-75" type="text" placeholder="Search" aria-label="Search">
        </ul>  
    </div>
     
    <!--tabla-->
    <div class="col-12 tabla">
        <div class="tabla-Proveedores">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr class="table">
                        <th scope="col">DOC</th>
                        <th scope="col">NOMBRE</th>
                        <th scope="col">CELULAR</th>
                        <th scope="col">CIUDAD</th>
                        <th scope="col">MARCA_PROV</th>
                        <th scope="col">ID_PROV</th>
                        <th scope="col">OPCIONES</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1056428754</td>
                        <td>JAVIER</td>
                        <td>310254687</td>
                        <td>BOGOTA</td>
                        <td>RENAULT</td>
                        <td>001</td>
                        <td> <button class="btn btn-warning" type="#"><i class = "zmdi zmdi-edit"> </i></button> </td>
                    </tr>
                </tbody>
                
            </table>
        </div>
        </div>
        </div>
    </div>
</body>