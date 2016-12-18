To run this project requires PHP version 5.6 or above.

This is the CLI based programs.

Following are the steps to run this program:
1. Open console and cd into "unocoin_assignment_second_round" directory and type:

        php artisan student

2. Then you are required to input number of students name. To stop entering students name leave the input field blank and hit return (enter).

3. Then you are required to input students name. To stop entering students name leave the input field blank and hit return (enter).

3. Then you are required to input subjects name. To stop entering subjects leave the input field blank and hit return (enter).

4. Then you are requird to enter subject marks for each student for each subject.

5. Then it will be print the output after performing quick sort

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


Rank      |Name      |English   |Math      |Science   |Total Marks<br/>
____________________________________________________________________<br/>
1         |Simran    |50        |70        |50        |170<br/>
2         |Raj       |30        |50        |40        |120<br/>
3         |Vinod     |40        |40        |30        |110<br/>
