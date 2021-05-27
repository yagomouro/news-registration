<?php
	include("connect.php");

    

	$sql = "SELECT * FROM noticia";
	$consulta = array('noticias' => $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC));
    //$linha = $consulta->fetch();

    $json = json_encode($consulta, JSON_UNESCAPED_UNICODE);
    //var_dump($json);
    echo $json;
?>