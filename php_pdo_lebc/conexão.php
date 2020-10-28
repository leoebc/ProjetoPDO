<?php
function getConnection(){
//$dsn='mysql:dbname=dbphp7;host=localhost';
$dsn='sqlsrv:Database=dbphp7;server=localhost\SQLEXPRESS;ConnectionPooling=0';
$pass='sa';
$user='root';


try
{
    $conn = new PDO($dsn,$pass,$user);
    echo "Conectado";
	echo "<br>---------------<br>";
        return $conn;
}
catch ( PDOException $e )
{
    echo 'Erro ao conectar com o SQL server: ' . $e->getMessage();
}

}

?>

