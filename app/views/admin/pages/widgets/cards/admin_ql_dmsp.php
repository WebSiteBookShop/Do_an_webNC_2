<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Quản lý danh mục sách</title>

    <?php
    include('app/views/admin/Giaodien/linkcss.php')

    ?>

</head>

<body class="theme-red">
    <!-- Page Loader -->
    <?php
    // include('../../../Giaodien/header.php');
    // include('../menu/menu_danhmucsah.php');
    include('app/views/admin/Giaodien/header.php');
    include('app/views/admin/pages/widgets/menu/menu_danhmucsah.php');
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
                        <div class="header">
                            <h2>
                                Quản lý danh mục sách
                            </h2>
                            <a href="../category/list_addcategory"class="butonthem">Thêm sản phẩm  </a>
                            
                        </div>
                        <div class="body">
                        <?php
                            if(!empty($_GET['mgs'])){
                                $mgs = unserialize(urldecode($_GET['mgs']));
                                foreach($mgs as $key => $value){
                                    echo '<span style= "color: blue; font-weight: bold;" >'.$value.'</span>';
                                }
                            }
                            ?>
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr>
                                            <th>STT</th>
                                            <th>ID category_product</th>
                                            <th>Name category product</th>
                                            <th>Desc category Product</th>
                                            <th>Quản Lý</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $i = 1;
                                        foreach($category as $key =>$cate){
                                        ?>
                                        <tr>
                                            <td><?php echo $i ?>  </td>
                                            <td><?php echo $cate['id_category_product']; ?></td>
                                            <td><?php echo $cate['name_category_product']; ?></td>
                                            <td><?php echo $cate['desc_category_product']; ?></td>
                                            <td>
                                            <a href="../category/list_updatecategory/<?php echo $cate['id_category_product'];?>"   style="text-decoration: none">Cập nhập</a>
                                            <a href="../category/delete_category/<?php echo $cate['id_category_product'];?>"  style="text-decoration: none; float: right;">Xóa</a>
                                            </td>
                                        </tr>
                                        <?php
                                        $i++;
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Exportable Table -->
        </div>
    </section>

    <?php
    include('app/views/admin/Giaodien/link_JS_butrap.php');
    ?>

</body>
</html>
