<?php
namespace name\Controllers;

/** Class ExempleController **/
class ExempleController {
    private $manager;

    public function __construct() {
        $this->manager = new ExempleManager();
    }

    public function index() {
        $test = $this->manager->getAllVoyage();
        require VIEWS . 'Exemple/homepage.php';
    }

    }
