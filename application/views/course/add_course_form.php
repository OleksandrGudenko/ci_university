<h2>Add a Course</h2>
<form class="" action="<?php echo site_url('course/add_course_db'); ?>" method="post">
  <label for="">Course ID</label> <br>
  <input type="number" name="idCourse" value=""> <br>
  <label for="">Course Name</label> <br>
  <input type="text" name="courseName" value=""> <br>
  <label for="">etc Points</label> <br>
  <input type="number" name="etcPoints" value=""> <br> <br>
  <input class="btn btn-primary" type="submit" name="" value="Add">


</form>
  <a href="<?php echo site_url('course/show_courses'); ?>" ><button class="btn btn-danger">Cancel</button></a>
