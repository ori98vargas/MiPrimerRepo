<?php
	include_once "./vendor/autoload.php";
	
	include('./querys/conexion.php');
	$result = $conexion->query( "SELECT * FROM pasante2" );

	use Dompdf\Dompdf;
		$dompdf = new Dompdf();
		ob_start();
		include "./vistas_pdfs/pdf.php";
		$html = ob_get_clean();
		$dompdf->loadHtml($html);
		$dompdf->render();
		header("Content-type: application/pdf");
		header("Content-Disposition: inline; filename=documento.pdf");
		echo $dompdf->output();


?>
