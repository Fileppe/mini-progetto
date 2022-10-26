<?php include 'includes/connection.php'; 
session_start();

if(isset($_POST['login'])){


$mail = $_POST['mail'];
$password = $_POST['password'];
$mail = mysqli_real_escape_string($connessione, $mail);
$password = mysqli_real_escape_string($connessione, $password);

$query = "SELECT * FROM utenti WHERE mail = '$mail' ";
$result = mysqli_query($connessione, $query);
if(!$result){
    die('RICHIESTA FALLITA' . mysqli_error($connessione));
}
while($row = mysqli_fetch_array($result)){
    $id = $row['id'];
    $nomedb = $row['nome'];
    $maildb = $row['mail'];
    $passworddb = $row['password'];
    $ruolodb = $row['ruolo'];
}
if($mail === $maildb && $password === $passworddb){
    $_SESSION['utente'] = $nomedb;
    $_SESSION['ruolo'] = $ruolodb;
    header('Location: area_riservata.php');
}else{
    header('Location: index.php');
}
}
?>