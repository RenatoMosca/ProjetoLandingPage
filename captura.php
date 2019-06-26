<?php 
    include "openDB.php";

    $query = $conexao->query('select count(*) vcont from interessados');
    $resultado = $query->fetchAll(PDO::FETCH_ASSOC);
    foreach ($resultado as $total) {
        $total['vcont'];
    }    
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Landing</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link type="text/css" rel="stylesheet" media="screen" href="css/estilos.css" />
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">                
                <h2>Criação de site EXPRESS</h2><br>
                <h4>Que tal um site novo em apenas 1 semana?</h4><br><br>
                <p>Conte conosco para avaliar seu projeto!</p>
                <p>Oferecemos:</p>
                <ul>
                    <li>Registro de domínio</li>
                    <li>Protocolo HTTPS (Segurança)</li>
                    <li>Design responsivo (pode ser usado em smartphones, tablets e desktops)</li>
                    <li>Imagens incríveis</li>
                    <li>3 contas de e-mail (suaconta@seudominio.com.br)</li>
                </ul>                
            </div>  
        
            
            <div class="col-lg-5">
                <div class="shadow-lg p-3 mb-5 bg-transparent rounded">
                    <form action="salvarEmail.php" method="post" enctype="multipart/form-data">
                    <h6>Digite seu e-mail abaixo e receba uma proposta detalhada em menos de 1 minuto!</h6>                    
                    
                    <div class="form-group">                
                        <input type="email" name="email" id="email" placeholder="digite seu e-mail aqui" maxlength="100" size="40">
                    </div>
                    
                    <button class="btn btn-success" type="submit">Enviar</button>
                        
                    </form><br><br><br>
                    <h6>Veja quantas empresas estão cotando conosco:</h6>
                    <button type="button" class="btn btn-primary">
                    Propostas enviadas hoje! <span class="badge badge-light"><?= $total['vcont']; ?></span>
                    <span class="sr-only">unread messages</span>
                    </button>
                    <?php
                    if (isset($_GET['msg'])){                    
                    ?>
                        <div>
                            <h3>Obrigado! - Aguarde nosso contato!</h3>
                        </div>
                    <?php
                    }
                    ?>
                </div>
                
            </div>

            <div class="col_lg-1">
                <span></span>
            </div>
        </div>
    </div>
</body>
</html>