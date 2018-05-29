<?php
declare(strict_types=1);

/**
 * Class Cpu
 *
 * @author Mihai Mitrut <mihai.mitrut@gmail.com>
 */
class Cpu
{
    /**
     * @var float $clock
     */
    private $clock;

    /**
     * @return float
     */
    public function getClock(): float
    {
        return $this->clock;
    }

    /**
     * @param float $clock
     * @return Cpu
     */
    public function setClock(float $clock): Cpu
    {
        $this->clock = $clock;
        return $this;
    }

    /**
     * Blah
     */
    public function execute()
    {
        echo "Executing CPU\n";
    }
}