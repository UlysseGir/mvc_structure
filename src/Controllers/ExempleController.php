<?php
namespace name\Controllers;

/** Class ExempleController **/
class ExempleController {
    private $manager;

    public function __construct() {

    }

    public function index() {
        require VIEWS . 'Exemple/homepage.php';
    }

    }
