<?php
require_once "verificar_login.php";

session_start();
session_destroy();

header("Location: index.php");