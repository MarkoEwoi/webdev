<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" name="viewport" 
        content= "width=device-width, initial-scale=0.9"> 
    <title>Profile</title>

      <style>
      .button {
  background-color:#8A0651 ;
  border: solid none;
  color: black;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
      label{

        padding: 12px 12px 12px 0;
        display: inline-block;
      }
          .ewoi{

     width: 20%;
     padding: 12px;
     border: 1px solid #CCC;
     border-radius: 4px;
     resize:vertical;

    }
      .button {
  background-color: white;
  border: none;
  color: black;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}

    *, *::after, *::before { box-sizing: border-box }
* {margin: 0; padding: 0;}
.content {
  overflow: hidden;
  width: 80%;
  margin: auto;
}
.gallery-item {
  float: left;
  width: 40%;
  height: 0;
  padding-bottom: 50%; //img aspect ratio
  // display: inline-block;
  position: relative;
  overflow: hidden;
  
}
.regular-img-container {
  margin-right: 0%;
  img {}
}
.slider-container {
  overflow: hidden;
}
.slide-holder {
  width: 500%;
  img {
    width: 25%;
    display: inline-block;
    max-width: 25%;
    margin-right: -4px;
  }

  position: relative;
  animation: scroller 10s infinite;
  animation-direction: alternate;
  animation-delay: 2s;
  animation-timing-function: ease-in-out;
}

/* need a step for each slide */
@keyframes scroller {
  0%   { transform: translateX(0); }
  10%  { transform: translateX(0); }
  30%  { transform: translateX(-25%); }
  40%  { transform: translateX(-25%); }
  60%  { transform: translateX(-50%); }
  70%  { transform: translateX(-50%); }
  90% { transform: translateX(-75%); }
  100% { transform: translateX(-75%); }
}
  .box1{background-color:brown;

    margin-top: 80px;
    margin-left: 67px;
    border-radius: 50px;
    padding: 10px;
    width: 220px;
    border: 2px solid green;
    color:black;
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


* {
  box-sizing: border-box;
}

body {background-color: #8A0651;
  margin: 0;
  color: white;
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
}.footer{
  position: fixed;
  left: 0;
  bottom: 0;
  width: 100%;



  border: 2px solid #8A0651;
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
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

/* Change color on hover */
.topnav a:hover {
  background-color: silver;
  color: black;
}

/* Create three unequal columns that floats next to each other */
.column {
  float: left;
  padding: 10px;
}

/* Left and right column */


/* Middle column */
.column.middle {
  width: 100%; 
   overflow: hidden;
  margin: auto;
  height: 100%;
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
</style>
  
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
  
</ul>

    <ul>
  <li  ><a href="index2.php" <i class="fas fa-home" >HOME</i></a></li>
  <li  ><a href="events.php" <i class="fas fa-calendar-week">EVENTS</i></a></li>
  <li><a href="news.php" </a><i class="fas fa-folder-open">GALLERY</i></a></li>
  <li><a href="videos.php" </a><i class="fas fa-folder-open">VIDEOS</i></a></li>
     <li ><a href="contacts.php" <i class="far fa-address-book"> CONTACTS</i></a></li>
  <li><a href="about.php"<i class="far fa-images">ABOUT</i></a></li>
   <li><a href="comment.php"<i class="far fa-images">COMMENTS</i></a></li>
</ul>
</div>

    
       <center> 
        <div class=" middle">

<?php 

// Include config file
require_once "config.php";
    



//display lended books
$name=$_SESSION["username"];



echo "<br><b>MY PROFILE</b><br>";
$sql = "SELECT id, username ,password FROM users WHERE username='$name'";
$result = mysqli_query($link, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
echo "<table>";
            echo "<tr>";
                echo " <b><th>ID</th></b>";
                echo "<b><th>USERNAME</th></b>";
                echo "<b><th>PASSWORD</th></b>";
               
            echo "</tr>";
  while($row = mysqli_fetch_assoc($result)) {
 
 echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['username'] . "</td>";
                echo "<td>" . $row['password'] . "</td>";
               
            echo "</tr>";
  }

   echo "</table>";
} else {
  echo "0 results";
}


mysqli_close($link);
?></div><br><br><br>
 <a href="reset-password.php" class="button">CHANGE PASSWORD</a>

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