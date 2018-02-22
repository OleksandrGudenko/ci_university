<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Grades extends CI_Controller {

  function __construct()
  {
    parent::__construct();
    $this->load->model('Grades_model');
  }

  public function show_grades(){
    $this->load->model('Grades_model');
    $data['grades']=$this->Grades_model->get_grades();
    $data['page']='grades/show_grades';
    $this->load->view('menu/content',$data);
  }


public function add_grades_form(){
$this->load->model('Grades_model');
$data['id_student_list']=$this->Grades_model->get_student_id();
$data['idCourse_list']=$this->Grades_model->get_courses_id();

  $data['page']='grades/add_grades_form';
  $this->load->view('menu/content',$data);
}

public function insert_new_grade(){
  $this->load->model('Grades_model');
  $insert_data=array(
    'idGrades'=>$this->input->post('idGrades'),
    'id_student'=>$this->input->post('id_student'),
    'idCourse'=>$this->input->post('idCourse'),
    'grade'=>$this->input->post('grade'),
    'date_of_grade'=>$this->input->post('date_of_grade')
    );
     $success=$this->Grades_model->insert_new_grade($insert_data);

  if($success){
    $data['message']='New Grade was assigned to a Student.';
  }
  else{
    $data['message']='There was an error, check the primary key.';
  }

  $data['page']='grades/add_grade_db';
  $this->load->view('menu/content',$data);
}


  public function delete_selected_grade($delete_id){
    $this->load->model('Grades_model');
    $data['idGrades']=$delete_id;
    $data['chosen_grade']=$this->Grades_model->get_chosen_grades($delete_id);
    $data['page']='grades/delete_grade';
    $this->load->view('menu/content',$data);
  }

  public function delete_grade($idGrades){
    $this->load->model('Grades_model');
    $success=$this->Grades_model->delete_grade($idGrades);


     if($success){
       $data['message']='The Grade has been deleted.';
     }
     else{
       $data['message']='There was an error. Contact support.';
     }

     $data['page']='grades/add_grade_db';
     $this->load->view('menu/content',$data);
  }


public function edit_grade($edit_id){
  $this->load->model('Grades_model');
  $data['idGrades']=$edit_id;
  $data['chosen_grade']=$this->Grades_model->get_chosen_grades($edit_id);
  $data['id_student_list']=$this->Grades_model->get_student_id();
  $data['idCourse_list']=$this->Grades_model->get_courses_id();
  $data['page']='grades/edit_grade';
  $this->load->view('menu/content',$data);
}

public function save_edited_grade(){
  $test=$this->load->model('Grades_model');
  $update_id=$this->input->post('idGrades');
  $data_update=array(
    'id_student'=>$this->input->post('id_student'),
    'idCourse'=>$this->input->post('idCourse'),
    'grade'=>$this->input->post('grade'),
    'date_of_grade'=>$this->input->post('date_of_grade'),
  );
  $success=$this->Grades_model->save_edited_grade($update_id,$data_update);
  if($success){
$data['message']='You have updated Grade with id: '.$this->input->post('idGrades').'.';
}
else{
  $data['message']='Somethig went wrong, time to pray that all good...hjdjahsdk asjdkjhd 1"#¤/!()#????';
}
$data['page']='grades/add_grade_db';
$this->load->view('menu/content',$data);
}


}
