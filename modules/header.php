<?php
    $currentFolder = dirname(__FILE__);
    require_once($currentFolder.'/../functions.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title><?php // title goes here. ?></title>
        <link rel="stylesheet" href="vendor/foundation/foundation.min.css">
    </head>
    <body>
        <header>
            <div class="row">
                <div class="column">
                    <?php
                        $title = getContent('title');
                    ?>
                    <h1><?= $title; ?></h1>
                    <p><?php // description goes here ?></p>
                </div>
            </div>
        </header>
        <nav>
            <div class="row">
                <div class="column">
                    <ul>
                        <li><a href="index.php">Forside</a></li>
                        <li><a href="form.php">Skjema</a></li>
                    </ul>
                </div>
            </div>
        </nav>
