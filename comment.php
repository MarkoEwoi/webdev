
<?php 
	include_once 'controllers/Comment.php';
	$com = new Comment();
 ?>

<!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="utf-8">
 	<title>Comment System OOP</title>
 	<style>
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
  li a:hover {
  background-color: #111;
}
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
 .topnav	li a {
  display: inline-block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.active {
  background-color: silver;
}
 .topnav	li a:hover {
  background-color: white;
}

 	 .topnav ul {
  list-style-type: none;
  margin: 0;
  padding-left: 250px;
  overflow: hidden;
  background-color: #333;
}
 .topnav li {
  float: left;
}

 .topnav ul {
  list-style-type: none;
  margin: 0;
  padding-left: 250px;
  overflow: hidden;
  background-color: #333;
}

 	.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
}
.topnav a:hover {
  background-color: #ddd;
  color: black;
}
 		.box{border: 6px solid #999;margin: 30px auto 0;padding: 100px;width: 1000px;height: 250px;overflow: scroll;}
 		.box ul{margin: 0;padding: 0;list-style: none;}
 		.box li{display: block;border-bottom: 1px dashed #ddd;margin-bottom: 5px;padding-bottom: 5px;}
 		.box li:last-child{border-bottom: 0 dashed #ddd;}

 		.box span{color: #888;}
body {background-color: #8A0651;
  margin: 0;
}
.topright{


  position: absolute;
  top: 8px;
  right: 16px;
  font-size: 18px;
  background-color:#8A0651; 
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
  
</ul>
     <ul>
  <li><a href="index2.php" <i class="fas fa-home" >HOME</i></a></li>
  <li ><a href="events.php" <i class="fas fa-calendar-week">EVENTS</i></a></li>
  <li ><a href="news.php" </a><i class="fas fa-folder-open">GALLERY</i></a></li>
  <li><a href="videos.php" </a><i class="fas fa-folder-open">VIDEOS</i></a></li>
     <li ><a href="contacts.php" <i class="far fa-address-book"> CONTACTS</i></a></li>
  <li><a href="about.php"<i class="far fa-images">ABOUT</i></a></li>
  
   <li class="active"><a href="comment.php"<i class="far fa-images">COMMENTS</i></a></li>
</ul>
</div>
 	<div class="box">
 		<ul>
 			<?php 
 				$result = $com->index();
 				while ($data = $result->fetch_assoc()) {
 			 ?>
 			<li><b><?php echo $data['name']; ?><b> - <?php echo $data['comment'] ?> - <?php echo $com->dateFormat($data['comment_time']); ?></li>
 			<?php } ?>
 		</ul>
 	</div><br><br>
 	<center>
 		<?php 
 			if (isset($_GET['msg'])) {
 				$msg = $_GET['msg'];
 				echo "<span style='color:green;font-size:20px'>".$msg."</span>";
 			}
 		 ?>
 	
	<form action="post_comment.php" method="post"><br><br><br>
 		<table>
 			<tr>
 				<td>Your Name:</td>
 				<td><input style="width: 230px;height: 30px;" type="" name="name" placeholder="Please enter your name"></td>
 			</tr>
 			<tr>
 				<td>Comment:</td>
 				<td>
 					<textarea name="comment" rows="5" cols="30" placeholder="Please enter your comment"></textarea>
 				</td>
 			</tr>
 			<tr>
 				<td></td>
 				<td><input class="button" style="width: 235px;height: 40px;" type="submit" name="submit" value="Post" ></td>
 			</tr>
 		</table>
 	</form>
 	<center>
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