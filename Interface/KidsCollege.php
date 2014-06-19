<?php 
/**
* KidsCollege class 
*
* This class is interface of KidsCollege Database ... in hameye sp ha ro dare ... 
*
*
* @copyright  2014 Houshmand Rayan Datis
*
*
*
* @license    CopyRight Reseved for Houshmand Rayan Datis 2014 
*
*
*
* @version        CVS: 1.0  
*
* @author     Majid lashgarian&lt;majid@lashgarian.com&gt;
*
*
*
* @since      File available since Release 1.0
*
*
*
*/
require_once 'PDO/PDOConnection.php';
require_once 'Mysqli/MySqliDBConnection.php';
/**
*This class is interface for KidsCollege DataBase ... 
*
**/
class KidsCollege extends PDOConnection{ 

	public function Additional_information_GetAll($arg){
		$query = $this->callSP( "Additional_information_GetAll", $arg );
		$result = $this->query($query);
		return $result; 
	}

	public function Additional_information_Insert($arg){
		$query = $this->callSP( "Additional_information_Insert", $arg );
		$result = $this->query($query);
		return $result; 
	}

	public function Additional_information_Search($arg){
		$query = $this->callSP( "Additional_information_Search", $arg );
		$result = $this->query($query);
		return $result; 
	}

	public function Additional_information_Search_ID($arg){
		$query = $this->callSP( "Additional_information_Search_ID", $arg );
		$result = $this->query($query);
		return $result; 
	}

	public function Address_GetAll($arg){
		$query = $this->callSP( "Address_GetAll", $arg );
		$result = $this->query($query);
		return $result; 
	}

	public function Address_Insert($arg){
		$query = $this->callSP( "Address_Insert", $arg );
		$result = $this->query($query);
		return $result; 
	}

	public function Address_Search($arg){
		$query = $this->callSP( "Address_Search", $arg );
		$result = $this->query($query);
		return $result; 
	}

	public function Address_Search_ID($arg){
		$query = $this->callSP( "Address_Search_ID", $arg );
		$result = $this->query($query);
		return $result; 
	}

	public function Announcment_GetAll($arg){
		$query = $this->callSP( "Announcment_GetAll", $arg );
		$result = $this->query($query);
		return $result; 
	}

	public function Announcment_Insert($arg){
		$query = $this->callSP( "Announcment_Insert", $arg );
		$result = $this->query($query);
		return $result; 
	}

	public function Announcment_Search($arg){
		$query = $this->callSP( "Announcment_Search", $arg );
		$result = $this->query($query);
		return $result; 
	}

	public function Announcment_Search_ID($arg){
		$query = $this->callSP( "Announcment_Search_ID", $arg );
		$result = $this->query($query);
		return $result; 
	}

	public function Announcment_Show_GetAll($arg){
		$query = $this->callSP( "Announcment_Show_GetAll", $arg );
		$result = $this->query($query);
		return $result; 
	}

	public function Announcment_Show_Insert($arg){
		$query = $this->callSP( "Announcment_Show_Insert", $arg );
		$result = $this->query($query);
		return $result; 
	}

	public function Announcment_Show_Search($arg){
		$query = $this->callSP( "Announcment_Show_Search", $arg );
		$result = $this->query($query);
		return $result; 
	}

	public function Announcment_Show_Search_ID($arg){
		$query = $this->callSP( "Announcment_Show_Search_ID", $arg );
		$result = $this->query($query);
		return $result; 
	}

	public function Bill_Discount_GetAll($arg){
		$query = $this->callSP( "Bill_Discount_GetAll", $arg );
		$result = $this->query($query);
		return $result; 
	}

	public function Bill_Discount_Insert($arg){
		$query = $this->callSP( "Bill_Discount_Insert", $arg );
		$result = $this->query($query);
		return $result; 
	}

