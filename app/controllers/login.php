<?php
    class login extends DController{
        
        public function __construct()
        {
            $message = array();
            $data = array();
            parent::__construct();
            
        }
        public function index(){
            $this->login();
        }

        public function login(){ 
             $this->load->view('header');
             Session::init();
             if(Session::get('login')==true){
                header("Location:".BASE_URL."login/dashboard");
             }
             $this->load->view('admin/login');
             $this->load->view('footer');
        }

        public function dashboard(){
            Session::checkSession();
            $this->load->view('admin/dashboard');
        }

        public function authentication_login(){
            $username = $_POST['username'];
            $password = md5($_POST['password']);
             
            $table_admin = 'admin';
            $loginmodel = $this->load->model('loginmodel');

            $count = $loginmodel->getlogin($table_admin, $username, $password);

            if ($count == 0){
                $message['mgs'] = "User hoặc mật khẩu không chính xát";
                header("Location:".BASE_URL."login");
            }
            else{
                $result =  $loginmodel->getlogin($table_admin, $username, $password);
                Session::init();
                Session::set('login',true);
                Session::set('usernsme', $result[0]['username']);
                Session::set('userid', $result[0]['ad_admin']);
                header("Location:".BASE_URL."login/dashboard");
            }
        }

        public function logout(){
            Session::init();
            Session::destroy();
            header("Location:".BASE_URL."login");
        }


    }

?>