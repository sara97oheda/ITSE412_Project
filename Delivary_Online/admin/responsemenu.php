
<?php
	//include connection file 
	include_once("connection.php");
	
	$db = new dbObj();
	$connString =  $db->getConnstring();

	$params = $_REQUEST;
	
	$action = isset($params['action']) != '' ? $params['action'] : '';
	$empCls = new Menu($connString);

	switch($action) {
	 case 'add':
		$empCls->insertMenu($params);
	 break;
	 case 'edit':
		$empCls->updateMenu($params);
	 break;
	 case 'delete':
		$empCls->deleteMenu($params);
	 break;
	 default:
	 $empCls->getMenu($params);
	 return;
	}
	
	class Menu {
	protected $conn;
	protected $data = array();
	function __construct($connString) {
		$this->conn = $connString;
	}
	
	public function getMenu($params) {
		
		$this->data = $this->getRecords($params);
		
		echo json_encode($this->data);
	}
	function insertMenu($params) {
		$data = array();;
		$sql = "INSERT INTO `menu` (nameCook, typeMeal, image,price) VALUES('" . $params["name"] . "', '" . $params["salary"] . "','" . $params["age"] . "',,'" . $params["price"] . "');  ";
		
		echo $result = mysqli_query($this->conn, $sql) or die("error to insert employee data");
		
	}
	
	
	function getRecords($params) {
		$rp = isset($params['rowCount']) ? $params['rowCount'] : 10;
		
		if (isset($params['current'])) { $page  = $params['current']; } else { $page=1; };  
        $start_from = ($page-1) * $rp;
		
		$sql = $sqlRec = $sqlTot = $where = '';
		
		if( !empty($params['searchPhrase']) ) {   
			$where .=" WHERE ";
			$where .=" ( nameCook LIKE '".$params['searchPhrase']."%' ";
			//$where .=" OR employee_salary LIKE '".$params['searchPhrase']."%' ";

			$where .=" OR typeMeal LIKE '".$params['searchPhrase']."%' )";
	   }
	   if( !empty($params['sort']) ) {  
			$where .=" ORDER By ".key($params['sort']) .' '.current($params['sort'])." ";
		}
	   // getting total number records without any search
		$sql = "SELECT * FROM `menu` ";
		$sqlTot .= $sql;
		$sqlRec .= $sql;
		
		//concatenate search sql if value exist
		if(isset($where) && $where != '') {

			$sqlTot .= $where;
			$sqlRec .= $where;
		}
		if ($rp!=-1)
		$sqlRec .= " LIMIT ". $start_from .",".$rp;
		
		
		$qtot = mysqli_query($this->conn, $sqlTot) or die("error to fetch tot employees data");
		$queryRecords = mysqli_query($this->conn, $sqlRec) or die("error to fetch employees data");
		
		while( $row = mysqli_fetch_assoc($queryRecords) ) { 
			$data[] = $row;
		}

		$json_data = array(
			"current"            => intval($params['current']), 
			"rowCount"            => 10, 			
			"total"    => intval($qtot->num_rows),
			"rows"            => $data   // total data array
			);
		
		return $json_data;
	}
	function updateMenu($params) {
		$data = array();
		//print_R($_POST);die;
		$sql = "Update `menu` set typeCook = '" . $params["edit_name"] . "', typeMeal='" . $params["edit_salary"]."', image='" . $params["edit_age"] ."', price='" . $params["edit_price"] . "' WHERE id='".$_POST["edit_id"]."'";
		
		echo $result = mysqli_query($this->conn, $sql) or die("error to update employee data");
	}
	
	function deleteMenu($params) {
		$data = array();
		//print_R($_POST);die;
		$sql = "delete from `menu` WHERE id='".$params["id"]."'";
		
		echo $result = mysqli_query($this->conn, $sql) or die("error to delete employee data");
	}
}
?>
	