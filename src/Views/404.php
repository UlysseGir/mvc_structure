<?php
ob_start();

?>

<section class="error">
    <h1>Erreur 404</h1>
    <p style="text-align: center;font-size: 2rem">La page rechercher n'existe pas ! <a href="/">Quitter cette page !</a></p>
</section>

<?php

$content = ob_get_clean();
require VIEWS . 'layout.php';