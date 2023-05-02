<?php
ob_start();
echo($test);
?>
home page
<?php
$content = ob_get_clean();
require VIEWS . 'layout.php';