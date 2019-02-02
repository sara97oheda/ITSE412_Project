
<script src="jquery-3.2.1.min.js"></script>
<link rel="stylesheet" href="bootstrap.min.css" />
<script src="jquery.dataTables.min.js"></script>
<script src="dataTables.bootstrap.min.js"></script>

<!-- ===<div class="col-md-12 col-lg-12 col-sm-12">=========== -->
<div class="row" style="width: 100%;">
    <div class="white-box" style="width: 100%;">
        <button type="button" name="add" id="add" class="btn btn-info">إضافة</button>
        <br />
        <div id="alert_message"></div>
        <br/>
        <table id="user_data" class="table table-bordered table-striped" style="width: 100%; direction: rtl;">
            <thead>
            <tr>
                <th>اسم المستخدم</th>
                <th>كلمة المرور</th>
                <th>البريد الالكتروني</th>
                <th>نوع العمل</th>
                <th></th>
            </tr>
            </thead>
        </table>
    </div>
</div>




<script type="text/javascript" language="javascript" >
    $(document).ready(function(){

        fetch_data();

        function fetch_data()
        {
            var dataTable = $('#user_data').DataTable({
                "processing" : true,
                "serverSide" : true,
                "order" : [],
                "ajax" : {
                        url:"fetch.php",
                        type:"POST"
                      }
            });
        }

        function update_data(id, column_name, value)
  {
      $.ajax({
    url:"update.php",
    method:"POST",
    data:{id:id, column_name:column_name, value:value},
    success:function(data)
    {
        $('#alert_message').html('<div class="alert alert-success">'+data+'</div>');
        $('#user_data').DataTable().destroy();
        fetch_data();
    }
   });
   setInterval(function(){
       $('#alert_message').html('');
   }, 5000);
  }

        $(document).on('blur', '.update', function(){
            var id = $(this).data("id");
            var column_name = $(this).data("column");
            var value = $(this).text();
            update_data(id, column_name, value);
        });

        $('#add').click(function(){
            var html = '<tr>';
            html += '<td contenteditable id="data1"></td>';
            html += '<td contenteditable id="data2"></td>';
            html += '<td contenteditable id="data3"></td>';
            html += '<td contenteditable id="data4"></td>';
            html += '<td><button type="button" name="insert" id="insert" class="btn btn-success btn-xs">حفظ</button></td>';
            html += '</tr>';
            $('#user_data tbody').prepend(html);
        });

        $(document).on('click', '#insert', function(){
            var username = $('#data1').text();
            var password = $('#data2').text();
            var email = $('#data3').text();
            var typeWork = $('#data4').text();
            if(username != '' && password != '' && email != '' && typeWork != '')
            {
                $.ajax({
     url:"insert.php",
     method:"POST",
     data:{username:username, password:password,email:email,typeWork:typeWork },
     success:function(data)
     {
         $('#alert_message').html('<div class="alert alert-success">'+data+'</div>');
         $('#user_data').DataTable().destroy();
         fetch_data();
     }
    });
    setInterval(function(){
        $('#alert_message').html('');
    }, 5000);
   }
            else
            {
                alert("Both Fields is required");
            }
        });

        $(document).on('click', '.delete', function(){
            var id = $(this).attr("id");
            if(confirm("Are you sure you want to remove this?"))
            {
                $.ajax({
     url:"delete.php",
     method:"POST",
     data:{id:id},
     success:function(data){
                $('#alert_message').html('<div class="alert alert-success">'+data+'</div>');
                $('#user_data').DataTable().destroy();
                fetch_data();
            }
    });
    setInterval(function(){
        $('#alert_message').html('');
    }, 5000);
   }
        });
    });
</script>
