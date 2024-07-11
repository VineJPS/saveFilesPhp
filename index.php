<?php
    include('conection.php');
    include('function.php');
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

        

        if($extensao != "jpg" && $extensao != 'png')
            die("Tipo de arquivo invalido");

        $path =  $pasta . $novoNomeArquivo . "." . $extensao;
        $deu_certo = move_uploaded_file($arquivo['tmp_name'], $path);

        if($deu_certo){
           $conection->query("INSERT INTO imagem(nome, path) VALUES('$novoNomeArquivo', '$path')");
           echo '<p>Arquivo enviado com sucesso</p>';
        }else{
            echo'deu ruim patrão';
        }
    }
    $sql_query = $conection->query("SELECT * FROM imagem") or die($conection->error);
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
    <h1>Lista dos Arquivos</h1>
    <table border="1" cellpadding="10">
        <theaad>
            <th>Preview</th>
            <th>Arquivo</th>
            <th>Data de Envio</th>
        </theaad>
        <tbody>
            <?php
                 while($arquivo = $sql_query->fetch_assoc()){
            ?>
            <tr>
                <td><img src="<?php echo $arquivo['path'];?>" height="50px" alt=""></td>
                <td><a target="_blank" href="<?php echo $arquivo['path'];?>"><?php echo $arquivo['path'];?></a></td>
                <td> <?php echo date("d/m/Y H:i", strtotime($arquivo['data_upload'])); ?></td>
            </tr>
             <?php    
                 }
              ?>
        </tbody>
    </table>
</body>
</html>