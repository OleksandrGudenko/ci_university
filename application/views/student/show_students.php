<div class="h2name">
  <h2>Students</h2>
</div>
 <br>
<table class="table table-hover">
  <tr class="info">
    <th>ID</th><th>Firstname</th><th>Lastname</th><th>Group</th><th>Email</th><th>Street Address</th><th>Postal Code</th><th>Birth Date</th><th>Edit</th><th>Delete</th>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<a href="<?php echo site_url('student/add_student_form'); ?>" ><button class="btn btn-primary">Add a New Student</button></a>
<div style="float:right">
  <form class="" action="<?php echo site_url('student/student_search/'); ?>" method="post">
    <input type="text" name="lastname" value="" placeholder="search by lastname">
    <?php
    echo '<a href="'.site_url('student/student_search/').'"><button class="btn btn-primary"><span class="glyphicon glyphicon-search"></span></button></a>'
     ?>
  </form>

</div>
 <br> <br>
<?php

foreach ($students as $row) {
echo '<tr>';
echo '<td>'.$row['id_student'].'</td>';
echo '<td>'.$row['firstname'].'</td>';
echo '<td>'.$row['lastname'].'</td>';
echo '<td>'.$row['group_name'].'</td>';
echo '<td>'.$row['email'].'</td>';
echo '<td>'.$row['streetAddress'].'</td>';
echo '<td>'.$row['postalCode'].'</td>';
echo '<td>'.$row['birthYear'].'</td>';
echo '<td> <a href="'.site_url('student/edit_selected/').$row['id_student'].'"><button class="btn btn-primary"><span class="glyphicon glyphicon-edit"></span></button></a></td>';
echo '<td> <a href="'.site_url('student/delete_selected/').$row['id_student'].'"><button class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span></button></a></td>';
echo '</tr>';
}

?>
</tr>
</table>
