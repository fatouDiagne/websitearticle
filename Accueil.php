
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="index.css" >
   
    <link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">

	<!-- Font Awesome -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

	<!-- Libraries Stylesheet --> 
	<link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
	<link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/70c3d4799c.js" crossorigin="anonymous"></script>
    <title>Actualité de l'esp</title>
</head>
    <!--header>
    
    <div class="entete">
    <a href="./Accueil.php"> <img src="./logo.jpg" alt="" /> </a>

    </div>
    </header-->
    <body>
    <?php
    require 'Connexion.php'
    ?>
            <nav class="entete">
                 <i class="fa-solid fa-house"></i>
              
            <a href="./Accueil.php">Accueil</a>
            <?php

                for($i=1; $i<=sizeof($resultCate);$i++) {
                   
                    echo "<i class='fa-solid fa-baseball'></i> <a href=\"pages.php?article_id=".$resultCate[$i-1]->id."\">". $resultCate[$i-1]->libelle."</a>";
                }
            ?>
            </nav>
    
        <div class="corps">
            <h1 class="h1style"><marquee><b>Bienvenue sur le site de l'actualité de l'ESP</b></marquee></h1>
            <?php 
                    for($i=1; $i <= sizeof($result); $i++) {
            ?>            
            <div class="col-lg-4 col-md-6 mb-5">

                <div class="contentimage1">
                    <h1> <?php echo $result[$i-1]->titre;?>  </h1>
                    <p>  <?php echo $result[$i-1]->contenu;?> </p>
                </div>


            <?php
                }
            ?>

             </div> 

            </div>
    </body>
    <footer>

   
    </footer>
</html>