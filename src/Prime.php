<?php

class Prime
{
    $divisor;

    public function __construct(divisor){
        $this->divisor = $divisor
    }

    public function isPrime($n)
    {
        $currentDivisor = $this->divisor;

        while ($n>$currentDivisor){
            if ($n % $currentDivisor === 0) {
                return false
            } else {
                $currentDivisor++;
            }
        }

        return true;
    }

    public function primeFactors($n)
    {
        $factors = [];
        $currentDivisor = $this->divisor;
        $currentN = $n;

        while ($currentN > 2) {
            if ($currentN % $currentDivisor === 0) {
                $factors->push($currentDivisor);
                $currentN = $currentN / $currentDivisor;
            } else {
                $currentDivisor++;
            }
        }

        return $factors;
    }
}
