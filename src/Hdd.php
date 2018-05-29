<?php
declare(strict_types=1);

/**
 * Class Hdd
 *
 * @author Mihai Mitrut <mihai.mitrut@gmail.com>
 */
class Hdd
{
    /**
     * @var string $brand
     */
    protected $brand;

    /**
     * @return string
     */
    public function getBrand(): string
    {
        return $this->brand;
    }

    /**
     * @param string $brand
     * @return Hdd
     */
    public function setBrand(string $brand): Hdd
    {
        $this->brand = $brand;
        return $this;
    }

    /**
     * Blah
     */
    public function read()
    {
        echo "Reading from HDD\n";
    }
}