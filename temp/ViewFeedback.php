<?php
   include('session.php');
   session_start();
?>
<html>
<head>
  <link type="text/css" href="style.css" rel="stylesheet">
  <link type="text/css" href="AnonFeedback.css" rel="stylesheet">
</head>
<body>
  <div class="header">
    <h1>CSCB20</h1>
    <ul class="links">
      <li><a href="index.php">Home Page</a></li>
      <li><a href="announcements.php">Announcements</a></li>
      <li class="dropdown"><a href="#">Course Materials</a>
        <ul class="dropdown-content">
          <li><a href="./pdfs/Syllabus.pdf">Syllabus</a></li>
          <li><a href="LectureSlides.php">Lecture Slides</a></li>
          <li><a href="Assignments.php">Assignments</a></li>
          <li><a href="Labs.php">Labs</a></li>
          <li><a href="ProblemSets.php">Problem Sets</a></li>
          <li><a href="Solutions.php">Solutions</a></li>
          <li><a href="#">Anonymous Feedback</a></li>
        </ul>
      </li>
      <li><a href="https://piazza.com/class/jcpjjp5l4bywd">Discussion Board</a></li>
      <li class="dropdown"><a href="grades.php">Grades</a>
      <ul class="dropdown-content">
        <li><a href="https://markus.utsc.utoronto.ca/cscb20w18/?locale=en">Markus</a></li>
        <li><a href="grades.php">All Grades</a></li>
      </ul>
      </li>
      <li><a href="CourseDownloads.php">Course Downloads</a></li>
      <li><a href = "logout.php">Sign Out</a></li>
    </ul>
  </div>
  <div class="main-sec">
    <div class="sub-sec">
      <h1> Feedback </h1>
    </div>
    <div class="sub-sec">
      
    </div>
  </div>
</body>
</html>
