<div class="container">
    <div class="row">
        <div class="col-3">
            <form method="POST" action="../inventario/gestor.php?" >
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal">
            producto
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">PRODUCTO</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="form-row">
                                <input class="form-control" type="num" name="id"value="" placeholder="serial" id="id" required><br>
                                <input class="form-control" type="text" name="nombre"value="" placeholder="nombre" id="nombre" required><br>
                                <input class="form-control" type="text" name="marca" value="" placeholder="marca" id="marca" required><br>
                                <input class="form-control" type="text" name="costo" value="" placeholder="costo producto" id="costo"><br>
                                <input class="form-control" type="num" name="cantidad" value="" placeholder="cantidad" id="cantidad" required><br>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-warning" value="guardar"type="submit"name="accion">Guardar</button>
                            <button class="btn btn-info"value="limpiar" name="limpiar" type="reset">limpiar</button>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>


            </form> 
        </div>
        <div class="col-9">
        <form class="d-flex" method="post" action="">
        <input class="form-control me-2" type="text" placeholder="Search"name="buscar" id="buscar">
        </form>
        </div> 
    </div>
</div>