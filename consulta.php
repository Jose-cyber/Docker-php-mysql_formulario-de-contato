<?php
// script de conexão com o banco de dados
$host = "db_mysql";
$user = "root";
$password = "123abc.";
$database = "FORM_SITE";

//script que tentara busar no banco de dados as informações que foram iseridas pelo formulario
$conn = mysqli_connect($host, $user, $password, $database);
// Check connection
if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}
    //  echo "conectado ao banco de dados";

// cria a tabela de contato
$query_formulario = "SELECT*FROM formulario;";
foreach(mysqli_query($conn, $query_formulario) as $row) {
    echo "<li>" . $row['nome']." ". $row['telefone']." " .$row['email']." ". $row['mensagem'] ."</li>";
    echo "</ol>";
}
