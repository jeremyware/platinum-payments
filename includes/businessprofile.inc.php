<?php

$structureType = $_POST['structure-type'];
$federalTaxId = $_POST['federal-tax-id'];
$businessDateFormed = $_POST['date-business-formed'];
$businessStateCreated = $_POST['state-business-created'];

require_once "dbh.inc.php";
require_once 'functions.inc.php';

if (!empty($federalTaxId) || !empty($businessDateFormed) || !empty($businessStateCreated)) {

 $SELECT = "SELECT dbausername From PlatinumPaymentRetailInfo Where dbausername = ? Limit 1";
 $INSERT = "INSERT Into PlatinumPaymentRetailInfo (structureType, federalTaxId, businessDateFormed, businessStateCreated,) values(?, ?, ?, ?)";

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
  $stmt->bind_param("ssss", $structureType, $federalTaxId, $businessDateFormed, $businessStateCreated,);
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
