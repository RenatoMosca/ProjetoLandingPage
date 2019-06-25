<?php

$dsn = "mysql:host=localhost;dbname=escola;port=3306";
$user = "root";
$pass = "";

$conexao = new PDO($dsn,$user,$pass);

// diferença entre query e prepare
$query = $conexao->query('select * from ator where ultimo_nome = "Mosca"');
// $query = $conexao->prepare('select * from ator where ultimo_nome = "Mosca"');
// $query->execute();

// $dataAtual = date('y-m-d');
// $query = $conexao->prepare('insert into ator (primeiro_nome,ultimo_nome,ultima_atualizacao) values ("Renato","Mosca","'.$dataAtual.'")');
// $query->execute();

$resultado = $query->fetchAll(PDO::FETCH_ASSOC);

foreach ($resultado as $ator) {
    echo "<h5>".$ator['primeiro_nome']." ".$ator['ultimo_nome']."<h5>";
}
