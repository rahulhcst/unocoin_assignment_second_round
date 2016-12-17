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
        $n1 = ($m - $l +1);
        $n2 = ($r - $m);
        $leftArr = array_slice($arr, 0, $n1);
        $rightArr= array_slice($arr, ($m + 1), $n2);

        $i = 0;
        $j = 0;
        $k = $l;

        while ($i < $n1 && $j < $n2)
        {
            if ($leftArr[$i][$sortKey] <= $rightArr[$i][$sortKey]) {
                $arr[$k][$sortKey] = $leftArr[$i][$sortKey];
                $i++;
            } else {
                $arr[$k][$sortKey] = $rightArr[$j][$sortKey];
                $j++;
            }
            $k++;
        }

        while ($i < $n1)
        {
            $arr[$k][$sortKey] = $leftArr[$i][$sortKey];
            $i++;
            $k++;

        }

        while ($j < $n2)
        {
            $arr[$k][$sortKey] = $rightArr[$j][$sortKey];
            $j++;
            $k++;
        }
    }

    private function mergeSort(&$arr, $l, $r, $sortKey)
    {
        if ($l < $r)
        {
            $m = ($l + ($r - $l))/2;

            $this->mergeSort($arr, $l, $m, $sortKey);
            $this->mergeSort($arr, $m+1, $r, $sortKey);

            $this->merge($arr, $l, $m, $r, $sortKey);
        }

    }

    public function sort($array, $sortKey)
    {
        $this->mergeSort($array, 0 , (count($sortKey) - 1), $sortKey);
        return $array;
    }
}