<?php

namespace RomainPrignon;

class PrimeTest extends \PHPUnit_Framework_TestCase
{
    public function testIsPrime()
    {
        $this->assertInstanceOf('RomainPrignon\Prime', new Prime(2));
        //$this->assertEquals(-1, $b->getAmount());
    }
}
