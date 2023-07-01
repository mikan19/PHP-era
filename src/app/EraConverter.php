<?php
namespace App;

class EraConverter
{
    public function warekiToGregorian($era, $year)
    {
        $eras = array(
            array('year' => 1912, 'name' => '大正'),
            array('year' => 1926, 'name' => '昭和'),
            array('year' => 1989, 'name' => '平成'),
            array('year' => 2018, 'name' => '令和'),
        );

        if (!isset($eras[$era])) {
            throw new \Exception('無効な和暦が選択されました。');
        }

        $baseYear = $eras[$era]['year'];
        $eraName = $eras[$era]['name'];

        if ($year < 1) {
            throw new \Exception('無効な年が入力されました。');
        }

        $gregorianYear = $baseYear + $year - 1;

        return $gregorianYear . '年 (' . $eraName . ')';
    }
}
?>
