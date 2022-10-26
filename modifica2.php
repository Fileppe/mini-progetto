<?php
include 'connection.php';

$id = $_POST['id'];
$nome = $_POST['nome'];
$cognome = $_POST['cognome'];
$mail = $_POST['mail'];

$query = "UPDATE utenti SET nome='$nome', cognome='$cognome', mail='$mail' WHERE id=$id";
$result = mysqli_query($connessione, $query);

if($result){
    header('Location: gestione_contatti.php');
}