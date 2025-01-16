<?php 

function contarProgramas() {
    include "bd.php";
    $inserirBd = "SELECT COUNT(id) as total FROM programas";
    $PushBD = $conn->query($inserirBd); 
    $resultado = $PushBD->fetch_assoc();

    return $resultado['total']; 
}

function programas($id){
    include "bd.php";
    $inserirBd = "SELECT nome, texto FROM programas WHERE id = $id";
    $PushBD = $conn -> query($inserirBd); 
    $resultado = $PushBD -> fetch_assoc();

    $nome = $resultado['nome'];
    $texto = $resultado['texto'];

    return array($nome, $texto);
}

function contarPlanos() {
    include "bd.php";
    $inserirBd = "SELECT COUNT(id) as total FROM planos";
    $PushBD = $conn->query($inserirBd); 
    $resultado = $PushBD->fetch_assoc();

    return $resultado['total']; 
}

function planos($id) {
    include "bd.php";
    $inserirBd = "SELECT nome, preco, texto FROM planos WHERE id = $id";
    $PushBD = $conn -> query($inserirBd); 
    $resultado = $PushBD -> fetch_assoc();

    $nome = $resultado['nome'];
    $preco = $resultado['preco'];
    $texto = $resultado['texto'];

    return array($nome, $preco, $texto);
}