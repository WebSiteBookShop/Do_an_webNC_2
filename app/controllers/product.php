<?php
    class product extends DController{

        public function __construct()
        {
            parent::__construct();

        }
        


        public function insert_product(){
            $title = $_POST['title'];
            $desc = $_POST['desc'];
            $table = "category_product";
            $data = array(
                'name_category_product'=> $title,
                'desc_category_product'=> $desc
            );
            $categorymodedl = $this->load->model('categorymodel');
            $result = $categorymodedl->inset_category($table, $data);

            if ($result == 1){

                $message['mgs'] = "Thêm danh mục sản phẩm thành công";
                header("Location: ".BASE_URL2."widgets/cards/admin_ql_dmsp_add.php?mgs=".urldecode(serialize($message)));
                exit;
            }
            else{
                $message['mgs'] = "Thêm danh mục sản phẩm thất bại";
                header("Location: ".BASE_URL2."widgets/cards/admin_ql_dmsp_add.php?mgs=".urldecode(serialize($message)));
                exit;
            }  
         }
    
    }
?>