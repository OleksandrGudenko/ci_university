<div class="h2name">
  <h2>Grades</h2>
</div>
 <br>
<table class="table table-hover">
  <tr class="info">
    <th>Grade id</th><th>Student id</th> <th>Course ID</th> <th>The Grade</th> <th>Date of the Grade</th><th>Edit</th><th>Delete</th>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<a href="<?php echo site_url('grades/add_grades_form'); ?>" ><button class="btn btn-primary">Assign a New Grade</button></a>

<br> <br>

<?php

foreach ($grades as $row) {
echo '<tr>';
echo '<td>'.$row['idGrades'].'</td>';
echo '<td>'.$row['id_student'].'</td>';
echo '<td>'.$row['idCourse'].'</td>';
echo '<td>'.$row['grade'].'</td>';
echo '<td>'.$row['date_of_grade'].'</td>';
echo '<td> <a href="'.site_url('grades/edit_grade/').$row['idGrades'].'"><button class="btn btn-primary"><span class="glyphicon glyphicon-edit"></span></button></a></td>';
echo '<td> <a href="'.site_url('grades/delete_selected_grade/').$row['idGrades'].'"><button class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span></button></a></td>';
echo '</tr>';
}
?>
</tr>
</table>
