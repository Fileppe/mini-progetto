<?php
include 'connection.php';
$id = $_GET['id'];

$query = "DELETE  FROM utenti WHERE id='$id'";
$result = mysqli_query($connessione, $query);

if($result){
    header('Location: gestione_contatti.php');
}