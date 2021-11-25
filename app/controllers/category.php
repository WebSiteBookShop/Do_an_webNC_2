<?php
    class category extends DController{
        
        public function __construct()
        {
            $data = array();
            $message = array();
            parent::__construct();
        }

        

        public function list_category(){ 
            $this->load->view('header');
            $categorymodel = $this->load->model('categorymodel');
            $table_category_product = 'category_product';
            $data['category'] = $categorymodel->category($table_category_product);
            $this->load->view('category', $data);
            $this->load->view('footer');
       }

       public function categorybyid(){ 
            $this->load->view('header');
            $id =3 ;
            $categorymodel = $this->load->model('categorymodel');
            $table_category_product = 'category_product';
            $data['categorybyid'] = $categorymodel->categorybyid($table_category_product,$id);
            $this->load->view('categorybyid', $data);
            $this->load->view('footer');
        }

        public function addcategory(){
            $this->load->view('add_category');
        }


        public function inset_category(){

            $categorymodel = $this->load->model('categorymodel');
            $table_category_product = 'category_product';
            $name = $_POST['name'];
            $desc = $_POST['desc'];

            $data = array(
                'name_category_product' => $name,
                'desc_category_product' => $desc
            );
            $result= $categorymodel->inset_category($table_category_product,$data);
            if($result ==1){
                $message['msg'] = "Thêm dữ liệu thành công";
            }
            else{
                $message['msg'] = "Thêm dữ liệu thất bại";
            }
            $this->load->view('add_category',$message);

        }

        public function updatecategory(){

            $categorymodel = $this->load->model('categorymodel');
            $table_category_product = 'category_product';
            $id = 5;
            $cond = "category_product.id_category_product = '$id'";

            $data = array(
                'name_category_product' => 'update',
                'desc_category_product' => 'update lan 1'
            );
            $result= $categorymodel->updatecategory($table_category_product,$data,$cond);
            if($result == 1){
                echo "cập nhập dữ liệu thành công";
            }
            else{
               echo "cập nhập dữ liệu thất bại";
            }

        }
        public function deletecategory(){
            $categorymodel = $this->load->model('categorymodel');
            $table_category_product = 'category_product';
            $id = 31;
            $cond = "id_category_product = '$id'";

            
            $result= $categorymodel->deletecategory($table_category_product,$cond);
            if($result == 1){
                echo "xóa dữ liệu thành công";
            }
            else{
               echo "xóa dữ liệu thất bại";
            }
        }
    }

?>