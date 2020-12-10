<?php

$structureType = $_POST['structure-type'];
$federalTaxId = $_POST['federal-tax-id'];
$businessDateFormed = $_POST['date-business-formed'];
$businessStateCreated = $_POST['state-business-created'];

require_once "dbh.inc.php";
require_once 'formfunction.inc.php';

if (!empty($federalTaxId) || !empty($businessDateFormed) || !empty($businessStateCreated)) {

 $SELECT = "SELECT businessname From PlatinumPaymentRetailInfo Where businessname = ? Limit 1";
 $INSERT = "INSERT Into PlatinumPaymentRetailInfo (structureType, federalTaxId, businessDateFormed, businessStateCreated) values(?, ?, ?, ?)";

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
  $stmt->bind_param("sssi", $structureType, $federalTaxId, $businessDateFormed, $businessStateCreated);
  $stmt->execute();

  $stmt->close();
  $conn->close();
  header("location: ../rtlowninfo.php");
 } else {
  echo "All fields are required";
  die();
 }
}
