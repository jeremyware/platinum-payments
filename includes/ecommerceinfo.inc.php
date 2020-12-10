<?php
$dbServername = $_POST['54.198.136.152'];
$dbaUserName = $_POST['dba-username'];
$companyStreet = $_POST['company-street-address'];
$companyStreetLine2 = $_POST['company-street-address-line-2'];
$companyCity = $_POST['company-city'];
$companyState = $_POST['company-state'];
$companyZip = $_POST['company-zip'];

// connection to localhost
// if (!empty($dbaUserName) || !empty($companyStreet) || !empty($companyStreetLine2) || !empty($companyCity) || !empty($companyState) || !empty($companyZip)) {
//  $dbServername = "localhost";
//  $dbUsername = "root";
//  $dbPassword = "";
//  $dbName = "register";

// connection to remote server
if (!empty($dbaUserName) || !empty($companyStreet) || !empty($companyStreetLine2) || !empty($companyCity) || !empty($companyState) || !empty($companyZip)) {
 $dbServername = "54.198.136.152";
 $dbUsername = "jeremy";
 $dbPassword = "Epype2020!";
 $dbName = "jeremy_epype";

 $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
 if (mysqli_connect_error()) {
  die('Connect Error(' . mysqli_connect_errno() . ')' . mysqli_connect_error());
 } else {
  // $SELECT = "SELECT * From platinum_payments Where dbaUserName = ? Limit 1";
  // $INSERT = "INSERT Into platinum_payments (dbaUserName, companyStreet, companyStreetLine2, companyState, companyCity, companyZip) values(?, ?, ?, ?, ?, ?)";

  $SELECT = "SELECT dbaUserName From 	merchantinfo Where dbaUserName = ? Limit 1";
  $INSERT = "INSERT Into 	merchantinfo (dbaUserName, companyStreet, companyStreetLine2, companyState, companyCity, companyZip) values(?, ?, ?, ?, ?, ?)";

  $stmt = $conn->prepare($SELECT);
  $stmt->bind_param("s", $p_dbaUserName);
  $stmt->execute();
  $stmt->bind_result($p_dbaUserName);
  $stmt->store_result();
  $stmt->store_result();
  $stmt->fetch();
  $rnum = $stmt->num_rows;
  if ($rnum == 0) {
   $stmt->close();
   $stmt = $conn->prepare($INSERT);
   $stmt->bind_param("ssssii", $dbaUserName, $companyStreet, $companyStreetLine2, $companyState, $companyCity, $companyZip);
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
