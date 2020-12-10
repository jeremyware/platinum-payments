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
 header("Location: rtlowninfo.php");
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
  <section class="business-profile-form">
   <h2>Business Profile</h2>
   <div class="business-profile-form-form">
    <form action="" method="POST">
     <p>Business Structure:</p>
     <fieldset class="structure-input-radio">
      <label class="radio-container">Corporation
       <input type="radio" checked="checked" name="radio">
       <span class="checkmark"></span>
      </label>
      <label class="radio-container"> LLC
       <input type="radio" name="radio">
       <span class="checkmark"></span>
      </label>
      <label class="radio-container">Sole Propietor
       <input type="radio" name="radio">
       <span class="checkmark"></span>
      </label>
      <label for="other0" class="radio-container">
       <input type="radio" name="radio" id="other0">
       <textarea class=" selfmessage" for="other0" name="self_other" type="text" placeholder="Other"></textarea>
       <span class="checkmark"></span>
      </label>

     </fieldset>
     <label>Federal Tax ID:</label>
     <input type="text" id="input-tax" name="federal-tax-id" placeholder="fed tax id" />
     <label>Date Business Created</label>
     <input type="date" id="businessFormed" name="date-business-formed">
     <label>State Business Create</label><br>
     <select class="state-control" id="profile-state" name="state-business-created">
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
     <div class="btn">
      <a href="/rtlbusinfo.php">Previous</a>
      <input type="submit" name="next" value="Next" />
     </div>
    </form>
   </div>
  </section>

  <?php
  include_once 'footer.php';
  ?>