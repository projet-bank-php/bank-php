<?php

require_once __DIR__ . "/../../src/init.php";

function error_die($message){
    $_SESSION['error_message'] = $message;
    header('Location: ' . $url);
    die();
}

if(!isset($_POST['fullname'], $_POST['phone'], $_POST['email'], $_POST['message'])){
    error_die('Formulaire non reçue.', '/?page=contact');
    
}

if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) === false){
    error_die('Email invalide.', '/?page=contact');
    
}

if(empty($_POST['fullname'])){
    error_die('Entrez votre nom.', '/?page=contact');
    
}

if(empty($_POST['phone'])){
    error_die('Entrez votre nom.', '/?page=contact');
    
}

if(empty($_POST['message'])){
    error_die('Entrez votre message.', '/?page=contact');
}

if(strlen($_POST['message']) > 1000){
    error_die('Message trop long (max 1000 caractères).');
    
}

var_dump($_POST);

$stmh = $db->prepare('INSERT INTO contact_forms(fullname, phone, email, message) VALUES (:fullname, :phone, :email, :message)');
$stmh->execute([$_POST]);

$_SESSION['success_message'] = 'Message envoyé !';
header('Location= /?page=contact')


?>
