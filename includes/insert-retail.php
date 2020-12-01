<?php
$dbServername = $_POST['54.198.136.152'];
$dbaUserName = $_POST['dba-username'];
$companyStreet = $_POST['company-street-address'];
$companyStreetLine2 = $_POST['company-street-address-line-2'];
$companyCity = $_POST['company-city'];
$companyState = $_POST['company-state'];
$companyZip = $_POST['company-zip'];
$companyPhoneNumber = $_POST['company-phone-number'];
$companywebsiteUrl = $_POST['company-website-url'];
$companyFirstName = $_POST['contact-first-name'];
$companyLastName = $_POST['contact-last-name'];
$businessCoporationRadio = $_POST['business-corporation-radio"'];
$businessLlcRadio = $_POST['business-llc-radio"'];
$businessProprietorRadio = $_POST['business-proprietor-radio"'];
$businessOtherRadio = $_POST['business-other-radio"'];
$federalTaxId = $_POST['federal-tax-id'];
$businessDateFormed = $_POST['date-business-formed'];
$businessStateCreated = $_POST['business-state-created'];
$ownerFirstName = $_POST['owner-information-first-name'];
$ownerFirstName = $_POST['owner-information-last-name'];
$ownerTitle = $_POST['owner-title'];
$ownerAge = $_POST['owner-age'];
$ownerSocial = $_POST['owner-social'];
$ownerDateOfBirth = $_POST['owenr-date-of-birth'];
$ownerCompanyAddress = $_POST['owner-company-address'];
$ownerCompanyAddressLine2 = $_POST['owner-company-address-line-2'];
$ownerCompanyCity = $_POST['owner-company-city'];
$ownerCompanyState = $_POST['owner-company-state'];
$ownerCompanyZipcode = $_POST['owner-company-zip'];
$ownerCompanyAddress = $_POST['owner-company-drivers-license'];






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

  $SELECT = "SELECT dbaUserName From platinum_payments Where dbaUserName = ? Limit 1";
  $INSERT = "INSERT Into platinum_payments (dbaUserName, companyStreet, companyStreetLine2, companyState, companyCity, companyZip) values(?, ?, ?, ?, ?, ?)";

  $stmt = $conn->prepare($SELECT);
  $stmt->bind_param("s", $dbaUserName);
  $stmt->execute();
  $stmt->bind_result($dbaUserName);
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
