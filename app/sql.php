<?php
error_reporting(E_ALL);
ini_set("display_errors", 2);

function connect() {
  $db = null;
  try {
    $db = new PDO("sqlite:".__DIR__."/../main.db");
  } catch (PDOException $e) {
    echo "Error!: " . $e->getMessage() . "<br/>";
    exit();
  }

  return $db;
}

function getArts($db) {

    $stmt = $db->prepare("SELECT c.id, c.galleryimg, c.title, c.class, k.name FROM collection c LEFT JOIN creator k ON c.creatorId = k.id;"); 
    $stmt->execute(); 
    $rows = $stmt->fetchall();

    return $rows;
}

function getArt($db, $id) {

    $stmt = $db->prepare("SELECT c.title, c.description, c.galleryimg, c.heroImg, k.name, k.image FROM collection c LEFT JOIN creator k ON c.creatorId = k.id WHERE c.id = ? ;"); 
    $stmt->execute([$id]); 
    $row = $stmt->fetch();

    return $row;
}

function addContact($db, $values) {
    $stmt = $db->prepare("INSERT INTO contact(name,email,phonenumber) values (?,?,?)"); 
    $stmt->execute($values); 
    $id = $db->lastInsertId();
    
    return $id;
}

function getLogin($db, $username) {
    $stmt = $db->prepare("SELECT id,user,pass FROM admin WHERE user = ? ;"); 
    $stmt->execute([$username]); 
    $row = $stmt->fetch();

    return $row;
}

function getContacts($db) {
  $stmt = $db->prepare("SELECT * FROM contact;"); 
  $stmt->execute(); 
  $row = $stmt->fetchall();

  return $row;
}

function getArtsList($db) {
  $row = [];

  $stmt = $db->prepare("SELECT id,title, class FROM collection;"); 
  $stmt->execute(); 
  $row[] = $stmt->fetchall();

  $stmt = $db->prepare("SELECT id,name FROM creator;"); 
  $stmt->execute(); 
  $row[] = $stmt->fetchall();

  return $row;
}