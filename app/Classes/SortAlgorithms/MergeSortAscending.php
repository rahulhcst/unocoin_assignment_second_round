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
        var_dump($l);
        var_dump($m);
        var_dump($r);
        $n1 = ($m - $l +1);
        $n2 = ($r - $m);
        $leftArr = array_slice($arr, 0, $n1);
        var_dump($leftArr);
        $rightArr= array_slice($arr, ($m + 1), $n2);
        var_dump($rightArr);

        $i = 0;
        $j = 0;
        $k = $l;

        while ($i < $n1 && $j < $n2)
        {
            if ($leftArr[$i][$sortKey] <= $rightArr[$i][$sortKey]) {
                $arr[$k] = $leftArr[$i];//$arr[$k][$sortKey] = $leftArr[$i][$sortKey];
                $i++;
            } else {
                $arr[$k] = $rightArr[$j];//$arr[$k][$sortKey] = $rightArr[$j][$sortKey];
                $j++;
            }
            $k++;
        }

        while ($i < $n1)
        {
            //$arr[$k][$sortKey] = $leftArr[$i][$sortKey];
            $arr[$k] = $leftArr[$i];
            $i++;
            $k++;

        }

        while ($j < $n2)
        {
            //$arr[$k][$sortKey] = $rightArr[$j][$sortKey];
            $arr[$k] = $rightArr[$j];
            $j++;
            $k++;
        }
    }

    /*private function merge(&$arr, $l, $m, $r)
    {


    }*/

    private function mergeSort(&$arr, $l, $r, $sortKey)
    {
        echo 'l ';var_dump($l);
        echo 'r ';var_dump($r);
        if ($l < $r)
        {
            $m = (int)(($l + ($r - $l))/2);
            //$m = (int)(($l + $r)/2);

            $this->mergeSort($arr, $l, $m, $sortKey);
            $this->mergeSort($arr, $m+1, $r, $sortKey);

            $this->merge($arr, $l, $m, $r, $sortKey);
        }

    }

    public function sort($array, $sortKey)
    {
        $this->mergeSort($array, 0 , (count($array) - 1), $sortKey);
        return $array;
    }
}