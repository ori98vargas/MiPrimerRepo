<?php
?>
<?php
    $host = 'localhost';
    $port = '3306';
    $dbname = 'bd_backup';
    $username = 'root';

	try {
		$conexion = new mysqli($host, $username, $password, $dbname, $port);
			$conexion->set_charset("utf8");

	} catch (PDOException $pe) {
	    
	    die("Could not connect to the database $dbname :" . $pe->getMessage());
	    
	}
?>