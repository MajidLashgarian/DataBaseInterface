<?php 

require_once 'Debug/Debug.php';
/**
 * This class connect to DB which informed in DBInfo object
 * and copy an instance of connection in $con object
 * @see openConnection
 */
class MySqliDBConnection extends Debug{

	/**
	 * This object save DataBase information.
	 * Name -> name of dataBase 
	 * Server -> Mysql server addres e.g. localhost or 241.234.12.32:8080 or 127.0.0.1:port
	 * port -> port number of Mysql server in server address
	 * user -> UserName of Mysql database which permit to access the database
	 * pass -> Password for username of mysql databae 
	 */
	private $info = array(
		"database"=>"",
		"server"=>"localhost",
		"port"=>"8889",
		"user"=>"root",
		"pass"=>""
	);


	/**
	 * connection instance 
	 */
	private $con = null ;


	/**
	 * Error number of Mysql data base - if Mysqli_* function has error
	 */
	private $errno = 0 ;

	/**
	 * open a connection to MYSQL server with mysqli libraryfunction   
	 * <a href="http://www.php.net//manual/en/book.mysqli.php">MySqli library </a>
	 */
	public function openConnection(){
		$this->con = mysqli_connect($this->info["server"] , $this->info["user"] , $this->info["pass"], $this->info["database"] ); 
	    $this->errno = mysqli_connect_errno(); 	
		if(mysqli_connect_errno()) 
			return false; 
		else 
			return true;
	}

	/**
	 * This function return connection status ..
	 * is connection open and didn't have any error return true otherwise this function return false  
	 */
	public function isCreated(){
		if($this->con==null and $this->errno){
			return false;
		}
		else 
			return true ; 
	}

	/**
	 * Close connection stream 
	 */
	public function closeConnection(){
		if($this->con)
			mysqli_close($this->con);
		$this->con = null ;
		$this->errno=mysqli_connect_errno();
	}

	/**
	 * return connection instance 
	 */
	public function getConnection(){
		return $this->con; 
	}	

	/**
	 * return error number of error that occur in last transaction with mysqli lbrary ;
	 */
	public function getErrno(){
		return $this->errno; 
	}

	public function exec($query){
		$this->con->query($query);
	}

	public function query($query){
		$result = array() ; 
		$this->openConnection(); 
		$result = $this->con->query($query); 
		if(!$result){
             $this->d("MySql Can't Run Query<br> Error is : ". $this->con->error ."<br> query is : <br>   ".$query ."<br> and result is: <br>".var_dump($result));
		}
		$result = $this->convertResultToArray($result);
		$this->closeConnection(); 
		return $result; 
	}

	/**
	* Convert Result of Query funciton in mysqli to rows table 
	*/
	private function convertResultToArray($result){
		//create array for save rows each column as  a data like this "column_name"=>"column_value" 
		$rows=array();
		/**
		* get number of rows in table and fetch each row as a object and assign it to rows array 
		 */
		$tempRow = array(); 
		for($i=0;$i<$result->num_rows; $i++ ){
			$rows[$i] = $result->fetch_object();
			$tempRow[] = array(); 
			foreach($rows[$i] as $r)
				$tempRow[$i][] = $r;
		}
		$rows = $tempRow ;
		/**
		* It's for this error : Commands out of sync; you can't run this command now
		*  Every stored procedure returns at least two results
		*      - one (or many) actual results
		*      - one empty result to tell the client there are no more results.
		*  You have to use mysqli_more_results()/mysqli_next_result() to clean them.
		*  If you don't want no more results but one, you can make it like this
		*/
		while($this->con->more_results())
		{
 			$this->con->next_result();
			if($res = $this->con->store_result())
				$res->free();
		} 
		return $rows;
	}
	

	public function getDBName(){
		return $this->info["database"];
	}
}


?>
