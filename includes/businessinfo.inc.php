<?php

$dbausername = $_POST['username'];
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
require_once 'functions.inc.php';

if (!empty($dbauseruame) || !empty($contactLastName) || !empty($contactFirstName)) {

 $SELECT = "SELECT dbausername From PlatinumPaymentRetailInfo Where dbausername = ? Limit 1";
 $INSERT = "INSERT Into PlatinumPaymentRetailInfo (dbausername, companycity, companystate, companyzip, companystreet, companystreetline2, companyphonenumber, companywebsiteurl, contactFirstname, contactlastname) values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

 $stmt = $conn->prepare($SELECT);
 $stmt->bind_param("s", $p_dbauserName);
 $stmt->execute();
 $stmt->bind_result($p_dbauserName);
 $stmt->store_result();
 $stmt->store_result();
 $stmt->fetch();
 $rnum = $stmt->num_rows;
 if ($rnum == 0) {
  $stmt->close();
  $stmt = $conn->prepare($INSERT);
  $stmt->bind_param("ssssssssii", $dbausername, $companyCity, $companyState, $companyZip, $companyStreet, $companyStreetLine2, $companyPhoneNumber, $companyWebsiteUrl, $contactFirstName, $contactLastName);
  $stmt->execute();
  echo "New record inserted sucessfully";
 } else {
  echo "Someone already registered using this username";
 }
 $stmt->close();
 $conn->close();
} else {
 echo "All fields are required";
 die();
}
