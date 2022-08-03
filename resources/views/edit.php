<?php

require_once('layouts/app.php');
?>

<body>
    <?php 

    require_once('layouts/header.php');
    ?>

    <div class="container" id="view-contact-container">
        <?php require_once('layouts/back-button.html'); ?>
        <h1 id="main-title">Editar contato</h1>
        <form action="<?= $BASE_URL?>config/process.php" method="POST" class="create-form">
            <input type="hidden" name="type" value="edit">
            <input type="hidden" name="id" value="<?= $contact['id'] ?>">
            <div class="form-group">
                <label for="name">Nome do contato:</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Digite o nome" required value="<?= $contact['name'] ?>">
            </div>
            <div class="form-group">
                <label for="phone">Telefone do contato:</label>
                <input type="text" class="form-control" id="phone" name="phone" placeholder="Digite o telefone" required value="<?= $contact['phone'] ?>">
            </div>
            <div class="form-group">
                <label for="observations">Observações:</label>
                <textarea type="text" class="form-control" id="observations" name="observations" placeholder="Insira as observações" rows="3"><?= $contact['observations'] ?></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Atualizar</button>
        </form>
    </div>
</body>
</html>
