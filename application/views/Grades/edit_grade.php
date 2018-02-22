<h2>Edit Students Grade</h2>
<form class="" action="<?php echo site_url('grades/save_edited_grade'); ?>" method="post">
  <input type="hidden" name="idGrades" value="<?php echo $idGrades; ?>">

  <label for="">Student ID</label> <br>
  <select class="" name="id_student">
    <?php
      foreach ($id_student_list as $row){
        echo '<option value="'.$row['id_student'].'">'.$row['id_student'].'</option>';
      }
    ?>
  </select>

  <br>

  <label for="">Course ID</label> <br>
  <select class="" name="idCourse">
    <?php
      foreach ($idCourse_list as $row){
        echo '<option value="'.$row['idCourse'].'">'.$row['idCourse'].'</option>';
      }
    ?>
  </select>

  <br>

  <label>Grade</label> <br>
  <input type="text" name="grade" value="<?php echo $chosen_grade[0]['grade']; ?>"> <br>
  <label>Date of Grade</label> <br>
  <input type="text" name="date_of_grade" value="<?php echo $chosen_grade[0]['date_of_grade']; ?>"> <br>
  <input class="btn btn-danger" type="submit" name="" value="Save">
</form>
<a href="<?php echo site_url('grades/show_grades'); ?>"><button class="btn btn-primary" >Cancel</button></a>
