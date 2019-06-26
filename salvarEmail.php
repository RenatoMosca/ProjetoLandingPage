<?php

include "openDB.php";

$query = $conexao->prepare('insert into interessados (email) values ("'.$_POST['email'].'")');
$resultado = $query->execute();

if ($resultado){
    echo "<h1>Cadastro concluído</h1>";
}else {
    echo "<h1>Erro ao cadastrar</h1>";
}

header('Location: captura.php?msg=1'); 

