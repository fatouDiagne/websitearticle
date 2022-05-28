
<?php
try {
    $servername = "localhost";
    $username = "root";
    $password = "";

$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
$pdo_options[PDO::ATTR_EMULATE_PREPARES] = false;
$pdo_options[PDO::ATTR_DEFAULT_FETCH_MODE] = PDO::FETCH_OBJ;
$conn = new PDO("mysql:host=$servername;dbname=mglsi_news", $username, $password,$pdo_options);
$resultCath = $conn->prepare("SELECT * FROM categorie ");

$resultCath->execute();
$resultCath = $resultCath->fetchAll(); 

$resultCate= $conn->prepare("SELECT * from categorie");
$resultCate->execute();
$resultCate = $resultCate->fetchAll();

$result = $conn->prepare("SELECT * FROM article,categorie WHERE article.categorie=categorie.id ORDER BY article.id Desc LIMIT 6");

$result->execute();

$result = $result->fetchAll(); 

} catch(PDOException $e) {
echo "Connection failed: " . $e->getMessage();
}
?>
<!--?php
        $user='root';
        $password='';
        $database= 'mglsi_news';
        $servername ='localhost:3306';
        $conn = new mysqli($servername, $user, $password, $database);
        if ($mysqli->connect_error) {
        die('Connect Error (' .
            $conn->connect_errno . ') '.
            $mysqli->connect_errno);
        }   
        $sql = "SELECT * FROM   article "; 
        $result = $conn->query($sql);
        $conn->close();

    ?-->