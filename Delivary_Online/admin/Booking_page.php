<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>قائمة الطعام</title>
    <link href="css/style.css" rel="stylesheet">
    <!-- color CSS -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!--slimscroll JavaScript -->
    <script src="js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="js/custom.min.js"></script>
    <link rel="stylesheet" href="dist/bootstrap.min.css" type="text/css" media="all">
    <link href="dist/jquery.bootgrid.css" rel="stylesheet" />
    <script src="dist/jquery-1.11.1.min.js"></script>
    <script src="dist/bootstrap.min.js"></script>
    <script src="dist/jquery.bootgrid.min.js"></script>
    <script type="text/javascript">
        function changeColor(){
            li = document.getElementsByName(li);
            li.style.color = "gray";
        }
    </script>

</head>

<body class="fix-header">

<!-- ============================================================== -->
<!-- Wrapper -->
<!-- ============================================================== -->
<div id="wrapper">
    <!-- ============================================================== -->
    <!-- Topbar header - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <nav class="navbar navbar-default navbar-static-top m-b-0">
        <div class="navbar-header" style="height: 70px">

            <ul class="nav navbar-top-links navbar-right pull-right" style="margin-top: 15px; width: 250px">

                <li style="float: right">
                    <img src="image/icons8_Male_User_50px_2.png" alt="user-img" width="36" class="img-circle">
                </li>
                <b class="hidden-xs">
                    <?php
                    session_start();
                    $_SESSION['username'] ;
                    if(isset($_SESSION['username'])){
                        echo '<li><label style="text-align:center; color:white; border: darkred 2px; margin-top: 8px; margin-right: 30px;"> ';
                        echo $_SESSION['username'];
                        echo '</label></li>
                                                    ';
                    }else{
                        echo '<div>no nser name</div>';
                    }?></b>
                </li>
            </ul>


            <div id="loginContainer">
                <ul class="nav navbar-top-links" style="float: left; margin-left: 20px;">
                    <li>
                        <form method="get" action="../server.php" style="width: 150px; margin-top: 15px">
                            <input  aria-hidden="true" type="submit" id="logout" value="تسجيل الخروج" name="logout" style="color: #cf2227; background-color: white">
                            <img src="image/icons8_Logout_Rounded_Left_50px.png" alt="user-img" width="30" class="img-circle" style="margin-right: 6px">

                        </form>
                    </li>

                </ul>
            </div>
            <!-- /.navbar-header -->
            <!-- /.navbar-top-links -->
            <!-- /.navbar-static-side -->
    </nav>
    <!-- End Top Navigation -->
    <!-- ============================================================== -->
    <!-- Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    <div class="navbar-default sidebar" role="navigation" style="font-family:Hacen Algeria; background:white;">
        <div class="sidebar-nav slimscrollsidebar">
            <div class="sidebar-head">
                <h3><span class="fa-fw open-close"><i class="ti-close ti-menu"></i></span> <span class="hide-menu">Navigation</span></h3>
            </div>
            <ul class="nav" id="side-menu">
                <li style="padding: 70px 0 0;">
                    <a href="index.php" class="waves-effect">
                        <img src="image/icons8_Home_20px.png" style="padding-left: 15px;" onclick="changeColor()"/>الرئسية </a>
                </li>
                <li>
                    <a href="profile.php" class="waves-effect"><img src="image/icons8_Male_User_20px.png" style="padding-left: 15px;" onclick="changeColor()"/>الملف الشخصي</a>
                </li>
                <li>
                    <a href="Users_page.php" class="waves-effect"><img src="image/icons8_User_Groups_20px.png" style="padding-left: 15px;" onclick="changeColor()"/>المستخدمين</a>
                </li>
                <li>
                    <a href="#" class="waves-effect"><img src="image/icons8_Restaurant_Menu_20px.png" style="padding-left: 15px;" onclick="changeColor()"/>قائمة الطعام</a>
                </li>
                <li>
                    <a href="order_page.php" class="waves-effect"><img src="image/icons8_Shopping_Cart_20px.png" style="padding-left: 15px;" onclick="changeColor()"/>الطلبات</a>
                </li>
                <li>
                    <a href="Masseges_page.php" class="waves-effect"><img src="image/icons8_Envelope_20px.png" style="padding-left: 15px;" onclick="changeColor()"/>رسائل المستخدمين</a>
                </li>
                <li>
                    <a href="#" class="waves-effect"><img src="image/icons8_Restaurant_Table_20px.png" style="padding-left: 15px;" onclick="changeColor()"/>الحجز</a>
                </li>
                <li>
                    <a href="../404.html" class="waves-effect"><img src="image/icons8_Error_20px.png" style="padding-left: 15px;" onclick="changeColor()"/>Error 404</a>
                </li>

            </ul>

        </div>

    </div>
