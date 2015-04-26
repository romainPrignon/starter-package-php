<?php

class PrimeTest extends PHPUnit_Framework_TestCase
{
    public function testIsPrime()
    {
        $this->assertInstanceOf('RomainPrignon\Prime', new RomainPrignon\Prime(2));
        //$this->assertEquals(-1, $b->getAmount());
    }
}
