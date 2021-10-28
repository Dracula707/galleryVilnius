<?php
if (!isset($_POST['submit-add'])) {
  header("location: ../public/auth.php?form=failed");
  exit();
}

$erros = [];
$uploadDirectory = __DIR__ . "/../uploads/";
$fileExtensionsAllowed = ['jpeg','jpg','png'];

$fileName = $_FILES['add-file-gallery']['name'];
$fileSize = $_FILES['add-file-gallery']['size'];
$fileTmpName  = $_FILES['add-file-gallery']['tmp_name'];
$fileType = $_FILES['add-file-gallery']['type'];

$fileExtension = strtolower(end(explode('.',$fileName)));
$uploadPath =  $uploadDirectory . basename($fileName); 

if (! in_array($fileExtension,$fileExtensionsAllowed)) {
  $errors[] = "This file extension is not allowed. Please upload a JPEG or PNG file";
}

if ($fileSize > 4000000) {
  $errors[] = "File exceeds maximum size (4MB)";
}

if (empty($errors)) {
  $didUpload = move_uploaded_file($fileTmpName, $uploadPath);

  if ($didUpload) {
    echo "The file " . basename($fileName) . " has been uploaded";
    header("location: ../auth.php?form=success");
    exit();
  } else {
    echo "An error occurred. Please contact the administrator.";
    header("location: ../public/auth.php?form=admin");
    exit();
  }
} else {
  header("location: ../public/auth.php?form=error");
  exit();
}