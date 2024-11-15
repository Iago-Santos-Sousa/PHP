<?php
    include_once("./header.php");
?>

<div class="container">
    <?php include_once("backbtn.php"); ?>
</div>

<div class="container">
    <h1 id="main-title">Criar Contato</h1>

    <form id="create-form" action="<?=$BASE_URL?>/../config/processamento.php" method="POST">
        <input type="hidden" name="type" value="create">

        <div class="form-group">
            <label for="name">Nome do contato:</label>
            <input type="text" class="form-control" id="name" name="nome"
            placeholder="digite o nome" required>
        </div>

        <div class="form-group">
            <label for="fone">Telefone de contato:</label>
            <input type="text" class="form-control" id="telefone" name="fone"
            placeholder="digite o telefone" required>
        </div>

        <div class="form-group">
            <label for="observacao">Observação:</label>
            <textarea type="text" class="form-control" id="observacao" name="observacao"
            placeholder="digite observação" rows="3">
            </textarea>
        </div>
    <br>

    <button type="submit" class="btn btn-primary" name="type" value="create">Cadastrar</button>
    </form>
</div>

<?php

    include_once("footer.php");
?>