<?php
namespace name\Controllers;

/** Class Controller **/
class Controller {
    private $manager;

    public function __construct() {

    }

    public function index() {
        require VIEWS . 'Exemple/homepage.php';
    }

    }
