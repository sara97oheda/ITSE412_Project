 <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>TABLE</title>
    <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="js/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="bootstrap/dist/js/bootstrap.min.js"></script>
    
</head>
<body>
    <div class="container">
    </br>
        <div class ="table-resposive">
            <h3>livegdhsgdhs </h3></br>
                <div id="live_data">

                </div>
        </div>
    </div>

    <script>

        $(document).ready(function(){

            function fetch_data(){
                $.ajax({
                    url:"select.php",
                    method:"POST",
                    success:function(data){
                        $('#live_data').html(data);
                    }

                });
            }

            fetch_data();
            $(document).on('click','#btn_add',function(){
                var username =$('#Username').text();
                var password =$('#password').text();
                var Email =$('#Email').text();
                var level =$('#level').text();
                if(username == ''){
                    alert('enter username');
                    return false;
                }
                if(password == ''){
                    alert('enter password');
                    return false;
                }
                if(Email == ''){
                    alert('enter Email');
                    return false;
                }
                if(level == ''){
                    alert('enter level');
                    return false;
                }
                $.ajax({
                    url:'insert.php',
                    method:'post',
                    data:{Username:Username,password:password,Email:Email,level:level},
                    dataType:'text',
                    success:function(data){
                        alert(data);
                        fetch_data();
                    }
                });

            });

            function edit_data(id , text,column_name){
                $.ajax({
                    url:"edit.php",
                    method:"POST",
                    data:{id:id,text:text,column_name:column_name},
                    dataType:"text",
                    success:function(data){
                        alert(data);
                    }
                });

            }
            $(document).on('blur','.Username',function(){
                var id= $(this).data("id1");
                var username = $(this).text();
                edit_data(id , username,"username");
            });
            $(document).on('blur','.password',function(){
                var id= $(this).data("id2");
                var password = $(this).text();
                edit_data(id , password,"passWord");
            });
            $(document).on('blur','.Email',function(){
                var id= $(this).data("id3");
                var email = $(this).text();
                edit_data(id , email,"Email");
            });
            $(document).on('blur','.level',function(){
                var id= $(this).data("id4");
                var level = $(this).text();
                edit_data(id , level,"TypeA");
            });
            $(document).on('click','.btn_delete',function(){
                var id =$(this).data("id5");
                if(confirm("Are you sure you want to delete this? ")){

                    $.ajax({
                        url:"delete.php" ,
                        method:"POST",
                        data:{id:id},
                        dataType:"text",
                        success:function(data){
                            alert(data);
                            fetch_data();
                        }
                    });
                }
            });
        });
    </script>

</body>
</html>


