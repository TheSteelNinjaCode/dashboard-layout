<?php

use Lib\MainLayout;
use Lib\Request;

MainLayout::$title = !empty(MainLayout::$title) ? MainLayout::$title : 'Create Prisma PHP App';
MainLayout::$description = !empty(MainLayout::$description) ? MainLayout::$description : 'Generated by create Prisma PHP App';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?= MainLayout::outputMetadata(); ?>
    <link rel="icon" href="<?= Request::baseUrl; ?>/favicon.ico" type="image/x-icon" sizes="16x16">
    <link href="<?= Request::baseUrl; ?>/css/styles.css" rel="stylesheet"> 
    <script src="<?= Request::baseUrl; ?>/js/json5.min.js"></script>
    <script src="<?= Request::baseUrl; ?>/js/index.js"></script>
    <!-- Dynamic Head -->
    <?= MainLayout::outputHeadScripts() ?>
</head>

<body>
    <?= MainLayout::$children; ?>
    <!-- Dynamic Footer -->
    <?= MainLayout::outputFooterScripts(); ?>
</body>

</html>