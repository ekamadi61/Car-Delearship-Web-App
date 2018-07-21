<?php
//inintializing connection serverName,userName,Pwd,dbmsName
$conn = mysqli_connect("localhost", "root", "", "algambino");

if (isset($_POST['btn-submit'])){
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $message = $_POST['message'];
  $insert = mysqli_query($conn,"INSERT INTO contact_info(Name, Email, Phone, Message)VALUES('$name','$email','$phone',' $message')") or die(mysqli_error($conn));
  if($insert)
  {
    ?>
    <script type="text/javascript">
      alert("Message sent successfully")
    </script>
    <?php
  }

//   $sql = $conn->prepare('INSERT INTO contact_info(Name, Email, Phone, Message) VALUES(?,?,?,?)');
//   $sql->bind_param('ssss',$name, $email, $phone, $message);

//   if ($sql->execute()) or die(mysqli_error($conn)){
//     echo "<script type = 'text/javascript'> alert('success!'); </script>";
//   }else{
//     echo $conn->error;
//     echo "failed";
//   }
}
//mysqli_close($conn);
$conn->close();
?>
<!doctype html>
<html>
<head>
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
-->
<script type="text/javascript">
var path='photos/';
var img=['CARS/56.jpg','CARS/55BCH.jpg','CARS/103.jpg','CARS/55.jpg','New folder/pexels-photo-204605.jpeg','CARS/55.jpg'];
var interval = setInterval('slider()',5000);
var index=0;

function slider(){
	if(index>img.length-1){index=0;}
	image=path+img[index];
	//alert(image);
	document.getElementById('img').src=image;
	index++;
	interval;
}



</script>


<link href="css/index.css" rel="stylesheet" type="text/css" media="screen">
<link href="css/print.css" rel="stylesheet" type="text/css" media="print">
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">


<meta charset="utf-8">
<title>Algambino Dealership</title>

<script>
function validateForm() {
    var x = document.forms["myForm"]["name"].value;
    if (x == "") {
        alert("Name must be filled out");
        return false;
	}
		
	var y = document.forms["myForm"]["email"].value;
    if (y == "") {
        alert("email must be filled out");
        return false;
    }
	
	var z = document.forms["myForm"]["message"].value;
    if (z == "") {
        alert("message must be filled out");
        return false;
    }
}
</script>
</head>

<body onLoad="slider();">
<div id="outer">

<div id="wrapper">

	<div id="heading">
    <h1><center>GAMBINO &amp; SONS MOTORS</center></h1>
    </div>

	<div id="Logo">
   	<img src="photos/cdm-logo.png" width="478" height="145"></div>
	<div id="social-media-icons">
    	<ul>
            <li><a href="http://www.instagram.com"><img src="photos/icons/Instagram-v051916_200.png" width="46" height="45" /></a></li>
          <li><a href="http://www.facebook.com"><img src="photos/icons/images.png" width="44" height="45" /></a></li>
          <li><a href="http://www.twitter.com"><img src="photos/icons/social-inside-twitter-icon.png" width="47" height="46" /></a></li>
          <li><a href="http://www.youtube.com"><img src="photos/icons/YouTube-icon.png" width="48" height="44" /></a></li>
      </ul>
    </div>
   
    
    <div id="topnav">
    	<ul>
        	<li><a href="../Main/index.html">HOME</a></li>
            <li><a href="../Main/about.html">ABOUT</a></li>
            <li><a href="../Main/services1.html">SERVICES</a></li>
            <li><a href="../Main/contact.php">CONTACT US</a></li>
            <li><a href="gllry.html">GALLERY</a></li>
            <input type="text" placeholder="Search..">
      	</ul>
    
    </div>
    
    <div id="slider"> 
        <img id="img" src="" border:"0" alt="Fourth image"  width="990" height="350"/>
  </div> 

<div id="content">
<h2>Contact Us</h2>
  <p>Feel free to interact with us from here, your details will be confidential and will remain that way.
  You can drop a comment on the message box and please remember to input your email so that we may get back
   to you.
   You can contact us through the phone numbers to your right during the stipulated working hours, note that calls
   made outside the said working hours shall not be answered unless we have an arranged pending deal on the books.
   You can also interact with us through our social media pages just by loging into your account through the icons 
   displayed at the top of your web page.</p>
  
  <form name="myForm" action="contact.php" method="post" >
    <ol class="forms">
      
      <li>
        <label for="name">Name</label>
        <input type="text" name="name" id="name" required/>
        </li>
      
      <li>
        <label for="email">Email</label>
        <input type="email" name="email" id="email" required/>
        </li>
      
      <li>
        <label for="phone">Phone</label>
        <input type="tel" name="phone" id="phone" required/>
        </li>
      <li >  <label for="country">Country</label>
        <select name="country">
          <option value="-1" selected>---choose yours---</option>
          <option value="1">USA</option>
          <option value="2">UK</option>
          <option value="3">KENYA</option>
          </select>
        </li>  
      <li>
        <label for="message">Message</label>
        <textarea name="message" id="message"></textarea>
        </li>
      
      <li >
        <button type="submit" class="submit" name="btn-submit">Send message</button>
        </li>
      
      </ol>
    
  </form>
</div>
    
    <div id="right-side">
	 <h3>Working Hours</h3>
      <p>Our working hours are flexible as we are open six days a week:</p>
      <ul>
      	<li><b>MON-FRI:8am to 6.30pm</b></li>
        <li><b>SAT:9am to 3pm</b></li>
        <li><b>HOLIDAYS:9am to 1pm</b></li>
      </ul>
      <p>On <b>Sundays</b> we are <b>not opened</b> with exception to pending client deal deadlines, 
      as we always put the  service towards our customers first.</p>
    <hr style="background:#000; height:1px ">  
    <!--===========================================================================================-->
    <div class="right-side-2">
	<center>
	&nbsp;
    <p>You can connect with us through the contacts below and find us by our street address:</p>
    	<ul>
       		<li><h3 style="text-shadow:#AFAAAB 0.1em 0.1em 0.2em:">12 St, Moi Ave – Mombasa KE 80100/ 
        <a href=	  "tel:+254-720-160-898">+254-720-160-898</a></h3></li>
	&nbsp;
    		<li><h3 style="text-shadow:#AFAAAB 0.1em 0.1em 0.2em:">12 St, Moi Ave – Mombasa KE 80100/ 
        <a href=	  "tel:+254-712-341-654">+254-712-341-654</a></h3></li>
        </ul>
	  </center>
	 </div>
    <!--===========================================================================================-->
     <div id="social-media-icons-2">
      <ul>
            <li><a href="http://www.myspace.com"><img src="photos/icons/msps.png" width="47" height="41"  /></a></li>
          <li><a href="http://www.yahoomail.com"><img src="photos/icons/yho.png" width="48" height="46"  /></a></li>
          <a href="http://www.gmail.com"><img src="photos/icons/gmail.png" width="47" height="49"  /></a>
          <li></li>
      </ul>
      </div>
      
      
    </div>
    

    
	<div id="footer">
   	  <p>Copyright © 2018- Dagaye Designs Studiolab LLC</p>
   	  <p>Terms Of Service | Privacy Policy</p>
    </div>
    
    </div>
    
    </div>
        
</body>
</html>
