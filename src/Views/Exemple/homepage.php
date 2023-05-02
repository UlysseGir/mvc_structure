<?php
ob_start();
?>
home page
<?php
$content = ob_get_clean();
require VIEWS . 'layout.php';