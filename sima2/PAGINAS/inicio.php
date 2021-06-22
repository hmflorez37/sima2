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
    <!--contenido-->
<div class="container-fluid d-flex justify-content-start" id="contenido" >
    <div class="container">
        <h4>Bienvenido a S.I.M-A</h4>
        <div class="row">
            <div class="col-md-12">
                <div class="main-timeline8">
                    <div class="timeline">
                        <span class="timeline-icon"></span>
                        <span class="date">12/05/21</span>
                        <div class="timeline-content">
                            <h3 class="title">mantenimiento raul arenas</h3>
                            <p class="description">
                                pendiente cambio de culata.
                            </p>
                        </div>
                    </div>
                    <div class="timeline">
                        <span class="timeline-icon"></span>
                        <span class="date">13/03/21</span>
                        <div class="timeline-content">
                            <h3 class="title">pedido</h3>
                            <p class="description">
                                pendiente pedido kits arrastre akt</p>
                        </div>
                    </div>
                    <div class="timeline">
                        <span class="timeline-icon"></span>
                        <span class="date">08/02/21</span>
                        <div class="timeline-content">
                            <h3 class="title">recordatorio</h3>
                            <p class="description">
                                pendiente llamada saul
                            </p>
                        </div>
                    </div>
                    <div class="timeline">
                        <span class="timeline-icon"></span>
                        <span class="date">05/01/21</span>
                        <div class="timeline-content">
                            <h3 class="title">mantenimiento rincon s.a.s</h3>
                            <p class="description">
                                carro entregado a cliente
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>
</div>
        </div>
    </div>

</div>
</div>
</body>
</html>