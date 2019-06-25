<?php

include "openDB.php";

$query = $conexao->prepare('insert into interessados (email) values ("'.$_POST['email'].'")');
$query->execute();

header('Location: captura.php'); 