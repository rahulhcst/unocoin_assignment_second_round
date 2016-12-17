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
     * @param SortContract $sortContract
     */
    public function __construct(SortContract $sortContract)
    {
        $this->sortAlgorithm = $sortContract;
    }

    /**
     * @param $array
     * @param $sortKey
     * @return mixed
     */
    public function sort($array, $sortKey)
    {
        return $this->sortAlgorithm->sort($array, $sortKey);
    }
}