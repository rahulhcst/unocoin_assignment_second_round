<?php
/**
 * Created by PhpStorm.
 * User: Rahul Sharma
 * Date: 12/16/2016
 * Time: 8:58 AM
 */

namespace App\Classes\SortAlgorithms;

use App\Interfaces\SortContract;

class QuickSortDescending implements SortContract
{
    private function partition(&$arr, $leftIndex, $rightIndex, $sortKey)
    {
        $pivot = $arr[($leftIndex+$rightIndex)/2][$sortKey];         //Selecting pivot
        while ($leftIndex <= $rightIndex)
        {
            while ($arr[$leftIndex][$sortKey] > $pivot)              //Increasing left index until it is smaller than pivot
                $leftIndex++;
            while ($arr[$rightIndex][$sortKey] < $pivot)             //Decreasing right index intil it is greater than pivot
                $rightIndex--;
            if ($leftIndex <= $rightIndex) {                        //Swap the values if left index is smaller then or equal to right index
                $tmp = $arr[$leftIndex];
                $arr[$leftIndex] = $arr[$rightIndex];
                $arr[$rightIndex] = $tmp;
                $leftIndex++;
                $rightIndex--;
            }
        }
    }

    private function quickSort(&$array, $leftIndex, $rightIndex, $sortKey)
    {
        $index = $this->partition($array, $leftIndex, $rightIndex, $sortKey);             //Calling partition function
        if ($leftIndex < $index - 1)
            $this->quickSort($array, $leftIndex, $index - 1, $sortKey);                 //Recursive call to quicksort with new right index
        if ($index < $rightIndex)
            $this->quickSort($array, $index, $rightIndex, $sortKey);                    //Recursive call to quicksort with new left index
    }

    public function sort($array, $sortKey)
    {
        /*var_dump($sortKey);
        die;*/
        $this->quickSort($array, 0, (count($array) - 1), $sortKey);
        die("\r\nhdhshdhsh\r\n");
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