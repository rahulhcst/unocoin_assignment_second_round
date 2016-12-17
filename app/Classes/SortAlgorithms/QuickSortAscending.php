<?php
/**
 * Created by PhpStorm.
 * User: Rahul Sharma
 * Date: 12/15/2016
 * Time: 10:15 AM
 */

namespace App\Classes\SortAlgorithms;

use App\Interfaces\SortContract;

/**
 * Class QuickSortAscending
 * @package App\Classes\SortAlgorithms
 */
class QuickSortAscending implements SortContract
{
    /**
     * @param $arr
     * @param $leftIndex
     * @param $rightIndex
     * @param $sortKey
     * @return mixed
     */
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

    /**
     * @param $array
     * @param $leftIndex
     * @param $rightIndex
     * @param $sortKey
     */
    private function quickSort(&$array, $leftIndex, $rightIndex, $sortKey)
    {
        $index = $this->partition($array, $leftIndex, $rightIndex, $sortKey);

        if ($leftIndex < $index-1)
            $this->partition($array, $leftIndex, $index-1, $sortKey);
        if ($rightIndex > 0)
            $this->partition($array, 0, $rightIndex, $sortKey);
    }

    /**
     * @param $array
     * @param $sortKey
     * @return mixed
     */
    public function sort($array, $sortKey)
    {
        $this->quickSort($array, 0, (count($array) - 1), $sortKey);
        return $array;
    }
}