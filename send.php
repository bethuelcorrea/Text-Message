<?php
$from = $_POST['from'];
$to = $_POST['to'];
$carrier = $_POST['carrier'];
$header =  "From: webmaster@lhm.com" . "\r\n";
$message = stripslashes($_POST['message']);

if ((empty($from)) || (empty($to)) || (empty($message))) {
header ("Location: sms_error.php");
}

else if ($carrier == "verizon") {
$formatted_number = $to."@vtext.com";
mail("$formatted_number", "LHM Poll: $from", "$message" , "$header"); 
// Currently, the subject is set to "LHM Poll". Feel free to change this.

header ("Location: sms_success.php");
}

else if ($carrier == "tmobile") {
$formatted_number = $to."@tomomail.net";
mail("$formatted_number", "LHM Poll: $from", "$message" , "$header");

header ("Location: sms_success.php");
}

else if ($carrier == "sprint") {
$formatted_number = $to."@messaging.sprintpcs.com";
mail("$formatted_number", "LHM Poll: $from", "$message" , "$header");

header ("Location: sms_success.php");
}

else if ($carrier == "att") {
$formatted_number = $to."@txt.att.net";
mail("$formatted_number", "LHM Poll: $from", "$message" , "$header");
header ("Location: sms_success.php");
}


else if ($carrier == "metropcs") {
    $formatted_number = $to."@mymetropcs.com";
    mail("$formatted_number", "LHM Poll: $from", "$message" , "$header");
    header ("Location: sms_success.php");
}

else if ($carrier == "virgin") {
$formatted_number = $to."@vmobl.com";
mail("$formatted_number", "LHM Poll: $from", "$message" , "$header");

header ("Location: sms_success.php");
}

//mail("$formatted_number", "SMS", "$message" , "headers");
?>
