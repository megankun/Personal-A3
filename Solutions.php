<?php
   include('session.php');
   session_start();
?>
<html>
<head>
  <link type="text/css" href="style.css" rel="stylesheet">
  <link type="text/css" href="Solutions.css" rel="stylesheet">
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
  <?php
    $sql2 = "SELECT type FROM users WHERE username='$login_session'";
    $cr = mysqli_query($db,$sql2);
    $row2 = mysqli_fetch_array($cr,MYSQLI_ASSOC);

    if($row2['type'] == 0){
      echo '<li><a href="AnonFeedback.php">Anonymous Feedback</a></li>
            </ul>
          </li>
          <li><a href="https://piazza.com/class/jcpjjp5l4bywd">Discussion Board</a></li>
          <li class="dropdown"><a href="grades.php">Grades</a>
          <ul class="dropdown-content">
            <li><a href="https://markus.utsc.utoronto.ca/cscb20w18/?locale=en">Markus</a></li>
            <li><a href="grades.php">All Grades</a></li>
          </ul>
          </li>';
    } elseif ($row2['type'] == 1) {
      echo '<li><a href="ViewFeedback.php">Anonymous Feedback</a></li>
            </ul>
          </li>
          <li><a href="https://piazza.com/class/jcpjjp5l4bywd">Discussion Board</a></li>
          <li class="dropdown"><a href="#">Grades</a>
          <ul class="dropdown-content">
            <li><a href="prof_grades.php">All Grades</a></li>
            <li><a href="ViewRemarks.php">Re-Marks</a></li>
            <li><a href="EditMarks.php">Edit Marks</a></li>
          </ul>
          </li>';
    } else {
      echo '</ul>
          </li>
          <li><a href="https://piazza.com/class/jcpjjp5l4bywd">Discussion Board</a></li>
          <li class="dropdown"><a href="#">Grades</a>
          <ul class="dropdown-content">
            <li><a href="ta_marks.php">All Grades</a></li>
            <li><a href="ViewRemarks.php">Re-Marks</a></li>
            <li><a href="EditMarks.php">Edit Marks</a></li>
          </ul>
          </li>';
    }
   ?>
   <li><a href="CourseDownloads.php">Course Downloads</a></li>
   <li><a href = "logout.php">Sign Out</a></li>
   </ul>
   </div>
  <div class="main-sec">
    <div class="sub-sec"><h1> Solutions </h1></div>
    <div class="sub-sec">
      <h2> Quizzes </h2>
      <ul>
        <li><a href="#">Quiz 1</a></li>
        <li><a href="#">Quiz 2</a></li>
        <li><a href="#">Quiz 3</a></li>
      </ul>
    </div>
    <div class="sub-sec">
      <h2> Assignments </h2>
      <ul>
        <li><a href="#">Assignment 1</a></li>
        <li><a href="#">Assignment 2</a></li>
        <li><a href="#">Assignment 3</a></li>
      </ul>
    </div>
  </div>
  <div class="footer">
    <div style="text-align:left; padding-left:10px;"><a href="http://www.utsc.utoronto.ca/cms/computer-science-1"><small>Faculty of Computer Science</small></a></div>
    <div style="text-align:left; padding-left:10px; padding-top:10px;"><small>Site Design by...</small></div>
  </div>
</body>
</html>
