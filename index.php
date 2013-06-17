<?php 

 

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

<!-- footer -->
 <?php include 'modules/includes/footer.php'; ?>

<script src="http://code.jquery.com/jquery.js"></script>
<script src="assets/js/bootstrap.js"></script>
<script src="assets/js/hmd.js"></script>

<script type="text/javascript">
  //temporary js scripts


</script>


</body>
</html>