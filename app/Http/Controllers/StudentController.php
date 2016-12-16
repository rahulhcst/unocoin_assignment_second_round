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
    private $algorithm;

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
        echo "\r\nInput\r\n";
        var_dump($this->studentDetails);
        echo "\r\n";
        switch ($this->algorithm)
        {
            case 1:
                $sort = new Sort(new QuickSortAscending());
                break;
            case 2:
                break;
            case 3:
                break;
            case 4:
                break;
            default:
        }
        $sortedArray = $sort->sort($this->studentDetails, $this->sortKey);

        echo "\r\nRESULT\r\n";
        var_dump($sortedArray);
        echo "\r\n";
    }
}
