<?php
$dbServername = $_POST['dba-username'];
$companystreet = $_POST['company-street-address'];
$companystreetline2 = $_POST['company-street-address-line-2'];
$companyzip = $_POST['company-zip'];

// connection to localhost
if (!empty($dbausername) || !empty($companystreet) || !empty($companystreetline2) || !empty($companyzip)) {
 $dbServername = "localhost";
 $dbUsername = "root";
 $dbPassword = "";
 $dbName = "register";

 // connection to remote server
 // if (!empty($dbauser) || !empty($companystreet) || !empty($companystreetline2) || !empty($companyzip)) {
 //  $dbServername = "https://db-dev.epype.net/";
 //  $dbUsername = "jeremy";
 //  $dbPassword = "Epype2020!";
 //  $dbName = "jeremy_epype";

 $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
 if (mysqli_connect_error()) {
  die('Connect Error(' . mysqli_connect_errno() . ')' . mysqli_connect_error());
 } else {
  $SELECT = "SELECT dbausername From platinum_payments Where dbausername = ? Limit 1";
  $INSERT = "INSERT Into platinum_payments (dbausername, companystreet, companystreetline2, companyzip) values(?, ?, ?, ?)";

  // $SELECT = "SELECT dbauser From platinum_payments Where dbausername = ? Limit 1";
  // $INSERT = "INSERT Into platinum_payments (dbausername, companystreet, , companystreetline2, companyzip) values(?, ?, ?, ?, ?, ?)";

  $stmt = $conn->prepare($SELECT);
  $stmt->bind_param("s", $dbausername);
  $stmt->execute();
  $stmt->bind_result($dbausername);
  $stmt->store_result();
  $stmt->store_result();
  $stmt->fetch();
  $rnum = $stmt->num_rows;
  if ($rnum == 0) {
   $stmt->close();
   $stmt = $conn->prepare($INSERT);
   $stmt->bind_param("ssssii", $dbausername, $companystreet, $companystreetline2, $companyzip);
   $stmt->execute();
   echo "New record inserted sucessfully";
  } else {
   echo "Someone already registered using this username";
  }
  $stmt->close();
  $conn->close();
 }
} else {
 echo "All fields are required";
 die();
}