	public function Bill_Discount_Search($arg){
		$query = $this->callSP( "Bill_Discount_Search", $arg );
		$result = $this->query($query);
		return $result; 
	}

	public function Bill_Discount_Search_ID($arg){
		$query = $this->callSP( "Bill_Discount_Search_ID", $arg );
		$result = $this->query($query);
		return $result; 
	}

	public function Bill_GetAll($arg){
		$query = $this->callSP( "Bill_GetAll", $arg );
		$result = $this->query($query);
		return $result; 
	}

	public function Bill_Insert($arg){
		$query = $this->callSP( "Bill_Insert", $arg );
		$result = $this->query($query);
		return $result; 
	}

	public function Bill_Search($arg){
		$query = $this->callSP( "Bill_Search", $arg );
		$result = $this->query($query);
		return $result; 
	}

	public function Bill_Search_ID($arg){
		$query = $this->callSP( "Bill_Search_ID", $arg );
		$result = $this->query($query);
		return $result; 
	}

	public function Child_Bill_GetAll($arg){
		$query = $this->callSP( "Child_Bill_GetAll", $arg );
		$result = $this->query($query);
		return $result; 
	}

	public function Child_Bill_Insert($arg){
		$query = $this->callSP( "Child_Bill_Insert", $arg );
		$result = $this->query($query);
		return $result; 
	}

	public function Child_Bill_Search($arg){
		$query = $this->callSP( "Child_Bill_Search", $arg );
		$result = $this->query($query);
		return $result; 
	}

	public function Child_Bill_Search_ID($arg){
		$query = $this->callSP( "Child_Bill_Search_ID", $arg );
		$result = $this->query($query);
		return $result; 
	}

	public function Class_Child_GetAll($arg){
		$query = $this->callSP( "Class_Child_GetAll", $arg );
		$result = $this->query($query);
		return $result; 
	}

	public function Class_Child_Insert($arg){
		$query = $this->callSP( "Class_Child_Insert", $arg );
		$result = $this->query($query);
		return $result; 
	}

	public function Class_Child_Search($arg){
		$query = $this->callSP( "Class_Child_Search", $arg );
		$result = $this->query($query);
		return $result; 
	}

	public function Class_Child_Search_ID($arg){
		$query = $this->callSP( "Class_Child_Search_ID", $arg );
		$result = $this->query($query);
		return $result; 
	}

	public function Class_Teacher_GetAll($arg){
		$query = $this->callSP( "Class_Teacher_GetAll", $arg );
		$result = $this->query($query);
		return $result; 
	}

	public function Class_Teacher_Insert($arg){
		$query = $this->callSP( "Class_Teacher_Insert", $arg );
		$result = $this->query($query);
		return $result; 
	}

	public function Class_Teacher_Search($arg){
		$query = $this->callSP( "Class_Teacher_Search", $arg );
		$result = $this->query($query);
		return $result; 
	}

	public function Class_Teacher_Search_ID($arg){
		$query = $this->callSP( "Class_Teacher_Search_ID", $arg );
		$result = $this->query($query);
		return $result; 
	}

	public function Contact_GetAll($arg){
		$query = $this->callSP( "Contact_GetAll", $arg );
		$result = $this->query($query);
		return $result; 
	}

	public function Contact_Insert($arg){
		$query = $this->callSP( "Contact_Insert", $arg );
		$result = $this->query($query);
		return $result; 
	}

	public function Contact_Search($arg){
		$query = $this->callSP( "Contact_Search", $arg );
		$result = $this->query($query);
		return $result; 
	}

	public function Contact_Search_ID($arg){
		$query = $this->callSP( "Contact_Search_ID", $arg );
		$result = $this->query($query);
		return $result; 
	}

	public function Contract_Encouragment_GetAll($arg){
		$query = $this->callSP( "Contract_Encouragment_GetAll", $arg );
		$result = $this->query($query);
		return $result; 
	}

