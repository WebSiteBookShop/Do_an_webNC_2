<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Quản lý danh mục sách</title>
    <!-- Favicon-->
   <?php
   include('app/views/admin/Giaodien/linkcss.php');
   ?>

</head>

<body class="theme-red">
   
    <!-- Page Loader -->
    <?php
        include('app/views/admin/Giaodien/header.php');
        include('app/views/admin/pages/widgets/menu/menu_danhmucsah_filesau.php');
    ?>
    <!-- #Top Bar -->
   

    <section class="content">
        <div class="container-fluid">
           
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

                        <?php
                            foreach($categorybyid as $key => $cate){
                        ?>
                        <form action="../../category/update_category/<?php echo $cate['id_category_product'] ?>" method="POST">
                        <div class="form-group">
                                <label for="email">ID danh mục</label>
                                <input type="text" name = "title" class="form-control" value="<?php echo $cate['id_category_product']?>" >
                            </div>
                            <div class="form-group">
                                <label for="email">Tên danh mục</label>
                                <input type="text" name = "title" class="form-control"  value="<?php echo $cate['name_category_product'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="pwd">Giới thiệu</label>
                                <textarea type="text" name = "desc" rows="5" class="form-control" style="resize: none;"> <?php echo $cate['desc_category_product'] ?></textarea> 
                            </div>
                            <button type="submit" name="submit" class="btn_them">Cập nhập danh mục</button>
                            </form>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
                           
            <!-- #END# Exportable Table -->
    </section>
    <?php
    include('app/views/admin/Giaodien/link_JS_butrap.php');
    ?>
</body>
</html>
