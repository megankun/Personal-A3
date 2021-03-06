<?php
  include("session.php");
  session_start();
 ?>

 <html>
 <head>
   <link type="text/css" href="style.css" rel="stylesheet">
  <link type="text/css" href="prof_grades.css" rel="stylesheet">
 </head>
 <body>
  
  <?php

    $sql2 = "SELECT * FROM users WHERE username='$login_session'";
    $cr = mysqli_query($db,$sql2);
    $row2 = mysqli_fetch_array($cr,MYSQLI_ASSOC);

    if ($row2['type'] == 1) {
      echo '<div class="header">
        <h1>CSCB20</h1>
        <ul class="links">
          <li><a href="#">Home Page</a></li>
          <li><a href="announcements.php">Announcements</a></li>
          <li class="dropdown"><a href="#">Course Materials</a>
            <ul class="dropdown-content">
              <li><a href="./pdfs/Syllabus.pdf">Syllabus</a></li>
              <li><a href="LectureSlides.php">Lecture Slides</a></li>
              <li><a href="Assignments.php">Assignments</a></li>
              <li><a href="Labs.php">Labs</a></li>
              <li><a href="ProblemSets.php">Problem Sets</a></li>
              <li><a href="Solutions.php">Solutions</a></li>
              <li><a href="ViewFeedback.php">Anonymous Feedback</a></li>
            </ul>
          </li>
          <li><a href="https://piazza.com/class/jcpjjp5l4bywd">Discussion Board</a></li>
          <li class="dropdown"><a href="grades.php">Grades</a>
          <ul class="dropdown-content">
            <li><a href="prof_grades.php">All Grades</a></li>
            <li><a href="RemarkRequests.php">Re-Marks</a></li>
          </ul>
          </li>
          <li><a href="CourseDownloads.php">Course Downloads</a></li>
          <li><a href = "logout.php">Sign Out</a></li>
        </ul>
      </div>';
    } elseif ($row2['type'] == 2) {
      echo '<div class="header">
        <h1>CSCB20</h1>
        <ul class="links">
          <li><a href="#">Home Page</a></li>
          <li><a href="announcements.php">Announcements</a></li>
          <li class="dropdown"><a href="#">Course Materials</a>
            <ul class="dropdown-content">
              <li><a href="./pdfs/Syllabus.pdf">Syllabus</a></li>
              <li><a href="LectureSlides.php">Lecture Slides</a></li>
              <li><a href="Assignments.php">Assignments</a></li>
              <li><a href="Labs.php">Labs</a></li>
              <li><a href="ProblemSets.php">Problem Sets</a></li>
              <li><a href="Solutions.php">Solutions</a></li>
            </ul>
          </li>
          <li><a href="https://piazza.com/class/jcpjjp5l4bywd">Discussion Board</a></li>
          <li><a href="RemarkRequests.php">Re-marks</a></li>
          <li><a href="CourseDownloads.php">Course Downloads</a></li>
          <li><a href = "logout.php">Sign Out</a></li>
        </ul>
      </div>';
    }
  ?>
   <div class="main-sec">
     <div class="sub-sec">
       <div>Name:<?php echo $login_session;?></div>
     </div>
     <div class="sub-sec" id="grades">
      <!-- grades here -->
      <?php
        $gq = "SELECT * from grades";
        $gr = mysqli_query($db, $gq);
        //$count = mysqli_num_rows($gq);

        // print the heading 
        $head = "select column_name from INFORMATION_SCHEMA.COLUMNS where TABLE_NAME = 'grades'";
        $heading = mysqli_query($db, $head);
        while($r = mysqli_fetch_array($heading,MYSQLI_ASSOC)){
            foreach ($r as $key ) {
              echo '<li style="display: inline; padding: 50px;">' .$key . '</li>';
            }
        }

        // print all items in table
        while($r = mysqli_fetch_array($gr,MYSQLI_ASSOC)){
            echo '<ul>';
            foreach ($r as $key ) {
              echo '<li style="display: inline; padding: 50px;">' .$key . '</li>';
            }
            echo '</ul><br>';
        }
      ?>
    </div>
   </div>
 </body>
 </html>
