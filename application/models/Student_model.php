<?php

/**
 *
 */
class Student_model extends CI_model
{

  public function get_students()
  {
    $this->db->select('*');
    $this->db->from('student');
    return $this->db->get()->result_array();
  }

  public function insert_new_student($insert_data){
    $this->db->db_debug = false;
    $addedstudent=$this->db->insert('student',$insert_data);
    return $addedstudent;
  }
  public function get_postalCode_id(){
    $this->db->select('postalCode');
    $this->db->from('postalcode');
    return $this->db->get()->result_array();
  }

  public function get_chosen_student($delete_id){
    $this->db->select('id_student,firstname,lastname,group_name,email,streetAddress,postalCode,birthYear');
    $this->db->from('student');
    $this->db->where('id_student',$delete_id);
    return $this->db->get()->result_array();
  }

  public function delete_student($id_student){
    $this->db->db_debug = false;
    $this->db->where('id_student',$id_student);
    $delStud=$this->db->delete('student');
    return $delStud;
  }

  public function save_edited($update_id,$data_update){
    $this->db->where('id_student',$update_id);
    $newCred=$this->db->update('student',$data_update);
    return $newCred;
  }

  public function get_search_result($search){
    $this->db->select('id_student,firstname,lastname,group_name,email,streetAddress,postalCode,birthYear');
    $this->db->from('student');
    $this->db->where('lastname',$search);
    return $this->db->get()->result_array();
  }

}
