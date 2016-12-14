<?php
/**
 * Created by PhpStorm.
 * User: Rahul Sharma
 * Date: 12/15/2016
 * Time: 1:20 AM
 */

namespace App\Classes;

use App\Interfaces\SortContract;

class Sort
{
    private $sortAlgorithms;

    public function __construct(SortContract $sortContract)
    {
        $this->sortAlgorithms = $sortContract;
    }

    public function sortData($array)
    {
        $this->sortAlgorithms->sortAscending($array);
    }
}