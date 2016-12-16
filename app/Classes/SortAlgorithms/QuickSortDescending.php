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
    private function partition()
    {

    }

    private function quickSort(&$array, $leftIndex, $rightIndex, $sortKey)
    {
        $this->partition();
    }

    public function sort($array, $sortKey)
    {
        $this->quickSort($array, 0, (count($array) - 1), $sortKey);
    }

    public function sortAscending($array)
    {
        // TODO: Implement sortAscending() method.
    }

    public function sortDescending($array)
    {
        // TODO: Implement sortDescending() method.
    }
}