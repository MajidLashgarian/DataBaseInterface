<?php

require_once 'Debug/Debug.php'; 
/**
 * This class in interface between Database and PHP code which implements with PDO method 
 */
class PDOConnection extends Debug {
	/**
	 * This object contain connection stream.
	 */
	private $con = null ; 
	/**
	 * This array store database info such as username password ,server address and so on ... 
	 */
	private $info = array(
		"database" => "" , 
		"server" => "localhost" , 
		"user" => "root" ,
		"pass" => "root" ,
		"port" => "8889" 
	); 

	public function __construct(){
	
	}

	/**
	 * This function open conection and stored in $con. 
	 */
	public function openConnection(){
		try{
			$connectionString = "mysql:host=".$this->info["server"].";dbname=".$this->info["database"] ; 
			//$this->d($connectionString);
			/**
			 * This line connect to database
			 * \refer http://www.phpro.org/tutorials/Introduction-to-PHP-PDO.html#4.3
			 */
			$this->con = new PDO( $connectionString  , $this->info["user"] , $this->info["pass"] ); 
			//$this->d("DataBase connected ... ");
		}catch(PDOException $e ){
			$this->d( $e->getMessage() ); 	
		}
	
	}

	/**
	 * return connection object
	 */
	public function getConnection(){
		return $this->con ; 
	}

	/**
	 * This function close conenction between Server and databases 
	 * Because of security purpose you must close connection after each connection ; 
	 */
	public function closeConnection(){
		$this->con = null ; 
	}

	//todo : file haye sqli ro ham ba in dota function doros konam va khoroji haye jofteshono yejori doros konam ke ba ye structure khoroji bedan 
	/**
	 * This function run insert and update query
	 */
	public function exec($query){
		$result = null ; //result of executed query this declare here because i want to send it in last line of function because of scope in try block i must declare it here . 
		try{
			$this->openConnection(); 
			$result = $this->con->exec($query); 
			$this->closeConnection(); 
		}catch(PDOException $e ){
			$this->d($ei->getMessage());
		}
		return $result ; 
	}	

	/**
	 * This function run SELECT Like query
	 */
	public function query($query){
		$result = null ; //result of executed query this declare here because i want to send it in last line of function because of scope in try block i must declare it here . 
		try{
			$this->openConnection(); 
			$result= $this->con->query($query);
			$this->closeConnection();
		}catch(PDOException $e){
			$this->d($e->getMessage()); 
		}
		return $result ;
	}

	public function getDBName(){
		return $this->info["database"] ; 
	}
}
?>
