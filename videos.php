
<!DOCTYPE html>
<html lang="en">
<head>
<title>CSS Website Layout</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
  ul {
  list-style-type: none;
  margin: 0;
  padding-left: 250px;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: inline-block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: #111;
}

.active {
  background-color: silver;
  
}
* {
  box-sizing: border-box;
}

body {background-color: #8A0651;
  margin: 0;
}

/* Style the header */

.header {
  color: #8A0651;
  background-color: #FFFFFF;
  
  border: 2px solid #8A0651;
  padding: 20px;
  background-repeat: no-repeat;
  background-size: auto;
  text-align: center;
  background-position: center;
}
.footer{border: 2px solid #8A0651;
  background-color: #f1f1f1;
  padding: 1px;
  text-align: center;
  background-color: $424242;
  color: #8A0651;
}

/* Style the top navigation bar */
.topnav {
  overflow: hidden;
  background-color: #333;
}

/* Style the topnav links */
.topnav a {
  float: left;
  display: block;
 color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

/* Change color on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}

/* Create three unequal columns that floats next to each other */
.column {
  float: left;
  padding: 10px;
}

/* Left and right column */
.column.side {
  width: 25%;
}

/* Middle column */
.column.middle {
  width: 50%;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - makes the three columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column.side, .column.middle {
    width: 100%;
  }
}
.topright{


  position: absolute;
  top: 8px;
  right: 16px;
  font-size: 18px;
  background-color:#8A0651; 
}
 .box{ background-color: white;

    margin-top: 40px;
    margin-left: 30px;
    border-radius: 20px;
    padding: 10px;
    width: 150px;
    border: 2px solid green;
    color:black;
  }
</style>
<script src="https://kit.fontawesome.com/45e847864b.js" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/e2eff3b1de.js" crossorigin="anonymous"></script>
</head>
<body>

<div class="header">
  <h1>SAMBURU  UNIVERSITY  STUDENTS' ASSOCIATION</h1><br>
  <p>WELCOME TO SUSA WEBSITE </p>
</div>
<div class="topnav">

     <ul >
      <div class="topright">
        <table>
          <tr>
  <td>

  <li ><a href="logout.php"<i class="far fa-images">LOG OUT</i></a></li>
  </td>

  </tr>
  <tr>
  <td>
    
  <li  ><a href="profile.php"> <?php echo htmlspecialchars($_SESSION["username"]); ?></a></li><br>
</td>
      </tr>
</table>
  
</ul>    <ul>
  <li ><a href="index2.php" <i class="fas fa-home" >HOME</i></a></li>
  <li ><a href="events.php" <i class="fas fa-calendar-week">EVENTS</i></a></li>
  <li><a href="news.php" </a><i class="fas fa-folder-open">GALLERY</i></a></li>
  <li  class="active"><a href="videos.php" </a><i class="fas fa-folder-open">VIDEOS</i></a></li>
     <li ><a href="contacts.php" <i class="far fa-address-book"> CONTACTS</i></a></li>
  <li><a href="about.php"<i class="far fa-images">ABOUT</i></a></li>
   <li><a href="comment.php"<i class="far fa-images">COMMENTS</i></a></li>
</ul>
</div>

<div class="row">
  <div class="column side">

    <strong>
      <h2>Side</h2>
      <strong style="color: green"> SUSCRIBE TO GET OUR LATEST VIDEOS</strong>
    </strong><br>
    <form class="box1">
      Enter your Name<br>
      <input type="text" name="name" placeholder="Name" class="box"><br>
      Enter your phone number<br>
       <input type="number" name="mobile" value="07" class="box"><br>
       Email<br>
        <input type="email" name="email" placeholder="Email Adress" class="box"><br>
         <input type="submit" name="submit" value="suscribe" class="box" style="background-color: green">
          

    </form>
   
    
  </div>
  
  <div class="column middle">
 <marquee style="color:white"> WELCOME TO SUSA WEBSITE </marquee>
    
      <video width="320" height="240" controls>
  <source src="video.mp4" type="video/mp4">
  <source src="video.ogg" type="video/ogg">

</video><br>
    <video width="320" height="240" controls>
  <source src="video1.mp4" type="video/mp4">
  <source src="video1.ogg" type="video/ogg">

</video><br>
 <video width="320" height="240" controls>
  <source src="video2.mp4" type="video/mp4">
  <source src="video2.ogg" type="video/ogg">

</video>
  
  </div>
 
  
  
  <div class="column side">
    <h2>side</h2>
    <img src="photo6.jpg" width="200" height="200"><br>
  <img src="photo7.jpg" width="200" height="200"><br>
  <img src="photo4.jpg" width="200" height="200"><br>
  <img src="photo5.jpg" width="200" height="200"><br>
    
  </div>
</div>

<br><br><br><br><br><br>
<div class="footer">
  <b>
    <hr>
  <p >vision statement: Equity and Transparency</p><br>
  <hr>
  <p >we value! we care! we love!</p><br>
  <hr>
  <p >we are Loyal</p><br>
  <hr>
<p ><br>
  </div>
</body>
</html>
</body>
</html>
