<?php

namespace App\Console\Commands;

use App\Http\Controllers\StudentController;
use Illuminate\Console\Command;

class Student extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'student';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $studentDetails = [];
        $count  = 0;
        $students = [];
        $subjects = [];
        $count = $this->ask('Enter number of students', 0);
        if ($count)
        {
            for ($i = 0; $i < $count; $i++)
            {
                $input = $this->ask('Enter name of STUDENT or LEAVE BLANK and hit return to exit', false);          //Reading input students name entered by user
                if ($input)
                    array_push($students, $input);
                else
                    break;
            }
        }

        echo "------------------------------------------------------------\r\n\r\n";

        $count = $this->ask('Enter number of subjects', 0);
        if($count)
        {
            for ($i = 0; $i < $count; $i++)
            {
                $input = $this->ask('Enter name of SUBJECT or LEAVE BLANK and hit return to exit', false);          //Reading input students name entered by user
                if ($input)
                    array_push($subjects, $input);
                else
                    break;
            }
        }

        echo "------------------------------------------------------------\r\n\r\n";

        /*
         * For taking marks of each student for each subject
         */
        foreach ($students as $student) {                           //Iterating over students array
            $details = [];                                          //Array for storing student's detail
            echo "Enter marks for student $student:\r\n";
            $details['name'] = $student;                            //Assigning student name
            $details['marks'] = [];                                 //Array for storing student's marks for each subject
            $details['total'] = 0;                                  //For storing totral marks, initialising with 0
            foreach ($subjects as $subject) {
                $marks = $this->ask('Enter marks of '.$subject, false);         //Input for taking marks from user of each subject
                if (!$marks)
                    $marks = 0;                                                 //If marks is not enterd assuming 0
                array_push($details['marks'], $marks);                          //Pushing marks into $details['marks'] array
                $details['total'] += $marks;                                    //Taking sum of the marks
            }
            array_push($studentDetails, $details);                              //Pushin details into array $studentDetails
        }

        echo "Sort list on basis of SUBJECT or TOTAL MARKS\r\n";
        echo "1...SUBJECT\r\n";
        echo "2...TOTAL MARKS\r\n";
        $sortBasedOn = $this->ask('Your selection', 2);

        switch ($sortBasedOn)
        {
            case 1:
                $sortKey = 'student';
                break;
            case 2:
                $sortKey = 'total';
                break;
            default:
                $sortKey = 'total';
        }

        echo "Sort list in ASCENDING ORDER or DESCINDING ORDER\r\n";
        echo "1...ASCENDING ORDER\r\n";
        echo "2...DESCINDING ORDER\r\n";
        $sortOrder = $this->ask('Your Selection', 1);

        switch ($sortOrder){
            case 1:
                $sortOrder = 1;
                break;
            case 2:
                $sortOrder = -1;
                break;
            default:
                $sortOrder = 1;
        }

        $studentObj = new StudentController($studentDetails, $subjects);        //Instantiating class StudentController and passing array studentDetails, $subjects
        //$studentObj->generateResult();                                                 //Calling function execute

    }
}
