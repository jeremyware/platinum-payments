<?php
$dbauser = $_POST['dba-user'];
$companystreet = $_POST['company-street-address'];
$companystreetline2 = $_POST['company-street-address-line-2'];
$companyzip = $_POST['company-zip'];

if (!empty($dbauser) || !empty($companystreet) || !empty($companystreetline2) || !empty($companyzip)) {
 $host = "";
 $dbUsername = "root";
 $dbPassword = "";
 $dbName = "";

 $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
 if (mysqli_connect_error()) {
  die('Connect Error(' . mysqli_connect_errno() . ')' . mysqli_connect_error());
 } else {
  $SELECT = "SELECT email From register Where email = ? Limit 1";
  $INSERT = "INSERT Into register (dbauser, companystreet, companystreetline2, email, companyzip) values(?, ?, ?, ?, ?, ?)";

  $stmt = $conn->prepare($SELECT);
  $stmt->bind_param("s", $email);
  $stmt->execute();
  $stmt->bind_result($email);
  $stmt->store_result();
  $stmt->store_result();
  $stmt->fetch();
  $rnum = $stmt->num_rows;
  if ($rnum == 0) {
   $stmt->close();
   $stmt = $conn->prepare($INSERT);
   $stmt->bind_param("ssssii", $dbauser, $companystreet, $companystreetline2, $email, $companyzip);
   $stmt->execute();
   echo "New record inserted sucessfully";
  } else {
   echo "Someone already register using this username";
  }
  $stmt->close();
  $conn->close();
 }
} else {
 echo "All field are required";
 die();
}
