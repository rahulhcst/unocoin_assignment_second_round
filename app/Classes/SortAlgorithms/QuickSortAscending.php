<?php
/**
 * Created by PhpStorm.
 * User: Rahul Sharma
 * Date: 12/15/2016
 * Time: 10:15 AM
 */

namespace App\Classes\SortAlgorithms;

use App\Interfaces\SortContract;

class QuickSortAscending implements SortContract
{
    private $sortKey;

    private function partition(&$arr, $leftIndex, $rightIndex, $sortKey)
    {
        $pivot = $arr[($leftIndex+$rightIndex)/2][$sortKey];

        while ($leftIndex <= $rightIndex)
        {
            while($arr[$leftIndex][$sortKey] < $pivot)
                $leftIndex++;
            while ($arr[$rightIndex][$sortKey] > $pivot)
                $rightIndex--;
            if ($leftIndex <= $rightIndex)
            {
                $tmp = $arr[$leftIndex];
                $arr[$leftIndex] = $arr[$rightIndex];
                $arr[$rightIndex] = $tmp;
                $leftIndex++;
                $rightIndex--;
            }
        }

        return $leftIndex;
    }

    private function quickSort(&$array, $leftIndex, $rightIndex, $sortKey)
    {
        $index = $this->partition($array, $leftIndex, $rightIndex, $sortKey);

        if ($leftIndex < $index-1)
            $this->partition($array, $leftIndex, $index-1, $sortKey);
        if ($rightIndex > 0)
            $this->partition($array, 0, $rightIndex, $sortKey);

    }

    public function sort($array, $sortKey)
    {
        $this->sortKey = $sortKey;
        $this->quickSort($array, 0, (count($array) - 1), $sortKey);

        return $array;
    }

    /*public function sortAscending($array)
    {
        // TODO: Implement sortAscending() method.
    }

    public function sortDescending($array)
    {
        // TODO: Implement sortDescending() method.
    }*/
}