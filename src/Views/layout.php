<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
 
    <title>structur_mvc</title> 
    <link rel="shortcut icon" href="" type="image/x-icon"> 
    <link rel="stylesheet" href="<?= URL . "/style.css" ?> "> 
 
    <!-- fontawesome -->
    <script src="https://kit.fontawesome.com/ac7bce0ab5.js" crossorigin="anonymous"></script> 
    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script> 

</head>

<body>
    <header> 

    </header> 
    <main> 
        <?php echo $content; ?> 
    </main> 
    <footer> 

    </footer>
</body>

<?php 
unset($_SESSION['error']); 
unset($_SESSION['old']); 