	public function Contract_Encouragment_Insert($arg){
		$query = $this->callSP( "Contract_Encouragment_Insert", $arg );
		$result = $this->query($query);
		return $result; 
	}

	public function Contract_Encouragment_Search($arg){
		$query = $this->callSP( "Contract_Encouragment_Search", $arg );
		$result = $this->query($query);
		return $result; 
	}

	public function Contract_Encouragment_Search_ID($arg){
		$query = $this->callSP( "Contract_Encouragment_Search_ID", $arg );
		$result = $this->query($query);
		return $result; 
	}

	public function Contract_GetAll($arg){
		$query = $this->callSP( "Contract_GetAll", $arg );
		$result = $this->query($query);
		return $result; 
	}

	public function Contract_Insert($arg){
		$query = $this->callSP( "Contract_Insert", $arg );
		$result = $this->query($query);
		return $result; 
	}

	public function Contract_Search($arg){
		$query = $this->callSP( "Contract_Search", $arg );
		$result = $this->query($query);
		return $result; 
	}

	public function Contract_Search_ID($arg){
		$query = $this->callSP( "Contract_Search_ID", $arg );
		$result = $this->query($query);
		return $result; 
	}

	public function Contract_Subtraction_GetAll($arg){
		$query = $this->callSP( "Contract_Subtraction_GetAll", $arg );
		$result = $this->query($query);
		return $result; 
	}

	public function Contract_Subtraction_Insert($arg){
		$query = $this->callSP( "Contract_Subtraction_Insert", $arg );
		$result = $this->query($query);
		return $result; 
	}

	public function Contract_Subtraction_Search($arg){
		$query = $this->callSP( "Contract_Subtraction_Search", $arg );
		$result = $this->query($query);
		return $result; 
	}

	public function Contract_Subtraction_Search_ID($arg){
		$query = $this->callSP( "Contract_Subtraction_Search_ID", $arg );
		$result = $this->query($query);
		return $result; 
	}

	public function Course_Class_GetAll($arg){
		$query = $this->callSP( "Course_Class_GetAll", $arg );
		$result = $this->query($query);
		return $result; 
	}

	public function Course_Class_Insert($arg){
		$query = $this->callSP( "Course_Class_Insert", $arg );
		$result = $this->query($query);
		return $result; 
	}

	public function Course_Class_Search($arg){
		$query = $this->callSP( "Course_Class_Search", $arg );
		$result = $this->query($query);
		return $result; 
	}

	public function Course_Class_Search_ID($arg){
		$query = $this->callSP( "Course_Class_Search_ID", $arg );
		$result = $this->query($query);
		return $result; 
	}

	public function Course_GetAll($arg){
		$query = $this->callSP( "Course_GetAll", $arg );
		$result = $this->query($query);
		return $result; 
	}

	public function Course_Insert($arg){
		$query = $this->callSP( "Course_Insert", $arg );
		$result = $this->query($query);
		return $result; 
	}

	public function Course_Search($arg){
		$query = $this->callSP( "Course_Search", $arg );
		$result = $this->query($query);
		return $result; 
	}

	public function Course_Search_ID($arg){
		$query = $this->callSP( "Course_Search_ID", $arg );
		$result = $this->query($query);
		return $result; 
	}

	public function Discount_GetAll($arg){
		$query = $this->callSP( "Discount_GetAll", $arg );
		$result = $this->query($query);
		return $result; 
	}

	public function Discount_Insert($arg){
		$query = $this->callSP( "Discount_Insert", $arg );
		$result = $this->query($query);
		return $result; 
	}

	public function Discount_Search($arg){
		$query = $this->callSP( "Discount_Search", $arg );
		$result = $this->query($query);
		return $result; 
	}

	public function Discount_Search_WithID($arg){
		$query = $this->callSP( "Discount_Search_WithID", $arg );
		$result = $this->query($query);
		return $result; 
	}

