<form enctype="multipart/form-data" action="updateArquivo.php" method="POST">
    <!-- MAX_FILE_SIZE deve preceder o campo input -->
    <!-- O Nome do elemento input determina o nome da array $_FILES -->
    Enviar esse arquivo: <input name="userfile" type="file" />
    <input type="submit" value="Enviar arquivo" />
</form>

