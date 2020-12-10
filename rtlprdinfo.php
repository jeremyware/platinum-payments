<?php
session_start();
if (isset($_POST['submit'])) {
  foreach ($_POST as $key => $value) {
    $_SESSION['info'][$key] = $value;
  }
  $keys = array_keys($_SESSION['info']);
  if (in_array('submit', $keys)) {
    unset($_SESSION['info']['submit']);
  }


  header("Location: index.php");
}
include_once 'includes/functions.inc.php';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Questionnaire Forms</title>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/style.css">
</head>

<body>

  <nav>
    <div class="wrapper">
      <a href="index.php"><img src="img/horizontallogo.png" alt="Blogs logo"></a>
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="discover.php">About Us</a></li>
        <?php
        if (isset($_SESSION["useruid"])) {
          echo "<li><a href='logout.php'>Logout</a></li>";
        } else {
          echo "<li><a href='signup.php'>Sign up</a></li>";
          echo "<li><a href='login.php'>Log in</a></li>";
        }

        ?>
      </ul>
    </div>
  </nav>
  <?php
  include_once 'formnavigation.php';

  ?>
  <div class="wrapper">

    <section class="product-information-form">
      <h2>Product Information</h2>
      <div class="product-information-form-form">
        <form action="" method="post">
          <textarea name="describe-product-info" cols="29" rows="10"></textarea>
          <input type="text" id="projectedVolume" placeholder="PAV" name="product-annual-volume">
          <input type="text" id="averageTicket" name="product-average-ticket">
          <input type="text" id="highTicket" name="product-high-ticket">

          <fieldset class="transaction-input-radio" name="transaction-input" id="transactionType">
            <label class="product-radio-container">Card Swip
              <input type="radio" checked="checked" name="radio">
              <span class="checkmark"></span>
            </label>
            <label class="product-radio-container"> Mail order/Telephone Order
              <input type="radio" name="radio">
              <span class="checkmark"></span>
            </label>
            <label class="product-radio-container">Internet/Ecommerce
              <input type="radio" name="radio">
              <span class="checkmark"></span>
            </label>
            <input type="submit" name="submit" value="Submit" />


        </form>
      </div>
    </section>



    <?php
    include_once 'footer.php';
    ?>