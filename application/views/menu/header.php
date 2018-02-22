<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>The Unknown University</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url('css/mystyle.css');?>">
  </head>
  <body>
    <script>
        function toggleFunction(){
            var toggleDiv = document.getElementById("toggle");
            if (toggleDiv.style.display === "none"){
                toggleDiv.style.display = "block";
            } else {
                toggleDiv.style.display = "none";
            }
        }
        console.log(toggleFunction());
    </script>
    




    <div class="page">
 
      <div class="container">
           <div class="menu">
      <div class="nameBackground">
        <div class="name">
            <h1>University</h1>
        </div>
      </div>
      <div id="toggle">
      <ul>
        <li> <a href="<?php echo site_url('student/index'); ?>">Main Page</a> </li>
        <li> <a href="<?php echo site_url('student/show_students'); ?>">Manage Students</a> </li>
        <li> <a href="<?php echo site_url('course/show_courses'); ?>">Manage Courses</a> </li>
        <li> <a href="<?php echo site_url('grades/show_grades'); ?>">Manage Grades</a> </li>
      </ul>
      </div>
    </div>
            <div><button class="toggleBtn btn" onclick="toggleFunction()">Menu Toggle</button></div>
