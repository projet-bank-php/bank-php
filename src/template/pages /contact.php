<?php
$page_title = "Contact - MonSite.com";

ob_start();
?>
<h1>Contactez-nous</h1>
<?php include_once __DIR__ .'/../partials/alert_error.php';?>
<form action="=" method="POST">
    <div>
        <label for ="fullname">Votre nom complet</label>
        <input type="text" id="fullname" name="fullname">
    </div>
    <div>
        <label for="phone">Numéro de Telephone</label>
        <input type="text" id = "phone" name="phone">
    </div>
    <div>
        <label for="email">email</label>
        <input type="text" id = "email" name="email">
    </div>
    <div>
        <label for="message">Votre message</label>
        <textarea name="message" id="textearea" cols="30" rows="10"></textarea>
    </div>
    <button type="submit">Envoyer</button>
</form>
<?php
$page_content = ob_get_clean();