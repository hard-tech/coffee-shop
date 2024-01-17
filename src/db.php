<?php

try {
    $dsn = 'mysql:host=coffee-time-api.new-webtech.fr;dbname=coffee_shop;port=3306';
    $db = new PDO($dsn, 'ddev', 'ddev');
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
}
catch (Exception $e) {
    die('Impossible de se connecter à la DB.');
}
