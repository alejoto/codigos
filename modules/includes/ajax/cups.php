<?php

include '../../db/connect.php';
if (isset($_POST['cups'])) {$cups=$_POST['cups']; }
include '../cups/algoritmo.php';//accents, unneeded spaces and wrong word corrections

$cups='%'.$cups.'%';
if (isset($cups2)) {$cups2='%'.$cups2.'%';}

/*First query for sending email if data do not match with DB table*/
$result = mysqli_query($con,"SELECT * FROM cups WHERE CUPS LIKE '$cups' ");
$verify=mysqli_fetch_array($result);
//echo $verify[0];
if (empty($verify))
{
	echo "BÚSQUEDA NO ARROJÓ DATOS";
    mail ("cups@healmydisease.com",$cups,"La palabra o frase no se encontro en la busqueda cups ","joaleto@yahoo.com");
}



if ($one_c==1) {
    $result = mysqli_query($con,"SELECT * FROM cups WHERE CUPS LIKE '$cups'  ORDER BY CUPS ASC ");
    ?>
    <div class="p text-info">
        <?php 
        if (isset($adv)) {
            echo $adv;
        }
         
        ?>
    </div>
    <ul class="unstyled">
    <?php
    
    while($row = mysqli_fetch_array($result))
    { echo $row['CUPS']."<br>"; }
    ?> 
	</ul>
    <?php
    $count=mysqli_query($con,"SELECT COUNT('CUPS') AS numberofmatches FROM cups WHERE CUPS LIKE '$cups'");
    $counted=mysqli_fetch_array($count);
    echo "Se encontraron <b>".$counted[0]."</b> registros.";
}


//two criteria search
    else if ($one_c==2) {
    $result2 = mysqli_query($con,"SELECT * FROM cups WHERE CUPS LIKE '$cups' OR CUPS LIKE '$cups2'
    ORDER BY CUPS ASC");
    ?>
    <div class="p text-info">
        <?php 
        if (isset($adv)) {
            echo $adv;
        }
         
        ?>
    </div>
    <ul class="unstyled">
    <?php

    
    while($row = mysqli_fetch_array($result2)) {
    echo $row['CUPS'].'<br>';$i=i+1;}
     

    $count=mysqli_query($con,"SELECT COUNT('CUPS') AS numberofmatches FROM cups WHERE CUPS LIKE '$cups' 
    OR CUPS LIKE '$cups2'");
    $counted=mysqli_fetch_array($count);
    echo "Se encontraron <b>".$counted[0]."</b> registros.";
    }
    //three criteria search
    else if ($one_c==3) {
    $result2 = mysqli_query($con,"SELECT * FROM cups WHERE CUPS LIKE '$cups' OR CUPS LIKE '$cups2' 
    OR CUPS LIKE '$cups3'
    ORDER BY CUPS ASC");
    ?>
    <div class="p text-info">
        <?php 
        if (isset($adv)) {
            echo $adv;
        }
         
        ?>
    </div>
    <ul class="unstyled">
    <?php
    
    while($row = mysqli_fetch_array($result2)) {
    echo $row['CUPS'].'<br>';}
     
    $count=mysqli_query($con,"SELECT COUNT('CUPS') AS numberofmatches FROM cups WHERE CUPS LIKE '$cups' 
    OR CUPS LIKE '$cups2' OR CUPS LIKE '$cups3'");
    $counted=mysqli_fetch_array($count);
    echo "Se encontraron <b>".$counted[0]."</b> registros.";
    }
    echo "<br><br>";
 
 ?>
