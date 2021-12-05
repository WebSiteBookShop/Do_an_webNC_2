<?php
    class category_list_product extends DController{
        
        public function __construct()
        {
            $data = array();
            $message = array();
            parent::__construct();
        }

        public function list_category(){ 
            $categorymodel = $this->load->model('categorymodel');
            $table = 'category_list_product';
            $cond = "id_category_list_product";
            $data['category'] = $categorymodel->category($table,$cond);
            $this->load->view('admin/pages/widgets/cards/admin_ql_dmsp',$data);


       }

       public function categorybyid(){ 
         
            $id =3 ;
            $categorymodel = $this->load->model('categorymodel');
            $table = 'category_list_product';
            $data['categorybyid'] = $categorymodel->categorybyid($table,$id);
            $this->load->view('categorybyid', $data);
            $this->load->view('footer');
        }

        public function list_addcategory(){
            $this->load->view('admin/pages/widgets/cards/admin_ql_dmsp_add');
        }

        public function list_updatecategory($id){
            $categorymodel = $this->load->model('categorymodel');
            $table = 'category_list_product';
            $cond = "id_category_list_product = '$id'";
            $data['categorybyid'] = $categorymodel->categorybyid($table,$cond);
            $this->load->view('admin/pages/widgets/cards/admin_ql_dmsp_update',$data);
        }


        public function insert_category(){
            $title = $_POST['title'];
            $desc = $_POST['desc'];
            $table = "category_list_product";
            $data = array(
                'name_category_list_product'=> $title,
                'desc_category_list_product'=> $desc
            );
            $categorymodedl = $this->load->model('categorymodel');
            $result = $categorymodedl->insert_category($table, $data);

            if ($result == 1){

                $message['mgs'] = "Thêm danh mục sản phẩm thành công";
                // $this->list_addcategory();
                header("Location:../category_list_product/list_addcategory?mgs=".urldecode(serialize($message)));
                //  exit;
            }
            else{
                $message['mgs'] = "Thêm danh mục sản phẩm thất bại";
                // $this->list_addcategory();
                header("Location:../category_list_product/list_addcategory?mgs=".urldecode(serialize($message)));
            }  
         }

        public function update_category($id){

            $categorymodel = $this->load->model('categorymodel');
            $table= 'category_list_product';
            $cond = "category_list_product.id_category_list_product = '$id'";
            $title = $_POST['title'];
            $desc = $_POST['desc'];
            $data = array(
                'name_category_list_product'=> $title,
                'desc_category_list_product'=> $desc
            );
            $result= $categorymodel->update_category($table,$data,$cond);
            if ($result == 1){

                $message['mgs'] = "Cập nhập danh mục sản phẩm thành công";
                header("Location:../list_category?mgs=".urldecode(serialize($message)));
            }
            else{
                $message['mgs'] = "Cập nhập danh mục sản phẩm thất bại";
                header("Location:../list_category?mgs=".urldecode(serialize($message)));
            }  

        }
        public function delete_category($id){
            $categorymodel = $this->load->model('categorymodel');
            $table= 'category_list_product';
            $cond = "id_category_list_product = '$id'";
            $result= $categorymodel->delete_category($table,$cond);

            if ($result == 1){

                $message['mgs'] = "Xóa danh mục sản phẩm thành công";
                header("Location:../list_category?mgs=".urldecode(serialize($message)));
            }
            else{
                $message['mgs'] = "Xóa danh mục sản phẩm thất bại";
                header("Location:../list_category?mgs=".urldecode(serialize($message)));
            }  
        }
    }

?>