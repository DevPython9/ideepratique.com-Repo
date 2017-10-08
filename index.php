<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--Pour assurer un rendu approprié et un zoom tactile, ajoutez la méta- image de la fenêtre à votre écran 
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"> désactiver les capacités de zoom sur les appareils mobiles en ajoutant user-scalable=noà la méta- étiquette de la fenêtre. Cela désactive le zoom, ce qui signifie que les utilisateurs ne peuvent faire que défiler-->
        <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css"><!--position importante pour que le fichier css prends l'avantage meme si c pas a 100% sur bootsrtrap-->
	<!--Le link boostrap après la link css change l'apparence de la page notamment les marges, police, couleur etc): -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <!-- ...................favicon....................... -->
<link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
     <!-- ....................END   ....................... -->
    
    <title>La vie pratique</title>
<style>
.container {margin-bottom:0px;}
  <!-- .video_unique {
      width:50%;
      height:400px;
 }-->
/*.container{
  display: grid;
  grid-template-columns: 45% 45%;
  grid-template-rows: 50% 50%;
  grid-gap:55px;
}*/
.last-video {
     width:100%;
}
.titre-last-video {
   font: 800 2rem italic;
   color:black;
   text-align:center;
   padding:5px;
}
section h2 {
  text-align:left;
  color:red;
  font-weight:bold;
}
</style>
</head>
<body id="body">
<div id ="wrapper" class="wrapper">
    <header>
	<div class="container-fluid"><!---fluid: prend toute la marge possible et container est plus courte-->
  <div class="jumbotron">
<h1><img src="logo/logo_arbres.jpg" align="left" style="width:15%; border:1px solid green; border-radius:50%;">La vie pratique</h1>
	<nav class="navbar "> <!-- class="navbar navbar-default" effacerait mon background vert-->
		<div class="container">
        <ul class="navbar">
              <li class="active">
                   <a href="index.php">
                  <i class="material-icons icone_avion">home</i><br/>Acceuil </a></li>
                 <li class="dropdown">
                  <a href="remede.php">Remède </a>
    		  </li>
                   <li class="dropdown">
<a href="bricolage.php">Bricolage</a>
    		    </li>
                    <li class="dropdown">
<a href="mecanique.php">Mécanique</a>
    		   </li>
               <li class="dropdown"><a href="astuces.php">Astuces</a>
               <li class="dropdown"><a href="electromenager.php"> Electro<br/>ménager</a>
    		</li>
    	</ul>
    </div>
</div>
	</nav>
</div>
</div>
 </header>
   <!-- ----------------- Carousel: Début ----------------------- -->
 <div class="container_carousel">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
<!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
  </ol>
      <!-- Wrapper for slides -->  
      <div class="carousel-inner">
        <div class="item active">
          <img src="bricolage/bricolage.jpg" class="img-responsive">
           <div class="carousel-caption">
            <h4><a href="bricolage/bricolage.jpg">Bricolage: Les astuces</a>
<p>Trucs et astuces bricolage pour vos travaux ou pour la vie de tous les jours.</p>
          </div>
        </div><!-- End Item -->
        <div class="item">
          <img src="mecanique/mecanique.jpg" class="img-responsive">
           <div class="carousel-caption">
            <h4><a href="mecanique/mecanique.jpg"> L'univers de la Mécanique</a>
<p>Fini de dépenser tout votre argent chez le mécanicien, faites vos petits travaux vous-même</p>
          </div>
        </div><!-- End Item -->
        
        <div class="item">
          <img src="remede/remede_carou.jpg" class="img-responsive">
           <div class="carousel-caption">
            <h4><a href="remede/remede_carou.jpg"> Les remèdes...</a></h4>
            <p>Les trucs et astuces de grands-mères à nouveau accessibles à tous, ainsi que les remèdes de grands mères tombés dans les oubliettes</p>
          </div>
        </div><!-- End Item -->
        
        <div class="item">
          <img src="electromenager/electromenager.jpg" class="img-responsive">
           <div class="carousel-caption">
            <h4><a href="electromenager/electromenager.jpg">Electroménager</a></h4>
            <p>Tout ce qu'il faut savoir sur l'électroménager, les meilleurs marques, les différentes modèles, les astuces pour l'entretien et l'utilisation.</p>
          </div>
          </div>
