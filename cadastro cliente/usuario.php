<html>
<head>
<title>Cadastro do aluno/title>
</head>
<body>
<?php
$host-"localhost";
$user="root";
$pass="";
$banco="Cadastro_aluno";
$conexao=mysql_connect($host,$user,pass) or die (msql_error());
mysql_select_db($banco) or die (mysql_error());
?>
<?php
$Nome_completo=$_POST['nome completo'];
$data_nasc=$_POST['data de nascimento'];
$escolaridade=$_POST['escolaridade'];
$endereço=$_POST['endereço'];
$telefone=$_POST['telefone'];
$genero=$_POST['genero'];
$email=$_POST['email']
$sql=mysql_query ("insert into cadastro_aluno(nome completo,data de nascimento,escolaridade,endereço,telefone,genero,email)
values($Nome_completo,$data_nasc,$escolaridade,$endereço,$telefone,$genero,$email)");
?>
form name="searchform" method="post" action="cadastro aluno">
Visualizar livro :<input type="text" name="buscar"/> <input type="submit" value="verificar"/>
</body>
</html>