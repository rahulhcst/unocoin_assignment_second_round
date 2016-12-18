<?php

namespace App\Http\Controllers;

use App\Classes\SortAlgorithms\HeapSortAscending;
use App\Classes\SortAlgorithms\HeapSortDescending;
use App\Classes\SortAlgorithms\MergeSortAscending;
use App\Classes\SortAlgorithms\MergeSortDescending;
use App\Classes\SortAlgorithms\QuickSortAscending;
use App\Classes\Sort;
use App\Classes\SortAlgorithms\QuickSortDescending;
use App\Classes\SortAlgorithms\SelectionSortAscending;
use App\Classes\SortAlgorithms\SelectionSortDescending;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    private $studentDetails;
    private $subjects;
    private $sortKey;
    private $sortOrder = 1;
    private $algorithm;

    /**
     * StudentController constructor.
     * @param array $studentDetails
     * @param array $subjects
     * @param string $sortKey
     * @param int $sortOrder
     * @param int $algorithm
     */
    public function __construct($studentDetails = [], $subjects = [], $sortKey = 'total', $sortOrder = 1, $algorithm = 1)
    {
        $this->studentDetails = $studentDetails;
        $this->subjects = $subjects;
        $this->sortKey = $sortKey;
        $this->sortOrder = $sortOrder;
        $this->algorithm = $algorithm;
    }

    /**
     * @param $studentDetails
     * @param $subjects
     */
    private function printOutput($studentDetails, $subjects)
    {
        echo "\r\n";
        $length = printf('%-10s|%-10s|', 'Rank', 'Name');               //Assigning output i.e., characters printed to length variable
        foreach ($subjects as $subject)
            $length += printf('%-10s|', $subject);
        $length += printf("%-10s\r\n", 'Total Marks');

        for ($i = 0; $i < $length; $i++)
            echo '_';

        echo "\r\n";

        foreach ($studentDetails as $k => $studentDetail) {
            printf('%-10s|%-10s|', $k+1, $studentDetail['name']);

            foreach ($subjects as $subject)
                printf('%-10s|', $studentDetail[$subject]);
            printf('%-10s', $studentDetail['total']);
            echo "\r\n";
        }
    }

    /**
     * Execute function
     */
    public function execute()
    {
        switch ($this->algorithm)
        {
            case 1:
                $sortAlgo = 'QuickSort';
                /*switch ($this->sortOrder)
                {
                    case -1:
                        $sort = new Sort(new QuickSortDescending());
                        break;
                    case  1:
                        $sort = new Sort(new QuickSortAscending());
                        break;
                    default:
                        $sort = new Sort(new QuickSortAscending());
                }*/
                break;
            case 2:
                $sortAlgo = 'MergeSort';
                /*switch ($this->sortOrder)
                {
                    case -1:
                        $sort = new Sort(new MergeSortDescending());
                        break;
                    case  1:
                        $sort = new Sort(new MergeSortAscending());
                        break;
                    default:
                        $sort = new Sort(new MergeSortAscending());
                        break;
                }*/
                break;
            case 3:
                $sortAlgo = 'SelectionSort';
                /*switch ($this->sortOrder)
                {
                    case -1:
                        $sort = new Sort(new SelectionSortDescending());
                        break;
                    case 1:
                        $sort = new Sort(new SelectionSortAscending());
                        break;
                    default:
                        $sort = new Sort(new SelectionSortAscending());
                }*/
                break;
            case 4:
                $sortAlgo = 'HeapSort';
                /*switch ($this->sortOrder)
                {
                    case -1:
                        $sort = new Sort(new HeapSortDescending());
                        break;
                    case  1:
                        $sort = new Sort(new HeapSortAscending());
                        break;
                    default:
                        $sort = new Sort(new HeapSortAscending());
                }*/
                break;
            default:
                $sortAlgo = 'QuickSort';
                /*switch ($this->sortOrder)
                {
                    case -1:
                        $sort = new Sort(new HeapSortAscending());
                        break;
                    case  1:
                        $sort = new Sort(new HeapSortAscending());
                        break;
                    default:
                        $sort = new Sort(new HeapSortAscending());
                }*/
        }

        switch ($this->sortOrder)
        {
            case -1:
                $sortAlgo = 'App\Classes\SortAlgorithms\\'.$sortAlgo.'Descending';
                $sort = new Sort(new $sortAlgo);
                break;
            case 1:
                $sortAlgo = 'App\Classes\SortAlgorithms\\'.$sortAlgo.'Ascending';
                $sort = new Sort(new $sortAlgo);
                break;
            default:
                $sortAlgo = 'App\Classes\SortAlgorithms\\'.$sortAlgo.'Ascending';
                $sort = new Sort(new $sortAlgo);
                break;
        }
        $sortedArray = $sort->sort($this->studentDetails, $this->sortKey);
        $this->printOutput($sortedArray, $this->subjects);
    }
}
