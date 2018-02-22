<h2>Remove Student from University database</h2>
<p>Do you want to remove this student:</p>

<table class="table table-bordered table-condensed">
  <tr>
    <td>Student ID</td> <td> <?php echo $chosen_student[0]['id_student'] ?> </td>
  </tr>
  <tr>
    <td>Firstname</td> <td> <?php echo $chosen_student[0]['firstname'] ?> </td>
  </tr>
  <tr>
    <td>Lastname</td> <td> <?php echo $chosen_student[0]['lastname'] ?> </td>
  </tr>
  <tr>
    <td>Group Name</td> <td> <?php echo $chosen_student[0]['group_name'] ?> </td>
  </tr>
  <tr>
    <td>Email</td> <td> <?php echo $chosen_student[0]['email'] ?> </td>
  </tr>
  <tr>
    <td>Street Address</td> <td> <?php echo $chosen_student[0]['streetAddress'] ?> </td>
  </tr>
  <tr>
    <td>Postal Code</td> <td> <?php echo $chosen_student[0]['postalCode'] ?> </td>
  </tr>
  <tr>
    <td>Birth Date</td> <td> <?php echo $chosen_student[0]['birthYear'] ?> </td>
  </tr>

</table>

<a href="<?php echo site_url('student/delete_student/').$id_student; ?>"> <button class="btn btn-danger">Delete</button> </a>
<a href="<?php echo site_url('student/show_students'); ?>"> <button class="btn btn-primary">Cancel</button> </a>
