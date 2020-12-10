<?php
include_once 'header.php';

?>


<section class="index-intro">
  <h1>Welcoming Page!</h1>

  <?php
  echo "<pre>";
  print_r($_SESSION['info']);
  echo "</pre>";
  ?>
</section>

<?php
include_once 'footer.php';
?>