<?php
	include("connect.php");

	$sql = "SELECT * FROM noticias";
	$consulta = array('noticias' => $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC));
    //$linha = $consulta->fetch();

    $json = json_encode($consulta);
    //var_dump($json);
    echo $json;
?>