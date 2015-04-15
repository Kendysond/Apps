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

class Formsclass {
	public function generate_id(){
		$CI = &get_instance();
		$CI->load->model('forms_model');
  		//
  		$tablename = $user."ids";
		$prefix = 'ds';
		//
		$sql = "SELECT * FROM `ids`ORDER BY id DESC LIMIT 1";
  		$lastsuffix = $CI->forms_model->sql_get_value($sql,'ids');
  		$suffix = $lastsuffix + 1;
  		$newid = $prefix.$suffix;
  		$data = ['ids' => $suffix ];
		$result = $CI->forms_model->insert_array('ids',$data);
		
		return $newid;
	}
	public function upload_passport($user){
		$CI = &get_instance();
		$filename = 'passport';
		$newfilename = time();
		$config['upload_path'] =  './data/'.$user.'_passport/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size'] = 1024 * 100;
        $config['encrypt_name'] = TRUE;
 
        $CI->load->library('upload', $config);
 		$finalresult = '';
        if ($CI->upload->do_upload($filename)){
        	$passportdata = $CI->upload->data();
            $link =  './data/'.$user.'_passport/'.$passportdata['file_name'];
        }else{
        	$link = null;
        }
        return $link;
	}
	public function add_student($data){
		$CI = &get_instance();
		$CI->load->model('forms_model');
		if ($data['student_school_id'] == "") {
			$data['student_school_id'] = $this->generate_id('student');
		}
		$row = $CI->forms_model->exist('students','student_school_id',$data['student_school_id']);
		if ($row > 0) {
			$result = ['result' => 'idexist'];
			return $result;
			die();
		}
		$data['start_session_id'] = $this->activesession('id');
		$data['password'] = hash('sha256',staff_pw . SALT);

		$data['passport'] = $this->upload_passport('student');

	    $student_id = $CI->forms_model->insert_array('students',$data);
		$studentsdata = ['student_id'=> $student_id,'session_id'=> $data['start_session_id'],'class_id' => $data['start_class_id']];
	  	$addstudentdata = $CI->forms_model->insert_array('studentsdata',$studentsdata);
		$result = ['result' => 'success','id' => $data['student_school_id']];
		return $result;
		die();
	}
	public function edit_student($data){
		$CI = &get_instance();
		$CI->load->model('forms_model');
  		$student_id = $data['student_id'];
		unset($data['student_id']);
		
		$array = ['student_school_id' => $data['student_school_id'],'md5(student_id) !=' => $student_id];
		$row = $CI->forms_model->exist_array('students',$array);
		if ($row > 0) {
			$result = ['result' => 'idexist'];
			return $result;
			die();
		}
		$data['passport'] = $this->upload_passport('student');
		
		$where = ['md5(student_id)' => $student_id];
		$edited = $CI->forms_model->edit('students',$data,$where);
		
	    $result = ['result' => 'success','id' => $data['student_school_id']];
		return $result;
		die();
	}
	public function add_staff($data){
		$CI = &get_instance();
		$CI->load->model('forms_model');
		if ($data['staff_school_id'] == "") {
			$data['staff_school_id'] = $this->generate_id('staff');
		}
		$row = $CI->forms_model->exist('staff','staff_school_id',$data['staff_school_id']);
		if ($row > 0) {
			$result = ['result' => 'idexist'];
			return $result;
			die();
		}
		$data['start_session_id'] = $this->activesession('id');
		$data['password'] = hash('sha256',staff_pw . SALT);

		$data['passport'] = $this->upload_passport('staff');
		

	    $staff_id = $CI->forms_model->insert_array('staff',$data);
		$result = ['result' => 'success','id' => $data['staff_school_id']];
		return $result;
		die();
	}
	public function edit_staff($data){
		$CI = &get_instance();
		$CI->load->model('forms_model');
  		$staff_id = $data['staff_id'];
		unset($data['staff_id']);
		
		$array = ['staff_school_id' => $data['staff_school_id'],'md5(staff_id) !=' => $staff_id];
		$row = $CI->forms_model->exist_array('staff',$array);
		if ($row > 0) {
			$result = ['result' => 'idexist'];
			return $result;
			die();
		}
		$data['passport'] = $this->upload_passport('staff');
		
		$where = ['md5(staff_id)' => $staff_id];
		$edited = $CI->forms_model->edit('staff',$data,$where);
		
	    $result = ['result' => 'success','id' => $data['staff_school_id']];
		return $result;
		die();
	}
	public function parent_search_student($term){
		$CI = &get_instance();
		$CI->load->model('forms_model');
		$student_ids = $CI->forms_model->search_student($term,20,0);
  		if (!empty($student_ids)) {
			foreach($student_ids as $k => $student_id){
	            $params = ['student_id' => $student_id];
	            $CI->load->library('obj/Studentobj',$params ,'STUD');
	            $student = new $CI->STUD($params);
	            $data[] = array(
		            'id' => $student->student_id,
		            'text' => $student->firstname.' - '.$student->lastname.' | Started '
		        );
	        }
	        return @$data;
		}else{
			return false;
		}
	}
	public function link_student_to_parent($parent_id,$student_id,$relationship){
		$CI = &get_instance();
		$CI->load->model('forms_model');
		$array = ['parent_id' => $parent_id,'student_id' => $student_id];
		$row = $CI->forms_model->exist_array('links',$array);
		if ($row == 0) {
			$data = ['parent_id' => $parent_id,'student_id' => $student_id,'relationship' => $relationship];
			$result = $CI->forms_model->insert_array('links',$data);
		}else{
			$result = "";
		}
		return $result;
	}
	public function add_parent($data){
		$CI = &get_instance();
		$CI->load->model('forms_model');
		if ($data['parent_school_id'] == "") {
			$data['parent_school_id'] = $this->generate_id('parent');
		}
		$row = $CI->forms_model->exist('parents','parent_school_id',$data['parent_school_id']);
		if ($row > 0) {
			$result = ['result' => 'idexist'];
			return $result;
			die();
		}
		if (isset($data['student_id'])) {
			$student_ids = $data['student_id'];
			$relationship = $data['relationship'];
			unset($data['student_id']);
			unset($data['relationship']);
		}
		unset($data['selected_student_id']);
		unset($data['selected_relation']);
		
		$data['start_session_id'] = $this->activesession('id');
		$data['password'] = hash('sha256',staff_pw . SALT);

		//$data['passport'] = $this->upload_passport('parent');
		
 	   	$parent_id = $CI->forms_model->insert_array('parents',$data);
 	   	if (isset($student_ids) && !empty($student_ids)) {
 	   		foreach ($student_ids as $key => $student_id) {
	 	   		$link = $this->link_student_to_parent($parent_id,$student_id,$relationship[$key]);
	 	   	}
		}
 	   	$result = ['result' => 'success','id' => $data['parent_school_id']];
		return $result;
		die();
	}
	public function edit_parent($data){
		$CI = &get_instance();
		$CI->load->model('forms_model');
  		$parent_id = $data['parent_id'];
		unset($data['parent_id']);
		
		$array = ['parent_school_id' => $data['parent_school_id'],'md5(parent_id) !=' => $parent_id];
		$row = $CI->forms_model->exist_array('parents',$array);
		if ($row > 0) {
			$result = ['result' => 'idexist'];
			return $result;
			die();
		}

		if (isset($data['student_id'])) {
			$student_ids = $data['student_id'];
			$relationship = $data['relationship'];
			unset($data['student_id']);
			unset($data['relationship']);
		}
		unset($data['selected_student_id']);
		unset($data['selected_relation']);
		

		$data['passport'] = $this->upload_passport('parent');

		if (isset($student_ids) && !empty($student_ids)) {
			$params = ['md5_id' => $parent_id];
            $CI->load->library('obj/Parentobj',$params ,'PRT');
            $parentobj = new $CI->PRT($params);
 	   		foreach ($student_ids as $key => $student_id) {
	 	   		$link = $this->link_student_to_parent($parentobj->parent_id,$student_id,$relationship[$key]);
	 	   	}
		}

		$where = ['md5(parent_id)' => $parent_id];
		$edited = $CI->forms_model->edit('parents',$data,$where);
		
	    $result = ['result' => 'success','id' => $data['parent_school_id']];
		return $result;
		die();
	}
	public function search_staff($term){
		$CI = &get_instance();
		$CI->load->model('forms_model');
		$staff_ids = $CI->forms_model->search_staff($term,20,0);
  		if (!empty($staff_ids)) {
			foreach($staff_ids as $k => $staff_id){
	            $params = ['staff_id' => $staff_id];
	            $CI->load->library('obj/Staffobj',$params ,'STF');
	            $staff = new $CI->STF($params);
	            $data[] = array(
		            'id' => $staff->staff_id,
		            'text' => $staff->firstname.' - '.$staff->lastname.'  '
		        );
	        }
	        return @$data;
		}else{
			return false;
		}
	}
	public function edit_student_page($data){
		$CI = &get_instance();
		$student_school_id =  $data['id'];
	    $stuparams = ['student_school_id' => $student_school_id];
        $CI->load->library('obj/Studentobj',$stuparams ,'STU');
        $student = new $CI->STU($stuparams);
	    return $student;
	}
	public function edit_staff_page($data){
		$CI = &get_instance();
		$staff_school_id =  $data['id'];
	    $staffparams = ['staff_school_id' => $staff_school_id];
        $CI->load->library('obj/Staffobj',$staffparams ,'STF');
        $staff = new $CI->STF($staffparams);
	    return $staff;
	}
	public function edit_parent_page($data){
		$CI = &get_instance();
		$parent_school_id =  $data['id'];
	    $parentparams = ['parent_school_id' => $parent_school_id];
        $CI->load->library('obj/Parentobj',$parentparams ,'PRT');
        $parent = new $CI->PRT($parentparams);
	    return $parent;
	}
	public function get_students($class_id,$duration){
		$CI = &get_instance();

		$params = ['duration' => $duration];
        $CI->load->library('obj/Sessionobj',$params ,'SESS');
        $session = new $CI->SESS($params);
        $sql = "SELECT `student_id` FROM `studentsdata` WHERE 
		 	`class_id` = $class_id  AND `deleted` = 0  AND  (session_id = $session->first OR session_id = $session->second OR session_id = $session->third)
			ORDER BY `added` asc";
        $ids = $CI->forms_model->sql_get_ids($sql,'student_id');
		if (!empty($ids)) {
			foreach($ids as $k => $id){
	            $params = ['student_id' => $id];
	            $CI->load->library('obj/Studentobj',$params ,'STUD');
	            $Obj[] = new $CI->STUD($params);
	        }
		}
	    
        return @$Obj;
	}
	public function unpromoted_students($class_id,$duration){
		$CI = &get_instance();
		$Obj = [];
		$params = ['duration' => $duration];
        $CI->load->library('obj/Sessionobj',$params ,'SESS');
        $session = new $CI->SESS($params);
        if ($session->first != "") {
        	 $sql = "SELECT `student_id` FROM `studentsdata` WHERE 
			 	`class_id` = $class_id  AND `deleted` = 0  AND `promoted` = 0  AND  (session_id = $session->first OR session_id = $session->second OR session_id = $session->third)
				ORDER BY `added` asc";
	        $ids = $CI->forms_model->sql_get_ids($sql,'student_id');
			if (!empty($ids)) {
				foreach($ids as $k => $id){
		            $params = ['student_id' => $id];
		            $CI->load->library('obj/Studentobj',$params ,'STUD');
		            $Obj[] = new $CI->STUD($params);
		        }
			}
        }
       
	    
        return @$Obj;
	}
	public function promotion_page($data){
		$CI = &get_instance();
		$from =  urldecode($data['from']);
	    $to =  urldecode($data['to']);
	    $classparams = ['name' => $data['class']];
        $CI->load->library('obj/Classobj',$classparams ,'CLS');
        $class = new $CI->CLS($classparams);
	    $class_id =  $class->class_id;
	    $result = $this->unpromoted_students($class_id,$from);
	    return $result;
	}
	public function promote_students($data){
		$CI = &get_instance();
		$results = "";
		$classparams = ['name' => $data['class']];
        $CI->load->library('obj/Classobj',$classparams ,'CLS');
        $class = new $CI->CLS($classparams);
	    ///
	    $sessparams = ['duration' => $data['session']];
        $CI->load->library('obj/Sessionobj',$sessparams ,'SESS');
        $session = new $CI->SESS($sessparams);
	    foreach($data['students'] as $k => $id){
            $params = ['md5_id' => $id];
            $CI->load->library('obj/Studentobj',$params ,'STUD');
            $student = new $CI->STUD($params);
            $data = ['promoted' => 1];
            $where = ['student_id' => $student->student_id,'promoted' => 0];
            $result = $CI->forms_model->edit('studentsdata',$data,$where);
            $insertdata = ['student_id' => $student->student_id,'class_id' => $class->class_id ,'session_id' => $session->first];
            $result = $CI->forms_model->insert_array('studentsdata',$insertdata);
			
			$results =  $results.'<li><p class="text-success">'.$student->firstname." ".$student->lastname ." promoted to ". $class->name . " ".$session->duration." session </p></li>";
		
        }
        return $results;
	}
	public function sheet_details($filepath,$class_id = null){
		$CI = &get_instance();
		$CI->load->model('forms_model');
		
		$CI->load->library('excel');

		$filename = $filepath; //save our workbook as this file name
		$objPHPExcel = PHPExcel_IOFactory::load($filename);

		$header = [
			"A" => "firstname",
		    "B" => "lastname",
		    "C" => "gender",
		    "D" => "dob",
		    "E" => "id",
		    "F" => "nationality",
		    "G" => "state",
		    "H" => "phone",
		    "I" => "email",
		    "J" => "address"
	    ];
		
		$objWorksheet = $objPHPExcel->setActiveSheetIndex(0);
		$highestRow = $objWorksheet->getHighestRow();
		$highestColumn = $objWorksheet->getHighestColumn();

		$headerArray = $objWorksheet->rangeToArray('A1:'.$highestColumn.'1',null, true, true, true);
		$headerArray = $headerArray[1];
		if ($header === $headerArray) {
			$r = -1;
			$results = array();
			for ($row = 2; $row <= $highestRow; ++$row) {
			    $dataRow = $objWorksheet->rangeToArray('A'.$row.':'.$highestColumn.$row,null, true, true, true);
			    if ((isset($dataRow[$row]['A'])) && ($dataRow[$row]['A'] > '')) {
			        ++$r;
			        foreach($headerArray as $columnKey => $columnHeading) {
			            $results[$r][$columnHeading] = $dataRow[$row][$columnKey];
			        }
			    }
			}

			foreach ($results as $key => $row) {
				if ($class_id !=  null) {
					$db_array['start_class_id'] = $class_id;
				}
				$db_array['firstname'] = $row['firstname'];
				$db_array['lastname'] = $row['lastname'];
				$db_array['email'] = $row['email'];
				$db_array['sex'] = $row['gender'];
				$db_array['dob'] = $row['dob'];
				$db_array['nationality'] = $row['nationality'];
				$db_array['state'] = $row['state'];
				$db_array['phonenumber'] = $row['phone'];
				$db_array['student_school_id'] = $row['id'];
				$db_array['address'] = $row['address'];
				$array[] =  $db_array;
			}

			$result = ['result' => 'success','filepath' => $filepath,'students' => $array];
			return $result;
		}else{
			$result = ['result' => 'wrongformat'];
			return $result;
		
		}
	}
	public function upload_sheet($data){
		$CI = &get_instance();
		$filename = 'file';
		$newfilename = time();
		$config['upload_path'] = './data/students/';
        $config['allowed_types'] = 'xls|xlsx|csv';
        $config['max_size'] = 1024 * 100;
        $config['encrypt_name'] = TRUE;
 
        $CI->load->library('upload', $config);
 		$finalresult = '';
        if ($CI->upload->do_upload($filename)){
        	$sheetdata = $CI->upload->data();
            $filepath =  './data/students/'.$sheetdata['file_name'];
           	$CI->session->set_userdata('filepath', $filepath);
	        
        }
        return $this->sheet_details($filepath);
	}
	public function post_sheet($class_id){
		$CI = &get_instance();
		$filepath = $CI->session->userdata('filepath');
		$rows = $this->sheet_details($filepath,$class_id);
		foreach ($rows['students'] as $key => $data) {
			$result = $this->add_student($data);
	  	}
		return $result;
	}
	public function update_activesession($data){
		$CI = &get_instance();
		$CI->load->model('forms_model');
		$duration = $data['session'];
		$term = $data['term'];
		$where = ['active' => 'active'];
		$data = ['active' => ''];
		$removeactive = $CI->forms_model->edit('sessions',$data,$where);
		$params = ['duration' => $duration];
        $CI->load->library('obj/Sessionobj',$params ,'SESS');
        $session = new $CI->SESS($params);
       	$session_id =  $session->$term;
       	$where = ['session_id' => $session_id];
		$data = ['active' => 'active'];
		$addactive = $CI->forms_model->edit('sessions',$data,$where);
		return "success";
	}

	public function class_student_ids($term,$duration){
		$CI = &get_instance();
		$CI->load->model('forms_model');
		$result = [];
		$params = ['duration' => $duration,'term' => $term];
        $CI->load->library('obj/Studentsobj',$params ,'STUDS');
        $data = new $CI->STUDS($params);
       	

       	$classobjs = $CI->statsclass->allclasses();
       	if (!empty($classobjs)) {
       		foreach ($classobjs as $key => $classobj) {
       		
	       		foreach ($data->class_ids as $k => $class_id) {
	       			if ($class_id ==  $classobj->class_id) {
	       				$classes[$classobj->name][] = $data->student_ids[$k];
	       			}
	       			# code...
	       		}
	       	}
	       	$result = $classes;
       	}
       	
    	return $result;
	}
	public function home_stats(){
		$CI = &get_instance();
		$CI->load->model('forms_model');
		$terms = ['first','second','third'];
        $duration = $this->activesession();
		$result = [];
		$first = 0;
		$second = 0;
		$third = 0;
		foreach ($terms as $key => $term) {
			
			$classes = $this->class_student_ids($term,$duration);

			foreach ($classes as $key => $classids) {
				$count = count($classes[$key]);
				$row[$key][$term] = $count;

				switch ($term) {
					case 'second':
						$second += $count; 
						break;
					case 'third':
						$third += $count; 
						break;
					default:
						$first += $count; 
						break;
				}
			}
			//

			// $row [$


			// ]
		}

		$result['classes'] = $row;
        $result['total'] = ['first' => $first,'second' => $second,'third' => $third];
        // foreach ($classobjs as $key => $classobj) {
       		
       	// 	foreach ($data->class_ids as $k => $class_id) {
       	// 		if ($class_id ==  $classobj->class_id) {
       	// 			$classes[$classobj->name][] = $data->student_ids[$k];
       	// 		}
       	// 		# code...
       	// 	}
       	// }
       	//$result = $classes;
    	return $result;
	}
	
	











}

