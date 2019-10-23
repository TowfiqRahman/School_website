<?php 
require 'core.inc.php';

session_unset();
session_destroy();

header('Location: index.php');
?>