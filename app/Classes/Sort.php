<?php
/**
 * Created by PhpStorm.
 * User: Rahul Sharma
 * Date: 12/15/2016
 * Time: 1:20 AM
 */

namespace App\Classes;

use App\Interfaces\SortContract;

/**
 * Class Sort
 * @package App\Classes
 */
class Sort
{
    /**
     * @var SortContract
     */
    private $sortAlgorithm;

    /**
     * Sort constructor.
     * @param SortContract $sortContract\
     */
    public function __construct(SortContract $sortContract)
    {
        $this->sortAlgorithm = $sortContract;
    }

    /**
     * @param $array
     */
    public function sortAscending($array)
    {
        $this->sortAlgorithm->sortAscending($array);
    }

    public function sort($array)
    {

    }

    public function  sortDescending()
    {

    }
}