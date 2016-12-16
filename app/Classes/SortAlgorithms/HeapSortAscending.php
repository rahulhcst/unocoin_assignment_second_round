<?php
/**
 * Created by PhpStorm.
 * User: Rahul Sharma
 * Date: 12/16/2016
 * Time: 6:35 PM
 */

namespace App\Classes\SortAlgorithms;

use App\Interfaces\SortContract;

class HeapSortAscending implements SortContract
{
    private function swap(&$a, &$b)
    {
        $temp = $a;
        $a = $b;
        $b = $temp;
    }

    private function heapify(&$arr, $index, $size, $sortKey)
    {
        $largest = $index;
        $leftIndex = 2 * $index + 1;
        $rightIndex = 2 * $index + 2;

        if ($leftIndex < $size && $arr[$leftIndex][$sortKey] > $arr[$largest][$sortKey])
            $largest = $leftIndex;

        if ($rightIndex < $size && $arr[$rightIndex][$sortKey] > $arr[$largest][$sortKey])
            $largest = $rightIndex;

        if ($largest != $index)
        {
            $this->swap($arr[$index], $arr[$largest]);

            $this->heapify($arr, $largest, $size, $sortKey);
        }
    }

    private function heapSort(&$arr, $sortKey)
    {
        $size = count($arr);
        for ($i = $size/2-1; $i >=0 ; $i--)
            $this->heapify($arr, $i, $size, $sortKey);

        for ($i = $size - 1; $i >= 0; $i--)
        {
            $this->swap($arr[0], $arr[$i]);
            $this->heapify($arr, 0, $i, $sortKey);
        }
    }

    public function sort($array, $sortKey)
    {
        $this->heapSort($array, $sortKey);
        return $array;
    }
}