<!DOCTYPE html>
<html>
<title>Admin Contact Us</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}

body, html {
  height: 100%;
  line-height: 1.8;
}

/* Full height image header */
.bgimg-1 {
  background-position: center;
  background-size: cover;
  background-image: url("img/blue-red-background.jpg");
  min-height: 100%;
}

.w3-bar .w3-button {
  padding: 16px;
}
</style>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class=" w3-white w3-card" id="myNavbar">
      <a href="adminhome.php"class="w3-wide"><img src="img/logo.jpeg"  style="width:10%"></a>
    <!-- Right-sided navbar links -->
    <div class="w3-right w3-hide-small">
        <a href="adminhome.php" class="w3-padding-48 w3-bar-item w3-button">HOME</a>
        <a href="adminphotos.php" class="w3-padding-48 w3-bar-item w3-button">PHOTOS</a>
        <a href="adminaboutus.php" class="w3-padding-48 w3-bar-item w3-button"><i class="fa fa-user"></i>ABOUT US</a>
   <div class="w3-dropdown-hover w3-hide-small">
    <a href="events.php" class="w3-padding-48 w3-bar-item w3-button" title="Notifications">EVENTS <i class="fa fa-caret-down"></i>  </a>   
    <div class="w3-dropdown-content  w3-card-4 w3-bar-block">
           <a href="addevent.php" class="  w3-bar-item w3-button">ADD EVENTS</a>
          <a href="viewbooking.php" class="  w3-bar-item w3-button">View Booking</a>
   
    </div>
  </div>
        <a href="admincontactus.php" class="w3-padding-48 w3-bar-item w3-button"><i class="fa fa-envelope"></i>CONTACT US</a>
        <a href="adminprofile.php" class="w3-padding-48 w3-bar-item w3-button"></i>LOGIN</a>
    </div>
    <!-- Hide right-floated links on small screens and replace them with a menu icon -->

    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
      <i class="fa fa-bars"></i>
    </a>
  </div>
</div>
			<p>Contact Korean Language Society</p>
                        <p>Contact Korean Language Society</p>
			<div class="main">
					<div class="name">
						<p>Contact Korean Language Society</p>
				</div>
				<div class="choose">
                                    <a href="home.php">Home</a>
					<span>/</span>
					<span>Contact Korean Language Society</span>
					
				</div>
				<div class="contactcont">
					<h3>We'd love to hear from you.</h3>
                                        <p>CHAIRPERSON : Chai Yong Wen</p>
					<p>V.CHAIRPERSON : Lim Kien Soon</p>
					
					<br/>
					<h3>To Contact Korean Language Society</h3>
					<p>012-6956508</p>
					<p>Korean Language Society<br>Kampus Utama, Jalan Genting Kelang, 53300 Kuala Lumpur, Wilayah Persekutuan Kuala Lumpur</p>
					
					
					
				</div>	
				
			</div>
			
			<div class="footer">   
	<div class="mainlist">
		<div class="amainlist">
			<h4 class="title">LOOK AROUND</h4>
		<ul>
                    <li><a href="aboutus.php">About Us</a></li>
                  
                    <li><a href="faqs.php">FAQs</a></li>
                        <li><a href="contactus.php">Contact</a></li>
		</ul>	
		</div>
		<div class="bmainlist">
			<h4 class="title">ABOUT US</h4>
		<ul>
                    <li><a href="userevent.php">Events</a></li>
                    <li><a href="photos.php">Photos</a></li>
			<li><a href="index2.html"></a></li>
			<li><a href="index3.html"></a></li>
			<li><a href="index4.html"></a></li>
		</ul>	
		</div>
		<div class="cmainlist">
			<h4 class="title">COME SEE US</h4>
                        <ul>
                            
                            <li>Kampus Utama, Jalan Genting Kelang,<br />53300 Kuala Lumpur,<br />Wilayah Persekutuan Kuala Lumpur</li>
                        </ul>
		</div>
		<div class="dmainlist">
			<h4 class="title">FOLLOW US OUT THERE</h4>
		<ul>
                    <li><a href="https://www.facebook.com/TARUC-Korean-Language-Society-2337119013242959/" target="_blank"><img src="img/facebook.jpg" width="17px"/>Facebook</a></li>
                    <li><a href="https://www.instagram.com/explore/locations/339823934/malaysia/kuala-lumpur-malaysia/tunku-abdul-rahman-collegetarckuala-lumpur-main-campus/" target="_blank"><img src="img/new-logo1.jpg" width="20px"/>Instagram</a></li>
                    <li><a href="https://www.youtube.com/channel/UCqjsPpVnwjCRT5mgAgFo1ng" target="_blank"><img src="img/youtube.png" width="20px"/>Youtube</a></li>
		
		</ul>	
		</div>
</div>
		</div>
 
<script>


// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}


// Toggle between showing and hiding the sidebar when clicking the menu icon
var mySidebar = document.getElementById("mySidebar");

function w3_open() {
  if (mySidebar.style.display === 'block') {
    mySidebar.style.display = 'none';
  } else {
    mySidebar.style.display = 'block';
  }
}

// Close the sidebar with the close button
function w3_close() {
    mySidebar.style.display = "none";
}
</script>
<style type="text/css">
.choose{
	margin: 0;
    padding: 0 30px;
    text-align: center;
    font-family: Georgia,Times,"Times New Roman",serif;
    color:#5c5c5c;
    font-size: 20px;
}
.choose a{
	text-decoration: none;
	font-family: Georgia,Times,"Times New Roman",serif;
	color:#5c5c5c;
	font-size: 20px;
}
.contactcont{
	padding: 0 30px;
    max-width: 710px;
    margin: 40px auto 0;
			font-size: 16px;
				font-family: sans-serif;
		color: #5c5c5c;
}
    .mainlist{
list-style-type: none;

}
.title{
	color: light;
	font-weight: 500;
	font-family:"palatino linotype";
	font-size: 16px;
}
.mainlist a{
	text-decoration: none;
	color: darkgray;
font-family: Times;
	font-size: 18px;
	font-weight: lighter;
}
.mainlist ul{
	
list-style-type: none;
display:inline;
	text-decoration: none;
}

.amainlist{
	display: inline-block;
	width: 200px;
  height: 300px;
  position: relative;
	top: 67px;
	right: -100px;


	
}
.bmainlist{
	display: inline-block;
	
	width: 200px;
  height: 200px;
  margin: 2em;
	position: relative;
        top:35px;
	right: -150px;
}
.cmainlist{
	display: inline-block;
	width: 200px;
  height: 200px;
  margin: 2em;
	position: relative;
	top: 105px;
right: -130px;
}
.cmainlist li{
	color: darkgray;
}
.dmainlist{
	display: inline-block;
	width: 200px;
  height: 100%;
  margin: 2em;
	position: relative;
	top: 65px;
	right: -150px;
}


</style>
</body>
</html>