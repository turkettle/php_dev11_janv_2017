<?php
/**
 * Created by PhpStorm.
 * User: aston
 * Date: 19/01/17
 * Time: 16:05
 */

$data = explode('_', $_GET['info']);
$id_book = $data[0];
$id_user = $data[1];

// Connection à la BDD.
$db_connection = new PDO('mysql:host=mysql.server.com;dbname=library', 'acme', 'paris');

$query = $db_connection->prepare('
  INSERT INTO reservation
  (id_book, id_user, created)
  VALUES (:id_book, :id_user, NOW())');
$query->bindValue(':id_book', $id_book);
$query->bindValue(':id_user', $id_user);

$state = $query->execute();

if ($state) {
    print '<div class="alert alert-success" role="alert">Votre réservation a été prise en compte par nos services.</div>';
} else {
    print '<div class="alert alert-danger" role="alert">Une erreur est apparue.</div>';
}



