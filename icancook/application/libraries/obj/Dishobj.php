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

class Dishobj {
	var $dish_id;
	var $name;


	function __construct($params){
        $CI = &get_instance();
		if (isset($params['md5_id'])) {
			//$details = $CI->music_model->md5music_details($params['md5_id']);
		}elseif(isset($params['dish_id'])){
            $details = $CI->forms_model->get_details('dishes','dish_id',$params['dish_id']);
        }else{
			$details = $CI->forms_model->get_details('dishes','id',$params['id']);
        }
        if(!empty($details)){
            foreach ($details[0] as $key => $value) {
            	$this->$key = $value;
            }
            $this->ingris = explode(',', $this->ingredients);
        }
  	}

}
