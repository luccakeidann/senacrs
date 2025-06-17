<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
<head>
<meta charset="UTF-8">
<title>Dia dos Namorados</title>
</head>
<body>
<form method="post">
<h1>Produtos</h1>
<label for="fid">Código:</label><br>
<input type="text" id="id_produto" name="id_produto" 
value=""><br>
<label for="fnome">Nome:</label><br>
<input type="text" id="nome" name="nome" value=""><br>
<label for="fvalor">Valor:</valor><br>
<input type="number" id="valor" name="valor" step = 
'0.01' value=""><br>
<input type="checkbox" id="ativo" name="ativo" value="A" 
checked> <label for="lativo">Ativo</label><br> <br>
<input type="submit" value="Cadastrar">
</form>
<?php
    $caminho_banco ='BDlojalucca.db';
    $pdo = new PDO("sqlite:" . $caminho_banco);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
    echo "Conexão com o banco de dados SQLite realizada com sucesso!<br>";
    //Inserir no banco de dados

    if ($_SERVER["REQUEST_METHOD"] == "POST") {   

                $codigo = $POST['id_produto'];

                $nome  = $POST['nome'];

                $valor = $POST['valor'];

                $ativo = $POST['ativo']; 

       }

                $sql_inserir = "INSERT INTO produtos (id_produto , nome, valor, ativo) VALUES(:codigo, :nome, :valor,:ativo);";

// Prepara a query SQL

$_stmt = $pdo->prepare($sql_inserir); 

$stmt->bindParam(':codigo', $codigo); 

$stmt->bindParam(':nome', $nome);

$stmt->bindParam(':valor', $valor);

$stmt->bindParam(':ativo', $ativo); 

$stmt->execute(); // Executa a query 

echo "Produto cadastrado com sucesso!";
 
    //Listar todos os produtos
    $sql = "SELECT * FROM produtos ORDER BY nome";
    $stmt = $pdo->query($sql); 
//Retorna todos os produtos
$produtos = $stmt->fetchAll(); 
echo "<h2>Lista de Produtos:</h2>";
echo "<table border='1'>";
echo 
"<tr><th>Código</th><th>Nome</th><th>Valor</th><th>Ativo</th></tr>";
foreach($produtos as $produto) {
echo "<tr>";
echo "<td>" . $produto['id_produto '] . "</td>";
echo "<td>" . $produto['nome'] . "</td>";
echo "<td>" . $produto['valor'] . "</td>";
echo "<td>" . $produto['ativo'] . "</td>";
echo "</tr>";
}
echo "</table>";
 
 
        ?>
</body>
</html>