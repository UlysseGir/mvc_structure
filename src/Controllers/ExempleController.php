<?php
namespace name\Controllers;

use name\Models\ExempleManager;

/** Class ExempleController **/
class ExempleController {
    private $manager;

    public function __construct() {
        $this->manager = new ExempleManager();
    }

    public function index() {
        require VIEWS . 'Exemple/homepage.php';
    }

    }
