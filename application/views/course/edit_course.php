<h2>Edit Course credentials</h2>
<form class="" action="<?php echo site_url('course/save_edited_course'); ?>" method="post">
  <input type="hidden" name="idCourse" value="<?php echo $idCourse; ?>">
  <label>Course Name</label> <br>
  <input type="text" name="courseName" value="<?php echo $chosen_course[0]['courseName']; ?>"> <br>
  <label>etcPoints</label> <br>
  <input type="text" name="etcPoints" value="<?php echo $chosen_course[0]['etcPoints']; ?>"> <br> <br>
  <input class="btn btn-danger" type="submit" name="" value="Save">

</form>
  <a href="<?php echo site_url('course/show_courses'); ?>"><button class="btn btn-primary">Cancel</button></a>
