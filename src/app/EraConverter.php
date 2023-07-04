<?php
namespace App;
use App\Era;
use PDO;
use Exception;

class EraConverter
{
    private $eras;

    public function __construct()
    {
        $this->eras = [
            new Era(1912, '大正'),
            new Era(1926, '昭和'),
            new Era(1989, '平成'),
            new Era(2018, '令和'),
        ];
    }

    public function warekiToGregorian(int $era, int $year): string
    {
        if (!isset($this->eras[$era])) {
            throw new Exception('無効な和暦が選択されました。');
        }

        $baseYear = $this->eras[$era]->getYear();
        $eraName = $this->eras[$era]->getName();

        if ($year < 1) {
            throw new Exception('無効な年が入力されました。');
        }

        $gregorianYear = $baseYear + $year - 1;

        return $gregorianYear . '年 (' . $eraName . ')';
    }
}

?>