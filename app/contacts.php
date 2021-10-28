<?php
if (!isset($_POST['submit'])) {
  header("location: ../public/auth.php?typefailed=type");
  exit();
}

session_start();
if (!isset($_SESSION['id'])) {
  header("location: ../public/auth.php?typefailed=auth");
  exit();
}

require_once '../app/sql.php';
$db = connect();
setContact($db,trim($_POST['submit']));
$db = null;

header("location: ../public/auth.php?typefailed=none");
