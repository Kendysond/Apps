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

class Statsclass {
	
	
    public function formassets(){
		$data['classes'] = $this->allclasses();
		$data['sessions'] = $this->sessions();
		$data['terms'] =  $this->terms();
		$data['active'] = $this->activesession();
		return $data;
	}
	public function activesession(){
		$CI = &get_instance();
		$CI->load->model('forms_model');
		$active_session = $CI->forms_model->get_details('sessions','active','active');
		$session_id = $active_session[0]['session_id'];
		$params = ['session_id' => $session_id];
        $CI->load->library('obj/Sessionobj',$params ,'SESS');
        $session = new $CI->SESS($params);
        $result = ['id' => $session_id,'term' => $session->term, 'session' => $session->duration];
        return $result;
    }
    
	public function allfeesettings(){
		$CI = &get_instance();
		$CI->load->model('finance_model');
		$ids = $CI->finance_model->get_ids('settings','setting_id');
		if (!empty($ids)) {
			foreach($ids as $k => $id){
	            $params = ['setting_id' => $id];
	            $CI->load->library('obj/Settingobj',$params ,'SETT');
	            $Obj[] = new $CI->SETT($params);
	        }
		}
	    
        return @$Obj;
	}
	public function terms(){
		$CI = &get_instance();
		$CI->load->model('forms_model');
		$ids = $CI->forms_model->get_ids('sessions','session_id');
		if (!empty($ids)) {
			foreach($ids as $k => $id){
	            $params = ['session_id' => $id];
	            $CI->load->library('obj/Termobj',$params ,'TERM');
	            $Obj[] = new $CI->TERM($params);
	        }
		}
	    
        return @$Obj;
	}
	public function sessions(){
		$CI = &get_instance();
		$CI->load->model('forms_model');
		$ids = $CI->forms_model->distinct_where('duration','sessions','duration');
		if (!empty($ids)) {
			foreach($ids as $k => $id){
	            $params = ['duration' => $id];
	            $CI->load->library('obj/Sessionobj',$params ,'SESS');
	            $Obj[] = new $CI->SESS($params);
	        }
		}
	    
        return @$Obj;
	}
	public function fees(){
		$CI = &get_instance();
		$CI->load->model('finance_model');
		$ids = $CI->finance_model->get_ids('fees','fee_id');
		if (!empty($ids)) {
			foreach($ids as $k => $id){
	            $params = ['fee_id' => $id];
	            $CI->load->library('obj/Feeobj',$params ,'FEE');
	            $Obj[] = new $CI->FEE($params);
	        }
		}
	    
        return @$Obj;
	}
	public function alloverdue(){
		$CI = &get_instance();
		$CI->load->model('library_model');
		$ids = $CI->library_model->get_ids_where('lending','lend_id',['returned' => 0,'lost' => 0,'damaged' => 0]);
		if (!empty($ids)) {
			foreach($ids as $k => $id){
	            $params = ['lend_id' => $id];
	            $CI->load->library('obj/Lendobj',$params ,'LND');
	            $obj = new $CI->LND($params);
	            $today = time();
				$b = strtotime($obj->expected_date);
				$overdue = floor(($today - $b)/86400);
				if ($overdue > 0) {
					$Obj[] = new $CI->LND($params);
				}
			}
		}
	    
        return @$Obj;
	}
	
	public function allpending(){
		$CI = &get_instance();
		$CI->load->model('library_model');
		$ids = $CI->library_model->get_ids_where('lending','lend_id',['returned' => 0,'lost' => 0,'damaged' => 0]);
		if (!empty($ids)) {
			foreach($ids as $k => $id){
	            $params = ['lend_id' => $id];
	            $CI->load->library('obj/Lendobj',$params ,'LND');
	            $Obj[] = new $CI->LND($params);
	        }
		}
	    
        return @$Obj;
	}
	public function alllost(){
		$CI = &get_instance();
		$CI->load->model('library_model');
		$ids = $CI->library_model->get_ids_where('lending','lend_id',['lost' => 1]);
		if (!empty($ids)) {
			foreach($ids as $k => $id){
	            $params = ['lend_id' => $id];
	            $CI->load->library('obj/Lendobj',$params ,'LND');
	            $Obj[] = new $CI->LND($params);
	        }
		}
	    
        return @$Obj;
	}
	public function alldamaged(){
		$CI = &get_instance();
		$CI->load->model('library_model');
		$ids = $CI->library_model->get_ids_where('lending','lend_id',['damaged' => 1]);
		if (!empty($ids)) {
			foreach($ids as $k => $id){
	            $params = ['lend_id' => $id];
	            $CI->load->library('obj/Lendobj',$params ,'LND');
	            $Obj[] = new $CI->LND($params);
	        }
		}
	    
        return @$Obj;
	}
	public function allbooks(){
		$CI = &get_instance();
		$CI->load->model('library_model');
		$ids = $CI->library_model->get_ids('books','book_id');
		if (!empty($ids)) {
			foreach($ids as $k => $id){
	            $params = ['book_id' => $id];
	            $CI->load->library('obj/Bookobj',$params ,'BOK');
	            $Obj[] = new $CI->BOK($params);
	        }
		}
	    
        return @$Obj;
	}


	public function allclasses(){
		$CI = &get_instance();
		$CI->load->model('forms_model');
		$ids = $CI->forms_model->get_ids('classes','class_id');
		if (!empty($ids)) {
			foreach($ids as $k => $id){
	            $params = ['class_id' => $id];
	            $CI->load->library('obj/Classobj',$params ,'CLS');
	            $Obj[] = new $CI->CLS($params);
	        }
		}
	    
        return @$Obj;
	}
	public function allstudents(){
		$CI = &get_instance();
		$CI->load->model('forms_model');
		$ids = $CI->forms_model->get_ids('students','student_id');
		if (!empty($ids)) {
			foreach($ids as $k => $id){
	            $params = ['student_id' => $id];
	            $CI->load->library('obj/Studentobj',$params ,'STUD');
	            $Obj[] = new $CI->STUD($params);
	        }
		}
	    
        return @$Obj;
	}
	public function allstaff(){
		$CI = &get_instance();
		$CI->load->model('forms_model');
		$ids = $CI->forms_model->get_ids('staff','staff_id');
		if (!empty($ids)) {
			foreach($ids as $k => $id){
	            $params = ['staff_id' => $id];
	            $CI->load->library('obj/Staffobj',$params ,'STF');
	            $Obj[] = new $CI->STF($params);
	        }
		}
	    
        return @$Obj;
	}
	public function allparents(){
		$CI = &get_instance();
		$CI->load->model('forms_model');
		$ids = $CI->forms_model->get_ids('parents','parent_id');
		if (!empty($ids)) {
			foreach($ids as $k => $id){
	            $params = ['parent_id' => $id];
	            $CI->load->library('obj/Parentobj',$params ,'PRT');
	            $Obj[] = new $CI->PRT($params);
	        }
		}
	    
        return @$Obj;
	}
}