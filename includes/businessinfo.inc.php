<?php

$businessName = $_POST['bid'];
$companyCity = $_POST['company-city'];
$companyState = $_POST['company-state'];
$companyZip = $_POST['company-zip'];
$companyStreet = $_POST['company-street-address'];
$companyStreetLine2 = $_POST['company-street-address-line-2'];
$companyPhoneNumber = $_POST['company-phone-number'];
$companyWebsiteUrl = $_POST['company-website-url'];
$contactFirstName = $_POST['contact-first-name'];
$contactLastName = $_POST['contact-last-name'];

require_once "dbh.inc.php";
require_once 'formfunction.inc.php';

if (!empty($businessName) || !empty($contactLastName) || !empty($contactFirstName)) {

 $SELECT = "SELECT businessName From PlatinumPaymentRetailInfo Where businessName = ? Limit 1";
 $INSERT = "INSERT Into PlatinumPaymentRetailInfo (businessName, companycity, companystate, companyzip, companystreet, companystreetline2, companyphonenumber, companywebsiteurl, contactFirstname, contactlastname) values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

 $stmt = $conn->prepare($SELECT);
 $stmt->bind_param("s", $businessId);
 $stmt->execute();
 $stmt->bind_result($businessId);
 $stmt->store_result();
 $stmt->store_result();
 $stmt->fetch();
 $rnum = $stmt->num_rows;
 if ($rnum == 0) {
  $stmt->close();
  $stmt = $conn->prepare($INSERT);
  $stmt->bind_param("ssssssssii", $businessName, $companyCity, $companyState, $companyZip, $companyStreet, $companyStreetLine2, $companyPhoneNumber, $companyWebsiteUrl, $contactFirstName, $contactLastName);
  $stmt->execute();

  $stmt->close();
  $conn->close();
  header("location: ../businessprofile.php");
 } else {
  echo "All fields are required";
  die();
 }
}