<!-- ============================================================== -->
<!-- End Left Sidebar -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Page Content -->
<!-- ============================================================== -->

<div class="container" style="margin-right: 300px;margin-top: 100px;">
    <div class="">
        <div class="col-sm-12"">
        <table id="grid" class="table table-condensed table-hover table-striped" width="60%" cellspacing="0" data-toggle="bootgrid">
            <thead>
            <tr style="text-align: right;">
                <th data-column-id="userId" data-type="numeric" data-identifier="true" style="text-align: right">الرقم</th>
                <th data-column-id="userName">اسم المستخدم</th>
                <th data-column-id="dateOf">التاريخ</th>
                <th data-column-id="time_res">الوقت</th>
                <th data-column-id="phoneNumber">رقم الهاتف</th>
                <th data-column-id="sizeOfTable">حجم الطاولة</th>
                <th data-column-id="state">حالة الحجز</th>
                <th data-column-id="commands" data-formatter="commands" data-sortable="false"></th>
            </tr>
            </thead>
        </table>
    </div>
</div>


    <div id="edit_model" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">تعديل علي الحجز</h4>
                </div>
                <div class="modal-body">
                    <form method="post" id="frm_edit">
                        <input type="hidden" value="edit" name="action" id="action">
                        <input type="hidden" value="0" name="edit_id" id="edit_id">
                        <div class="form-group">
                            <label for="name" class="control-label">حالة الحجز:</label>
                            <input type="text" class="form-control" id="state" name="state" required/>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">اغلاق</button>
                            <button type="button" id="btn_edit" class="btn btn-primary">حفظ</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


</body>
</html>

<script type="text/javascript">
    $( document ).ready(function() {
        var grid = $("#grid").bootgrid({
            ajax: true,
            rowSelect: true,
            post: function ()
            {
                /* To accumulate custom parameter with the request object */
                return {
                    id: "b0df282a-0d67-40e5-8558-c9e93b7befed"
                };
            },

            url: "responseBooking.php",
            formatters: {
                "commands": function(column, row)
                {
                    return "<button type=\"button\" class=\"btn btn-xs btn-default command-edit\" data-row-id=\"" + row.id + "\"><span class=\"glyphicon glyphicon-edit\"></span></button> " +
                        "<button type=\"button\" class=\"btn btn-xs btn-default command-delete\" data-row-id=\"" + row.id + "\"><span class=\"glyphicon glyphicon-trash\"></span></button>";
                }
            }
        }).on("loaded.rs.jquery.bootgrid", function()
        {
            /* Executes after data is loaded and rendered */
            grid.find(".command-edit").on("click", function(e)
            {
                //alert("You pressed edit on row: " + $(this).data("row-id"));
                var ele =$(this).parent();
                var g_id = $(this).parent().siblings(':first').html();
                var g_name = $(this).parent().siblings(':nth-of-type(2)').html();

                console.log(g_id);
                console.log(g_name);

                //console.log(grid.data());//
                $('#edit_model').modal('show');
                if($(this).data("row-id") >0) {

                    // collect the data
                    $('#edit_id').val(ele.siblings(':first').html()); // in case we're changing the key
                    $('#state').val(ele.siblings(':nth-of-type(7)').html());


                } else {
                    alert('Now row selected! First select row, then click edit button');
                }
            }).end().find(".command-delete").on("click", function(e)
            {

                var conf = confirm('Delete ' + $(this).data("row-id") + ' items?');
                alert(conf);
                if(conf){
                    $.post('responseBooking.php', { id: $(this).data("row-id"), action:'delete'}
                        , function(){
                            // when ajax returns (callback),
                            $("#grid").bootgrid('reload');
                        });

                }
            });
        });

        function ajaxAction(action) {
            data = $("#frm_"+action).serializeArray();
            $.ajax({
                type: "POST",
                url: "responseBooking.php",
                data: data,
                dataType: "json",
                success: function(response)
                {
                    $('#'+action+'_model').modal('hide');
                    $("#grid").bootgrid('reload');
                }
            });
        }


        $( "#btn_edit" ).click(function() {
            ajaxAction('edit');
        });
    });
</script>
