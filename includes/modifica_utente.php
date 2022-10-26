<div class="container">
                <div class="row">
                    <h3>Modifica utente</h3>
                    <div class="col-6">
                        <form action="modifica2.php" method="POST">
                            <div class="form-group">
                                <label for="nome">Nome</label>
                                <input type="text" name="nome" id="nome" class="form-control" value="<?= $nome ?>" required>
                            </div>
                            <div class="form-group">

                                <input type="text" name="id" id="id" class="form-control" value="<?= $id ?>" hidden>
                            </div>
                            <div class="form-group">
                                <label for="nome">Cognome</label>
                                <input type="text" name="cognome" id="cognome" class="form-control" value="<?= $cognome ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="nome">Mail</label>
                                <input type="text" name="mail" id="mail" class="form-control" value="<?= $mail ?>" required>
                            </div>
                            <input class="btn btn-success mt-3" type="submit" value="Modifica" name="update">
                        </form>
                    </div>
                </div>
            </div>