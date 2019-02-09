
<?php
	//include connection file 
	include_once("connection.php");
	
	$db = new dbObj();
	$connString =  $db->getConnstring();

	$params = $_REQUEST;
	
	$action = isset($params['action']) != '' ? $params['action'] : '';
	$empCls = new Table($connString);

	switch($action) {

	 case 'edit':
		$empCls->updateBooking($params);
	 break;
	 case 'delete':
		$empCls->deleteBooking($params);
	 break;
	 default:
	 $empCls->getBooking($params);
	 return;
	}
	
	class Table {
	protected $conn;
	protected $data = array();
	function __construct($connString) {
		$this->conn = $connString;
	}
	
	public function getBooking($params) {
		
		$this->data = $this->getRecords($params);
		
		echo json_encode($this->data);
	}

	
	
	function getRecords($params) {
		$rp = isset($params['rowCount']) ? $params['rowCount'] : 10;
		
		if (isset($params['current'])) { $page  = $params['current']; } else { $page=1; };  
        $start_from = ($page-1) * $rp;
		
		$sql = $sqlRec = $sqlTot = $where = '';
		
		if( !empty($params['searchPhrase']) ) {   
			$where .=" WHERE ";
			$where .=" ( userName  LIKE '".$params['searchPhrase']."%' ";

			$where .=" OR sizeOfTable LIKE '".$params['searchPhrase']."%' )";
	   }
	   if( !empty($params['sort']) ) {  
			$where .=" ORDER By ".key($params['sort']) .' '.current($params['sort'])." ";
		}
	   // getting total number records without any search
		$sql = "SELECT * FROM `reseverse`";
		$sqlTot .= $sql;
		$sqlRec .= $sql;
		
		//concatenate search sql if value exist
		if(isset($where) && $where != '') {

			$sqlTot .= $where;
			$sqlRec .= $where;
		}
		if ($rp!=-1)
		$sqlRec .= " LIMIT ". $start_from .",".$rp;
		
		
		$qtot = mysqli_query($this->conn, $sqlTot) or die("error to fetch tot booking data");
		$queryRecords = mysqli_query($this->conn, $sqlRec) or die("error to fetch booking data");
		
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
	function updateBooking($params) {
		$data = array();
		$sql = "Update `reseverse` set sizeOfTable = '" . $params["state"] ."' WHERE id='".$_POST["edit_id"]."'";
		
		echo $result = mysqli_query($this->conn, $sql) or die("error to update employee data");
	}
	
	function deleteBooking($params) {
		$data = array();
		$sql = "delete from `reseverse` WHERE id='".$params["id"]."'";
		
		echo $result = mysqli_query($this->conn, $sql) or die("error to delete employee data");
	}
}
?>
	