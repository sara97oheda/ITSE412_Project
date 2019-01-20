<?php
//load and initialize database class
require_once 'DB.class.php';
$db = new DB();

$tblName = 'users';

if(($_POST['action'] == 'edit') && !empty($_POST['id'])){
    alert('hi cnv');
    //update data
    $userData = array(
        'usename' => $_POST['username'],
        'pass' => $_POST['passWord'],
        'email' => $_POST['Email'],
        'level' => $_POST['typeA']
    );
    $condition = array('id' => $_POST['id']);
    $update = $db->update($tblName, $userData, $condition);
    if($update){
        $returnData = array(
            'status' => 'ok',
            'msg' => 'User data has been updated successfully.',
            'data' => $userData
        );
    }else{
        $returnData = array(
            'status' => 'error',
            'msg' => 'Some problem occurred, please try again.',
            'data' => ''
        );
    }
    
    echo json_encode($returnData);

}
elseif(($_POST['action'] == 'delete') && !empty($_POST['id'])){
    //delete data
    
   
    $condition = array('id' => $_POST['id']);
    $delete = $db->delete($tblName, $condition);
    if($delete){
        $returnData = array(
            'status' => 'ok',
            'msg' => 'User data has been deleted successfully.'
        );
    }else{
        $returnData = array(
            'status' => 'error',
            'msg' => 'Some problem occurred, please try again.'
        );
    }
    
    echo json_encode($returnData);

    //add

}

/*elseif($_POST['action'] == 'add'){
    //add data
    $userData = array(
        'id' => $_POST['id'],
        'first_name' => $_POST['first_name'],
        'last_name' => $_POST['last_name'],
        'email' => $_POST['email']
    );
    $add = $db->Add()($tblName, $userData);
    if($add){
        $returnData = array(
            'status' => 'ok',
            'msg' => 'User data has been updated successfully.',
            'data' => $userData
        );
    }else{
        $returnData = array(
            'status' => 'error',
            'msg' => 'Some problem occurred, please try again.',
            'data' => ''
        );
    }
    
    echo json_encode($returnData);
}*/
die();
?>
