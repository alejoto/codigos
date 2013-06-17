<?php
if (isset($_GET['cie10']))
{
	include 'modules/includes/cie10/buscador.php';
	$footnotes="El mejor buscador de c&oacute;digos cie10.  Env&iacute;e sus sugerencias a:
	<a href='mailto: support@healmydisease.com'>support@healmydisease.com</a> - ";
}
else if (isset($_GET['cups']))
{
	include 'modules/includes/cups/buscador.php';
	$footnotes="Buscador web de c&oacute;digos CUPS.  
	EnvEnv&iacute;ee sus sugerencias a:
	<a href='mailto: support@healmydisease.com'>support@healmydisease.com</a> - ";
}



?>