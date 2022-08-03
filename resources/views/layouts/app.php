<?php

include_once('../../config/url.php');
include_once('../../config/process.php');

if(isset($_SESSION['msg'])) {
    $printMsg = $_SESSION['msg'];
    $_SESSION['msg'] = '';
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="<?= $BASE_URL?>resources/css/bootstrap.min.css">

    <!-- BOOTSTRAP -->
    <script src="<?= $BASE_URL ?>resources/js/jquery-3.6.0.min.js" defer></script>
    <script src="<?= $BASE_URL ?>resources/js/bootstrap.min.js" defer></script>

    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <!-- CSS -->
    <link rel="stylesheet" href="<?= $BASE_URL?>resources/css/styles.css">

    <title>Agenda de contatos</title>
</head>
