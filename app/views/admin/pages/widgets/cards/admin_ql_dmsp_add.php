<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Quản lý danh mục sách</title>
    <!-- Favicon-->
    <!-- Favicon-->
    <link rel="icon" href="../../../favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="../../../plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="../../../plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="../../../plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- JQuery DataTable Css -->
    <link href="../../../plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">

    <!-- Custom Css -->
    <link href="../../../css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="../../../css/themes/all-themes.css" rel="stylesheet" />

    <link href="../../../css/file_css_sua.css" rel="stylesheet">

</head>

<body class="theme-red">
   
    <!-- Page Loader -->
    <?php
    include('../../../Giaodien/header.php');
    include('../menu/menu_danhmucsah.php');
    ?>
    <!-- #Top Bar -->
   

    <section class="content">
        <div class="container-fluid">
            <!-- Basic Examples --> 
            <!-- #END# Basic Examples -->
            <!-- Exportable Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                    <?php
                            if(!empty($_GET['mgs'])){
                                $mgs = unserialize(urldecode($_GET['mgs']));
                                foreach($mgs as $key => $value){
                                    echo '<span style= "color: blue; font-weight: bold;" >'.$value.'</span>';
                                    
                                }
                            }
                            ?>
                        <div class="header">
                            <h2>
                                Thêm danh mục sản phẩm
                            </h2>
                        </div>
                        <div class="body">
                        <form action="../../../../../../product/insert_product" method="POST">
                            <div class="form-group">
                                <label for="email">Tên danh mục</label>
                                <input type="text" name = "title" class="form-control" >
                            </div>
                            <div class="form-group">
                                <label for="pwd">Giới thiệu</label>
                                <input type="text" name = "desc" class="form-control" >
                            </div>
                            <button type="submit" name="submit" class="btn_them">Thêm danh mục</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
                           
            <!-- #END# Exportable Table -->
        </div>
    </section>

    <!-- Jquery Core Js -->
    <script src="../../../plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="../../../plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="../../../plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="../../../plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="../../../plugins/node-waves/waves.js"></script>

    <!-- Jquery DataTable Plugin Js -->
    <script src="../../../plugins/jquery-datatable/jquery.dataTables.js"></script>
    <script src="../../../plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
    <script src="../../../plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
    <script src="../../../plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
    <script src="../../../plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
    <script src="../../../plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
    <script src="../../../plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
    <script src="../../../plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
    <script src="../../../plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>

    <!-- Custom Js -->
    <script src="../../../js/admin.js"></script>
    <script src="../../../js/pages/tables/jquery-datatable.js"></script>

    <!-- Demo Js -->
    <script src="../../../js/demo.js"></script>
</body>
</html>