	public function Encouragment_GetAll($arg){
		$query = $this->callSP( "Encouragment_GetAll", $arg );
		$result = $this->query($query);
		return $result; 
	}

	public function Encouragment_Insert($arg){
		$query = $this->callSP( "Encouragment_Insert", $arg );
		$result = $this->query($query);
		return $result; 
	}

	public function Encouragment_Search($arg){
		$query = $this->callSP( "Encouragment_Search", $arg );
		$result = $this->query($query);
		return $result; 
	}

	public function Encouragment_Search_WithID($arg){
		$query = $this->callSP( "Encouragment_Search_WithID", $arg );
		$result = $this->query($query);
		return $result; 
	}

	public function List_Document_GetAll($arg){
		$query = $this->callSP( "List_Document_GetAll", $arg );
		$result = $this->query($query);
		return $result; 
	}

	public function List_Document_Insert($arg){
		$query = $this->callSP( "List_Document_Insert", $arg );
		$result = $this->query($query);
		return $result; 
	}

	public function List_Document_Search($arg){
		$query = $this->callSP( "List_Document_Search", $arg );
		$result = $this->query($query);
		return $result; 
	}

	public function List_Document_Search_ID($arg){
		$query = $this->callSP( "List_Document_Search_ID", $arg );
		$result = $this->query($query);
		return $result; 
	}

	public function List_question_GetAll($arg){
		$query = $this->callSP( "List_question_GetAll", $arg );
		$result = $this->query($query);
		return $result; 
	}

	public function List_question_Insert($arg){
		$query = $this->callSP( "List_question_Insert", $arg );
		$result = $this->query($query);
		return $result; 
	}

	public function List_question_Search($arg){
		$query = $this->callSP( "List_question_Search", $arg );
		$result = $this->query($query);
		return $result; 
	}

	public function List_question_Search_WithID($arg){
		$query = $this->callSP( "List_question_Search_WithID", $arg );
		$result = $this->query($query);
		return $result; 
	}

	public function Name_City_GetAll($arg){
		$query = $this->callSP( "Name_City_GetAll", $arg );
		$result = $this->query($query);
		return $result; 
	}

	public function Name_City_Insert($arg){
		$query = $this->callSP( "Name_City_Insert", $arg );
		$result = $this->query($query);
		return $result; 
	}

	public function Name_City_Search($arg){
		$query = $this->callSP( "Name_City_Search", $arg );
		$result = $this->query($query);
		return $result; 
	}

	public function Name_City_Search_WithID($arg){
		$query = $this->callSP( "Name_City_Search_WithID", $arg );
		$result = $this->query($query);
		return $result; 
	}

	public function Name_Post_GetAll($arg){
		$query = $this->callSP( "Name_Post_GetAll", $arg );
		$result = $this->query($query);
		return $result; 
	}

	public function Name_Post_Insert($arg){
		$query = $this->callSP( "Name_Post_Insert", $arg );
		$result = $this->query($query);
		return $result; 
	}

	public function Name_Post_Search($arg){
		$query = $this->callSP( "Name_Post_Search", $arg );
		$result = $this->query($query);
		return $result; 
	}

	public function Name_Post_Search_WithID($arg){
		$query = $this->callSP( "Name_Post_Search_WithID", $arg );
		$result = $this->query($query);
		return $result; 
	}

	public function Name_State_GetAll($arg){
		$query = $this->callSP( "Name_State_GetAll", $arg );
		$result = $this->query($query);
		return $result; 
	}

	public function Name_State_Insert($arg){
		$query = $this->callSP( "Name_State_Insert", $arg );
		$result = $this->query($query);
		return $result; 
	}

	public function Name_State_Search($arg){
		$query = $this->callSP( "Name_State_Search", $arg );
		$result = $this->query($query);
		return $result; 
	}

	public function Name_State_Search_WithID($arg){
		$query = $this->callSP( "Name_State_Search_WithID", $arg );
		$result = $this->query($query);
		return $result; 
	}

