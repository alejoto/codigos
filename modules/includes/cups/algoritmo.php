<?php 
//search optimizator1


/*
* Name: rep_accent
* Action: changes all words
* @author: Alejandro Toro
* 
*/
function rep_accent($accented)
{
	$accented_vowels=array(	 'á'=>'a','é'=>'e','í'=>'i','ó'=>'o','ú'=>'u'
							,'Á'=>'A','É'=>'E','Í'=>'I','Ó'=>'O','Ú'=>'U'
							,'ñ'=>'n','Ñ','N');
	foreach ($accented_vowels as $key => $value) {
		$accented=str_replace($key, $value, $accented);
	}
	return $accented;
}

$cups=trim($cups);
//if ($cups=="A09X") ($cups="A09");

$cups=rep_accent($cups);

$cups=str_replace("Ü","U",$cups);
$cups=str_replace("ü","U",$cups);
$cups=str_replace("ö","O",$cups);
$cups=str_replace("Ö","O",$cups);
$cups=str_replace(" EN "," ",$cups);
$cups=str_replace(" DE "," ",$cups);
$cups=strtoupper($cups);

$advice="La palabra o frase buscada no tiene coincidencia exacta en los c&oacutedigos CUPS. El buscador internamente ha hecho una 
conversi&oacuten a sin&oacutenimo equivalente.";

//onecriteriasearch
$one_c=1;
$resultado=$cups;

//writting correction
$correctodeletreo="Tal vez quizo decir ";
//if ($cups==[error deletreo]) {$cups=[correcto deletreo];$adv=$correctodeletreo." ".$cups;}


//ONLY ONE WORD CONVERSION
//if ($cups==[unexisten synonim]) {$cups=[existent word];$adv=$advice;}
if ($cups=="COLELAP") {$cups="COLECISTECTOMIA POR LAPAROSCOPIA";$adv=$advice;}
if ($cups=="MENISCOPATIA") {$cups="MENISCO";$adv=$advice;}
if ($cups=="BYPASS GASTRICO"||$cups=="PUENTE GASTRICO") {$cups="GASTROENTEROANASTOMOSIS";$adv=$advice;}
if ($cups=="MANGA GASTRICA"||$cups=="SLEEVE"||$cups=="SLEEVE GASTRICO") {$cups="GASTRECTOMIA PARCIAL";$adv=$advice;}

//TWO UNEXISTEN WORDS WITH ONE MEANINGFUL TEXT
//if ($cups==[unexisten synonim]||$cups==[unexisten synonim 2]) {$cups=[existent word];$adv=$advice;}


//TWO CRITERIA SEARCH with unrelated words
$unrelated="EL TERMINO BUSCADO HACE REFERENCIA A PALABRA QUE NO EXISTE INDIVIDUALMENTE EL EL CUPS.
  INTERNAMENTE SE HIZO UNA CONVERSION A DOS O MAS TERMINOS A QUE PUEDE ESTAR HACIENDO REFERENCIA SU BUSQUEDA";

//if ($cups=="COLECISTOPANCREATITIS") {$one_c=2;$cups="PANCREATITIS"; $cups2="%COLECISTITIS%";
//$adv=$unrelated;}


//SPECIAL UNIQUE CASES
//	if ($cups=="FRACTURA EXPUESTA"||$cups=="FRACTURA ABIERTA") 
//{$cups="z583";$adv="BUSCAR <b>POR SITIO ANATOMICO </b>EL CODIGO DE FRACTURA Y ADICIONAR CODIGO DESCRITO";}


//TWO CRITERIA SEARCH with related words
//if ($cups=="something	") {$one_c=2;$cups="change1"; $cups2="%change 2%";$adv=$advice;}


//THREE CRITERIA SEARCH
//if ($cups==" ") {$one_c=3;$cups="ONE"; $cups2="% TWO%"; $cups3="% THREE%"; $adv=$advice;}
$advice3="La palabra o frase buscada no tiene coincidencia exacta en los c&oacutedigos CUPS; Internamente se ha hecho una 
homologacion que puede incluir mas de un procedimiento para la condicion buscada";




//no in last version 
$nlv="CODIGO NO VALIDO: El codigo ingresado no se encuentra en la clasificaci&oacute;n CUPS";

//if ($cups==verified unexistent code) {$adv=$nlv;}




$extensivo="Para ampliar la busqueda se reemplazo la palabra buscada por palabra originaria.  Ejemplo: pulmonar -> pulmon";
//$replacedmetastasisword=substr_count($cups,"URETERAL");if ($replacedmetastasisword>=1) {$adv=$extensivo;}
//$metastasis_replacement=str_replace("URETERAL","URETER",$cups);$cups=$metastasis_replacement;



$histol="EL TERMINO BUSCADO HACE REFERENCIA A UN TIPO HISTOLOGICO DE CANCER, QUE NO HACE PARTE
DEL METODO DE CODIFICACION DIAGNOSTICA DE LA C.I.E. 10,  
DEBE ESPECIFICAR POR SITIO ANATOMICO";

//$replacedword=substr_count($cups,"NEUROECTODERMICO");
//if ($replacedword>=1) {$adv=$histol;}


//special case
if ($cups=="NEONATO") {$adv=$advice;}
$newborn_replacement=str_replace("NEONATO","RECIEN NACIDO",$cups);
$cups=$newborn_replacement;




//SPELLING CORRECTIONS
$spellcorrect="Tal vez quizo decir ";
$replacedword=substr_count($cups,"RUTURA");
if ($replacedword>=1) {$adv="Tal vez quizo decir 'ruptura'";}
$replacement=str_replace("RUTURA","RUPTURA",$cups);
$cups=$replacement;

$replacedword=substr_count($cups,"MALASIA");
if ($replacedword>=1) {$replacement=str_replace("MALASIA","MALACIA",$cups);
$adv=$spellcorrect.$replacement;
$cups=$replacement;}



$whitespacereplacement=str_replace(" ","% ",$cups);
$cups=$whitespacereplacement;

?>