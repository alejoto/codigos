<?php 
header('Cache-Control: no-cache, no-store, must-revalidate'); // HTTP 1.1.
header('Pragma: no-cache'); // HTTP 1.0.
header('Expires: 0'); // Proxies.
?>
<!doctype html>
<html lang="en">
<?php 
include 'modules/includes/header.php';
include 'modules/includes/imgpaths.php';
 ?>
<body>
  <!-- superior bar with navigation links -->
  <?php include 'modules/includes/navbar.php';?>

  <div id="wrap">
    <!-- main content -->
    <?php include 'modules/controller/selector.php';?>

    <!-- The next "push" id div section is important for footer location at the end of the page -->
    <div id="push"></div>
  </div>


<!-- Links to main -->
<div class="container">
  <hr style="width:68%; margin-left:16%">
  <div class="row-fluid span12">
    <div class="offset4">
      <!-- <a class="lead-medium span4" href="http://www.healmydisease.com/HMD/services.html">Con&oacute;cenos</a>
      <a class="lead-medium span4" href="http://www.healmydisease.com/HMD/contact.html">Contacto</a> -->
    </div>  
  </div>
</div>

<!-- footer -->
<!-- Footer Menu END -->

 <div class="container">
    <br>
    <hr>
    <div class="row-fluid">
     <div class="span6">
      <ul class="unstyled">
        <li><a href="#myModal" data-toggle="modal" data-target="#myModal" style="margin-left:400px">Informaci&oacute;n</a></li>
      </ul>
     </div>
     <div class="span4">
      <a href="https://twitter.com/HealMyDisease" target="_blank"><img id="hmd-twitter" src="assets/img/hmd-twitter1.png"></a>
      <a href="http://co.linkedin.com/pub/heal-my-disease/74/84/40a" target="_blank"><img id="hmd-linkedin" src="assets/img/hmd-linkedin1.png"></a>  
     </div>
     </div>
     <hr>
    </div>
    <!-- Footer Menu END -->

    <!-- Start Privacy Policy -->
    

<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
    <p id="myModalLabel"  class="lead" style="lead; margin-top: 30px" >
      <img src="assets/img/logo-navbar.png" style="weight: 56px; height: 29px; opacity: 0.7; margin-left: 15px; margin-right:110px;" align="left">
      Pol&iacute;tica de Confidencialidad
    </p>
  </div>
  <div class="modal-body">
    <p style="margin-left:10px;">
      La privacidad de nuestros usuarios es sumamente importante para nosotros. 
      <br/>Las siguientes son nuestras pol&iacute;ticas de privacidad:
    </p>
    <br>
    <ul style="text-align:left">
      <li style="margin-left:30px;">
        <p><strong>Nunca le preguntaremos informaci&oacute;n personal excepto de estricta necesidad y bajo su consentimiento.</strong></p>
      </li>
      <li style="margin-left:30px;">
        <p><strong>No compartimos su informaci&oacute;n personal con terceros excepto los casos que estipula la ley, el desarollo de 
          nuestros productos, o la protecci&oacute;n de nuestros derechos.</strong></p>
      </li>
      <br>
      <li style="margin-left:10px;">
        <p>Si es usuario de investigaciones cl&iacute;nicas activas a traves de HMD la informaci&oacute;n ser&aacute; administrada seg&uacute;n 
        los acuerdos de confidencialidad que se hayan pactado para tal fin</P>
      </li>
    </ul> 
    <br>
    <br>
    <center><p style="font-family: 'Oxygen', sans-serif;color:#B2B2B2;font-size:12px">HMD &copy;. 
      Es pol&iacute;tica de HMD respetar su privacidad respecto a cualquier informaci&oacute;n que podamos haber obtenido al operar 
      nuestros productos.</p></center>

    </div>
    <div class="modal-footer">
      <button class="btn" data-dismiss="modal" aria-hidden="true">Cerrar</button>
    </div>
  </div> 
    <!--End privacy Policy -->


   <!-- Footer Menu END -->


<script src="http://code.jquery.com/jquery.js"></script>
<script src="assets/js/bootstrap.js"></script>
<script src="assets/js/hmd.js"></script>

<script type="text/javascript">
  //temporary js scripts


</script>


</body>
</html>