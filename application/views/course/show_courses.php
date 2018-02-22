<div class="h2name">
  <h2>Courses</h2>
</div>
 <br>



<table class="table table-hover">
  <tr class="info">
    <th>Course ID</th><th>Course Name</th><th>etc Pints</th><th>Edit</th><th>Delete</th>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<a href="<?php echo site_url('course/add_course_form'); ?>" ><button class="btn btn-primary">Add a New Course</button></a>
<div style="float:right">
<form class="" action="<?php echo site_url('course/search_course/'); ?>" method="post">
  <input type="text" name="courseName" value="" placeholder="search course by name">
  <?php
    echo '<a href="'.site_url('course/search_course/').'"><button class="btn btn-primary"><span class="glyphicon glyphicon-search"></span></button></a>';
   ?>
</form>
</div>
<br> <br>
<?php

foreach ($course as $row) {
echo '<tr>';
echo '<td>'.$row['idCourse'].'</td>';
echo '<td>'.$row['courseName'].'</td>';
echo '<td>'.$row['etcPoints'].'</td>';
echo '<td> <a href="'.site_url('course/edit_course/').$row['idCourse'].'"><button class="btn btn-primary"><span class="glyphicon glyphicon-edit"></span></button></a></td>';
echo '<td> <a href="'.site_url('course/delete_selected_course/').$row['idCourse'].'"><button class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span></button></a></td>';
echo '</tr>';
}

?>
</tr>
</table>
