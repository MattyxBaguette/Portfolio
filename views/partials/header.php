<?php
$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$highlighted = parse_url($actual_link);

$pathArray = explode('/', $highlighted['path']);
$currentPage = $pathArray[count($pathArray)-1];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= !empty($title) ? $title : '' ?></title>
    <link rel="icon" href="./assets/images/Logo.png">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,200i,400,600i|Rakkas&display=swap" rel="stylesheet">
<!--    <link rel="stylesheet" href="--><?//= URL ?><!--/assets/reset.css">-->
    <link rel="stylesheet" href="<?= URL ?>/assets/style.css">
</head>
<body>

<header>
    <div class="custom-padding">
        <nav>
            <ol>
                <div class="logo">
                    <a href="<?= URL ?>"><img src="./assets/images/Logo.svg"></a>
                </div>
                <div class="menu">
                    <li><a class="<?= $currentPage == 'projects' ? 'highlighted' : '' ?>" href="<?= URL ?>/work">Work</a></li>
                    <li><a class="<?= $currentPage == 'watch' ? 'highlighted' : '' ?>" href="<?= URL ?>/about">About me</a></li>
                    <li><a href="mailto:mathis.gadie@hetic.net">Contact</a></li>
                </div>
            </ol>
        </nav>
    </div>
</header>

<div class="container">