<?php
	$table_exists = mysqli_query(
		$_SG['link'],
		"SELECT * 
		FROM information_schema.tables
		WHERE table_schema = '".$_SG['php_modulos']."' 
		    AND table_name = '".$_SG['tabela']."'
		LIMIT 1;"
	);
	print_r($table_exists);
?>