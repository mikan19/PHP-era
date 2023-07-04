<?php
namespace App;
use PDO;
use Exception;

class Era
{
    private $year;
    private $name;

    public function __construct(int $year, string $name)
    {
        $this->year = $year;
        $this->name = $name;
    }

    public function getYear(): int
    {
        return $this->year;
    }

    public function getName(): string
    {
        return $this->name;
    }
}


?>