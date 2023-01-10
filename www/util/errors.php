<?php

if (isset($_SESSION['error_message'])){
?>
    <p class="alert alert-errors">
        <?= $_SESSION['error_message']?>
    </p>

        
}


<?php
