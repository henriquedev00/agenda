<?php

require_once('layouts/app.php');
?>

<body>
    <?php 
    
    require_once('layouts/header.php');
    ?>

    <div class="container" id="view-contact-container">
        <?php require_once('layouts/back-button.html'); ?>
        <h1 id="main-title"><?= $contact['name'] ?></h1>
        <p class="bold">Telefone:</p>
        <p><?= $contact['phone'] ?></p>
        <p class="bold">Observações:</p>
        <p><?= $contact['observations'] ?></p>
    </div>
</body>
</html>
