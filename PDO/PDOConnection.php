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
		"database" => "KidsCollege" , 
		"server" => "localhost" , 
		"user" => "root" ,
		"pass" => "asdQWE123" ,
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

	/**
	 *
	 */
	public function generateDataBaseClass(){
		$result = $this->query("SHOW Procedure status;");
		
		$file = "DBInterface/KidsCollege.php" ; 
		$handler = fopen($file , "w+"); 
	    $stream = "" ; 	
		$stream.="<?php \n" ;
		$stream.="/**\n* Kids Collage class \n*\n* This class is interface of Kids Collage ... in hameye sp ha ro dare ... \n*\n*\n* @copyright  2014 Houshmand Rayan Datis\n*\n*\n*\n* @license    CopyRight Reseved for Houshmand Rayan Datis 2014 \n*\n*\n*\n* @version    CVS: 1.0  \n*\n* @author     Majid lashgarian&lt;majid@lashgarian.com&gt;\n*\n*\n*\n* @since      File available since Release 1.0\n*\n*\n*\n*/\n"; 	
		$stream.="require_once 'DBInterface/PDO/PDOConnection.php';\n";
		$stream.="/**\n*This class is interface for Kids College DataBase ... \n*\n**/\n";
		$stream.="class KidsCollege extends PDOConnection{ \n" ;
		foreach($result as $row){
			$stream.="\n";
		    $stream.= "\tpublic function ".$row[1]."(\$arg){\n\t\t\$query = \$this->callSP( \"$row[1]\", \$arg );\n\t\t\$result = \$this->query(\$query);\n\t\treturn \$result; \n\t}";; 	
			$stream.="\n"; 
		}
		$stream.="}\n"; 
		$stream.="?>";
	    fwrite( $handler , $stream ) ; 	
	}

	public function generateClass(){
		echo "<pre>";
		
		$result = $this->query("Show tables;");	
		foreach($result as $row ){
			$file = "Object/$row[0].php";
			$handler = fopen($file , "w+");
		   	$stream = "";
			$stream .= "<?php\n" ;
			
			$stream .=  "\nclass $row[0] { \n"; 
			$info = $this->query("desc $row[0];"); 
			foreach($info as $r){
				$stream .= "\n\tprivate \$_$r[0] ;";
				$stream .= "\n\tpublic function get$r[0](){\n\t\treturn \$this->_$r[0];\n\t}";
				$stream .= "\n\tpublic function set$r[0](\$".$r[0]."){\n\t\t\$this->_$r[0] = \$$r[0]; \n\t}\n\n";  
			}
			$stream .= "\n}\n" ; 
			fwrite($handler , $stream); 
		}
		echo "</pre>"; 
	}

	public function callSP($spname , $arrg){
	    $query = "CALL ".$spname."(";
	    $length = count($arrg) ;
	    /**
	     * I Want to generate this string :  "arg1" , "arg2" , .... "argn"
	     */
	    for( $i =0 ; $i < $length ;$i++){
	        $query .= $arrg[$i];
	        /**
	         * \Brief this if genereate "," between arguman and if we have one arguman we don't put that.
	         */
	        if( $i+1 != $length )
	            $query.="," ;
	        }
            $query.=");";
	       //$this->d($query);     
	      return $query;
	 }
}
?>
