<?php include 'includes/connection.php';
session_start();




?>

<!doctype html>
<html lang="it">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gestione Utenti</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.0/font/bootstrap-icons.css">
</head>
<style>
    body {
        background-color: azure;
    }
</style>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-6">
                <form action="inserisci.php" method="post">
                    <h3>Aggiungi utente</h3>
                    <div class="form-group">
                        <input type="text" name="id" id="id" class="form-control" hidden>
                    </div>
                    <div class="form-group">
                        <label for="nome">Nome</label>
                        <input type="text" name="nome" id="nome" class="form-control" placeholder="Inserisci nome utente" required>
                    </div>
                    <div class="form-group">
                        <label for="cognome">Cognome</label>
                        <input type="text" name="cognome" id="cognome" class="form-control" placeholder="Inserisci cognome utente" required>
                    </div>
                    <div class="form-group">
                        <label for="mail">Mail</label>
                        <input type="mail" name="mail" id="mail" class="form-control" placeholder="Inserisci mail utente" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" class="form-control" placeholder="Inserisci password utente" required>
                    </div>
                    <input class="btn btn-success mt-3" type="submit" value="Aggiungi">
                </form>
                <hr>


            </div>

            <div class="col-6 mt-2">
                <table class="table table-hover">
                    <thead class="bg-success">
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>Cognome</th>
                            <th class="text-center">Email</th>
                            <th>Password</th>
                            <th class="text-center">Ruolo</th>
                            <th>Azioni</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $query = "SELECT * FROM utenti";
                        $result = mysqli_query($connessione, $query);
                        while ($row = mysqli_fetch_array($result)) {
                            $id = $row['id'];
                            $nome = $row['nome'];
                            $cognome = $row['cognome'];
                            $mail = $row['mail'];
                            $password = $row['password'];
                            $ruolo = $row['ruolo'];
                            echo "<tr>
                                <td>$id</td>
                                <td>$nome</td>
                                <td>$cognome</td>
                                <td>$mail</td>
                                <td>$password</td>
                                <td>$ruolo</td><td><a href='elimina.php?id=$id' class='btn btn-danger'><i class='bi bi-trash'></i></a> &nbsp; <a href='gestione_contatti.php?modifica=$id' class='btn btn-info'><i class='bi bi-pen'></i></a></td>
                                
                                </tr>";
                        ?>
                    </tbody>
                <?php } ?>
                </table>
            </div>
        </div>
    </div>

    <?php
    if (isset($_GET['modifica'])) {
        $id = $_GET['modifica'];

        $query = "SELECT * FROM utenti WHERE id=$id";
        $result = mysqli_query($connessione, $query);
        while ($row = mysqli_fetch_assoc($result)) {
            $id = $row['id'];
            $nome = $row['nome'];
            $cognome = $row['cognome'];
            $mail = $row['mail'];
    ?>
            <?php include 'includes/modifica_utente.php'; ?>
    <?php }
    }
    ?>








</body>

</html>