<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--<link rel="stylesheet" type="text/css" media="screen" href="main.css" />-->
    <script src="main.js"></script>
    <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
    <script type="text/javascript" src="jquery-3.2.1.min.js"></script>

</head>
<body>

<?php
//load and initialize database class
require_once 'DB.class.php';
$db = new DB();

//get users from database
$users = $db->getRows('users',array('order_by'=>'id DESC'));

//get status message from session
if(!empty($sessData['status']['msg'])){
    $statusMsg = $sessData['status']['msg'];
    $statusMsgType = $sessData['status']['type'];
    unset($_SESSION['sessData']['status']);
}
?>
<div class="container">
    <div class="row">
        <div class="panel panel-default users-content">
            <table class="table table-bordered" style="direction: rtl;">
                <thead>
                    <tr>
                        <th>الرقم</th>
                        <th>اسم المستخدم</th>
                        <th>كلمة المرور</th>
                        <th>البريد الالكتروني</th>
                        <th>المستوي</th>
                        <th>الحدث</th>
                    </tr>
                </thead>
                <tbody id="userData">
                    <?php if(!empty($users)): foreach($users as $user): ?>
                    <tr id="<?php echo $user['id']; ?>">
                        <td><?php echo $user['id']; ?></td>
                        <td>
                            <span class="editSpan fname"><?php echo $user['username']; ?></span>
                            <input class="editInput fname form-control input-sm" type="text" name="first_name" value="<?php echo $user['username']; ?>" style="display: none;">
                        </td>
                        <td>
                            <span class="editSpan pass"><?php echo $user['passWord']; ?></span>
                            <input class="editInput pass form-control input-sm" type="text" name="last_name" value="<?php echo $user['passWord']; ?>" style="display: none;">
                        </td>
                        <td>
                            <span class="editSpan email"><?php echo $user['Email']; ?></span>
                            <input class="editInput email form-control input-sm" type="text" name="email" value="<?php echo $user['Email']; ?>" style="display: none;">
                        </td>
                        <td>
                            <span class="editSpan level"><?php echo $user['typeA']; ?></span>
                            <input class="editInput level form-control input-sm" type="text" name="level" value="<?php echo $user['typeA']; ?>" style="display: none;">
                        </td>

                        <td>
                            <div class="btn-group btn-group-sm">
                                <button type="button" class="btn btn-sm btn-default editBtn" style="float: none;"><span class="glyphicon"></span><img src='icons8_Edit_Property_15px.png'/></button>
                                <button type="button" class="btn btn-sm btn-default deleteBtn" style="float: none;"><span class="glyphicon"></span><img src='icons8_Delete_15px.png'/></button>
                            </div>
                            <button type="button" class="btn btn-sm btn-success saveBtn" style="float: none; display: none;">Save</button>
                            <button type="button" class="btn btn-sm btn-danger confirmBtn" style="float: none; display: none;">Confirm</button>

                        </td>
                    </tr>
                    <tr>
                   
                    <?php endforeach; else: ?>
                    <tr><td colspan="5">No user(s) found......</td></tr>
                    <?php endif; ?>

                    <td id="id" contenteditable>
                        <span class="editSpan id"></span>
                        <input class="editInput id form-control input-sm" type="text" name="first_name" value="" style="display: none;"/>
                            </td>
                    <td id="firstname" contenteditable>
                    <span class="editSpan fname"></span>
                        <input class="editInput fname form-control input-sm" type="text" name="last_name" value="" style="display: none;">
                          
                    </td>
                    <td id="lastname" contenteditable>
                    <span class="editSpan pass"></span>
                        <input class="editInput pass form-control input-sm" type="text" name="email" value="" style="display: none;">
                          
                    </td>
                    <td id="Email" contenteditable>
                    <span class="editSpan email"></span>
                        <input class="editInput email form-control input-sm" type="text" name="level" value="<?php echo $user['typeA']; ?>" style="display: none;">
                          
                    </td>
                    <td id="level" contenteditable>
                        <span class="editSpan level"></span>
                        <input class="editInput level form-control input-sm" type="text" name="level" value="<?php echo $user['typeA']; ?>" style="display: none;">

                    </td>
                    <td>
                    <div class="btn-group btn-group-sm">
                        <button type="button" class="btn btn-sm btn-default EaddBtn" style="float: none;"><span class="glyphicon"></span><img src='icons8_Edit_Property_15px.png'/></button>
                       </div>         
                    <button type="button" class="addBtn" style="float: none; display:none; "><img src='icons8_Add_30px.png'style="padding-left: 15px;"/></button></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<script>
$(document).ready(function(){
    $('.editBtn').on('click',function(){
        //hide edit span
        $(this).closest("tr").find(".editSpan").hide();
        
        //show edit input
        $(this).closest("tr").find(".editInput").show();
        
        //hide edit button
        $(this).closest("tr").find(".editBtn").hide();
        
        //show edit button
        $(this).closest("tr").find(".saveBtn").show();
        
    });
    
    $('.saveBtn').on('click',function(){
        var trObj = $(this).closest("tr");
        var ID = $(this).closest("tr").attr('id');
        var inputData = $(this).closest("tr").find(".editInput").serialize();
        $.ajax({
            type:'POST',
            url:'userAction.php',
            dataType: "json",
            data:'action=edit&id='+ID+'&'+inputData,
            success:function(response){
                if(response.status == 'ok'){
                    trObj.find(".editSpan.fname").text(response.data.username);
                    trObj.find(".editSpan.pass").text(response.data.password);
                    trObj.find(".editSpan.email").text(response.data.email);
                    trObj.find(".editSpan.level").text(response.data.level);
                    
                    trObj.find(".editInput.fname").text(response.data.username);
                    trObj.find(".editInput.pass").text(response.data.password);
                    trObj.find(".editInput.email").text(response.data.email);
                    trObj.find(".editSpan.level").text(response.data.level);
                    
                    trObj.find(".editInput").hide();
                    trObj.find(".saveBtn").hide();
                    trObj.find(".editSpan").show();
                    trObj.find(".editBtn").show();
                    alert("Update seccessful");
                }else{
                    alert("Update unSeccessful");
                }
            }
        });
    });
    
    $('.deleteBtn').on('click',function(){
        //hide delete button
        $(this).closest("tr").find(".deleteBtn").hide();
        
        //show confirm button
        $(this).closest("tr").find(".confirmBtn").show();
        
    });
    
    $('.confirmBtn').on('click',function(){
        var trObj = $(this).closest("tr");
        var ID = $(this).closest("tr").attr('id');
        $.ajax({
            type:'POST',
            url:'userAction.php',
            dataType: "json",
            data:'action=delete&id='+ID,
            success:function(response){
                if(response.status == 'ok'){
                    trObj.remove();
                }else{
                    trObj.find(".confirmBtn").hide();
                    trObj.find(".deleteBtn").show();
                    alert(response.msg);
                }
            }
        });
    });
});
</script>

</body>
</html>
<script type="text/javascript" src="jquery-3.2.1.min.js"></script>
