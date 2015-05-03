<?php
/**
 * KENDYSON
 *
 * Copyright (c) 2014, Kendyson Douglas
 *
 * @package	CodeIgniter
 * @author	KENDYSON
 * @copyright	Copyright (c) 2008 - 2014, EllisLab, Inc. (http://ellislab.com/)
 * @copyright	Copyright (c) 2014, British Columbia Institute of Technology (http://bcit.ca/)
 * @link	http://kendyson.com
 * @since	Version 1.0.0
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Ajax extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('forms_model');
	}
	public function generate_id(){
		//
  		$prefix = 'ds';
		//
		$sql = "SELECT * FROM `ids`ORDER BY id DESC LIMIT 1";
  		$lastsuffix = $this->forms_model->sql_get_value($sql,'ids');
  		$suffix = $lastsuffix + 1;
  		$newid = $prefix.$suffix;
  		$data = ['ids' => $suffix ];
		$result = $this->forms_model->insert_array('ids',$data);
		
		return $newid;
	}
	public function add_dish(){
		$this->load->helper('email');
		$data = $this->input->post();
		
		if ($data['email'] != "" && valid_email($data['email'])){
		   	$emailcheck = ['email' => $data['email']];
		   	$emaildata = ['email' => $data['email'],'gender' => $data['gender']];
		   	$result = $this->forms_model->exist_array('emails',$emailcheck);

		   	if ($result > 0) {
		   	 
		   	}else{
		      $result = $this->forms_model->insert_array('emails',$emaildata);
			}
		}elseif ($data['email'] != "" && !valid_email($data['email'])) {
			$this->output->set_output(json_encode(['result' => 'emailerror']));
			return false;
		}

		$insert['name'] = $data['name'];
		$insert['state'] = $data['state'];
		$insert['lga'] = $data['lga'];
		$insert['ingredients'] = $data['ingredients'];
		$insert['procedures'] = base64_encode($data['procedures']);
		$insert['fullname'] = $data['fullname'];
		$insert['email'] = $data['email'];
		$insert['gender'] = $data['gender'];
		$insert['id'] = $this->generate_id();
		
		$result = $this->forms_model->insert_array('dishes',$insert);
		
		$this->output->set_output(json_encode([ 'result' => 'success','id' => $insert['id']]));
		return false;
	}

	function simple_upload() {
	   $config = array(
	   	'upload_path' => './images/',
        'upload_url' => './images/',
        'allowed_types' => 'jpg|gif|png',
        'overwrite' => false,
        'max_size' => 512000,            
	    );
	   $config['encrypt_name'] = TRUE;
 
	    $this->load->library('upload', $config);

	    if ($this->upload->do_upload('file')) {
	        $data = $this->upload->data();
	        $array = array(
	            'filelink' => $config['upload_url'] . $data['file_name']
	        );            
	        echo stripslashes(json_encode($array));
	    } else {
	        echo json_encode(array('error' => $this->upload->display_errors('', '')));
	    }
	}
	function delete_upload() {
	   
	   $path = $_POST['url'];

	     // $path = .$filename ;
	      if(is_file($path)){
	        unlink($path);
	      } else {
	      }
	}
 












}







