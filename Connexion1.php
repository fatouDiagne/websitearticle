<?php
$servername = "localhost";
$username = "root";
$password = "";

try {
       $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
       $pdo_options[PDO::ATTR_EMULATE_PREPARES] = false;
       $pdo_options[PDO::ATTR_DEFAULT_FETCH_MODE] = PDO::FETCH_OBJ;
       $conn = new PDO("mysql:host=$servername;dbname=mglsi_news", $username, $password,$pdo_options);
        
       $resultCath = $conn->prepare("SELECT * FROM categorie ");
     
       $resultCath->execute();
       $resultCath = $resultCath->fetchAll(); 
     
     
       $article_id = $_GET["article_id"];
       
       $result = $conn->prepare("SELECT * FROM article WHERE article.categorie=:x");
       $result->bindParam('x', $article_id);
     
       $result->execute();
       $result = $result->fetchAll(); 

}  catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
  }       
?>