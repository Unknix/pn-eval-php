<?php
session_start();
require_once('../model/model.php');

if (!isset($_POST['username']) || empty($_POST['username'])) {
    header('Location : home.php');
    exit();
}

$_SESSION['username'] = $_POST['username'];

require_once('../model/model.php');
$model =  new Model();
$events = $model->getEvents();

require_once('../view/listView.php');