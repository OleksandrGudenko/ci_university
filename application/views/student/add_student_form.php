<h2>Add a student</h2>
<form class="" action="<?php echo site_url('student/add_student_db'); ?>" method="post">
  <label for="">Student ID</label> <br>
  <input type="number" name="id_student" value=""> <br>
  <label for="">Firstname</label> <br>
  <input type="text" name="firstname" value=""> <br>
  <label for="">Lastname</label> <br>
  <input type="text" name="lastname" value=""> <br>
  <label for="">Group Name</label> <br>
  <input type="text" name="group_name" value=""> <br>
  <label for="">Email</label> <br>
  <input type="text" name="email" value=""> <br>
  <label for="">Street Address</label> <br>
  <input type="text" name="streetAddress" value=""> <br>
  <label for="">Postal Code</label> <br>
  <select class="" name="postalCode">
    <?php
      foreach ($postalCode_list as $row){
        echo '<option value="'.$row['postalCode'].'">'.$row['postalCode'].'</option>';
      }
    ?>
  </select> <br>
  <label for="">Birth Year</label> <br>
  <input type="date" name="birthYear" value=""> <br> <br>
  
  <input class="btn btn-primary" type="submit" name="" value="Add">


</form>

<a href="<?php echo site_url('student/show_students'); ?>" ><button class="btn btn-danger">Cancel</button></a>
