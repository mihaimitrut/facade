<?php
declare(strict_types=1);

/**
 * Class Memory
 *
 * @author Mihai Mitrut <mihai.mitrut@gmail.com>
 */
class Memory
{
    /**
     * @var int $capacity
     */
    private $capacity;

    /**
     * @return int
     */
    public function getCapacity(): int
    {
        return $this->capacity;
    }

    /**
     * @param int $capacity
     * @return Memory
     */
    public function setCapacity(int $capacity): Memory
    {
        $this->capacity = $capacity;
        return $this;
    }

    /**
     * Blah
     */
    public function load()
    {
        echo "Loading memory\n";
    }
}