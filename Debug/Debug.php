<?php
/**
 * Debug Class for Show Debug and Log in Debug mode only
 * We have varius function there 
 * We can save log in file or show them in HTML or any where we want
 */
class Debug{

	public $DebugMode = true;

	/**
	 * constructor function for Debug class
	 */
	public function __construct(){

	}
	
	/**
	 * Debug file for show comment with echo 
	 */
	public function d( $message ){

		if($this->DebugMode == false )
			return ;
		/**
		 *
		 */
	    $bt = debug_backtrace();
		$caller = array_shift($bt);
		
		echo "<br>" ; 
		echo "----------------------------------------" ;
		echo "<br>";
		echo "DEBUG MESSAGE : ";
		echo "<br>";
		echo $message ;	
		echo "<br>";
		echo "File is :".$caller['file']; 
		echo "<br>";
		echo "Line is :".$caller['line'];
		echo "<br>";
		echo "----------------------------------------" ; 
	
	}
}
?>
