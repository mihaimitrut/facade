<?php
declare(strict_types=1);

require_once("vendor/autoload.php");

$computer = new ComputerFacade();
$computer->start();
