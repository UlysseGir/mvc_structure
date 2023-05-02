<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

use name\Models\ExempleManager; //manager
//use name\Models\Test; //accesseurs

include_once "../mvc_structure/src/config/config.php";

final class ManagerTest extends TestCase
{

    //test1

    public function testShowSomething()
    {
        $Manager = new ExempleManager();
        $something = $Manager->test();

        $this->assertIsArray($something); //test si c'est un tableau
    }

    //test2


    public function testShowAll()
    {
        $Manager = new ExempleManager();
        $showAll = $Manager->test2();

        $this->assertContainsOnlyInstancesOf(test::class, $showAll); //changer "test" avec les accesseurs à test
    }
}