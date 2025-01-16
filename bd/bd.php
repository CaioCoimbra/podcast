<?php 
    $servername = "";
    $username = "u661331863_pdcadmin2";
    $password = "CcS96184899"; 
    $dbname = "u661331863_podcast2";
    
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    if ($conn->connect_error) {
        die("Falha na conexão: " . $conn->connect_error);
    }
