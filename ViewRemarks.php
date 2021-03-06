<?php
  include("session.php");
  session_start();
 ?>
 <html>
 <head>
   <link type="text/css" href="style.css" rel="stylesheet">
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

     if($row2['type'] == 1){
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
     } elseif ($row2['type'] == 2) {
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
     } else {
       die ("Not permitted <a href='index.php' style='color:blue'> Go to homepage </a>");
     }
    ?>
    <li><a href="CourseDownloads.php">Course Downloads</a></li>
    <li><a href = "logout.php">Sign Out</a></li>
    </ul>
    </div>
   <div class="main-sec">
    <div class="sub-sec">
      <h1>Re-Mark Requests</h1>
    </div>
     <div class="sub-sec" id="grades">
      <!-- grades here -->
      <?php

        $query = "SELECT * FROM remarks";
        $result = mysqli_query($db,$query);

        echo "<table style='width:100%;border-spacing:10px;'>";
        echo "<th style='width:5%'>ID</th><th style='width:10%'>Assignment</th><th>Reason</th>";

        while($row = mysqli_fetch_array($result)){
          echo "<tr><td style='text-align:center;border: 1px solid black;padding:10px'>" . $row['id'] . "</td><td style='text-align:center;border: 1px solid black;padding:10px;'>" . $row['assignment'] . "</td><td style='border: 1px solid black;padding:10px'>" . $row['reason'] . "</td></tr>";
        }

        echo "</table>";

      ?>
    </div>
   </div>
 </body>
 </html>
