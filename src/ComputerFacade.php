<?php
declare(strict_types=1);

/**
 * Class ComputerFacade
 *
 * @author Mihai Mitrut <mihai.mitrut@gmail.com>
 */
class ComputerFacade
{
    /**
     * @var Cpu $cpu
     */
    protected $cpu;

    /**
     * @var Memory $memory
     */
    protected $memory;

    /**
     * @var Hdd
     */
    protected $hdd;

    public function __construct()
    {
        $this->cpu = new Cpu();
        $this->memory = new Memory();
        $this->hdd = new Hdd();
    }

    public function start()
    {
        $this->cpu->execute();
        $this->memory->load();
        $this->hdd->read();
    }
}