<?php
function openConnection()
{
    $pdo = new PDO("mysql:host=localhost;dbname=becode", "becode", "test");

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

    // Why we do this here
    return $pdo;
}