	public function Payment_GetAll($arg){
		$query = $this->callSP( "Payment_GetAll", $arg );
		$result = $this->query($query);
		return $result; 
	}

	public function Payment_Search($arg){
		$query = $this->callSP( "Payment_Search", $arg );
		$result = $this->query($query);
		return $result; 
	}

	public function Payment_Search_ID($arg){
		$query = $this->callSP( "Payment_Search_ID", $arg );
		$result = $this->query($query);
		return $result; 
	}

	public function Person_Address_GetAll($arg){
		$query = $this->callSP( "Person_Address_GetAll", $arg );
		$result = $this->query($query);
		return $result; 
	}

	public function Person_Address_Insert($arg){
		$query = $this->callSP( "Person_Address_Insert", $arg );
		$result = $this->query($query);
		return $result; 
	}

	public function Person_Address_Search($arg){
		$query = $this->callSP( "Person_Address_Search", $arg );
		$result = $this->query($query);
		return $result; 
	}

	public function Person_Address_Search_ID($arg){
		$query = $this->callSP( "Person_Address_Search_ID", $arg );
		$result = $this->query($query);
		return $result; 
	}

	public function Person_Class_GetAll($arg){
		$query = $this->callSP( "Person_Class_GetAll", $arg );
		$result = $this->query($query);
		return $result; 
	}

	public function Person_Class_Insert($arg){
		$query = $this->callSP( "Person_Class_Insert", $arg );
		$result = $this->query($query);
		return $result; 
	}

	public function Person_Class_Search($arg){
		$query = $this->callSP( "Person_Class_Search", $arg );
		$result = $this->query($query);
		return $result; 
	}

	public function Person_Class_Search_ID($arg){
		$query = $this->callSP( "Person_Class_Search_ID", $arg );
		$result = $this->query($query);
		return $result; 
	}

	public function Person_Contact_GetAll($arg){
		$query = $this->callSP( "Person_Contact_GetAll", $arg );
		$result = $this->query($query);
		return $result; 
	}

	public function Person_Contact_Insert($arg){
		$query = $this->callSP( "Person_Contact_Insert", $arg );
		$result = $this->query($query);
		return $result; 
	}

	public function Person_Contact_Search($arg){
		$query = $this->callSP( "Person_Contact_Search", $arg );
		$result = $this->query($query);
		return $result; 
	}

	public function Person_Contact_Search_ID($arg){
		$query = $this->callSP( "Person_Contact_Search_ID", $arg );
		$result = $this->query($query);
		return $result; 
	}

	public function Person_Encouragment_GetAll($arg){
		$query = $this->callSP( "Person_Encouragment_GetAll", $arg );
		$result = $this->query($query);
		return $result; 
	}

	public function Person_Encouragment_Insert($arg){
		$query = $this->callSP( "Person_Encouragment_Insert", $arg );
		$result = $this->query($query);
		return $result; 
	}

	public function Person_Encouragment_Search($arg){
		$query = $this->callSP( "Person_Encouragment_Search", $arg );
		$result = $this->query($query);
		return $result; 
	}

	public function Person_Encouragment_Search_ID($arg){
		$query = $this->callSP( "Person_Encouragment_Search_ID", $arg );
		$result = $this->query($query);
		return $result; 
	}

	public function Person_GetAll($arg){
		$query = $this->callSP( "Person_GetAll", $arg );
		$result = $this->query($query);
		return $result; 
	}

	public function Person_Insert($arg){
		$query = $this->callSP( "Person_Insert", $arg );
		$result = $this->query($query);
		return $result; 
	}

	public function Person_RelationSearch_ID($arg){
		$query = $this->callSP( "Person_RelationSearch_ID", $arg );
		$result = $this->query($query);
		return $result; 
	}

