<?php 
    class Pages extends Controller{
        public function __construct(){

        }
        
        public function index(){
            $data = [
                'title' => 'Home Page',
                'name' => 'test'
            ];
            $this->view('pages/index', $data);
        }
        public function about(){
            $this->view('pages/about');
        }
    }
?>