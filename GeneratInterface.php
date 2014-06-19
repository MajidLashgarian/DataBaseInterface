<?php

class GeneratInterface{

	private $_connection = null ; 

	public function __construct($connection){
		$this->_connection = $connection ; 
	}
	
	public function getConnection(){
		return $this->_connection ; 
	}

	public function generateInterface(){
         $result = $this->getConnection()->query("SHOW Procedure status;");
		 $methodName = get_class($this->getConnection()); 
		 $DBName = $this->getConnection()->getDBName(); 
         $file = "Interface/$DBName.php" ;
         $handler = fopen($file , "w+");
         $stream = "" ;
         $stream.="<?php \n" ;
         $stream.="/**\n* $DBName class \n*\n* This class is interface of $DBName Database ... in hameye sp ha ro dare ... \n*\n*\n* @copyright  2014 Houshmand Rayan Datis\n*\n*\n*\n* @license    CopyRight Reseved for Houshmand Rayan Datis 2014 \n*\n*\n*\n* @version        CVS: 1.0  \n*\n* @author     Majid lashgarian&lt;majid@lashgarian.com&gt;\n*\n*\n*\n* @since      File available since Release 1.0\n*\n*\n*\n*/\n";
         $stream.="require_once 'PDO/PDOConnection.php';\n";
		 $stream.="require_once 'Mysqli/MySqliDBConnection.php';\n" ; 
         $stream.="/**\n*This class is interface for $DBName DataBase ... \n*\n**/\n";
         $stream.="class $DBName extends $methodName{ \n" ;
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
             $file = "Classes/$row[0].php";
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
         echo "</pre>pre>";
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
