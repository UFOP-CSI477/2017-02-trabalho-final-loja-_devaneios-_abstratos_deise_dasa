<?php
// session_start inicia a sessão
session_start();
// as variáveis login e senha recebem os dados digitados na página anterior
$login = $_POST["email"];
$senha = $_POST["senha"];

$db = new PDO('mysql:host=localhost;dbname=devaneiosLoja','devaneiosloja', '123456');



// A variavel $result pega as varias $login e $senha, faz uma pesquisa na tabela de usuarios
//$db ->query("UPDATE cliente SET nome = 'Lucas Ramos' WHERE id= 3;");
$result = $db->query("SELECT * FROM cliente WHERE email = '$login' AND SENHA = '$senha'");

//checa result se maior que 0 quer dizer que deu certo
if(mysql_num_rows ($result) > 0 ) {
  $_SESSION['login'] = $login;
  $_SESSION['senha'] = $senha;
  $_SESSION['nome'] = $result['nome'];
  $_SESSION['logado']=1;
  echo "sucesso";
//header('location:index.php');
} else {
    unset ($_SESSION['login']);
    unset ($_SESSION['senha']);
    unset ($_SESSION['nome']);
    unset ($_SESSION['logado']);
    print_r($db);
    print_r($result);
    //print_r($result);
    //header('location:index.php');

    }

?>