	public function Person_Relation_GetAll($arg){
		$query = $this->callSP( "Person_Relation_GetAll", $arg );
		$result = $this->query($query);
		return $result; 
	}

	public function Person_Relation_Insert($arg){
		$query = $this->callSP( "Person_Relation_Insert", $arg );
		$result = $this->query($query);
		return $result; 
	}

	public function Person_Relation_Search($arg){
		$query = $this->callSP( "Person_Relation_Search", $arg );
		$result = $this->query($query);
		return $result; 
	}

	public function Person_Search($arg){
		$query = $this->callSP( "Person_Search", $arg );
		$result = $this->query($query);
		return $result; 
	}

	public function Person_Search_family($arg){
		$query = $this->callSP( "Person_Search_family", $arg );
		$result = $this->query($query);
		return $result; 
	}

	public function Person_Search_ID($arg){
		$query = $this->callSP( "Person_Search_ID", $arg );
		$result = $this->query($query);
		return $result; 
	}

	public function Person_Search_Name($arg){
		$query = $this->callSP( "Person_Search_Name", $arg );
		$result = $this->query($query);
		return $result; 
	}

	public function Person_Subtraction_GetAll($arg){
		$query = $this->callSP( "Person_Subtraction_GetAll", $arg );
		$result = $this->query($query);
		return $result; 
	}

	public function Person_Subtraction_Insert($arg){
		$query = $this->callSP( "Person_Subtraction_Insert", $arg );
		$result = $this->query($query);
		return $result; 
	}

	public function Person_Subtraction_Search($arg){
		$query = $this->callSP( "Person_Subtraction_Search", $arg );
		$result = $this->query($query);
		return $result; 
	}

	public function Person_Subtraction_Search_ID($arg){
		$query = $this->callSP( "Person_Subtraction_Search_ID", $arg );
		$result = $this->query($query);
		return $result; 
	}

	public function Person_User_GetAll($arg){
		$query = $this->callSP( "Person_User_GetAll", $arg );
		$result = $this->query($query);
		return $result; 
	}

	public function Person_User_Insert($arg){
		$query = $this->callSP( "Person_User_Insert", $arg );
		$result = $this->query($query);
		return $result; 
	}

	public function Person_User_Search($arg){
		$query = $this->callSP( "Person_User_Search", $arg );
		$result = $this->query($query);
		return $result; 
	}

	public function Person_User_Search_ID($arg){
		$query = $this->callSP( "Person_User_Search_ID", $arg );
		$result = $this->query($query);
		return $result; 
	}

	public function PresentAbsence_GetAll($arg){
		$query = $this->callSP( "PresentAbsence_GetAll", $arg );
		$result = $this->query($query);
		return $result; 
	}

	public function PresentAbsence_Insert($arg){
		$query = $this->callSP( "PresentAbsence_Insert", $arg );
		$result = $this->query($query);
		return $result; 
	}

	public function PresentAbsence_Search($arg){
		$query = $this->callSP( "PresentAbsence_Search", $arg );
		$result = $this->query($query);
		return $result; 
	}

	public function PresentAbsence_Search_ID($arg){
		$query = $this->callSP( "PresentAbsence_Search_ID", $arg );
		$result = $this->query($query);
		return $result; 
	}

	public function QA_GetAll($arg){
		$query = $this->callSP( "QA_GetAll", $arg );
		$result = $this->query($query);
		return $result; 
	}

	public function QA_Insert($arg){
		$query = $this->callSP( "QA_Insert", $arg );
		$result = $this->query($query);
		return $result; 
	}

	public function QA_Search($arg){
		$query = $this->callSP( "QA_Search", $arg );
		$result = $this->query($query);
		return $result; 
	}

	public function QA_Search_ID($arg){
		$query = $this->callSP( "QA_Search_ID", $arg );
		$result = $this->query($query);
		return $result; 
	}

