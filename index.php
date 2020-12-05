<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Platinum Payments</title>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/style.css">
</head>

<body>

  <nav>
    <div class="wrapper">
      <!-- <a href="index.php"><img src="img/logo-white.png" alt="Blogs logo"></a> -->
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="discover.php">About Us</a></li>
        <li><a href="retailform">Forms</a></li>
        <?php
        if (isset($_SESSION["useruid"])) {
          echo "<li><a href='profile.php'>Profile Page</a></li>";
          echo "<li><a href='logout.php'>Logout</a></li>";
        } else {
          echo "<li><a href='signup.php'>Sign up</a></li>";
          echo "<li><a href='login.php'>Log in</a></li>";
        }
        ?>
      </ul>
    </div>
  </nav>

  <div class="wrapper">

    <?php
    include_once 'footer.php';
    ?>
    <section class="signup-form">
      <h2>Log In</h2>
      <div class="signup-form-form">
        <form action="includes/login.inc.php" method="post">
          <input type="text" name="uid" placeholder="Username/Email...">
          <input type="password" name="pwd" placeholder="Password...">
          <button type="submit" name="submit">Sign up</button>
        </form>
      </div>
      <?php
      // Error messages
      if (isset($_GET["error"])) {
        if ($_GET["error"] == "emptyinput") {
          echo "<p>Fill in all fields!</p>";
        } else if ($_GET["error"] == "wronglogin") {
          echo "<p>Wrong login!</p>";
        }
      }
      ?>
    </section>

  </div>
</body>

</html>

<script src="js/script.js"></script>