<h2>Remove Grade from University database</h2>
<p>Do you want to remove this grade:</p>

<table class="table table-bordered table-condensed">
  <tr>
    <td>Grade ID</td> <td> <?php echo $chosen_grade[0]['idGrades'] ?> </td>
  </tr>
  <tr>
    <td>Student ID</td> <td> <?php echo $chosen_grade[0]['id_student'] ?> </td>
  </tr>
  <tr>
    <td>Course ID</td> <td> <?php echo $chosen_grade[0]['idCourse'] ?> </td>
  </tr>
  <tr>
    <td>Grade</td> <td> <?php echo $chosen_grade[0]['grade'] ?> </td>
  </tr>
  <tr>
    <td>Date of Grade</td> <td> <?php echo $chosen_grade[0]['date_of_grade'] ?> </td>
  </tr>

</table>

<a href="<?php echo site_url('grades/delete_grade/').$idGrades; ?>"> <button class="btn btn-danger">Delete</button> </a>
<a href="<?php echo site_url('grades/show_grades'); ?>"> <button class="btn btn-primary">Cancel</button> </a>
