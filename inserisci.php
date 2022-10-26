<?php
include 'connection.php';
$nome = $_POST['nome'];
$cognome = $_POST['cognome'];
$mail = $_POST['mail'];
$password = $_POST['password'];

$query = "INSERT INTO utenti (nome, cognome, mail, password) VALUES ('$nome', '$cognome', '$mail', '$password')";
$result = mysqli_query($connessione, $query);

if($result){
    header('Location: gestione_contatti.php');
}