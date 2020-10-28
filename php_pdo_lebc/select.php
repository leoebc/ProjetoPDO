<?php
include './conexão.php';
$conn=  getConnection();
if ( ! empty( $_POST ) ) {
    $login = $_POST['login'];
    $senha = $_POST['senha'];

$sql="SELECT * FROM tb_usuarios WHERE login = '{$login}' AND senha = '{$senha}'";
$stmt = $conn->prepare($sql);
$stmt->execute(); 
$row=$stmt->fetch();
    if ($row>0) {
    header('Location: painel.php');
    $_SESSION['login'] = $login;
    exit();
} else {
    header('Location: cadastro.html');
    exit();
}

	echo "=========================================================<br>";
}

?>
