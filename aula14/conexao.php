<?php
try {
    $pdo = new PDO('mysql:host=localhost;bdname=etec_23058','root','');
    $pdo -> setAttribute(PDO::ARTR_ERRMODE, PDO::ATTRERRMODE_EXCEPTION);
    echo ("Conectado 2AB- O MELHOR");
} cath (PDOException $e) {
    echo 'Erro: ' . $e->getMessage();
    echo ("Não conectado");
}
?>