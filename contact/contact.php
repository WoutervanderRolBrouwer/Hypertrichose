
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Page</title>
    <link href="http://fonts.googleapis.com/css?family=Corben:bold" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Nobile" rel="stylesheet" type="text/css">
    <link rel="stylesheet"  href="../css/style.css" />
</head>

<body>
<header>
      <nav class="main-menu">
          <img src="../logo/logo.svg" height="90px" alt="">
          <ul >
                  <li><a class="home" href="../index.php" id="home">HOME</a></li>
                  <li><a class="information" href="../infopage/information.php">INFORMATION</a></li>
                  <li><a class="contact active" href="contact/contact.php">CONTACT</a></li>
                  <li><a class="behandelingen" href="../behandelingen/behandeling.php">BEHANDELINGEN</a></li>
                  <li><a class="FAQ" href="../FAQ/FAQ.php">FAQ</a></li>
          </ul>
          <ul class="login">
            <li><a href="../Form/Form.php" class="login">Inloggen</a></li>
          </ul>
      </nav>
  </header>
<style>
    <?php include '../scss/style.scss'; ?>
</style>


<div class="row">
  <div class="column">
    <img src="groepsfoto.webp" alt="" style="width:100%">
  </div>
  <div class="column">
    <img src="Groepsfoto.jpg" alt="" style="width:100%; height:97.8%;">
  </div>
</div>
  <h2 style="text-align:center">Wij bieden u de beste artsen voor de beste zorg</h2>
  <div class="centered"><p style="text-align:center">Welkom bij de contact pagina, de ultieme bron voor alles wat te maken heeft met het weerwolvensyndroom.
We zijn verheugd dat je interesse hebt in ons platform en we staan klaar om al je vragen, opmerkingen of feedback te ontvangen.
Heb je vragen over het weerwolvensyndroom? Wil je meer informatie over bepaalde aspecten ervan?
Of misschien heb je gewoon behoefte aan een luisterend oor van iemand die begrijpt wat je doormaakt?
Aarzel niet om contact met ons op te nemen via het onderstaande formulier.
</p>
</div>
</div>





<div class="row">
  <div class="profile">
    <div class="card">
      <img src="Jeroen Molen.jpg" alt="">
      <div class="container">
        <h2 style="">Jeroen Helvoet</h2>
        <p class="title">Arts-assistent dermatologie</p>
        <p>één seconden kan een leven en een wereld redden</p>
        <p>Jeroenmolenschoot@outlook.com</p>
      </div>
    </div>
  </div>
  <div class="profile">
    <div class="card">
      <img src="Laurokienhorst.jpg" alt="">
      <div class="container">
        <h2>Mvr. Laurokienhorst</h2>
        <p class="title">Cosmetisch dermatoloog</p>
        <p>Onbevooroordeelde observatie voor optimale zorg</p>
        <p>Mvr.Laurakienhorst@outlook.com</p>
      </div>
    </div>
  </div>
  <div class="profile">
    <div class="card">
      <img src="Tielenmans.jpg" alt="">
      <div class="container">
        <h2>Mevr. Marleen Baars</h2>
        <p class="title">miraDry behandelaar</p>
        <p>Het is belangrijk om letterlijk lekker in je vel te zitten.</p>
        <p>MarleenBaars@example.com</p>
      </div>
    </div>
  </div>


  
<div class="row">
  <div class="profile">
    <div class="card">
      <img src="Medischss.jpg" alt="">
      <div class="container">
        <h2>Mvr. Anna Dijkstra</h2>
        <p class="title">Arts-assistent MiraDry behandelaar</p>
        <p>Nauwlettend speuren naar licht in de obscuriteit van het weerwolvensyndroom</p>
        <p>AnnaDijkstra@outlook.com</p>
      </div>
    </div>
  </div>
  <div class="profile">
    <div class="card">
      <img src="MediscH.png" alt="">
      <div class="container">
        <h2>Mvr. Patricia van Huis</h2>
        <p class="title">Psychologie Specialist</p>
        <p>Vertrouwd met de grimmige lagen van het weerwolvensyndroom, wij bieden hoop en zorg</p>
        <p>PatriciaVanHuis@outlook.com</p>
      </div>
    </div>
  </div>
  <div class="profile">
    <div class="card">
      <img src="Medichsss.jpg" alt="">
      <div class="container">
        <h2>Mvr. Hande Ercel</h2>
        <p class="title">Speciale PiroBehandelaar</p>
        <p>Gewijd aan het ontrafelen van de mysteries van het weerwolvensyndroom, elke stap van de weg</p>
        <p>AnnaDoc@example.com</p>
      </div>
    </div>
  </div>
 <style>
  .container {
  flex-direction: column;
}

.row {
  display: flex;
  justify-content: space-between;
  /* You can adjust other properties like flex-wrap if needed */
}

.profile {
  flex: 1;
  margin: 10px;
  /* You can adjust other properties for profile items as needed */
}
</style>






<div class="container">
  <div style="text-align:center">
    <h2>Contacteer ons</h2>
    <p style="font-family:'initial;">Bel ons kantoor om een afspraak in te plannen, of vul onderstaand contactformulier in en wij nemen binnen 24 uur contact met u op.
       Plan vandaag nog een gratis adviesgesprek in! Onze medewerkers en chirurgen staan voor u klaar en beantwoorden graag al uw vragen.
       We helpen je graag om alle informatie te krijgen die je nodig hebt om de beste keuze te maken.
    </p>
  </div>
  <div style="margin-left:17em">
    <h2 style="height: 36px;">Onze Locatie</h2>
  </div>
  <div class="container">
  <div style="margin-left:55em">
    <h2 style="height: 36px;">Gegevens</h2>
  </div>
  <div class="row">
    <div class="column">
      <img src="google maps2.png" src="" style="width: 130%;height:88%;margin-left: -24px;">
    </div>
    <div class="column">
      <form action="submit_contact.php"  method="POST"style="margin-left: 100px;">
      <label for="fname">Voornaam</label>
    <input type="text" id="firstname" name="firstname" placeholder="Jou naam..">

    <label for="lname">Achternaam</label>
    <input type="text" id="lastname" name="lastname" placeholder="Jou achternaam..">
        <br><br>
        <label for="mail_form">Mail</label>
    <input type="text" id="mail_form" name="mail_form" placeholder="Jou mail..">
        </select>
        <label for="subject">Onderwerp</label>
        <textarea id="subject" name="subject" placeholder="Je onderwerp.." style="height:70px"></textarea>
        <label for="subject">Bericht</label>
        <textarea id="message" name="message" placeholder="Je bericht.." style="height:110px"></textarea>
        <input type="submit" value="Verzend" style="width:26.1em">
      </form>
      </form>
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

@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');

 
a:link, a:visited, a:hover, a:active { color: black;
  text-decoration: none;
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
  background-color: gray;
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
  width: 49%;
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





/**
dit code is voor de achtergrondkleur van het pagina
background-color: gray;
dit is voor de font type
font-family: 'Poppins', sans-serif;
*/
body{
	line-height: 1.5;
	
  margin: 0;
}
*{
	padding:0;
	box-sizing: border-box;
}
.container{
	max-width: 1255px;
	margin:auto;
}
.row{
	display: flex;
	flex-wrap: wrap;
}
ul{
	list-style: none;
}



.profile {
  text-align: center;
}

.profile img {
  width: 160px;
  height: 200px;
  border-radius: 50%;
  object-fit: cover;
  margin: 0 auto 20px auto;
  display: block;
}




</style>


</body>
</html>