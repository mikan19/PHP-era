<?php
namespace App;
use PDO;
use Exception;

class AD
{
    private $ad;

    public function __construct(int $ad)
    {
        if ($ad < 0) {
            throw new exception('マイナスな時間は存在しません!');
        }
        $this->ad = $ad;
    }

    public function value(): int
    {
        return $this->ad;
    }
}
