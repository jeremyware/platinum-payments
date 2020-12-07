<?php

$describeProductInfo = $_POST['describe-product-info'];
$productAnnualVolume = $_POST['product-annual-volume'];
$productAverageTicket = $_POST['product-average-ticket'];
$productHighTicket = $_POST['product-high-ticket'];
$productInfoMailTelephone = $_POST[''];
$productInfoInternetEcommerce = $_POST[''];
$transactionType = $_POST['transaction-selector'];

require_once "dbh.inc.php";
require_once 'functions.inc.php';

if (!empty($productAnnualVolume) || !empty($productAverageTicket) || !empty($productHighTicket)) {

 $SELECT = "SELECT dbausername From PlatinumPaymentRetailInfo Where dbausername = ? Limit 1";
 $INSERT = "INSERT Into PlatinumPaymentRetailInfo (describeProductInfo, productAnnualVolume, productAverageTicket, productHighTicket, productInfoMailTelephone, productInfoInternetEcommerce, transactionType
) values(?, ?, ?, ?, ?, ?, ?)";

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
  $stmt->bind_param("siiisss", $describeProductInfo, $productAnnualVolume, $productAverageTicket, $productHighTicket, $productInfoMailTelephone, $productInfoInternetEcommerce, $transactionType);
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