	public function Salary_GetAll($arg){
		$query = $this->callSP( "Salary_GetAll", $arg );
		$result = $this->query($query);
		return $result; 
	}

	public function Salary_Insert($arg){
		$query = $this->callSP( "Salary_Insert", $arg );
		$result = $this->query($query);
		return $result; 
	}

	public function Salary_Search($arg){
		$query = $this->callSP( "Salary_Search", $arg );
		$result = $this->query($query);
		return $result; 
	}

	public function Salary_Search_ID($arg){
		$query = $this->callSP( "Salary_Search_ID", $arg );
		$result = $this->query($query);
		return $result; 
	}

	public function Sesstion_GetAll($arg){
		$query = $this->callSP( "Sesstion_GetAll", $arg );
		$result = $this->query($query);
		return $result; 
	}

	public function Sesstion_Insert($arg){
		$query = $this->callSP( "Sesstion_Insert", $arg );
		$result = $this->query($query);
		return $result; 
	}

	public function Sesstion_Search($arg){
		$query = $this->callSP( "Sesstion_Search", $arg );
		$result = $this->query($query);
		return $result; 
	}

	public function Sesstion_Search_ID($arg){
		$query = $this->callSP( "Sesstion_Search_ID", $arg );
		$result = $this->query($query);
		return $result; 
	}

	public function Subtraction_GetAll($arg){
		$query = $this->callSP( "Subtraction_GetAll", $arg );
		$result = $this->query($query);
		return $result; 
	}

	public function Subtraction_Insert($arg){
		$query = $this->callSP( "Subtraction_Insert", $arg );
		$result = $this->query($query);
		return $result; 
	}

	public function Subtraction_Search($arg){
		$query = $this->callSP( "Subtraction_Search", $arg );
		$result = $this->query($query);
		return $result; 
	}

	public function Subtraction_Search_WithID($arg){
		$query = $this->callSP( "Subtraction_Search_WithID", $arg );
		$result = $this->query($query);
		return $result; 
	}

	public function Type_Announcment_GetAll($arg){
		$query = $this->callSP( "Type_Announcment_GetAll", $arg );
		$result = $this->query($query);
		return $result; 
	}

	public function Type_Announcment_Insert($arg){
		$query = $this->callSP( "Type_Announcment_Insert", $arg );
		$result = $this->query($query);
		return $result; 
	}

	public function Type_Announcment_Search($arg){
		$query = $this->callSP( "Type_Announcment_Search", $arg );
		$result = $this->query($query);
		return $result; 
	}

	public function Type_Announcment_Search_WithID($arg){
		$query = $this->callSP( "Type_Announcment_Search_WithID", $arg );
		$result = $this->query($query);
		return $result; 
	}

	public function Type_Contract_GetAll($arg){
		$query = $this->callSP( "Type_Contract_GetAll", $arg );
		$result = $this->query($query);
		return $result; 
	}

	public function Type_Contract_Insert($arg){
		$query = $this->callSP( "Type_Contract_Insert", $arg );
		$result = $this->query($query);
		return $result; 
	}

	public function Type_Contract_Search($arg){
		$query = $this->callSP( "Type_Contract_Search", $arg );
		$result = $this->query($query);
		return $result; 
	}

	public function Type_Contract_Search_WithID($arg){
		$query = $this->callSP( "Type_Contract_Search_WithID", $arg );
		$result = $this->query($query);
		return $result; 
	}

	public function Type_Document_GetAll($arg){
		$query = $this->callSP( "Type_Document_GetAll", $arg );
		$result = $this->query($query);
		return $result; 
	}

	public function Type_Document_Insert($arg){
		$query = $this->callSP( "Type_Document_Insert", $arg );
		$result = $this->query($query);
		return $result; 
	}

	public function Type_Document_Search($arg){
		$query = $this->callSP( "Type_Document_Search", $arg );
		$result = $this->query($query);
		return $result; 
	}

