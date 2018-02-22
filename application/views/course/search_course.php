<h2>Search Result</h2>
<table class="table table-bordered table-condensed">

  <tr>
    <td>Course ID</td> <td> <?php echo $found_course[0]['idCourse'] ?> </td>
  </tr>
  <tr>
    <td>Course Name</td> <td> <?php echo $found_course[0]['courseName'] ?> </td>
  </tr>
  <tr>
    <td>etc Point</td> <td> <?php echo $found_course[0]['etcPoints'] ?> </td>
  </tr>

</table>
<a href="<?php echo site_url('course/show_courses'); ?>"> <button class="btn">Cancel</button> </a>
<?php
echo '<td> <a href="'.site_url('course/edit_course/').$found_course[0]['idCourse'].'"><button class="btn btn-primary"><span class="glyphicon glyphicon-edit"></span></button></a></td>';
echo '<td> <a href="'.site_url('course/delete_course/').$found_course[0]['idCourse'].'"><button class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span></button></a></td>';
?>
