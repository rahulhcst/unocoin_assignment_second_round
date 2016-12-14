<?php
/**
 * Created by PhpStorm.
 * User: Rahul Sharma
 * Date: 12/15/2016
 * Time: 12:28 AM
 */

namespace App\Interfaces;

/**
 * Interface SortContract
 * @package App\Interfaces
 */
interface SortContract
{
    /**
     * @param $array
     * @return mixed
     */
    public function sort($array);

    /**
     * @param $array
     * @return mixed
     */
    public function sortAscending($array);

    /**
     * @param $array
     * @return mixed
     */
    public function sortDescenfing($array);
}

?>