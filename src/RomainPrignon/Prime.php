<?php

namespace RomainPrignon;

/**
 * Prime.
 */
class Prime
{
    private $divisor;

    /**
     * @param int $divisor
     */
    public function __construct($divisor)
    {
        $this->divisor = $divisor;
    }

    /**
     * @param int $n
     *
     * @return bool
     */
    public function isPrime($n)
    {
        $currentDivisor = $this->divisor;

        while ($n > $currentDivisor) {
            if ($n % $currentDivisor === 0) {
                return false;
            } else {
                $currentDivisor++;
            }
        }

        return true;
    }

    /**
     * @param int $n
     *
     * @return array $factors
     */
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
