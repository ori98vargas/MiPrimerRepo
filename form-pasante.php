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
    <div id="main-wrapper">
        <?php include('./partials/header.php') ?>
        <?php include('./partials/nav.php') ?>

        <div class="content-body">
            <div class="container-fluid">
                <div class="card">
                    <div class="card-body">
                        <div class="pt-3">
                            <div class="settings-form">
                        <div class="page-titles">
					        <ol class="breadcrumb">
						    <li class="breadcrumb-item"><a href="javascript:void(0)">Inicio</a></li>
						    <li class="breadcrumb-item active"><a href="javascript:void(0)"></a></li>
					        </ol>
                        </div>
                                <h3 class="text-primary text-center mb-4">Información Personal</h3>
                                <form action="./querys/registro_pasante.php" method="POST">
                                    <div class="row">
                                        <div class="col-lg-6 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">Cédula</label>
                                                <input type="text" name="txtci" class="form-control" placeholder="" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">Primer Nombre</label>
                                                <input type="text" name="txtfirstName" class="form-control" placeholder="" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">Apellido</label>
                                                <input type="text" name="txtlastName" class="form-control" placeholder="" required>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">Fecha de Nac.</label>
                                                <input type="date" name="txtnac" class="form-control" placeholder="DD/MM/YY" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">Correo Electrónico</label>
                                                <input type="email" name="txtcorreo" class="form-control" id="inputGroupPrepend2" aria-describedby="inputGroupPrepend2" placeholder="@gmail.com" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">Número Telefónico</label>
                                                <input type="text" name="txtphoneNumber" class="form-control" placeholder="(+58)" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">Número de emergencia</label>
                                                <input type="text" name="txtemergencia" class="form-control" placeholder="(+58)" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 mb-3">
                                            <div class="form-group">
                                                <label class="text-label">Dirección</label>
                                                <input type="text" name="txtplace" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">¿Tiene alguna discapacidad?. Mencione </label>
                                                <input type="text" name="txtdiscapacidad" class="form-control" placeholder="" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">Nivel de estudio</label>
                                                <input type="text" name="txtestudio" class="form-control" placeholder="" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">Institución</label>
                                                <input type="text" name="txtinstituto" class="form-control" placeholder="" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 mb-2 text-center">
                                            <a href="./pasante.php" class="btn btn-outline-secondary">
                                                Cancelar
                                            </a>
                                            <button type="submit" class="btn btn-outline-primary">Guardar</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <?php include('./partials/footer.php') ?>
            </div>
        </div>
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