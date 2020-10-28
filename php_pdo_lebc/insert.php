<?php
include './conexão.php';

$conn=  getConnection();
$sql="INSERT INTO tb_usuarios (login,senha) VALUES (:login,:senha)";
$query = $conn->prepare($sql);

if ( ! empty( $_POST ) ) {
    $login = $_POST['login'];
    $senha = $_POST['senha'];


$query->bindParam(":login",$login);
$query->bindParam(":senha",$senha);


$result = $query->execute();


if (!$result)
{
		var_dump($query->errorInfo());
		exit;
}
else{
	echo "\n INSERIDO";
}

}



?>

