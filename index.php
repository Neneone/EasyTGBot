<?php
include 'TGBot.php';
if(!isset($_GET['fpam']) || !isset($_GET['token'])) die('Missing parameters.');
$TGBot = new TGBot(file_get_contents("php://input"), 'FPAM', $_GET['fpam'], $_GET['token']);
$TGBot->SecTest();
include 'conf.php';
include 'mysql.php';
include 'postgres.php';
include 'commands.php';
