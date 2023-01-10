<?php

$page_title = "Accueil - Mon Site";

ob_start();

?>

<h1> Titre page d'accueil</h1>

<?php
$page_content = ob_get_clean();

ob_start(); ?>
<script>
alert('HELLO');
</script>
<?php
$page_scripts = ob_get_clean();