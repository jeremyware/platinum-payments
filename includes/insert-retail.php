<?php
$dbaUserName = $_POST['username'];
$companyCity = $_POST['company-city'];
$companyState = $_POST['company-state'];
$companyZip = $_POST['company-zip'];
$companyStreet = $_POST['company-street-address'];
$companyStreetLine2 = $_POST['company-street-address-line-2'];
$companyPhoneNumber = $_POST['company-phone-number'];
$companyWebsiteUrl = $_POST['company-website-url'];
$companyFirstName = $_POST['contact-first-name'];
$companyLastName = $_POST['contact-last-name'];
$businessCoporationRadio = $_POST['business-corporation-radio'];
$businessLlcRadio = $_POST['business-llc-radio"'];
$businessProprietorRadio = $_POST['business-proprietor-radio'];
$businessOtherRadio = $_POST['business-other-radio'];
$federalTaxId = $_POST['federal-tax-id'];
$businessDateFormed = $_POST['date-business-formed'];
$businessStateCreated = $_POST['business-state-created'];
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
$secondaryOwnerAddress = $_POST['secondary-owner-address'];
$secondaryOwnerAddressLine2 = $_POST['secondary-owner-address-line-2'];
$secondaryOwnerCity = $_POST['secondary-owner-city'];
$secondaryOwnerState = $_POST['secondary-owner-state'];
$secondaryOwnerZip = $_POST['secondary-owner-zip'];
$secondaryOwnerDateOfBirth = $_POST['secondary-owner-drivers-license'];
$describeProductInfo = $_POST['describe-product-info'];
$productAnnualVolume = $_POST['product-annual-volume'];
$productAverageTicket = $_POST['product-average-ticket'];
$productHighTicket = $_POST['product-high-ticket'];
$productInfoMailTelephone = $_POST['product-mail-telephone'];
$productInfoInternetEcommerce = $_POST['product-internet-ecommerce'];

if (!empty($dbaUserName)) {
 $dbServername = "54.198.136.152";
 $dbUsername = "jeremy";
 $dbPassword = "Epype2020!";
 $dbName = "jeremy_epype";

 $conn = new mysqli($dbServername, $dbUsername, $dbPassword, $dbName);
 if (mysqli_connect_error()) {
  die('Connect Error(' . mysqli_connect_errno() . ')' . mysqli_connect_error());
 } else {

  $SELECT = "SELECT dbaUserName From PlatinumPaymentRetailInfo Where dbaUserName = ? Limit 1";
  $INSERT = "INSERT Into PlatinumPaymentRetailInfo (
dbaUserName,
companyCity,
companyState, 
companyZip,
companyStreet,
companyStreetLine2,
companyPhoneNumber,
companyWebsiteUrl,
companyFirstName,
companyLastName,
federalTaxId,
businessDateFormed,
businessStateCreated,
ownerFirstName,
ownerLastName,
ownerTitle,
ownerAge,
ownerSocial,
ownerDateOfBirth,
ownerCompanyAddress,
ownerCompanyAddressLine2,
ownerCompanyCity,
ownerCompanyState,
ownerCompanyZip,
ownerCompanyDriversLicense,
secondaryOwnersFirstName,
secondaryOwnersLastName,
secondaryOwnerTitle,
secondaryOwnerAge,
secondaryOwnerSocial,
secondaryOwnerAddress,
secondaryOwnerAddressLine2,
secondaryOwnerCity,
secondaryOwnerState,
secondaryOwnerZip,
secondaryOwnerDateOfBirth,
describeProductInfo,
productAnnualVolume,
productAverageTicket,
productHighTicket,
productInfoMailTelephone,
productInfoInternetEcommerce) values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

  $stmt = $conn->prepare($SELECT);
  $stmt->bind_param('s', $dbaUserName);
  $stmt->execute();
  $stmt->bind_result($dbaUserName);
  $stmt->store_result();
  $stmt->store_result();
  $stmt->fetch();
  $rnum = $stmt->num_rows;
  if ($rnum == 0) {
   $stmt->close();
   $stmt = $conn->prepare($INSERT);
   echo "Error:\n";
   print_r($conn->error_list);
   $stmt->bind_param(
    "ssssssssssssssssssssssssssssssiiiiiiiiiiii",
    $dbaUserName,
    $companyCity,
    $companyState,
    $companyZip,
    $companyStreet,
    $companyStreetLine2,
    $companyPhoneNumber,
    $companyWebsiteUrl,
    $companyFirstName,
    $companyLastName,
    $federalTaxId,
    $businessDateFormed,
    $businessStateCreated,
    $ownerFirstName,
    $ownerLastName,
    $ownerTitle,
    $ownerAge,
    $ownerSocial,
    $ownerDateOfBirth,
    $ownerCompanyAddress,
    $ownerCompanyAddressLine2,
    $ownerCompanyCity,
    $ownerCompanyState,
    $ownerCompanyZip,
    $ownerCompanyDriversLicense,
    $secondaryOwnersFirstName,
    $secondaryOwnersLastName,
    $secondaryOwnerTitle,
    $secondaryOwnerAge,
    $secondaryOwnerSocial,
    $secondaryOwnerAddress,
    $secondaryOwnerAddressLine2,
    $secondaryOwnerCity,
    $secondaryOwnerState,
    $secondaryOwnerZip,
    $secondaryOwnerDateOfBirth,
    $describeProductInfo,
    $productAnnualVolume,
    $productAverageTicket,
    $productHighTicket,
    $productInfoMailTelephone,
    $productInfoInternetEcommerce,
   );
   $stmt->execute();
   echo "Error:\n";
   print_r($stmt->error_list);
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
