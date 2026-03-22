<?php
    require_once(__DIR__ . '/../config.php')
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?= BASE_URL ?>/css/output.css">
</head>

<body class="min-h-screen flex flex-col">

    <header class="bg-indigo-700 flex flex-col pt-5 text-amber-50">
        <h1 class="text-2xl md:text-4xl text-center font-bold mb-5">Ropa del Closet</h1>
        <p class="text-base md:text-2xl text-center font-medium mb-5 px-4 md:px-0">Aqui encontrarás todo el listado de ropa, que incluye: playeras, sudaderas, chamarras, pantalones, suéteres</p>
        <nav class="bg-blue-950 p-4 md:p-6">
            <button id="menu-toggle" class="md:hidden text-amber-50 text-2xl w-full text-center">Menú</button>
            <ul id="menu" class="hidden md:flex flex-col md:flex-row gap-2 md:gap-3 text-sm md:text-lg mt-3 md:mt-0 items-center md:items-start">
                <li><a href="<?= BASE_URL ?>/" class="hover:text-green-400 block py-1">Casa</a></li>
                <li><a href="<?= BASE_URL ?>/pages/playeras.php" class="hover:text-green-400 block py-1">Playeras</a></li>
                <li><a href="<?= BASE_URL ?>/pages/sudaderas.php" class="hover:text-green-400 block py-1">Sudaderas</a></li>
                <li><a href="<?= BASE_URL ?>/pages/chamarras.php" class="hover:text-green-400 block py-1">Chamarras</a></li>
                <li><a href="<?= BASE_URL ?>/pages/about.php" class="hover:text-green-400 block py-1">Acerca de...</a></li>
            </ul>
        </nav>
    </header>

    