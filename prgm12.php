<!DOCTYPE html>
<html>
<head>  
  <title>college website</title>
  <!-- CSS styles can be added here-->
  <style>
    body {
       font-family: Arial,sans-serif;
       margin:20px;
    }
    h1{
       color:lightpink;
    }
    p{
       color:#666;
    }
 </style>
</head>
<body>
 <header>
  <h1> welcome to our college</h1>
 </header>
 

<nav>
 <ul>
  <li><a href="#">home</a></li>
  <li><a href="#">about</a></li>
  <li><a href="#">courses/a></li>
  <li><a href="#">contact</a></li>
 </ul>
</nav>

<main> 
  <section>
    <h2> about our college</h2>
    <p> this is a brief description of our college.</p>
  </section>
  <section>
     <h2> available courses</h2>
     <?php
     $courses=['computer science','engineering','business','arts','science'];
     echo"<ul>";
     foreach($courses as $course)
     {
       echo "<li>$course</li>";
      }
     echo "</ul>";
    ?>
  </section>
  <section>
  <ha> contact information</h2>
  <p>address:123 college avenue city,country</p>
  <p>email:info@college.com</p>
  </section>
</main>

 <footer>
   <p>&copy;
     <?php
     echo date("Y");
     ?>
     our college.all rights reserved.</p>
 </footer>
 <footer>
  <p>&copy;
    <?php
    echo date("y");
    ?>
    our college.all rights reserved.</p>
  </footer>
 </body>
<html>

    


  