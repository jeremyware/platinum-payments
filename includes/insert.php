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
} else {
 echo "All fields are required";
 die();
}
