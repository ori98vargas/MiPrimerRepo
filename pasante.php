<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Registro de pasante</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="./images/1.png">
    <link href="./vendor/jqvmap/css/jqvmap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="./vendor/chartist/css/chartist.min.css">
    <link href="./vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="./css/style.css" rel="stylesheet">
	<link href="https://cdn.lineicons.com/2.0/LineIcons.css" rel="stylesheet">
	<link href="./vendor/owl-carousel/owl.carousel.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/brands.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

</head>
<body>
    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">
		<?php include('./partials/header.php') ?>
		<?php include('./partials/nav.php') ?>
        <?php 
            require_once('./querys/conexion.php');
            $result = $conexion->query( "SELECT * FROM pasante2" );
        ?>
        <div class="content-body">
			<div class="container-fluid">
                <div class="page-titles">
					    <ol class="breadcrumb">
						    <li class="breadcrumb-item"><a href="javascript:void(0)">Inicio</a></li>
						    <li class="breadcrumb-item active"><a href="javascript:void(0)"></a></li>
					    </ol>
                </div>
                <div class="form-head d-flex mb-3 mb-md-3 align-items-start">
                    <?php if ( $result ) { ?>
                        <a href="vistas_pdfs/pdf.php" class="btn btn-primary ml-auto">Generar PDF</a>
                        <a href="form-pasante.php" class="btn btn-primary ml-1">Agregar Pasante</a>
                    <?php } else { ?>
                        <a href="form-pasante.php" class="btn btn-primary ml-auto">Agregar Pasante</a>
                    <?php } ?>
                </div>
				<div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">lista de pasantes</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-responsive-md">
                                        <thead>
                                            <tr>
                                                <th class="width80"><strong>#</strong></th>
                                                <th><strong>Nombre</strong></th>
                                                <th><strong>Apellido</strong></th>
                                                <th><strong>Cédula</strong></th>
                                                <th><strong>Estatus</strong></th>
                                                <th><strong>Fecha</strong></th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                if ( $result ) {
                                                    while ($row = $result->fetch_assoc()) {
                                                        $field_cedula = $row["cedula_pasante"];
                                                        $field_nombre_pasante = $row["nombre_pasante"];
                                                        $field_apellido_pasante = $row["apellido_pasante"];
                                                        $field_nombre_nivel_estudio = $row["nombre_nivel_estudio"];
                                                        $field_fechaNac = $row["fechaNac"];

                                                        echo '<tr> 
                                                                <td><strong>01</strong></td>
                                                                <td>' . $field_nombre_pasante . '</td> 
                                                                <td>' . $field_apellido_pasante . '</td> 
                                                                <td>' . $field_cedula . '</td> 
                                                                <td><span class="badge light badge-success">Exitosa</span></td>
                                                                <td>' . $field_fechaNac . '</td> 
                                                                <td>
                                                                    <div class="dropdown">
                                                                        <button type="button" class="btn btn-success light sharp" data-toggle="dropdown">
                                                                            <svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg>
                                                                        </button>
                                                                        <div class="dropdown-menu">
                                                                            <a class="dropdown-item" href="#"><i class="fa-regular fa-eye"></i> Ver</a>
                                                                            <a class="dropdown-item" href="#"><i class="fa-regular fa-pen-to-square"></i> Editar</a>
                                                                            <a class="dropdown-item" href="#"><i class="fa-regular fa-circle-xmark"></i> Inhabilitar</a>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                              </tr>';
                                                    }
                                                    $result->free();
                                                }  
                                             ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
				</div>
            </div>
        </div>

		<?php include('./partials/footer.php') ?>
    </div>

	<script src="./vendor/global/global.min.js"></script>
	<script src="./vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
	<script src="./vendor/chart.js/Chart.bundle.min.js"></script>
    <script src="./js/custom.min.js"></script>
	<script src="./js/deznav-init.js"></script>
	<script src="./vendor/owl-carousel/owl.carousel.js"></script>
    <script src="./vendor/peity/jquery.peity.min.js"></script>
</body>
</html>