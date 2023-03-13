<?php
	
	$root=__DIR__ . DIRECTORY_SEPARATOR;

	define('APP_PATH',$root.'app'.DIRECTORY_SEPARATOR);
	define('VIEWS_PATH',$root.'views'.DIRECTORY_SEPARATOR);
	define('FILES_PATH',$root.'transaction_file'.DIRECTORY_SEPARATOR);

	require APP_PATH.'app.php';
	$files=getTransactiomFile(FILES_PATH);
	$transactios=[];
	$files=[];
	foreach($files as $file)
	{
	    $transactios = array_merge($transactios , getTransactios($file));
	}
   $total = CalculateTotal($transactios);

   require VIEWS_PATH.'trasnsactios.php';
?>