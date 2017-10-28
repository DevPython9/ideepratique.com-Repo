<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--Pour assurer un rendu approprié et un zoom tactile, ajoutez la méta- image de la fenêtre à votre écran 
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"> désactiver les capacités de zoom sur les appareils mobiles en ajoutant user-scalable=noà la méta- étiquette de la fenêtre. Cela désactive le zoom, ce qui signifie que les utilisateurs ne peuvent faire que défiler-->
        <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css"><!--position importante pour que le fichier css prends l'avantage meme si<!DOCTYPE html>
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
     <?php include'favicon.php';?>
     <!-- .................... END   ....................... -->
     <!-- ---------------------Icone ---------------------r- -->
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
      <!-- -------------------END --------------------------- -->
         
     </-->
     <!----------------------Police------------------------- -->
     <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
     <!---------------------END -------------------------------->
    <!-- --------------------Scroll----------------------------->
    <?php include'backTop1.php'?>
    <link  rel="stylesheet" href="YouTubePopUp.css" />
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
/*Class pour notre javascript*/


.degrade2{
    background:linear-gradient(to bottom,blue,white,green);
}
.degrade3{
    background:linear-gradient(to right,tan,white,black);
}
.degrade4{
    background:radial-gradient(circle at center,blue,white,tan);
}

/*END class */
</style>
</head>
<body id="body">
<div id ="wrapper" class="wrapper">
    <header> 
    <div class="buttons">
  <h3>Color switch</h3>
  <button data-color="red">Switch to red</button>
  <button data-color="blue">Switch to blue</button>
  <button data-color="green">Switch to green</button>
  <button data-color="orange">Switch to orange</button>
  <button data-color="black">Switch to black</button>
  <button data-color="grey">Switch to white</button>
</div>
	<div class="container-fluid"><!---fluid: prend toute la marge possible et container est plus courte-->
  <div class="jumbotron">
<h1 align="left" style="font-family:'Lobster', cursive; min-height:170px; color:#c3e88d"font-size:3.2rem;"><img src="logo/logo_arbres.jpg" align="left" style="width:10%; height:10%; border:1px solid green; border-radius:50%;">Idée<span style="color:#d57669; vertical-align:middle;">Pratique<strong>...</strong></span></h1>
	<nav class="navbar "> <!-- class="navbar navbar-default" effacerait mon background vert-->
		<div class="container">
        <ul class="navbar">
              <li class="active">
                  <a href="index.php"><i class="material-icons">home</i><br/>
                  Accueil </a></li>
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
               <a class="demo" href="https://www.youtube.com/watch?v=DoP-w7cmMq0?rel=0"><img src="img_thumbnail_index.jpg"/></a>
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
                     <a class="demo" href="https://www.youtube.com/watch?v=DoP-w7cmMq0?rel=0"><img src="img_thumb_index1.jpg"/></a>
                   <div class="titre-last-video"><p>Electroménager:réparation</p></div>
		   </div>
                   <div class="col-md-4 well derniere_video">
                      <a class="demo" href="https://www.youtube.com/watch?v=CJ1wlBQg0Yw?rel=0"><img src="img_thumb_index2.jpg"/></a>
		  <div class="titre-last-video"><p>Réparer un disque dur</p></div>
 </div>           <div class="col-md-4 well derniere_video">
                     <a class="demo" href="https://www.youtube.com/watch?v=Gji8J5A1iBU?rel=0"><img src="img_thumb_index3.jpg"/></a>
		   <div class="titre-last-video"><p>Faire un climatiseur maison</p></div>
                </div>
                  <div class="row">
                     <div class="col-md-4 well derniere_video">
                     <a class="demo" href="https://www.youtube.com/watch?v=a4JUa4sKzdE?rel=0"><img src="img_thumb_index4.jpg"/></a>
		   <div class="titre-last-video"><p>5 Secrets sur le smartphone</p></div>
                    </div>
                 </div>
                 </div>
               
	</section> <br> <br>
<hr/>
 <footer><?php include'footer.php';?></footer>
       <script src="app.js"></script>
       <script src="jquery-3.2.1.min.js"></script>
       
<!--$(document).ready(function(){
    $("h1+p").css("background-color", "black");
    $("li:nth-child(even).css("background-color", "pink");  
});-->
       
       <script src="bootstrap.min.js"></script>
       <script src="carousel.js"></script>
       <script src="jquery-3.2.1.min.js"></script>
       <script>            
jQuery(document).ready(function() {
  var duration = 500;
  jQuery(window).scroll(function() {
    if (jQuery(this).scrollTop() > 100) {
      // Si un défillement de 100 pixels ou plus.
      // Ajoute le bouton
      jQuery(".cRetour").fadeIn(duration);
    } else {
      // Sinon enlève le bouton
      jQuery(".cRetour").fadeOut(duration);
    }
  });
				
  jQuery(".cRetour").click(function(event) {
    // Un clic provoque le retour en haut animé.
    event.preventDefault();
    jQuery("html, body").animate({scrollTop: 0}, duration);
    return false;
  })
});
</script>

<div class="cRetour"></div>
</script><script src="YouTubePopUp.jquery.js"></script>
<script>
jQuery("a.demo").YouTubePopUp();
</script>
<script>
jQuery("a.demo").YouTubePopUp({ autoplay: 0 });
</script>
<!-- Respectez l'ordre des scripts. C'est important -->

</body>
</html> 
