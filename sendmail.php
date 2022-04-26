<?php 
// show errors
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$mailHeaders = "MIME-Version: 1.0" .PHP_EOL; 
$mailHeaders .= "Content-Type: text/html; charset=utf-8" . PHP_EOL; 
$mailHeaders .= "From: <BetterBro>" . PHP_EOL;
$mailHeaders .= "X-Mailer: PHP/" . phpversion();

if(count($_POST) < 1) {
    $result = array(
        'type' => 'error',
        'text' => 'error'
    );
    echo(json_encode($result));
    exit;
}

$_p = '';
$_p .=  '<b>Date</b>: ' . date('Y-m-d H:i:s') . '<br/>';
foreach ($_POST as $key => $value) {
    $_p .=  '<b>' . $key . '</b>: ' . $value . '<br/>';
}


$mailMessage = '<html><head></head><body>' .$_p  . '</body></html>';

$mailTo = 'info@betterbro.com';
$mailSubject = 'New message from BetterBro';
$result = '';

$sendMail = mail($mailTo, $mailSubject, $mailMessage, $mailHeaders);
if ($sendMail !== false ) {
    $result = array(
        'type' => 'done',
        'text' => 'done'
    );
    echo (json_encode($result));
    exit;
}
$result = array(
    'type' => 'error',
    'text' => 'error2'
);
echo(json_encode($result));
exit;