<?php
$ownerFirstName = $_POST['owner-information-first-name'];
$ownerLastName = $_POST['owner-information-last-name'];
$ownerTitle = $_POST['owner-title'];
$ownerAge = $_POST['owner-age'];
$ownerSocial = $_POST['owner-social'];
$ownerDateOfBirth = $_POST['owner-date-of-birth'];
$ownerCompanyAddress = $_POST['owner-company-address'];
$ownerCompanyAddressLine2 = $_POST['owner-company-address-line-2'];
$ownerCompanyCity = $_POST['owner-company-city'];
$ownerCompanyState = $_POST['owner-company-state'];
$ownerCompanyZip = $_POST['owner-company-zip'];
$ownerCompanyDriversLicense = $_POST['owner-company-drivers-license'];
$secondaryOwnersFirstName = $_POST['secondary-owner-first-name'];
$secondaryOwnersLastName = $_POST['secondary-owner-last-name'];
$secondaryOwnerTitle = $_POST['secondary-owner-title'];
$secondaryOwnerAge = $_POST['secondary-owner-age'];
$secondaryOwnerSocial = $_POST['secondary-owner-social'];
$secondaryOwnerDateOfBirth = $_POST['secondary-owner-date-of-birth'];
$secondaryOwnerAddress = $_POST['secondary-owner-address'];
$secondaryOwnerAddressLine2 = $_POST['secondary-owner-address-line-2'];
$secondaryOwnerCity = $_POST['secondary-owner-city'];
$secondaryOwnerState = $_POST['secondary-owner-state'];
$secondaryOwnerZip = $_POST['secondary-owner-zip'];
$secondaryOwnerDateOfBirth = $_POST['secondary-owner-drivers-license'];

require_once "dbh.inc.php";
require_once 'functions.inc.php';

if (!empty($federalTaxId) || !empty($ownerSocial) || !empty($ownerTitle)) {

 $SELECT = "SELECT dbausername From PlatinumPaymentRetailInfo";
 $INSERT = "INSERT Into PlatinumPaymentRetailInfo (ownerFirstName, ownerLastName, ownerTitle, ownerAge, ownerSocial, ownerDateOfBirth, ownerCompanyAddress, ownerCompanyAddressLine2, ownerCompanyCity, ownerCompanyState, ownerCompanyZip, ownerCompanyDriversLicense, secondaryOwnersFirstName, secondaryOwnersLastName, secondaryOwnerTitle, secondaryOwnerAge, secondaryOwnerSocial, secondaryOwnerAddress, secondaryOwnerAddressLine2, secondaryOwnerCity, secondaryOwnerState, secondaryOwnerZip, secondaryOwnerDateOfBirth) values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

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
  $stmt->bind_param("sssssssssssssssssssssiii", $ownerFirstName, $ownerLastName, $ownerTitle, $ownerAge, $ownerSocial, $ownerDateOfBirth, $ownerCompanyAddress, $ownerCompanyAddressLine2, $ownerCompanyCity, $ownerCompanyState, $ownerCompanyZip, $ownerCompanyDriversLicense, $secondaryOwnersFirstName, $secondaryOwnersLastName, $secondaryOwnerTitle, $secondaryOwnerAge, $secondaryOwnerSocial, $secondaryOwnerAddress, $secondaryOwnerAddressLine2, $secondaryOwnerCity, $secondaryOwnerState, $secondaryOwnerZip, $secondaryOwnerDateOfBirth,);
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
