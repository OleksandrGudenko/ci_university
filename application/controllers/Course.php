<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Course extends CI_Controller {

  public function show_courses(){
    $this->load->model('Course_model');
    $data['course']=$this->Course_model->get_courses();
    $data['page']='course/show_courses';
    $this->load->view('menu/content', $data);
  }

  public function add_course_form(){
    $data['page']='course/add_course_form';
    $this->load->view('menu/content',$data);
  }

  public function add_course_db(){
    $this->load->model('Course_model');
    $insert_data=array(
      'idCourse'=>$this->input->post('idCourse'),
      'courseName'=>$this->input->post('courseName'),
      'etcPoints'=>$this->input->post('etcPoints'),
      );
       $success=$this->Course_model->insert_new_course($insert_data);

    if($success){
      $data['message']='New course was added to the University.';
    }
    else{
      $data['message']='There was an error, check the primary key.';
    }

    $data['page']='course/add_course_db';
    $this->load->view('menu/content',$data);
  }


      public function delete_selected_course($delete_id){
        $this->load->model('Course_model');
        $data['idCourse']=$delete_id;
        $data['chosen_course']=$this->Course_model->get_chosen_course($delete_id);
        $data['page']='course/delete_course';
        $this->load->view('menu/content',$data);
      }

      public function delete_course($idCourse){
        $this->load->model('Course_model');
        $success=$this->Course_model->delete_course($idCourse);


         if($success){
           $data['message']='The Course has been deleted from the University.';
         }
         else{
           $data['message']='There was an error. Contact support.';
         }

         $data['page']='course/add_course_db';
         $this->load->view('menu/content',$data);
      }


    public function edit_course($edit_id){
      $this->load->model('Course_model');
      $data['idCourse']=$edit_id;
      $data['chosen_course']=$this->Course_model->get_chosen_course($edit_id);
      $data['page']='course/edit_course';
      $this->load->view('menu/content',$data);
    }

    public function save_edited_course(){
      $test=$this->load->model('Course_model');
      $update_id=$this->input->post('idCourse');
      $data_update=array(
        'idCourse'=>$this->input->post('idCourse'),
        'courseName'=>$this->input->post('courseName'),
        'etcPoints'=>$this->input->post('etcPoints'),
      );
      $success=$this->Course_model->save_edited_course($update_id,$data_update);
      if($success){
    $data['message']='You have updated Course credentials for id: '.$this->input->post('idCourse').'.';
    }
    else{
      $data['message']='Somethig went wrong, time to pray that all good...hjdjahsdk asjdkjhd 1"#¤/!()#????';
    }
    $data['page']='course/add_course_db';
    $this->load->view('menu/content',$data);
    }

    public function search_course(){
      $this->load->model('Course_model');
      $search=$_POST['courseName'];
      $data['found_course']=$this->Course_model->get_search_result($search);
      $data['page']='course/search_course';
      $this->load->view('menu/content',$data);
    }

}
