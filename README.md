To run this project requires PHP version 5.6 or above.

This is the CLI based programs.

This task is completed using the **Strategy Design Pattern**.

Following are the steps to run this program:
1. Open console and cd into "unocoin_assignment_second_round" directory and type:

        php artisan student

2. Then you are required to input number of students. Invalid input will exit the program.

3. Then you are required to input students name. To stop entering students name leave the input field blank and hit return (enter).

4. Then you are required to input number of students. Invalid input will exit the program.

5. Then you are required to input subjects name. To stop entering subjects leave the input field blank and hit return (enter).

6. Then you are requird to enter subject marks for each student for each subject. Default is marks is 0.

7. Then enter subjects or total marks on which the list will be sorted.

8. Then enter the order to sort the list ascending or descending order.

9. Then you have to select a sorting algorithm to sort the result from the algorithm options: Quicksort, Mergesort, Selection Sort, Heapsort.

10. Then it will print the output after performing quick sort.

11. If you want to again sort with different options press 'Y' else 'N' to exit. 

Example output

root@ubuntu:/var/www/unocoin# php artisan student

 Enter name of STUDENT or LEAVE BLANK and hit return to exit []:
 > Raj

 Enter name of STUDENT or LEAVE BLANK and hit return to exit []:
 > Simran

 Enter name of STUDENT or LEAVE BLANK and hit return to exit []:
 > Vinod

 Enter name of STUDENT or LEAVE BLANK and hit return to exit []:
 >

------------------------------------------------------------
 Enter name of SUBJECTS or LEAVE BLANK and hit return to exit []:
 > English

 Enter name of SUBJECTS or LEAVE BLANK and hit return to exit []:
 > Math

 Enter name of SUBJECTS or LEAVE BLANK and hit return to exit []:
 > Science

 Enter name of SUBJECTS or LEAVE BLANK and hit return to exit []:
 >

------------------------------------------------------------
Enter marks for student Raj:
 Enter marks of English []:
 > 30

 Enter marks of Math []:
 > 50

 Enter marks of Science []:
 > 40

Enter marks for student Simran:
 Enter marks of English []:
 > 50

 Enter marks of Math []:
 > 70

 Enter marks of Science []:
 > 50

Enter marks for student Vinod:
 Enter marks of English []:
 > 40

 Enter marks of Math []:
 > 40

 Enter marks of Science []:
 > 30
 
 Sort list on basis of SUBJECT or TOTAL MARKS<br/>
 1...SUBJECT<br/>
 2...TOTAL MARKS<br/>
  Your selection [2]:
  > 3

Sort list in ASCENDING ORDER or DESCINDING ORDER<br/>
1...ASCENDING ORDER<br/>
2...DESCENDING ORDER<br/>
 Your Selection [1]:
 > 1

Select SORTING ALGORITHM from below algorithms<br/>
1...QUICKSORT<br/>
2...MERGESORT<br/>
3...SELECTION SORT<br/>
4...HEAPSORT<br/>
 Your Selection [1]:
 > 2

Rank      |Name      |English   |Math      |Science   |Total Marks<br/>
____________________________________________________________________<br/>
1         |Simran    |50        |70        |50        |170<br/>
2         |Raj       |30        |50        |40        |120<br/>
3         |Vinod     |40        |40        |30        |110<br/>
