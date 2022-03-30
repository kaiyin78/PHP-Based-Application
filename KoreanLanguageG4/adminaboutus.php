<!DOCTYPE html>
<html>
<title>Admin About Us</title>
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
<div class="main">
  <p>The Founders</p>
  <p>The Founders</p>
  
    
					<div class="name">
						<p>The Founders</p>
				</div>
				<div class="choose">
                                    <a href="home.php">Home</a>
					<span>/</span>
					<span>About Us</span>
				</div>
				<img src="img/95ee8696f8ed1abb3767928c4d0daf65.jpg" width="100%" height="550px" />
				<div class="content">
				<h3 style="font-weight: 100; text-transform: uppercase; padding-left: 200px; font-family: sans-serif; color: #8a7379; font-size: 16px;">Taruc Korean Language Society(KLS) 19/20 is a non-academic club that consists of 12 committees work together</h3>
			<p style="padding-left: 200px; padding-right: 100px; font-size: 15px; line-height: 35px; font-family:sans-serif ; color: #8a7379;"> 
			 Taruc Korean Language Society(KLS) 19/20 is a non-academic club that consists of 12 commitees work together in order to spread the Korean language and cultures to members. Our society has provides a language class twice a month, organize fundraising, convocation selling event, appreciation members night and etc to build close relationships with the members.
			</p>
		
			
			</div>
                                
                                <div class="w3-content w3-container w3-padding-64" id="portfolio">
  <h3 class="w3-center">Our Shirts</h3>
  <p class="w3-center"><em>Here are some of our society shirts<br> Click on the images to make them bigger</em></p><br>

  <!-- Responsive Grid. Four columns on tablets, laptops and desktops. Will stack on mobile devices/small screens (100% width) -->
  <div class="w3-row-padding w3-center">
    <div class="w3-col m6">
        <img src="img/koreanshirt.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Committee Shirt">
    </div>

    <div class="w3-col m6">
        <img src="img/koreanshirt1.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Member Shirt">
    </div>
  </div>
  <!-- Modal for full size images on click-->
<div id="modal01" class="w3-modal w3-black" onclick="this.style.display='none'">
  <span class="w3-button w3-large w3-black w3-display-topright" title="Close Modal Image"><i class="fa fa-remove"></i></span>
  <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
    <img id="img01" class="w3-image">
    <p id="caption" class="w3-opacity w3-large"></p>
  </div>
</div>
    			<p style="padding-left: 200px; padding-right: 100px; font-size: 20px; line-height: 35px; font-family: sans-serif; color: #8a7379;"> 
		If you like our shirt, you can buy it too! Our shirt is also for sell to non-member.
			</p>
                                
			<div class="visit" style="border-top: 1px solid #eeeeee; padding-top:20px; text-align:center; ">
<h2>Korean Language Society</h2>
<p style="font-size:16px; ">Kampus Utama, Jalan Genting Kelang, 53300 Kuala Lumpur, Wilayah Persekutuan Kuala Lumpur<br>
*Block M*(Week 5,7,9)</p>
<p style="font-size:16px; line-height:35px; ">Week. 5, 7, and 9<br>
Mon: 6pm - 8pm<br></p>

  
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
    font-size: 25px;
}
.choose a{
	text-decoration: none;
	font-family: Georgia,Times,"Times New Roman",serif;
	color:#5c5c5c;
	font-size: 25px;
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