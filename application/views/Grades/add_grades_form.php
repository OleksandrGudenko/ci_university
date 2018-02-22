<h2>Assign a Grade</h2>

<form class="" action="<?php echo site_url('grades/insert_new_grade'); ?>" method="post">
  <label for="">Grade ID</label> <br>
  <input type="number" name="idGrades" value="" placeholder="Can be empty"> <br>

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

  <label for="">Grade</label> <br>
  <input type="number" name="grade" value=""> <br>
  <label for="">Date of Grade</label> <br>
  <input type="date" name="date_of_grade" value=""> <br> <br>
  <input class="btn btn-danger" type="submit" name="" value="Add">


</form>
<a href="<?php echo site_url('grades/show_grades'); ?>" ><button class="btn btn-primary">Cancel</button></a>
