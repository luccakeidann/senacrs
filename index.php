<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Loja Dia dos Namorados</title>
    </head>
    <body>
        <?php
        // Conectar o banco de dados
        $caminho_banco = 'BDlojalucca.db';
        $pdo = new PDO ("sqlite:" . $caminho_banco);
        $pdo->setAttribute (PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Conexão com o banco de dados SQlite realizada com sucesso!<br>"
        ?>
    </body>
</html>
