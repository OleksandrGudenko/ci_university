<?php
/**
 *
 */
class Grades_model extends CI_model
{

  public function get_grades(){
    $this->db->select('*');
    $this->db->from('grades');
    return $this->db->get()->result_array();
  }

  public function get_student_id(){
    $this->db->select('id_student');
    $this->db->from('student');
    return $this->db->get()->result_array();
  }
  public function get_courses_id(){
    $this->db->select('idCourse');
    $this->db->from('course');
    return $this->db->get()->result_array();
  }

  public function insert_new_grade($insert_data){
    $this->db->db_debug = false;
    $addedgrade=$this->db->insert('grades',$insert_data);
    return $addedgrade;
  }

  public function get_chosen_grades($delete_id){
    $this->db->select('idGrades,id_student,idCourse,grade,date_of_grade');
    $this->db->from('grades');
    $this->db->where('idGrades',$delete_id);
    return $this->db->get()->result_array();
  }

  public function delete_grade($idGrades){
    $this->db->db_debug = false;
    $this->db->where('idGrades',$idGrades);
    $delGrade=$this->db->delete('grades');
    return $delGrade;
  }

  public function save_edited_grade($update_id,$data_update){
    $this->db->where('idGrades',$update_id);
    $newGrade=$this->db->update('grades',$data_update);
    return $newGrade;
  }


}
