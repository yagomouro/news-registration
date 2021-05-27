<?php
    require_once("connect.php");

    $autor = addslashes($_POST['autor']);
    $fonte = addslashes($_POST['fonte']);
    $titulo = addslashes($_POST['titulo']);
    $conteudo = addslashes($_POST['conteudo']);

    if($autor == '' || $fonte == '' || $titulo == '' || $conteudo){
        header('Location: index.html');
    }
    else{
        $query = $pdo->prepare('INSERT INTO noticia (nm_autor, ds_fonte, nm_titulo,
        ds_conteudo) values ("'.$autor.'","'.$fonte.'","'.$titulo.'","'.$conteudo.'")');
        $query->execute();
    }
?>