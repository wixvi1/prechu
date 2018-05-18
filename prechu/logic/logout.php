<?php
require_once 'db.php';

$_SESSION[] = '';
session_destroy();
header("Location: ../home.php");