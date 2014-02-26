<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Api extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('api_model', '', TRUE);
        $this->load->library('session');
        $this->load->helper('url');
    }

    public function index() {
        $this->load->view('api');
    }

    public function getdata($key = "", $lim = 0, $perpage = 50) {
        if($key=="")
        {
            $key="jenal";
        }
        $data['result']=array("name"=>$key,"limit"=>$lim,"perpage"=>$perpage);
        $this->load->view('result',$data);
    }

}
