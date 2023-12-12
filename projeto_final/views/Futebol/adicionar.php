<?php
require_once "../../controllers/FutebolController.php";
$FutebolController = new FutebolController();
$Futebol = $FutebolController->read();

if(isset($_POST) && count($_POST) > 0) {
    require_once "../../controllers/FutebolController.php";

    $c = new Futebol();

    $c->setNomeTime($_POST['campoNomeTime']);
    $c->setFundacao($_POST['campoFundacao']);
    $c->setNomeJogador($_POST['campoNomeJogador']);
    $c->setTitulosLiga($_POST['campoTitulosLiga']);
    $c->setTitulosContinentais($_POST['campoTitulosContinentais']);
    $c->setMaiorJogador($_POST['campoMaiorJogador']);
    $c->setMaiorTitulo($_POST['campoMaiorTitulo']);

    $FutebolController = new FutebolController();

    $rs = $FutebolController->add($c);

    if($rs) {
        header("location: ./");
        exit();
    }
}

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "../includes/head.php"; ?>
</head>

<body>
    <div class="container">
        <div class="row mt-3">
            <?php include "../includes/menu.php"; ?>
            <div class="col-9">
                <h3>Cadastro de Futebol</h3>
                <form action="" method="post">
                    <div class="mb-3">
                        <label for="idNomeTime" class="form-label">Nome:</label>
                        <input type="text" class="form-control" name="campoNomeTime" id="idNomeTime" placeholder="Nome do seu time de coração">
                    </div>
                    <div class="mb-3">
                        <label for="idFundacao" class="form-label">Fundação:</label>
                        <input type="date" class="form-control" name="campoFundacao" id="idFundacao" placeholder="Qual a data de fundação do seu time">
                    </div>
                    <div class="mb-3">
                        <label for="idNomeJogador" class="form-label">Nome do jogador:</label>
                        <input type="text" class="form-control" name="campoNomeJogador" id="idNomeJogador" placeholder="Digite o nome do seu jogador preferido">
                    </div>
                    <div class="mb-3">
                        <label for="idTitulosLiga" class="form-label">Titulos de Liga:</label>
                        <input type="number" class="form-control" name="campoTitulosLiga" id="idTitulosLiga" placeholder="Quantos titulos de liga possui seu time">
                    </div>                    
                    <div class="mt-3">
                        <label for="idTitulosContinentais" class="form-label">Titulos Continentais:</label>
                        <input type="number" class="form-control" name="campoTitulosContinentais" id="idTitulosContinentais" placeholder="QUantos titulos continentais possui seu time">
                    </div>
                    <div class="mb-3">
                        <label for="idMaiorJogador" class="form-label">Maior Jogador:</label>
                        <input type="text" class="form-control" name="campoMaiorJogador" id="idMaiorJogador" placeholder="Qual o maior jogador da historia do seu time">
                    </div>        
                    <div class="mb-3">
                        <label for="idMaiorTitulo" class="form-label">Maior Titulo:</label>
                        <input type="text" class="form-control" name="campoMaiorTitulo" id="idMaiorTitulo" placeholder="Qual o maior titulo da historia do seu time">
                    </div>

                    
                    <button type="submit" class="btn btn-success">Gravar</button>
                    <a href="./" class="btn btn-primary">Voltar</a>
                </form>
            </div>
        </div>
    </div>
    <?php include "../includes/js.php"; ?>
</body>

</html>