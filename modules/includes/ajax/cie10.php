<?php

include '../../db/connect.php';
if (isset($_POST['diagnostico'])) {$diagnostico=$_POST['diagnostico']; }
include '../cie10/algoritmo.php';//accents, unneeded spaces and wrong word corrections

$diagnostico='%'.$diagnostico.'%';
if (isset($diagnostico2)) {$diagnostico2='%'.$diagnostico2.'%';}

/*First query for sending email if data do not match with DB table*/
$result = mysqli_query($con,"SELECT * FROM CIE10 WHERE code LIKE '$diagnostico' ");
$verify=mysqli_fetch_array($result);
//echo $verify[0];
if (empty($verify))
{
	echo "BÚSQUEDA NO ARROJÓ DATOS";
    mail ("cie10@healmydisease.com",$diagnostico,"La palabra o frase no se encontro en la busqueda CIE10 ","joaleto@yahoo.com");
}



if ($one_c==1) {
    $result = mysqli_query($con,"SELECT * FROM CIE10 WHERE code LIKE '$diagnostico'  ORDER BY code ASC ");
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
    { echo $row['code']."<br>"; }
    ?> 
	</ul>
    <?php
    $count=mysqli_query($con,"SELECT COUNT('code') AS numberofmatches FROM CIE10 WHERE code LIKE '$diagnostico'");
    $counted=mysqli_fetch_array($count);
    echo "Se encontraron <b>".$counted[0]."</b> registros.";
}


//two criteria search
    else if ($one_c==2) {
    $result2 = mysqli_query($con,"SELECT * FROM CIE10 WHERE code LIKE '$diagnostico' OR code LIKE '$diagnostico2'
    ORDER BY code ASC");?>
    <div class="p text-info">
        <?php 
        if (isset($adv)) {
            echo $adv;
        }
         
        ?>
    </div>

    <?php

    $i=0;
    while($row = mysqli_fetch_array($result2)) {
    echo $row['code'].'<br>';
    if (isset($i)) {
        $i=$i+1;
    }
    }
     

    $count=mysqli_query($con,"SELECT COUNT('code') AS numberofmatches FROM CIE10 WHERE code LIKE '$diagnostico' 
    OR code LIKE '$diagnostico2'");
    $counted=mysqli_fetch_array($count);
    echo "Se encontraron <b>".$counted[0]."</b> registros.";
    }
    //three criteria search
    else if ($one_c==3) {
    $result2 = mysqli_query($con,"SELECT * FROM CIE10 WHERE code LIKE '$diagnostico' OR code LIKE '$diagnostico2' 
    OR code LIKE '$diagnostico3'
    ORDER BY code ASC");?>
    <div class="p text-info">
        <?php 
        if (isset($adv)) {
            echo $adv;
        }
         
        ?>
    </div>

    <?php
    
    while($row = mysqli_fetch_array($result2)) {
    echo $row['code'].'<br>';}
     
    $count=mysqli_query($con,"SELECT COUNT('code') AS numberofmatches FROM CIE10 WHERE code LIKE '$diagnostico' 
    OR code LIKE '$diagnostico2' OR code LIKE '$diagnostico3'");
    $counted=mysqli_fetch_array($count);
    echo "Se encontraron <b>".$counted[0]."</b> registros.";
    }
    echo "<br><br>";
    


 ?>