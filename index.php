<?php

require_once "contents.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST["loginSubmit"] == 'Envoyer') {
    require_once 'check.php';
}
require_once "accueil.php";