</div><!-- End Carousel Inner -->
     <ul class="list-group col-sm-4">
      <li data-target="#myCarousel" data-slide-to="0" class="list-group-item active"><h4> Bricolage!</h4></li>
      <li data-target="#myCarousel" data-slide-to="1" class="list-group-item"><h4>La mécanique</h4></li>
      <li data-target="#myCarousel" data-slide-to="2" class="list-group-item"><h4>Les Remèdes!</h4></li>
      <li data-target="#myCarousel" data-slide-to="3" class="list-group-item"><h4>Electroménager</h4></li>
    </ul>

      <!-- Controls -->
      <div class="carousel-controls">
          <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
          </a>
          <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
          </a>
      </div>

    </div><!-- End Carousel -->
</div><br/>

        <section>
		<h2>Les Dernières Vidéos ajoutées ...</h2>
   <!--    <div class="container">  
             <div class="item item-1">
               <iframe class="last-video" src="https://www.youtube-nocookie.com/embed/DoP-w7cmMq0?rel=0" frameborder="0" allowfullscreen></iframe>
            <div class="titre-last-video"><p>Electroménager:réparation</p></div>
            </div>
             <div class="item item-2">
              <iframe class="last-video"  src="https://www.youtube-nocookie.com/embed/CJ1wlBQg0Yw?rel=0" frameborder="0" allowfullscreen></iframe>
            </div>
		<div class="titre-last-video"><p>Réparer un disque dur</p></div></div>
            <div class="item item-3">
              <iframe class="last-video" src="https://www.youtube-nocookie.com/embed/Gji8J5A1iBU?rel=0" frameborder="0" allowfullscreen></iframe>
            </div>
		   <div class="titre-last-video"><p>Faire un climatiseur maison</p></div></div>
         <div class="item item-4">
             <iframe class="last-video"  src="https://www.youtube-nocookie.com/embed/a4JUa4sKzdE?rel=0" frameborder="0" allowfullscreen></iframe>
        </div>
		   <div class="titre-last-video"><p>5 Secrets sur le smartphone</p></div></div>
      </div>-->
		

   <!--Video avec flexbox-->
<div class="flex-video">
                 <div class="row">
                   <div class="col-md-4 well derniere_video">
                     <iframe class="last-video" src="https://www.youtube-nocookie.com/embed/DoP-w7cmMq0?rel=0" frameborder="0" allowfullscreen></iframe>
                   <div class="titre-last-video"><p>Electroménager:réparation</p></div>
		   </div>
                   <div class="col-md-4 well derniere_video">
                     <iframe class="last-video"  src="https://www.youtube-nocookie.com/embed/CJ1wlBQg0Yw?rel=0" frameborder="0" allowfullscreen></iframe>
		  <div class="titre-last-video"><p>Réparer un disque dur</p></div>
 </div>           <div class="col-md-4 well derniere_video">
                     <iframe class="last-video"  src="https://www.youtube-nocookie.com/embed/Gji8J5A1iBU?rel=0" frameborder="0" allowfullscreen></iframe>
		   <div class="titre-last-video"><p>Faire un climatiseur maison</p></div>
                </div>
                  <div class="row">
                     <div class="col-md-4 well derniere_video">
                     <iframe class="last-video"  src="https://www.youtube-nocookie.com/embed/a4JUa4sKzdE?rel=0" frameborder="0" allowfullscreen></iframe>
		   <div class="titre-last-video"><p>5 Secrets sur le smartphone</p></div>
                    </div>
                 </div>
                 </div>
               
	</section> <br> <br>
<hr/>
 <footer><?php include'footer.php';?></footer>
       <script src="jquery-3.2.1.min.js"></script>
       <script>
<!--$(document).ready(function(){
    $("h1+p").css("background-color", "black");
    $("li:nth-child(even).css("background-color", "pink");  
});
</script>
       <script src="bootstrap.min.js"></script>
       <script src="carousel.js">
</script>-->
<script>
var body = document.getElementById('body');
var choixColor=body.style.backgroundColor= prompt("Pour une image de fond de ton choix , veuillez saisir une couleur (en anglais)");
console.log(body.choixColor);
}
</script>

<!-- Respectez l'ordre des scripts. C'est important -->

</body>
</html>