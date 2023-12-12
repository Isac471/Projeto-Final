<?php

require_once "../../controllers/FutebolController.php";
$FutebolController = new FutebolController();

if(isset($_POST) && count($_POST) > 0) {
    
    $c = new Futebol();
    $c->setId($_GET['id']);
    $c->setNomeTime($_POST['campoNomeTime']);
    $c->setFundacao($_POST['campoFundacao']);
    $c->setNomeJogador($_POST['campoNomeJogador']);
    $c->setTitulosLiga($_POST['campoTitulosLiga']);
    $c->setTitulosContinentais($_POST['campoTitulosContinentais']);
    $c->setMaiorJogador($_POST['campoMaiorJogador']);
    $c->setMaiorTitulo($_POST['campoMaiorTitulo']);

    $rs = $FutebolController->edit($c);

    if($rs) {
        header("location: ./");
        exit();
    }
} else if(isset($_GET['id']) && !empty($_GET['id'])) {
    $dado = $FutebolController->findId($_GET['id']);
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
                    <input type="hidden" name="campoId" value="<?= $dado->getId(); ?>">
                    <div class="mb-3">
                        <label for="idNomeTime" class="form-label">Nome:</label>
                        <input type="text" class="form-control" name="campoNomeTime" id="idNomeTime" placeholder="Qual o nome do seu time de coração" value="<?= $dado->getNomeTime(); ?>">
                    </div>
                    <div class="mb-3">
                        <label for="idFundacao" class="form-label">Fundacao:</label>
                        <input type="text" class="form-control" name="campoFundacao" id="idFundacao" placeholder="Qual a data de fundacao do seu time" value="<?= $dado->getFundacao(); ?>">
                    </div>
                    <div class="mb-3">
                        <label for="idNomeJogador" class="form-label">Nome Jogador:</label>
                        <input type="text" class="form-control" name="campoNomeJogador" id="idNomeJogador" placeholder="Qual o nome do seu jogador preferido" value="<?= $dado->getNomeJogador(); ?>">
                    </div>
                    <div class="mb-3">
                        <label for="idTitulosLiga" class="form-label">Titulos Liga:</label>
                        <input type="number" class="form-control" name="campoTitulosLiga" id="idTitulosLiga" placeholder="Quantos titulos de liga seu time possui" value="<?= $dado->getTitulosLiga(); ?>">
                    </div>
                    <div class="mb-3">
                        <label for="idTitulosContinentais" class="form-label">Titulos Continentais:</label>
                        <input type="number" class="form-control" name="campoTitulosContinentais" id="idTitulosContinentais" placeholder="Quantos titulos continentais seu time possui" value="<?= $dado->getTitulosContinentais(); ?>">
                    </div> 
                    <div class="mb-3">
                        <label for="idMaiorJogador" class="form-label">Maior Jogador:</label>
                        <input type="text" class="form-control" name="campoMaiorJogador" id="idMaiorJogador" placeholder="Qual maior jogador da historia do seu time" value="<?= $dado->getMaiorJogador(); ?>">
                    </div> 
                    <div class="mb-3">
                        <label for="idMaiorTitulo" class="form-label">Maior Ttulo:</label>
                        <input type="text" class="form-control" name="campoMaiorTitulo" id="idMaiorTitulo" placeholder="Qual maior titulo da historia do seu time" value="<?= $dado->getMaiorTitulo(); ?>">
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