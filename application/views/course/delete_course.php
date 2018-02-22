<h2>Remove Course from University database</h2>
<p>Do you want to remove this course:</p>

<table class="table table-bordered table-condensed">
  <tr>
    <td>Course ID</td> <td> <?php echo $chosen_course[0]['idCourse'] ?> </td>
  </tr>
  <tr>
    <td>Course Name</td> <td> <?php echo $chosen_course[0]['courseName'] ?> </td>
  </tr>
  <tr>
    <td>etc Points</td> <td> <?php echo $chosen_course[0]['etcPoints'] ?> </td>
  </tr>

</table>

<a href="<?php echo site_url('course/delete_course/').$idCourse; ?>"> <button class="btn btn-danger">Delete</button> </a>
<a href="<?php echo site_url('course/show_courses'); ?>"> <button class="btn btn-primary">Cancel</button> </a>
