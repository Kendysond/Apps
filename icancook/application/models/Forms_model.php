<?php
	
class Forms_model extends CI_Model {
	
    public function exist($table,$param,$value){
		$q = $this->db->get_where($table,[$param => $value]);
		return $q->num_rows();
	}
	public function exist_array($table,$data){
		$this->db->where('deleted', 0);
		$q = $this->db->get_where($table,$data);
		return $q->num_rows();
	}
	public function insert_array($table,$data){
		$this->db->insert($table, $data);
		return $this->db->insert_id();
	}
	public function get_details($table,$param,$value){
		$query = $this->db->get_where($table,[$param => $value]);
		return @$query->result_array();
	}
	public function get_details_where($table,$where){
		$query = $this->db->get_where($table,$where);
		return @$query->result_array();
	}
	public function get_ids($table,$id){
		$query = $this->db->get_where($table,['deleted' => 0]);
		foreach ($query->result() as $row) {
            $ids[] = @$row->$id;
        }
		return  @$ids;
	}
	public function get_id_where($table,$id,$where){
		$this->db->where('deleted', 0);
		$query = $this->db->get_where($table,$where);
		foreach ($query->result() as $row) {
            $result = @$row->$id;
        }
		return  @$result;
	}
	
	public function get_ids_where($table,$id,$where){
		$this->db->where('deleted', 0);
		$query = $this->db->get_where($table,$where);
		foreach ($query->result() as $row) {
            $ids[] = @$row->$id;
        }
		return  @$ids;
	}
	public function search_student($term,$limit,$start){
		$sql = "SELECT `student_id` FROM (`students`) WHERE 
		 	`deleted` = 0  AND  (`firstname` LIKE '%$term%' OR `lastname` LIKE '%$term%')
			ORDER BY `lastname` asc LIMIT $start, $limit ";
		$query = $this->db->query($sql);
		foreach ($query->result() as $row) {
            $student_ids[] =  $row->student_id;
        }
        return  @$student_ids;
	}
	public function search_staff($term,$limit,$start){
		$sql = "SELECT `staff_id` FROM (`staff`) WHERE 
		 	`deleted` = 0  AND  (`firstname` LIKE '%$term%' OR `lastname` LIKE '%$term%')
			ORDER BY `lastname` asc LIMIT $start, $limit ";
		$query = $this->db->query($sql);
		foreach ($query->result() as $row) {
            $staff_ids[] =  $row->staff_id;
        }
        return  @$staff_ids;
	}
	public function delete_row($table,$where){
		$this->db->delete($table,$where);
		return $this->db->affected_rows();
	}
	public function delete($table,$where){
		$this->db->update($table,['deleted' => 1],$where);
		return $this->db->affected_rows();
	}
	public function edit($table,$changes,$where){
		$this->db->update($table,$changes,$where);
		return $this->db->affected_rows();
	}
	public function no_rows($table,$data){
		$q = $this->db->get_where($table,$data);
		return $q->num_rows();
	}
	public function distinct_where($what,$table,$id){
		$this->db->distinct();
		$this->db->select($what);
		$query = $this->db->get($table);
		foreach ($query->result() as $row) {
            $results[] =  $row->$id;
        }
        return  @$results;
	}
	public function sql_get_ids($sql,$id){
		$query = @$this->db->query($sql);
		foreach ($query->result() as $row) {
            $results[] = @$row->$id;
        }
		return  @$results;
	}
	public function sql_get_value($sql,$id){
		$query = @$this->db->query($sql);
		foreach ($query->result() as $row) {
            $result =  @$row->$id;
        }
		return  @$result;
	}
	public function get_max_value($table,$where,$value){
		$this->db->where('deleted', 0);
		$this->db->select_max($value);
		$query = $this->db->get_where($table,$where);
		foreach ($query->result() as $row) {
           echo $result = @$row->$value;
        }
        return $result;
	}




	
}