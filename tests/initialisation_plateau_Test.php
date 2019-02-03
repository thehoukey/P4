<?php
$board=array();
require_once("Services/initialisation_plateau.php");
require dirname(dirname(__FILE__)).DIRECTORY_SEPARATOR.'vendor'.DIRECTORY_SEPARATOR.'autoload.php';

use PHPUnit\Framework\TestCase;
class initialisation_plateau_Test extends TestCase
{
    public function test_init()
    {

        $init=new initialisation_plateau();
        $init->init();
        $this->assertEquals(
            0,
            $GLOBALS["board"][0][0],
            "it should return 0 "
           );
    }
}