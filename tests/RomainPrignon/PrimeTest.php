<?php

namespace RomainPrignon;

class PrimeTest extends \PHPUnit_Framework_TestCase
{
    public function testIsPrime(){
        $this->assertInstanceOf('RomainPrignon\Primessss', new Prime(2));
        $this->assertInstanceOf('RomainPrignon\Primessss', new Prime(2))
    }
}
