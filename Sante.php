<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="index.css">
    <title>Document</title>
</head>
<body>
	 <?php
       require "Connexion1.php";
    ?>
	<div class="entete">
        <a href="./Sante.php" class="lienimag">Santé</a>
        <!--a href="./Sport.php" class='lienimag'>Sport</a>
        <a href="./Education" class='lienimag'>Education</a>
        <a href="./Politique" class='lienimag'>Politique</a-->

	</div>   

	<div class="corps">
    <?php 
                    while($rows1=$result1->fetch_assoc())
                    {
            ?>            
            <div class="contentimage1">
            <a href=#>
                    <p><?php echo $rows1['contenu'];?></p>
            </a>
        <?php }?>
    </div> 
    
</div>    
</body>
</html>

