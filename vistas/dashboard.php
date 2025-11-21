<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Tablero Principal</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                    <li class="breadcrumb-item active">Tablero Principal</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<div class="content">
    <div class="container-fluid">

        <!-- Creamos una fila -->
        <div class="row">
            <div class="col-lg-2">
                <!-- small box -->
                <div class="small-box bg-info">
                    <div class="inner">
                        <h4 id="totalProductos"></h4>

                        <p>Productos registrados</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-clipboard"></i>
                    </div>
                    <a style="cursor:pointer;" class="small-box-footer">More info
                        <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>

            <!-- TARJETA TOTAL COMPRAS-->
            <div class="col-lg-2">
                <!-- small box -->
                <div class="small-box bg-success">
                    <div class="inner">
                        <h4 id="totalCompras"></h4>

                        <p>Total Compras</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-clipboard"></i>
                    </div>
                    <a style="cursor:pointer;" class="small-box-footer">More info
                        <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>

            <!-- TARJETA TOTAL VENTAS -->
            <div class="col-lg-2">
                <!-- small box -->
                <div class="small-box bg-warning">
                    <div class="inner">
                        <h4 id="totalVentas"></h4>

                        <p>Total Ventas</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-clipboard"></i>
                    </div>
                    <a style="cursor:pointer;" class="small-box-footer">More info
                        <i class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>

            <!-- TARJETA TOTAL GANANCIAS -->
            <div class="col-lg-2">
                <!-- small box -->
                <div class="small-box bg-danger">
                    <div class="inner">
                        <h4 id="totalGanancias"></h4>

                        <p>Total Ganancias</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-clipboard"></i>
                    </div>
                    <a style="cursor:pointer;" class="small-box-footer">More info
                        <i class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>

            <!-- TARJETA MINIMO STOCK -->
            <div class="col-lg-2">
                <!-- small box -->
                <div class="small-box bg-primary">
                    <div class="inner">
                        <h4 id="totalProductosMinStock"></h4>

                        <p>Productos pocos stock</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-clipboard"></i>
                    </div>
                    <a style="cursor:pointer;" class="small-box-footer">More info <i
                            class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>

            <!-- TARJETA TOTAL VENTA DIA ACTUAL -->
            <div class="col-lg-2">
                <!-- small box -->
                <div class="small-box bg-secondary">
                    <div class="inner">
                        <h4 id="totalVentasHoy"></h4>

                        <p>Ventas del dìa</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-clipboard"></i>
                    </div>
                    <a style="cursor:pointer;" class="small-box-footer">More info <i
                            class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </div>
</div>
<!-- /.content -->

<script>
    $(document).ready(function () {

        $.ajax({
            url: "ajax/dashboard.ajax.php",
            method: 'POST',
            dataType: 'json',
            success: function (respuesta) {
                console.log("respuesta", respuesta);
                $("#totalProductos").html(respuesta[0]['totalProductos']);
                $("#totalCompras").html('B/. ' + respuesta[0]['totalCompras'].toLocaleString('es-PE'));
                $("#totalVentas").html('B/. ' + respuesta[0]['totalVentas'].toLocaleString('es-PE'));
                $("#totalGanancias").html('B/. ' + respuesta[0]['ganancias'].toLocaleString('es-PE'));
                $("#totalProductosMinStock").html(respuesta[0]['productosPocoStock']);
                $("#totalVentasHoy").html('B/. ' + respuesta[0]['ventasHoy'].toLocaleString('es-PE'));
            }
        });
    })
</script>