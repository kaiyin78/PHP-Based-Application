

<!DOCTYPE html>
<html>
<title>Korean Language</title>
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
  <div class="w3-bar w3-white w3-card" id="myNavbar">
      <a href="home.php"class="w3-wide"><img src="img/logo.jpeg"  style="width:10%"></a>
    <!-- Right-sided navbar links -->
    <div class="w3-right w3-hide-small">
        <a href="home.php" class="w3-padding-48 w3-bar-item w3-button">HOME</a>
        <a href="photos.php" class="w3-padding-48 w3-bar-item w3-button">PHOTOS</a>
        <a href="aboutus.php" class="w3-padding-48 w3-bar-item w3-button"><i class="fa fa-user"></i>ABOUT US</a>
        <a href="userevent.php" class="w3-padding-48 w3-bar-item w3-button"><i class="fa fa-th"></i>EVENTS</a>
        <a href="contactus.php" class="w3-padding-48 w3-bar-item w3-button"><i class="fa fa-envelope"></i>CONTACT US</a>
        <a href="userprofile.php" class="w3-padding-48 w3-bar-item w3-button"></i>LOGIN</a>
    </div>
    <!-- Hide right-floated links on small screens and replace them with a menu icon -->

    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
      <i class="fa fa-bars"></i>
    </a>
  </div>
</div>

<!-- Sidebar on small screens when clicking the menu icon -->
<nav class="w3-sidebar w3-bar-block w3-black w3-card w3-animate-left w3-hide-medium w3-hide-large" style="display:none" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16">Close ×</a>
  <a href="home.php" onclick="w3_close()" class="w3-bar-item w3-button">HOME</a>
  <a href="aboutus.php" onclick="w3_close()" class="w3-bar-item w3-button">ABOUT US</a>
  <a href="userevent.php" onclick="w3_close()" class="w3-bar-item w3-button">EVENTS</a>
  <a href="contactus.php" onclick="w3_close()" class="w3-bar-item w3-button">CONTACT US</a>
  <a href="userprofile.php" onclick="w3_close()" class="w3-bar-item w3-button">LOGIN</a>
</nav>
<div class="w3-content" style="max-width:2000px;margin-top:46px">
<div class="mySlides w3-display-container w3-center">
    <img src="img/KoreanLanguageCourseinDhaka.jpg" style="width:100%">
    <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
  
    </div>
  </div>
  <div class="mySlides w3-display-container w3-center">
      <img src="img/a2.jpg" style="width:100%">
    <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">

    </div>
  </div>
  <div class="mySlides w3-display-container w3-center">
      <img src="img/a3.jpg" style="width:100%">
    <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
  
    </div>
  </div>
<div class="mySlides w3-display-container w3-center">
    <img src="img/a4.jpg" style="width:100%">
    <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
       
    </div>
  </div>

</div>
<!-- About Section -->
<div class="w3-container" style="padding:128px 16px" id="about">
  <h3 class="w3-center">ABOUT THE SOCIETY</h3>
  <p class="w3-center w3-large">Taruc Korean Language Society(KLS) 19/20 is a non-academic club that consists of 12 commitees work together in order to spread the Korean language and cultures to members. Our society has provides a language class twice a month, organize fundraising, convocation selling event, appreciation members night and etc to build close relationships with the members.</p>
  <!-- Photo Grid -->
  <div class="w3-row">
    <div class="w3-half">
        <img src="img/koreanlanguage1.jpg" style="width:100%">
        <img src="img/koreanlanguage2.jpg" style="width:100%">
        <img src="img/koreanlanguage3.jpg" style="width:100%">
    </div>

    <div class="w3-half">
        <img src="img/koreanlanguage4.jpg" style="width:100%">
        <img src="img/koreanlanguage5.jpg" style="width:100%">
        <img src="img/koreanlanguage6.jpg" style="width:100%">
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
    var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 4000);    
}

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