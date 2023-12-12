<?php

require_once "../../controllers/ProdutoController.php";
$ProdutoController = new ProdutoController();

if(isset($_POST) && count($_POST) > 0) {
    
    $c = new Produto();
    $c->setId($_POST['campoId']);
    $c->setNome($_POST['campoNome']);
    $c->setValor($_POST['campoValor']);
    $c->setCodigo($_POST['campoCodigo']);
    $c->setQuantidade($_POST['campoQuantidade']);
    $c->setDescricao($_POST['campoDescricao']);
    $c->setCategoria_id($_POST['campoCategoriaId']);

    $rs = $ProdutoController->edit($c);

    if($rs) {
        header("location: ./");
        exit();
    }
} else if(isset($_GET['id']) && !empty($_GET['id'])) {
    $dado = $ProdutoController->findId($_GET['id']);

    require_once "../../controllers/CategoriaController.php";
    $CategoriaController = new CategoriaController();
    $categorias = $CategoriaController->read();
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
                <h3>Cadastro de produtos</h3>
                <form action="" method="post">
                    <input type="hidden" name="campoId" value="<?= $dado->getId(); ?>">
                    <div class="mb-3">
                        <label for="idNome" class="form-label">Nome:</label>
                        <input type="text" class="form-control" name="campoNome" 
                            id="idNome" placeholder="Seu nome completo"
                            value="<?= $dado->getNome(); ?>">
                    </div>
                    <div class="mb-3">
                        <label for="idValor" class="form-label">Valor:</label>
                        <input type="text" class="form-control" name="campoValor" 
                        id="idValor" placeholder=""
                        value="<?= $dado->getValor(); ?>">
                    </div>
                    <div class="mb-3">
                        <label for="idCodigo" class="form-label">Código:</label>
                        <input type="text" class="form-control" name="campoCodigo" 
                        id="idCodigo" placeholder=""
                        value="<?= $dado->getCodigo(); ?>">
                    </div>
                    <div class="mb-3">
                        <label for="idQuantidade" class="form-label">Quantidade:</label>
                        <input type="number" class="form-control" name="campoQuantidade" 
                        id="idQuantidade" placeholder=""
                        value="<?= $dado->getQuantidade(); ?>">
                    </div>                    
                    <div class="mt-3 mb-3">
                        <label for="idDescricao" class="form-label">Descrição</label>
                        <textarea class="form-control" id="idDescricao" 
                        name="campoDescricao"><?= $dado->getDescricao(); ?></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="idCategoriaId" class="form-label">Categoria:</label>
                        <select name="campoCategoriaId" id="idCategoriaId" class="form-control" required>
                            <?php foreach ($categorias as $cat) { ?>
                                <option value="<?= $cat->getId(); ?>"
                                <?php 
                                if($cat->getId() == $dado->getCategoria_id()) {
                                    echo "selected"; 
                                } 
                                ?>
                                ><?= $cat->getNome(); ?></option>
                            <?php } ?>
                        </select>
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