<?php
class sms extends CI_controller{

function __construct(){
	parent::__construct();
	$this->helper(array('sms'));
}

function helper($name){
  return $this->load->helper($name);
}

function view($filename,$parse=array()){
 if($filename !== ""){
 	$this->load->view($filename,$parse);
 }else{
 	echo "filename is not defined!";
 }
}

function post($parser){
 if($parser !== ""){
	return $this->input->post($parser);
 }
}

function get_user(){
 return "rohman";
}

function header($parse){
  $this->view('header',$parse);	
}

function index(){
	$data['title']="Home";
	$this->header($data);
	$this->view('body');
	$this->view('footer');
}



}







?>