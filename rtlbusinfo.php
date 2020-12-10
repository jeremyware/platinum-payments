<?php
session_start();
if (isset($_POST['next'])) {
 foreach ($_POST as $key => $value) {
  $_SESSION['info'][$key] = $value;
 }
 $keys = array_keys($_SESSION['info']);
 if (in_array('next', $keys)) {
  unset($_SESSION['info']['next']);
 }
 header("Location: businessprofile.php");
 // echo "<pre>";
 // print_r($_SESSION['info']);
 // echo "</pre>";
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


  <section class="business-information-form">
   <div class="business-information-form-form">
    <form action="" method="POST">
     <h2>Business Information</h2>
     <label for="business-name">Business Name:
     </label>
     <input type="text" name="bid" placeholder="Business Name">
     <input type="text" id="input-street" name="company-street-address" placeholder="street address" required />
     <input type="text" id="input-line-2" name="company-street-address-line-2" placeholder="street address line 2" required />
     <input type="text" id="input-city" name="company-city" placeholder="City" required />
     <select class="state-control" id="state" name="company-state">
      <option value="">Please Select</option>
      <option value="AK">Alaska</option>
      <option value="AL">Alabama</option>
      <option value="AR">Arkansas</option>
      <option value="AZ">Arizona</option>
      <option value="CA">California</option>
      <option value="CO">Colorado</option>
      <option value="CT">Connecticut</option>
      <option value="DC">District of Columbia</option>
      <option value="DE">Delaware</option>
      <option value="FL">Florida</option>
      <option value="GA">Georgia</option>
      <option value="HI">Hawaii</option>
      <option value="IA">Iowa</option>
      <option value="ID">Idaho</option>
      <option value="IL">Illinois</option>
      <option value="IN">Indiana</option>
      <option value="KS">Kansas</option>
      <option value="KY">Kentucky</option>
      <option value="LA">Louisiana</option>
      <option value="MA">Massachusetts</option>
      <option value="MD">Maryland</option>
      <option value="ME">Maine</option>
      <option value="MI">Michigan</option>
      <option value="MN">Minnesota</option>
      <option value="MO">Missouri</option>
      <option value="MS">Mississippi</option>
      <option value="MT">Montana</option>
      <option value="NC">North Carolina</option>
      <option value="ND">North Dakota</option>
      <option value="NE">Nebraska</option>
      <option value="NH">New Hampshire</option>
      <option value="NJ">New Jersey</option>
      <option value="NM">New Mexico</option>
      <option value="NV">Nevada</option>
      <option value="NY">New York</option>
      <option value="OH">Ohio</option>
      <option value="OK">Oklahoma</option>
      <option value="OR">Oregon</option>
      <option value="PA">Pennsylvania</option>
      <option value="PR">Puerto Rico</option>
      <option value="RI">Rhode Island</option>
      <option value="SC">South Carolina</option>
      <option value="SD">South Dakota</option>
      <option value="TN">Tennessee</option>
      <option value="TX">Texas</option>
      <option value="UT">Utah</option>
      <option value="VA">Virginia</option>
      <option value="VT">Vermont</option>
      <option value="WA">Washington</option>
      <option value="WI">Wisconsin</option>
      <option value="WV">West Virginia</option>
      <option value="WY">Wyoming</option>
     </select>
     <input type="text" id="input-zip" name="company-zip" placeholder="Zip Code" />
     <input type="text" id="input-number" name="company-phone-number" placeholder="Phone Number" />
     <input type="text" id="input-site" name="company-website-url" placeholder="www.example.com" />
     <input type="text" id="input-first" name="contact-first-name" placeholder="First Name" />
     <input type="text" id="input-last" name="contact-last-name" placeholder="Last Name" />
     <input type="file" name="fileToUpload" id="fileToUpload">
     <div class="btn">
      <input type="submit" name="next" value="Next" />

     </div>
    </form>
   </div>
  </section>

  <?php

  ?>

  <?php
  include_once 'footer.php';
  ?>