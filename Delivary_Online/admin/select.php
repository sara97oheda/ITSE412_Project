<?php
	$connect = mysqli_connect("localhost","root","","deliveryrest");
    $output ='';
    $sql = "select * from users order by id DESC";
    $result = mysqli_query($connect,$sql);
    $output .= '
        <div class ="table-resposive"
            <table class="table table-bordered">
                <tr>
                    <th width="10%">ID</th>
                    <th width="10%">Username</th>
                    <th width="10%">Password</th>
                    <th width="10%">Email</th>
                    <th width="10%">Level</th>   
                    <th width="10%">Delet Or Add</th>
                 </tr>'; 
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_array($result)){

        $output .= '<td>'.$row['id'].'</td>
                    <td class="Username" data-id1="'.$row['id'].'"
                    contenteditable>'.$row["username"].'</td>
                    <td class="Password" data-id2="'.$row['id'].'"
                    contenteditable>'.$row["passWord"].'</td>
                    <td class="Email" data-id3="'.$row['id'].'"
                    contenteditable>'.$row["Email"].'</td>
                    <td class="level" data-id4="'.$row['id'].'"
                    contenteditable>'.$row["typeA"].'</td>
                    <td><button name="btn-delete" id="btn-delete"
                    data-id5="'.$row["id"].'">x</button></td>';
        }
                    $output .='<tr>
                    <td></td>
                    <td id="Username" contenteditable></td>
                    <td id="password" contenteditable></td>
                    <td id="Email" contenteditable></td>
                    <td id="level" contenteditable></td>
                    <td><button name="btn-add" id="btn_add"
                     class="btn btn-xs btn-succes">+</button></td>
                    </tr>';
        
    }else{
        $output .='<tr>
                        <td colspan ="4">Data not found</td>
                        </tr>';
    }
    $output .='</table>
                </div>';
    echo $output;
    
