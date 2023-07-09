<?php
namespace App;
use App\AD;
use PDO;
use Exception;

class Reiwa
{
    private $reiwa;

    public function __construct(int $reiwa )
    {
        if ($reiwa < 0) {
            throw new exception('マイナスな時間は存在しません!');
        }
        $this->reiwa = $reiwa ;
    }

    public function toAD(): AD
    {
        $ad = $this->reiwa + 2018;
        return new AD($ad);
    }
}
