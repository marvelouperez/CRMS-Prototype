<?php
session_start();

//Database
require_once $_SERVER['DOCUMENT_ROOT'] . '/bootstrap/database/connection.php';

//Controller
require_once $_SERVER['DOCUMENT_ROOT'] . '/app/controllers/UserController.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/app/controllers/LibraryController.php';

//Model
require_once $_SERVER['DOCUMENT_ROOT'] . '/app/models/UserModel.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/app/models/LibraryModel.php';

//Objects
$user = new UserController($dbConn);
$paper = new LibraryController($dbConn);