	public function Type_Document_Search_WithID($arg){
		$query = $this->callSP( "Type_Document_Search_WithID", $arg );
		$result = $this->query($query);
		return $result; 
	}

	public function Type_Education_GetAll($arg){
		$query = $this->callSP( "Type_Education_GetAll", $arg );
		$result = $this->query($query);
		return $result; 
	}

	public function Type_Education_Insert($arg){
		$query = $this->callSP( "Type_Education_Insert", $arg );
		$result = $this->query($query);
		return $result; 
	}

	public function Type_Education_Search($arg){
		$query = $this->callSP( "Type_Education_Search", $arg );
		$result = $this->query($query);
		return $result; 
	}

	public function Type_Education_Search_WithID($arg){
		$query = $this->callSP( "Type_Education_Search_WithID", $arg );
		$result = $this->query($query);
		return $result; 
	}

	public function Type_Person_GetAll($arg){
		$query = $this->callSP( "Type_Person_GetAll", $arg );
		$result = $this->query($query);
		return $result; 
	}

	public function Type_Person_Insert($arg){
		$query = $this->callSP( "Type_Person_Insert", $arg );
		$result = $this->query($query);
		return $result; 
	}

	public function Type_Person_Search($arg){
		$query = $this->callSP( "Type_Person_Search", $arg );
		$result = $this->query($query);
		return $result; 
	}

	public function Type_Person_Search_WithID($arg){
		$query = $this->callSP( "Type_Person_Search_WithID", $arg );
		$result = $this->query($query);
		return $result; 
	}

	public function Type_RelationShip_GetAll($arg){
		$query = $this->callSP( "Type_RelationShip_GetAll", $arg );
		$result = $this->query($query);
		return $result; 
	}

	public function Type_RelationShip_Insert($arg){
		$query = $this->callSP( "Type_RelationShip_Insert", $arg );
		$result = $this->query($query);
		return $result; 
	}

	public function Type_RelationShip_Search($arg){
		$query = $this->callSP( "Type_RelationShip_Search", $arg );
		$result = $this->query($query);
		return $result; 
	}

	public function Type_RelationShip_Search_WithID($arg){
		$query = $this->callSP( "Type_RelationShip_Search_WithID", $arg );
		$result = $this->query($query);
		return $result; 
	}

	public function Type_tel_GetAll($arg){
		$query = $this->callSP( "Type_tel_GetAll", $arg );
		$result = $this->query($query);
		return $result; 
	}

	public function Type_tel_Insert($arg){
		$query = $this->callSP( "Type_tel_Insert", $arg );
		$result = $this->query($query);
		return $result; 
	}

	public function Type_tel_Search($arg){
		$query = $this->callSP( "Type_tel_Search", $arg );
		$result = $this->query($query);
		return $result; 
	}

	public function Type_tel_Search_WithID($arg){
		$query = $this->callSP( "Type_tel_Search_WithID", $arg );
		$result = $this->query($query);
		return $result; 
	}

	public function User_GetAll($arg){
		$query = $this->callSP( "User_GetAll", $arg );
		$result = $this->query($query);
		return $result; 
	}

	public function User_Insert($arg){
		$query = $this->callSP( "User_Insert", $arg );
		$result = $this->query($query);
		return $result; 
	}

	public function User_Search($arg){
		$query = $this->callSP( "User_Search", $arg );
		$result = $this->query($query);
		return $result; 
	}

	public function User_Search_User($arg){
		$query = $this->callSP( "User_Search_User", $arg );
		$result = $this->query($query);
		return $result; 
	}

	public function User_Search_WithID($arg){
		$query = $this->callSP( "User_Search_WithID", $arg );
		$result = $this->query($query);
		return $result; 
	}

	public function _PaymentInsert($arg){
		$query = $this->callSP( "_PaymentInsert", $arg );
		$result = $this->query($query);
		return $result; 
	}
}
?>