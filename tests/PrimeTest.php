<?php

class PrimeTest extends PHPUnit_Framework_TestCase
{
    public function testIsPrime()
    {
        $this->assertInstanceOf('Prime', new Prime());
        //$this->assertEquals(-1, $b->getAmount());
    }
}