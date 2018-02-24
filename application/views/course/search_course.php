<h2>Search Result</h2>
<table class="table table-bordered table-hover">
  <tr class="info">
     <th>Course ID</th><th>Course Name</th><th>etcPoints</th><th>Edit</th><th>Delete</th>
  </tr>
  <?php
  foreach ($found_course as $row) {
      echo  '<tr>';
      echo   '<td>'.$row['idCourse'].'</td>';
      echo   '<td>'.$row['courseName'].'</td>';
      echo   '<td>'.$row['etcPoints'].'</td>';

      echo   '<td><a href="'.site_url('course/edit_course/').$row['idCourse'].'"><button class="btn btn-primary"><span class="glyphicon glyphicon-edit"></span></button></a></td>';
      echo   '<td><a href="'.site_url('course/delete_course/').$row['idCourse'].'"><button class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span></button></a></td>';
      echo   '</tr>';
}

 ?>
</table>

<a href="<?php echo site_url('course/show_courses/'); ?>"> <button class="btn">Go back</button> </a>
