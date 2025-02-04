<?php 
    $servername = "";
    $username = "x";
    $password = "y"; 
    $dbname = "z";
    
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    if ($conn->connect_error) {
        die("Falha na conexão: " . $conn->connect_error);
    }
