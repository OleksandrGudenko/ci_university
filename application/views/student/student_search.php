<h2>Search Result</h2>          
<table class="table table-bordered table-condensed">
  <tr>
    <td>Student ID</td> <td> <?php echo $found_student[0]['id_student'] ?> </td>
  </tr>
  <tr>
    <td>Firstname</td> <td> <?php echo $found_student[0]['firstname'] ?> </td>
  </tr>
  <tr>
    <td>Lastname</td> <td> <?php echo $found_student[0]['lastname'] ?> </td>
  </tr>
  <tr>
    <td>Group Name</td> <td> <?php echo $found_student[0]['group_name'] ?> </td>
  </tr>
  <tr>
    <td>Email</td> <td> <?php echo $found_student[0]['email'] ?> </td>
  </tr>
  <tr>
    <td>Street Address</td> <td> <?php echo $found_student[0]['streetAddress'] ?> </td>
  </tr>
  <tr>
    <td>Postal Code</td> <td> <?php echo $found_student[0]['postalCode'] ?> </td>
  </tr>
  <tr>
    <td>Birth Date</td> <td> <?php echo $found_student[0]['birthYear'] ?> </td>
  </tr>
</table>

<a href="<?php echo site_url('student/show_students'); ?>"> <button class="btn">Go back</button> </a>
<?php
echo '<td> <a href="'.site_url('student/edit_selected/').$found_student[0]['id_student'].'"><button class="btn btn-primary"><span class="glyphicon glyphicon-edit"></span></button></a></td>';
echo '<td> <a href="'.site_url('student/delete_selected/').$found_student[0]['id_student'].'"><button class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span></button></a></td>';
?>
