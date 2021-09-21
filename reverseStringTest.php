<?php


require 'reverse.php ';

class ReverseTests extends PHPUnit_Framework_TestCase
{
    private $reverse;

    protected function setUp()
    {
        $this->reverse = new Reverse();
    }

    protected function tearDown()
    {
        $this->reverse = NULL;
    }

    public function testAdd()
    {
        $result = $this->reverse->reverseWord('Hi, I`m Sofa');
        $this->assertEquals('iH, m`I afoS', $result);
    }

}
