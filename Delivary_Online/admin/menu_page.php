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
                        <img src="image/icons8_Home_20px.png" style="padding-left: 15px;"/>الرئسية </a>
                </li>
                <li>
                    <a href="profile.php" class="waves-effect"><img src="image/icons8_Male_User_20px.png" style="padding-left: 15px;"/>الملف الشخصي</a>
                </li>
                <li>
                    <a href="Users_page.php" class="waves-effect"><img src="image/icons8_User_Groups_20px.png" style="padding-left: 15px;"/>المستخدمين</a>
                </li>
                <li>
                    <a href="menu_page.php" class="waves-effect"><img src="image/icons8_Restaurant_Menu_20px.png" style="padding-left: 15px;"/>قائمة الطعام</a>
                </li>
                <li>
                    <a href="order_page.php" class="waves-effect"><img src="image/icons8_Shopping_Cart_20px.png" style="padding-left: 15px;"/>الطلبات</a>
                </li>
                <li>
                    <a href="../404.html" class="waves-effect"><img src="image/icons8_Error_20px.png" style="padding-left: 15px;"/>Error 404</a>
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
        <div class="pull-left"><button type="button" class="btn btn-md btn-primary" id="command-add" data-row-id="0">
                <span class="glyphicon glyphicon-plus"></span> اضافة صنف جديد</button>
        </div>
        <table id="employee_grid" class="table table-condensed table-hover table-striped" width="60%" cellspacing="0" data-toggle="bootgrid">
            <thead>
            <tr style="text-align: right;">
                <th data-column-id="id" data-type="numeric" data-identifier="true" style="text-align: right">الرقم</th>
                <th data-column-id="nameCook">اسم الطعام</th>
                <th data-column-id="typeMeal">وجبة</th>
                <th data-column-id="image">الصورة</th>
                <th data-column-id="price">السعر بالدينار الليبي</th>
                <th data-column-id="commands" data-formatter="commands" data-sortable="false"></th>
            </tr>
            </thead>
        </table>
    </div>
</div>



<div id="add_model" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">  اضافة صنف  </h4>
            </div>
            <div class="modal-body">
                <form method="post" id="frm_add">
                    <input type="hidden" value="add" name="action" id="action">
                    <div class="form-group">
                        <label for="name" class="control-label">الاسم:</label>
                        <input type="text" class="form-control" id="name" name="name" required/>
                    </div>
                    <div class="form-group">
                        <label for="salary" class="control-label">نوع الوجبة:</label>
                        <input type="text" class="form-control" id="salary" name="salary" required/>
                    </div>
                    <div class="form-group">
                        <label for="salary" class="control-label">الصورة:</label>
                        <input type="text" class="form-control" id="age" name="age" required/>
                    </div>
                    <div class="form-group">
                        <label for="price" class="control-label">السعر:</label>
                        <input type="text" class="form-control" id="price" name="price" required/>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">اغلاق</button>
                        <button type="button" id="btn_add" class="btn btn-primary">حفظ</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


    <div id="edit_model" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">تعديل قائمة الطعام</h4>
                </div>
                <div class="modal-body">
                    <form method="post" id="frm_edit">
                        <input type="hidden" value="edit" name="action" id="action">
                        <input type="hidden" value="0" name="edit_id" id="edit_id">
                        <div class="form-group">
                            <label for="name" class="control-label">الاسم:</label>
                            <input type="text" class="form-control" id="edit_name" name="edit_name" required/>
                        </div>
                        <div class="form-group">
                            <label for="salary" class="control-label">نوع الوجبة:</label>
                            <input type="text" class="form-control" id="edit_salary" name="edit_salary" required/>
                        </div>
                        <div class="form-group">
                            <label for="salary" class="control-label">الصورة:</label>
                            <input type="text" class="form-control" id="edit_age" name="edit_age" required/>
                        </div>
                        <div class="form-group">
                            <label for="price" class="control-label">السعر:</label>
                            <input type="text" class="form-control" id="edit_price" name="edit_price" required/>
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
        var grid = $("#employee_grid").bootgrid({
            ajax: true,
            rowSelect: true,
            post: function ()
            {
                /* To accumulate custom parameter with the request object */
                return {
                    id: "b0df282a-0d67-40e5-8558-c9e93b7befed"
                };
            },

            url: "responseMenu.php",
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
                    $('#edit_name').val(ele.siblings(':nth-of-type(2)').html());
                    $('#edit_salary').val(ele.siblings(':nth-of-type(3)').html());
                    $('#edit_age').val(ele.siblings(':nth-of-type(4)').html());
                    $('#edit_price').val(ele.siblings(':nth-of-type(5)').html());
                } else {
                    alert('Now row selected! First select row, then click edit button');
                }
            }).end().find(".command-delete").on("click", function(e)
            {

                var conf = confirm('Delete ' + $(this).data("row-id") + ' items?');
                alert(conf);
                if(conf){
                    $.post('responseMenu.php', { id: $(this).data("row-id"), action:'delete'}
                        , function(){
                            // when ajax returns (callback),
                            $("#employee_grid").bootgrid('reload');
                        });
                    //$(this).parent('tr').remove();
                    //$("#employee_grid").bootgrid('remove', $(this).data("row-id"))
                }
            });
        });

        function ajaxAction(action) {
            data = $("#frm_"+action).serializeArray();
            $.ajax({
                type: "POST",
                url: "responseMenu.php",
                data: data,
                dataType: "json",
                success: function(response)
                {
                    $('#'+action+'_model').modal('hide');
                    $("#employee_grid").bootgrid('reload');
                }
            });
        }

        $( "#command-add" ).click(function() {
            $('#add_model').modal('show');
        });
        $( "#btn_add" ).click(function() {
            ajaxAction('add');
        });
        $( "#btn_edit" ).click(function() {
            ajaxAction('edit');
        });
    });
</script>
