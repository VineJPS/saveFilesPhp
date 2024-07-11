<?php
    include('conection.php');
    //var_dump($_FILES['arquivo']);

    if(isset($_FILES['arquivo'])){
        $arquivo = ($_FILES['arquivo']);
        
        if($arquivo['error'])
            die('Falha ao enviar arquivo');

        if($arquivo['size'] > 5242880)
            die("Arquivo muito grande, maximo 2mb");
            //media em bytes, so fazer 5(numero de mb q vc quer) * 1024 * 1024
        
        $pasta = "files/";
        $nomeArquivo = $arquivo['name'];
        $novoNomeArquivo = uniqid();
        $extensao = strtolower(pathinfo($nomeArquivo, PATHINFO_EXTENSION));
        echo 'arquivo enviado';

        if($extensao != "jpg" && $extensao != 'png')
            die("Tipo de arquivo invalido");

        $deu_certo = move_uploaded_file($arquivo['tmp_name'], $pasta . $novoNomeArquivo . "." . $extensao);

        if($deu_certo)
            echo"<p>Deu certo, acesse ele <a target=\"_blank\" href='files/$novoNomeArquivo.$extensao'>aqui</a></p>";
        else{
            echo'deu ruim patrão';
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Envio de Arquivos</title>
</head>
<body>
    <form method="POST" enctype="multipart/form-data" action="">
        <p>
            <label for="">Selecione o arquivo</label>
            <input type="file" name="arquivo">
        </p>
        <button type="submit">Enviar arquivos</button>
    </form>
</body>
</html>