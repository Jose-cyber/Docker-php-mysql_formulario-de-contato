<?php
//recebe dados do html 
$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$mensagem = $_POST['mensagem'];


// variaveis que armazenam a conexão com o banco de dados 
$servername = "db_mysql";
$database = "FORM_SITE";
$username = "root";
$password = "123abc.";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}
    //  echo "conectado ao banco de dados";

// cria a tabela de contato
$create_table = "CREATE TABLE IF NOT EXISTS formulario (id INT(11) AUTO_INCREMENT, nome VARCHAR(255), email VARCHAR(255), telefone VARCHAR(255), mensagem VARCHAR(255), PRIMARY KEY (id));";

if (mysqli_query($conn, $create_table)){
    //  echo "tabela criada com sucesso!";
}
else {
       echo "Error: " . $create_table . "<br>" . mysqli_error($conn);
}


$sql = "INSERT INTO FORM_SITE.formulario (nome, telefone, email, mensagem) VALUES ('$nome', '$telefone', '$email', '$mensagem')";
      if (mysqli_query($conn, $sql)) {
            header('location: index.html');
           // echo "New record created successfully";
      } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
      mysqli_close($conn);
?>
