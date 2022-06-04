
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="index.css" >
   
    <script src="https://kit.fontawesome.com/70c3d4799c.js" crossorigin="anonymous"></script>
    <title>Actualité de l'esp</title>
</head>
<body>
    <?php
    require 'Connexion.php'
    ?>
            <nav class="entete">
                <i class="fa-solid fa-house"></i>
                <a href="./Accueil.php">Accueil</a>
            <?php
                for($i=1; $i<=sizeof($resultCate);$i++) {
                    echo "<i class='fa-solid fa-baseball'></i> <a href=\"pages.php?article_id=".
                    $resultCate[$i-1]->id."\">".
                     $resultCate[$i-1]->libelle."</a>";
                }
            ?>
            </nav>
            <div class="corps">
            <h1 class="h1style">
                <marquee>
                    <b>Bienvenue sur le site de l'actualité de l'ESP</b>
                    </marquee>
            </h1>
            <?php 
                    for($i=1; $i <= sizeof($result); $i++) {
            ?>            
                <div class="contentimage1">
                    <h1> <?php echo $result[$i-1]->titre;?>  </h1>
                    <p>  <?php echo $result[$i-1]->contenu;?> </p>
                </div>
            <?php
                }
            ?>
            </div>
    </body>
    <footer>

   
    </footer>
</html>