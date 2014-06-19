DataBaseInterface
=================

This is a Data Base interface for mysql with php


 -------------------------------------------------------------------
 -
 -                     Code Structure
 -
 ------------------------------------------------------------------
 /Document  -- Put your refrence or document here
     /Requirmnet  -- you can find requirment of software here please before start your main task check it for newest changes.
     /Diagram  -- All prepare Diagrams put in this folder.
 /DataBase  -- latest version of DataBase is here
 
 ------------------------------------------------------------------
 -
 -                   Documentation Rule
 -
 -------------------------------------------------------------------
 We Use Doxygen rule for document our code.
 you can find full help for c like language doxygen here : http://www.stack.nl/~dimitri/doxygen/manual/docblocks.html
 Also, you can find some Document in Document Folder
 
 -------------------------------------------------------------------
 -
 -                       Code Rule
 -
 ------------------------------------------------------------------
 
 1. HTML Code Style
 
 2. CSS Code Style
 
 3. JavaScript Code Style
     - Variable :
 
     - Function :
 
     - Exception Handeling :
 
     - Debug :
 
     - Document :
 
     - Indent Style :
 
     - Header :
 
     - Constant :
 
4. PHP Code Style
     - Variable :
         Please get correct and meaningful name for you function or variable.
         Put your variable Name in CamelCase manner e.g. youVariable.
 
     - Function :
         your function name also like variable must be write in camle case format e.g private function yourFunction();
         Each Class or function should be preceded by a comment block. That is, a block of information about the class or function. Here we show a typical comment block showing what the function does, the author, what args the function takes, and what it returns.
         PLEASE USE THIS KIND OF COMMENT.
         /**
         *
         * Function to increment a number
         *
         * @author Kevin Waterson <-kevin@phpro.org->
         *
         * @copyright Kevin Waterson 2006
         *
         * @access private
         *
         * @var INT The number to be incremented
         *
         * @return INT The incremented number
         */
		 private function incNum($num){
             /*** increment the number ***/
             return $num++;
         }
 
     - Class
         your class name must start with upper case letter and followed by camel case rule like this : class Person or class DataBaseConnection.
         Your attribute must start with _ like this : private $_ID or private $_numForMan;
 
     - Exception Handeling:
         for all of critical section code please use try/catch and for section which u think it may cause error user throw for throwing exception
 
     - Debug :
         for debugging in php please use Debug class in Debug.php file.
         This class has several function for debug you code like print on screen or in file.
         Also you can use log function for logging in all time.
         Feel free to develope this file.
 
     - Document
 
 
     - INDENT STYLE
         **this is most important section please read carefully and develop followed by rule**
         We Use the K&R style which is one of famous style in world.
         The K&R style is named after Kernighan & Ritchie of c programming fame. Thier examples used this style of code with eight spaces or a tab and looks like this
         <?php
         if (condition) {
             do_something();
         }
         ?>
 
     - HEADER
         Please use this header in all of your file(file you created)
         if you revise or developed a file which created by another team member put your information in author only
         /**
         * Database class
         *
         * Database abstraction layer for connecting to MySQL ...
         *
         * @copyright  2014 Houshmand Rayan Datis
         *
         * @version    CVS: $Id:$
         *
         * @author     Majid lashgarian&lt;majid@lashgarian.com&gt;
         *
         * @since      File available since Release 1.0
         *
         */
 
     - CONSTANT
         Wirte your CONSTANT variable in upper case. and User _ before and after word. e.g _CONSTANT_ , _CONNECTION_IP_

