<?php
/**
 * Created by PhpStorm.
 * User: Rahul Sharma
 * Date: 12/16/2016
 * Time: 6:22 PM
 */

namespace  App\Classes\SortAlgorithms;

use App\Interfaces\SortContract;

class SelectionSortDescending implements SortContract
{
    private function swap(&$a, &$b)
    {
        $temp = $a;
        $a = $b;
        $b = $temp;
    }

    private function selectionSort(&$arr, $sortKey)
    {
        $count = count($arr);
        for ($i = 0; $i < $count - 1; $i++)
        {
            $index = $i;
            for ($j = $i + 1; $j < $count; $j++)
            {
                if ($arr[$index][$sortKey] < $arr[$j][$sortKey])
                    $index = $j;
            }
            $this->swap($arr[$index], $arr[$i]);
        }
    }

    public function sort($array, $sortKey)
    {
        $this->selectionSort($array, $sortKey);
        return $array;
    }
}