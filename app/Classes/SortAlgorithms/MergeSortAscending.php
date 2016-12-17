<?php
/**
 * Created by PhpStorm.
 * User: Rahul Sharma
 * Date: 12/16/2016
 * Time: 3:51 PM
 */

namespace App\Classes\SortAlgorithms;

use App\Interfaces\SortContract;

class MergeSortAscending implements SortContract
{
    private function merge(&$arr, $l, $m, $r, $sortKey)
    {
        $n1 = $m - $l + 1;
        $n2 = $r - $m;

        $leftArr = array_slice($arr, $l, $n1);
        $rightArr = array_slice($arr, $m + 1, $n2);

        $i = 0;
        $j = 0;
        $k = $l;

        while ($i < $n1 && $j < $n2)
        {
            if($leftArr[$i][$sortKey] < $rightArr[$j][$sortKey])
                $arr[$k++] = $leftArr[$i++];//$arr[$k++][$sortKey] = $leftArr[$i++][$sortKey];
            else
                $arr[$k++] = $rightArr[$j++];//$arr[$k++][$sortKey] = $rightArr[$j++][$sortKey];
        }

        while ($i < $n1)
            $arr[$k++] = $leftArr[$i++];//$arr[$k++][$sortKey] = $leftArr[$i++][$sortKey];

        while ($j < $n2)
            $arr[$k++] = $rightArr[$j++];//$arr[$k++][$sortKey] = $rightArr[$j++][$sortKey];

    }

    private function mergeSort(&$arr, $l, $r, $sortKey)
    {

        if ($l < $r)
        {
            $m = (int)(($l + $r)/2);

            $this->mergeSort($arr, $l, $m, $sortKey);
            $this->mergeSort($arr, $m+1, $r, $sortKey);

            $this->merge($arr, $l, $m, $r, $sortKey);
        }

    }

    public function sort($array, $sortKey)
    {
        //$array[0] = [89, 34, 100, 54, 67, 1];
        $this->mergeSort($array, 0 , (count($array) - 1), $sortKey);
        return $array;
    }
}