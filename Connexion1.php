<?php
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
        $sql = "SELECT * FROM  article, categorie where libelle='Santé'";
        $result1 = $conn->query($sql);
        $conn->close();

    ?>