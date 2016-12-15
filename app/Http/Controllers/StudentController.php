<?php

namespace App\Http\Controllers;

use App\Classes\SortAlgorithms\QuickSortAscending;
use App\Classes\Sort;
use App\Classes\SortAlgorithms\QuickSort;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    private $studentDetails;
    private $subjects;
    private $sortKey;
    private $sortOrder;

    public function __construct($studentDetails = [], $subjects = [], $sortKey = 'total', $sortOrder = 1)
    {
        $this->studentDetails = $studentDetails;
        $this->subjects = $subjects;
        $this->sortKey = $sortKey;
        $this->sortOrder = $sortOrder;
    }


    /**
     * Execute function
     */
    public function execute()
    {
        /*new QuickSortAscending();

        die;*/
        $sort = new Sort(new QuickSortAscending());
        //$sortedArray = $sort->sortAscending($this->studentDetails,);
        $sortedArray = $sort->sort($this->studentDetails, $this->sortKey);
        var_dump($sortedArray);
    }
}
