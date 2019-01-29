<?php

require_once('phpmailer/PHPMailerAutoload.php');

$apiKey = 'c965cde35128cf4ccda7fcd261abf69d-us1';   //  MailChimp API Key
$listId = 'd69738bf6a';                             //  MailChimp List ID

// This is an array or target emails
$toEmails   = array();
$toEmails[] = array(
    'email' => 'eladf@misterbit.co.il', // Your Email Address
    'name' => 'Elad' // Your Name
);
$toEmails[] = array(
    'email' => 'assaf@misterbit.co.il', // Your Email Address
    'name' => 'Assaf' // Your Name
);


// Add this only if you use reCaptcha with your Contact Forms
$recaptcha_secret = '6Ldm1yIUAAAAAAI1sPRmKtcocv9Fj2wN_C44Sgum'; // Your reCaptcha Secret



$mail = new PHPMailer();
$mail->CharSet = "UTF-8";


$isTrusted = $_SERVER["HTTP_REFERER"];


if( $_SERVER['REQUEST_METHOD'] !== 'POST' ) {
    echo '{ "alert": "error", "message": "An <strong>unexpected error</strong> occured. Please Try Again later." }';
    die();
}

if( !$_POST['email'] ) {
  echo '{ "alert": "error", "message": "Please <strong>Fill up</strong> all the Fields and Try Again." }';
    die();
}

// Uncomment the following Lines of Code if you want to Force reCaptcha Validation
//if( !isset( $_POST['g-recaptcha-response'] ) ) {
//    echo '{ "alert": "error", "message": "Captcha not Submitted! Please Try Again." }';
//    die();
//}



$name      = $_POST['name'];
$email     = $_POST['email'];
$phone     = $_POST['phone'];
// $botcheck  = $_POST['quick-contact-form-botcheck'];
$message   = $_POST['msg'];

$excelLine = "$name, $email, $phone <br><br>";
function writeToLog($isSuccess){
    global $_POST;
    global $_SERVER;
    $name      = $_POST['name'];
    $email     = $_POST['email'];
    $phone     = $_POST['phone'];
    $message   = $_POST['msg'];
    $url   =  $_SERVER['HTTP_REFERER'];
    date_default_timezone_set('Asia/Jerusalem');
    $date = date("Y/m/d");
    $hour = date('H:i');
    $line = "$date, $hour, $name, $phone, $email, 'message not inserted', $url, $isSuccess";
    $log = fopen("contacts-log.txt", "a");
    fwrite($log, "$line \n");
    fclose($log);
}
 

$hebrewSubect = "פנייתך אלינו לגבי קורס תכנות ב12 שבועות - קודינג אקדמי";
$subject ="=?UTF-8?B?".base64_encode($hebrewSubect)."?=";

if( isset( $_GET['list'] ) AND $_GET['list'] != '' ) {
    $listId = $_GET['list'];
}

if( $botcheck == '' ) {
    $mail->Subject = $subject;
    $mail->SetFrom($email, $name);
    $mail->AddReplyTo($email, $name);
    $name = isset($name) ? "Name: $name<br><br>" : '';
    $email = isset($email) ? "Email: $email<br><br>" : '';
    $phone = isset($phone) ? "Phone: $phone<br><br>" : '';
    $message = isset($message) ? "Message: $message<br><br>" : '';
    foreach ($toEmails as $toEmail) {
        $mail->AddAddress($toEmail['email'], $toEmail['name']);
    }

    $referrer = $_SERVER['HTTP_REFERER'] ? '<br><br><br>This Form was submitted from: ' . $_SERVER['HTTP_REFERER'] : '';
    $body = "$excelLine $name $email $phone $message $referrer";


// Runs only when reCaptcha is present in the Contact Form
    if( isset( $_POST['g-recaptcha-response'] ) ) {
        $recaptcha_response = $_POST['g-recaptcha-response'];
        $response = file_get_contents( "https://www.google.com/recaptcha/api/siteverify?secret=" . $recaptcha_secret . "&response=" . $recaptcha_response );
        $g_response = json_decode( $response );
       if ( $g_response->success !== true ) {
            echo '{ "alert": "error", "message": "Captcha not Validated! Please Try Again." }';
           die();
        }
    }

    $mail->MsgHTML($body);
    $isSent = $mail->Send();

    try {
        writeToLog($isSent);
    } catch(Exception $e) {
        // Should never happen, but if does happen, sliently ignore (Yaron)
        echo 'Caught exception: ',  $e->getMessage(), "\n";
    }


    if ($isSent) {
        $datacenter = explode('-', $apiKey);
        $submit_url = "https://" . $datacenter[1] . ".api.mailchimp.com/3.0/lists/" . $listId . "/members/";
        $data = array(
            'email_address' => $subscribe_email,
            'status' => 'subscribed'
        );
        // Yaron: dont know whats this code was supposed to do
        //if( !empty( $merge_vars ) ) { $data['merge_fields'] = $merge_vars; }


        $payload = json_encode($data);
        $auth = base64_encode('user:' . $apiKey);

        $header = array();
        $header[] = 'Content-type: application/json; charset=utf-8';
        $header[] = 'Authorization: Basic ' . $auth;

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $submit_url);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_TIMEOUT, 10);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);

        $result = curl_exec($ch);
        curl_close($ch);

        $data = json_decode($result);
        
        echo '{ "alert": "success", "message": "Thanks! <strong> Got it!</strong> we will get back to you shortly"}';

    } else {
        
        echo '{ "alert": "error", "message": "Email <strong>could not</strong> be sent due to some Unexpected Error. Please Try Again later.<br /><br /><strong>Reason:</strong><br />' . $mail->ErrorInfo . '" }';

    }

}


?>