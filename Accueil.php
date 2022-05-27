
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link  type="text/css" href="index.css" rel="stylesheet">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">

	<!-- Font Awesome -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

	<!-- Libraries Stylesheet -->
	<link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
	<link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
</head>
<body>
    <!--?php
        $user='root';
        $password='';

        $database= 'mglsi_news';
        $servername ='localhost:3306';
        //$conn = new mysqli($servername, $user, $password, $database);

        if //($mysqli->connect_error) {
        //die('Connect Error (' .
            $conn->connect_errno . ') '.
            //$mysqli->connect_errno);
        //}   
        $sql = "SELECT * FROM   article ";
        //$result = $conn->query($sql);
        //$conn->close();

    ?-->
    <?php
    require 'Connexion.php'
    ?>
    <div class="entete">


        <a href="./Accueil.php"><img src="./logo.jpg" alt=""/></a>
        <a href="./Sante.php" class="lienimage">Sante</a>
        <a href="./Sport.php" class='lienimage'>Sport</a>
        <a href="./Education" class='lienimage'>Education</a>
        <a href="./Politique" class='lienimage'>Politique</a>
    </div>
        <div class="corps">
            <h1 class="h1style"><marquee><b>Bienvenue sur le site de l'actualité de l'ESP</b></marquee></h1>
            
            <?php 
                    for($i=1; $i <= sizeof($result); $i++) {
                    
            ?>            
            <!--div class="col-lg-4 col-md-6 mb-5">
            <div class="position-relative mb-4">        
                <a href = #>
                        <p><!--?php echo $result[$i-1]->titre;?--></p>
                </a>
             </div-->
                <div class="contentimage1">
                    <h1><?php echo $result[$i-1]->titre;?></p></h1>
                    <p><?php echo $result[$i-1]->contenu;?></p>
                </div>   
                    <!--div class="contentimage3">
                        <a href=#>
                            <p><//?php echo $rows['contenu'];?></p>
                        </a>
                    </div>   
                    <div class="contentimage4">
                    <a href="#">
                            <p><//?php echo $rows['contenu'];?></p>
                        </a>
                    </div> 
                    <div class="contentimage5">
                        <a href=#>
                            <p><//?php echo $rows['contenu'];?></p>
                        </a>
                    </div>  
                    <div class="contentimage6">
                        <a href=#>
                            <p><//?php echo $rows['contenu'];?></p>
                        </a>
                    </div--> 
            <?php
                }
            ?> 
             </div> 
             </div>
    </body>
</html>