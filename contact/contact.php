<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
<link rel="stylesheet" href="../css/style.css">
</head>
<body>

<div class="navbar-main">
    <img class="logo" src="logo.png" alt="" width="90" height="90">
    <div class="hamburger-menu">
        <div class="rectangle">
            <ul class="navbar" id="nav">
                <li><a class="home" href="../index.php" id="home">HOME</a></li>
                <li><a class="information" href="../infopage/information.php">INFORMATION</a></li>
                <li><a class="form" href="../form/form.php">FORM</a></li>
                <li><a class="contact" href="../contact/contact.php">CONTACT</a></li>
                <li><a class="behandelingen" href="../behandelingen/behandelingen.php">BEHANDELINGEN</a></li>
            </ul>
        </div>
    </div>
</div>
<style>
    <?php include '../style/style.scss'; ?>
</style>
        


<h2 style="text-align:center">Contacteer Ons</h2>
<div class="row">
  <div class="profile">
    <div class="card">
      <img src="Jeroen-Molenschot-Helvoet.jpg" alt="Jane" style="width:30%">
      <div class="container">
        <h2>Jeroen Helvoet</h2>
        <p class="title">Arts-assistent dermatologie</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>Jeroenmolenschoot@outlook.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="profile">
    <div class="card">
      <img src="Gregor van der Made.jpeg" alt="Mike" style="width:30%">
      <div class="container">
        <h2>dr. Rinke Borgonjen</h2>
        <p class="title">Cosmetisch dermatoloog  |  Dermatologie  |  Dermatoloog</p>
        <p>Onbevooroordeelde observatie voor optimale zorg</p>
        <p>Gregorvandermade@outlook.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="profile">
    <div class="card">
      <img src="Wilma Tuk.jpeg" alt="Marleen" style="width:30%">
      <div class="container">
        <h2>Mevr. drs. Marleen Baars</h2>
        <p class="title">Dermatologie  |  Dermatoloog  |  miraDry behandelaar</p>
        <p>Het is belangrijk om letterlijk lekker in je vel te zitten.</p>
        <p>MarleenBaars@example.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>




<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>



<main>

      <footer class="footer">
  	 <div class="container">
  	 	<div class="row">
  	 		<div class="footer-col">
  	 			<h4>company</h4>
  	 			<ul>
  	 				<li><a href="#"></a></li>
  	 				<li><a href="#"></a></li>
  	 				<li><a href="#"></a></li>
  	 				<li><a href="#"></a></li>
  	 			</ul>
  	 		</div>
  	 		<div class="footer-col">
  	 			<h4>get help</h4>
  	 			<ul>
  	 				<li><a href="#"></a></li>
  	 				<li><a href="#"></a></li>
  	 				<li><a href="#"></a></li>
  	 				<li><a href="#"></a></li>
  	 				<li><a href="#"></a></li>
  	 			</ul>
  	 		</div>
  	 		<div class="footer-col">
  	 			<h4></h4>
  	 			<ul>
  	 				<li><a href="#"></a></li>
  	 				<li><a href="#"></a></li>
  	 				<li><a href="#"></a></li>
  	 				<li><a href="#"></a></li>
  	 			</ul>
  	 		</div>
  	 		<div class="footer-col">
  	 			<h4>follow us</h4>
  	 			<div class="social-links">
  	 				<a href="#"><i class="fab fa-facebook-f"></i></a>
  	 				<a href="#"><i class="fab fa-twitter"></i></a>
  	 				<a href="#"><i class="fab fa-instagram"></i></a>
  	 				<a href="#"><i class="fab fa-linkedin-in"></i></a>
  	 			</div>
  	 		</div>
  	 	</div>
  	 </div>
  </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>































      <style>/*dit gaat over de indeling */
#nav ul .navbar {
  list-style-type: none;
  margin: 0;
  padding: 0;
}

#nav li {
  float: center;
}

#nav a {
  display: block;
  padding: 8px;
}

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #ffffff;
}

li {
  float: left;
}

li a:not(.behandelingen, .logo) {
  display: block;
  color: rgb(0, 0, 0);
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  margin: auto;
  border-right: 1px solid;
}
 
 /*Dit houd in dat de navbar knop de kleur #111 (zwart) word wanneer je er met je muis overheen gaat */
  li a:hover {
    background-color: #c0c0c0;
  }
 
.rectangle {
  border-bottom: 1px solid;
  border-left: 1px solid;
  border-right: 1px solid;
  margin: auto;
  width: 43%;
  padding: 10px;
}
 
a:link, a:visited, a:hover, a:active { color: black;
  text-decoration: none;
}

.search-bar {
            display: flex;
            align-items: center;
        }
        .search-bar input[type="text"] {
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .search-bar button {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 7px 15px;
            margin-left: 5px;
            border-radius: 5px;
            cursor: pointer;
        }


        * {
  box-sizing: border-box;
}

/* Style inputs */
input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

/* Style the container/contact section */
.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 10px;
}

/* Create two columns that float next to eachother */
.column {
  float: left;
  width: 50%;
  margin-top: 6px;
  padding: 20px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}

.chip {
  display: inline-block;
  padding: 0 25px;
  height: 50px;
  font-size: 16px;
  line-height: 50px;
  border-radius: 25px;
  background-color: #f1f1f1;
}

.chip img {
  float: left;
  margin: 0 10px 0 -25px;
  height: 50px;
  width: 50px;
  border-radius: 50%;
}


@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
body{
	line-height: 1.5;
	font-family: 'Poppins', sans-serif;
}
*{
	margin:0;
	padding:0;
	box-sizing: border-box;
}
.container{
	max-width: 1170px;
	margin:auto;
}
.row{
	display: flex;
	flex-wrap: wrap;
}
ul{
	list-style: none;
}
.footer{
	background-color: #24262b;
    padding: 70px 0;
}
.footer-col{
   width: 25%;
   padding: 0 15px;
}
.footer-col h4{
	font-size: 18px;
	color: #ffffff;
	text-transform: capitalize;
	margin-bottom: 35px;
	font-weight: 500;
	position: relative;
}
.footer-col h4::before{
	content: '';
	position: absolute;
	left:0;
	bottom: -10px;
	background-color: #e91e63;
	height: 2px;
	box-sizing: border-box;
	width: 50px;
}
.footer-col ul li:not(:last-child){
	margin-bottom: 10px;
}
.footer-col ul li a{
	font-size: 16px;
	text-transform: capitalize;
	color: #ffffff;
	text-decoration: none;
	font-weight: 300;
	color: #bbbbbb;
	display: block;
	transition: all 0.3s ease;
}
.footer-col ul li a:hover{
	color: #ffffff;
	padding-left: 8px;
}
.footer-col .social-links a{
	display: inline-block;
	height: 40px;
	width: 40px;
	background-color: rgba(255,255,255,0.2);
	margin:0 10px 10px 0;
	text-align: center;
	line-height: 40px;
	border-radius: 50%;
	color: #ffffff;
	transition: all 0.5s ease;
}
.footer-col .social-links a:hover{
	color: #24262b;
	background-color: #ffffff;
}

/*responsive*/
@media(max-width: 767px){
  .footer-col{
    width: 50%;
    margin-bottom: 30px;
}
}
@media(max-width: 574px){
  .footer-col{
    width: 100%;
}
}

.profile {
  text-align: center;
}

.profile img {
  width: 200px;
  height: 200px;
  border-radius: 50%;
  object-fit: cover;
  margin: 0 auto 20px auto;
  display: block;
}



</style>


</body>
</html>