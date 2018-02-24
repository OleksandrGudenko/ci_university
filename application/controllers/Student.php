<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student extends CI_Controller {

  public function index(){
    $data['page']='student/index';
    $this->load->view('menu/content',$data);
  }

  public function show_students(){
    $this->load->model('Student_model');
    $data['students']=$this->Student_model->get_students();
    $data['page']='student/show_students';
    $this->load->view('menu/content', $data);
  }

  public function add_student_form(){
    $this->load->model('Student_model');
    $data['postalCode_list']=$this->Student_model->get_postalCode_id();
    $data['page']='student/add_student_form';
    $this->load->view('menu/content',$data);
  }

  public function add_student_db(){
    $this->load->model('Student_model');
    $insert_data=array(
      'id_student'=>$this->input->post('id_student'),
      'firstname'=>$this->input->post('firstname'),
      'lastname'=>$this->input->post('lastname'),
      'group_name'=>$this->input->post('group_name'),
      'email'=>$this->input->post('email'),
      'streetAddress'=>$this->input->post('streetAddress'),
      'postalCode'=>$this->input->post('postalCode'),
      'birthYear'=>$this->input->post('birthYear')
      );

       $success=$this->Student_model->insert_new_student($insert_data);

    if($success){
      $data['message']='New student was added to the University.';
    }
    else{
      $data['message']='There was an error, check the primary key.';
    }

    $data['page']='student/add_student_db';
    $this->load->view('menu/content',$data);
  }


  public function delete_selected($delete_id){
    $this->load->model('Student_model');
    $data['id_student']=$delete_id;
    $data['chosen_student']=$this->Student_model->get_chosen_student($delete_id);
    $data['page']='student/delete_selected';
    $this->load->view('menu/content',$data);
  }

    public function delete_student($id_student){
      $this->load->model('Student_model');
      $success=$this->Student_model->delete_student($id_student);


       if($success){
         $data['message']='The Student has been deleted from the University.';
       }
       else{
         $data['message']='There was an error. Contact support.';
       }

       $data['page']='student/add_student_db';
       $this->load->view('menu/content',$data);
    }


  public function edit_selected($edit_id){
    $this->load->model('Student_model');
    $data['postalCode_list']=$this->Student_model->get_postalCode_id();
    $data['id_student']=$edit_id;
    $data['chosen_student']=$this->Student_model->get_chosen_student($edit_id);
    $data['page']='student/edit_selected';
    $this->load->view('menu/content',$data);
  }

  public function save_edited(){
    $test=$this->load->model('Student_model');
    $update_id=$this->input->post('id_student');
    $data_update=array(
      'firstname'=>$this->input->post('firstname'),
      'lastname'=>$this->input->post('lastname'),
      'group_name'=>$this->input->post('group_name'),
      'email'=>$this->input->post('email'),
      'streetAddress'=>$this->input->post('streetAddress'),
      'postalCode'=>$this->input->post('postalCode'),
      'birthYear'=>$this->input->post('birthYear')
    );
    $success=$this->Student_model->save_edited($update_id,$data_update);
    if($success){
  $data['message']='You have updated Students credentials with id: '.$this->input->post('id_student').'.';
  }
  else{
    $data['message']='Somethig went wrong, time to pray that all good...hjdjahsdk asjdkjhd 1"#¤/!()#????';
  }
  $data['page']='student/add_student_db';
  $this->load->view('menu/content',$data);
  }

  public function student_search(){
    $this->load->model('Student_model');
    $search=$_POST['lastname'];
    $data['found_student']=$this->Student_model->get_search_result($search);
    $success=$this->Student_model->get_search_result($search);
    if($success){
    $data['found_student']=$this->Student_model->get_search_result($search);
    }
    else{
      $data['message']='Somethig went wrong, time to pray to god...hjdjahsdk asjdkjhd 1"#¤/!()#????';
    }
    $data['page']='student/student_search';
    $this->load->view('menu/content',$data);
    }
}
