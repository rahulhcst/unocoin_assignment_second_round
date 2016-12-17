<?php
/**
 * Created by PhpStorm.
 * User: Rahul Sharma
 * Date: 12/16/2016
 * Time: 9:57 PM
 */

namespace App\Classes\SortAlgorithms;

use App\Interfaces\SortContract;

/**
 * Class HeapSortDescending
 * @package App\Classes\SortAlgorithms
 */
class HeapSortDescending implements SortContract
{
    /**
     * @param $a
     * @param $b
     */
    private function swap(&$a, &$b)
    {
        $temp = $a;
        $a = $b;
        $b = $temp;
    }

    /**
     * @param $arr
     * @param $index
     * @param $size
     * @param $sortKey
     */
    private function heapify(&$arr, $index, $size, $sortKey)
    {
        $largest = $index;
        $leftIndex = 2 * $index + 1;
        $rightIndex = 2 * $index + 2;

        if ($leftIndex < $size && $arr[$leftIndex][$sortKey] < $arr[$largest][$sortKey])
            $largest = $leftIndex;

        if ($rightIndex < $size && $arr[$rightIndex][$sortKey] < $arr[$largest][$sortKey])
            $largest = $rightIndex;

        if ($largest != $index)
        {
            $this->swap($arr[$index], $arr[$largest]);

            $this->heapify($arr, $largest, $size, $sortKey);
        }
    }

    /**
     * @param $arr
     * @param $sortKey
     */
    private function heapSort(&$arr, $sortKey)
    {
        $size = count($arr);
        for ($i = (int)($size/2-1); $i >=0 ; $i--)
            $this->heapify($arr, $i, $size, $sortKey);

        for ($i = $size - 1; $i >= 0; $i--)
        {
            $this->swap($arr[0], $arr[$i]);
            $this->heapify($arr, 0, $i, $sortKey);
        }
    }

    /**
     * @param $array
     * @param $sortKey
     * @return mixed
     */
    public function sort($array, $sortKey)
    {
        $this->heapSort($array, $sortKey);
        return $array;
    }
}