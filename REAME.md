# Formulario de contato usando Docker + PHP-5.6 + Mysql 

Esse é um pequeno projeto onde consiste em um formulario para contato usando 2 containers docker onde um deles roda um web server, e outro container com um banco de dados mysql.

Os dados do salvos ou alterados no mysql são salvos em um volume local para que ao finzalizar o container e subir novamente os dados continuem disponiveis, para esse projeto eu utilizei a versão 5.6 do PHP, e á versão 5.7 do mysql. para conexão com o banco de dados estou utilizando a biblioteca <a href="https://www.php.net/manual/pt_BR/function.mysqli-connect.php">mysqli_connect</a>.

## Comandos necessarios:

**$ docker-compose build**

**$ docker-compose up -d**

## Aplicação em funcionamento:
Realizando o envio e informações.<br>

<img height="200" width="500" alt="Jose-cyber" left="0" src="https://i.ibb.co/5YHRqyB/image.png">


Realizando consulta de informações enviadas.

<img height="200" width="500" alt="Jose-cyber" left="0" src="https://i.ibb.co/LNYHsyb/image.png">