<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link href="http://fonts.googleapis.com/css?family=Corben:bold" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Nobile" rel="stylesheet" type="text/css">
    <link rel="stylesheet"  href="css/style.css" />
</head>
<body>

<div class="navbar-main">
    <img class="logo" src="../img/logo.png" alt="" width="90" height="90">
    <div class="hamburger-menu">
        <div class="rectangle">
            <ul class="navbar" id="nav">
                <li><a class="home" href="index.php" id="home">HOME</a></li>
                <li><a class="information" href="infopage/information.php">INFORMATION</a></li>
                <li><a class="form" href="form/form.php">FORM</a></li>
                <li><a class="contact" href="contact/contact.php">CONTACT</a></li>
                <li><a class="behandelingen" href="behandelingen/behandelingen.php">BEHANDELINGEN</a></li>
            </ul>
        </div>
    </div>
</div>
<style>
    <?php include '../css/style.scss'; ?>
</style>
        


<h2 style="text-align:center">Contacteer Ons</h2>
<div class="row">
  <div class="profile">
    <div class="card">
      <img src="Jeroen-Molenschot-Helvoet.jpg" alt="Jane" style="width:50%">
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
      <img src="Gregor van der Made.jpeg" alt="Mike" style="width:50%">
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
      <img src="Wilma Tuk.jpeg" alt="Marleen" style="width:50%">
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


<style>
  
  /* Custom CSS for Footer */

</style>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>































      <style>/*dit gaat over de indeling */

 
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



        * {
  box-sizing: border-box;
}

/* Style inputs */


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




@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
body{
	line-height: 1.5;
	font-family: 'Poppins', sans-serif;
}
*{
	margin:2px;
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
  margin-right: 0px;
  margin-left: 100px;
}
ul{
	list-style: none;
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