<?php
if (!isset($page_title)) { $page_title = "Portfolio Web"; }
if (!isset($extra_css)) { $extra_css = ""; }
?>
<!DOCTYPE html>
<html lang="en" data-theme="dark">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?= $page_title ?></title>
    <link rel="shortcut icon" href="assets/icons/favicon.svg" type="image/x-icon">    
    <!-- Estilos extra para la página -->
    <?= $extra_css ?>
    <link rel="stylesheet" href="assets/css/main.css">
    <script src="https://unpkg.com/i18next/i18next.min.js"></script>
    <script src="https://unpkg.com/i18next-http-backend/i18nextHttpBackend.min.js"></script>
    <script src="https://unpkg.com/i18next-http-backend@1.4.3/i18nextHttpBackend.min.js"></script>
</head>
<body>
