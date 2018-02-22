<?php

/**
 *
 */
class Course_model extends CI_model
{

  public function get_courses()
  {
    $this->db->select('*');
    $this->db->from('course');
    return $this->db->get()->result_array();
  }

  public function insert_new_course($insert_data){
    $this->db->db_debug = false;
    $addedcourse=$this->db->insert('course',$insert_data);
    return $addedcourse;
  }
  public function get_chosen_course($delete_id){
    $this->db->select('idCourse,courseName,etcPoints');
    $this->db->from('course');
    $this->db->where('idCourse',$delete_id);
    return $this->db->get()->result_array();
  }

  public function delete_course($idCourse){
    $this->db->db_debug = false;
    $this->db->where('idCourse',$idCourse);
    $delCourse=$this->db->delete('course');
    return $delCourse;
  }

  public function save_edited_course($update_id,$data_update){
    $this->db->where('idCourse',$update_id);
    $newCourse=$this->db->update('course',$data_update);
    return $newCourse;
  }

  public function get_search_result($search){
    $this->db->select('idCourse,courseName,etcPoints');
    $this->db->from('course');
    $this->db->where('courseName',$search);
    return $this->db->get()->result_array();
  }

}
