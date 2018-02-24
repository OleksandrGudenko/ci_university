<h2>Search Result</h2>
<table class="table table-bordered table-hover">
  <tr class="info">
     <th>Student ID</th><th>Firstname</th><th>Lastname</th><th>Group Name</th><th>Email</th><th>Street Address</th><th>Postal Code</th><th>Birth Date</th><th>Edit</th><th>Delete</th>
  </tr>
  <?php
  foreach ($found_student as $row) {
      echo  '<tr>';
      echo   '<td>'.$row['id_student'].'</td>';
      echo   '<td>'.$row['firstname'].'</td>';
      echo   '<td>'.$row['lastname'].'</td>';
      echo   '<td>'.$row['group_name'].'</td>';
      echo   '<td>'.$row['email'].'</td>';
      echo   '<td>'.$row['streetAddress'].'</td>';
      echo   '<td>'.$row['postalCode'].'</td>';
      echo   '<td>'.$row['birthYear'].'</td>';
      echo   '<td><a href="'.site_url('student/edit_selected/').$row['id_student'].'"><button class="btn btn-primary"><span class="glyphicon glyphicon-edit"></span></button></a></td>';
      echo   '<td><a href="'.site_url('student/delete_selected/').$row['id_student'].'"><button class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span></button></a></td>';
      echo   '</tr>';
}

 ?>
</table>

<a href="<?php echo site_url('student/show_students'); ?>"> <button class="btn">Go back</button> </a>
