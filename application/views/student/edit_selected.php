<h2>Edit Students credentials</h2>
<form class="" action="<?php echo site_url('student/save_edited'); ?>" method="post">
  <input type="hidden" name="id_student" value="<?php echo $id_student; ?>">
  <label>Firstname</label> <br>
  <input type="text" name="firstname" value="<?php echo $chosen_student[0]['firstname']; ?>"> <br>
  <label>Lastname</label> <br>
  <input type="text" name="lastname" value="<?php echo $chosen_student[0]['lastname']; ?>"> <br>
  <label>Group Name</label> <br>
  <input type="text" name="group_name" value="<?php echo $chosen_student[0]['group_name']; ?>"> <br>
  <label>Email</label> <br>
  <input type="text" name="email" value="<?php echo $chosen_student[0]['email']; ?>"> <br>
  <label>Street Address</label> <br>
  <input type="text" name="streetAddress" value="<?php echo $chosen_student[0]['streetAddress']; ?>"> <br>
  <label for="">Postal Code</label> <br>
  <select class="" name="postalCode">
    <?php
      foreach ($postalCode_list as $row){
        echo '<option value="'.$row['postalCode'].'">'.$row['postalCode'].'</option>';
      }
    ?>
  </select> <br>
  <label>Birth Date</label> <br>
  <input type="text" name="birthYear" value="<?php echo $chosen_student[0]['birthYear']; ?>"> <br> <br>
  <input class="btn btn-danger" type="submit" name="" value="Save">

</form>

<a href="<?php echo site_url('student/show_students'); ?>"><button class="btn btn-primary">Cancel</button></a>
