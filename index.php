<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Music School</title>
    </head>
    <style>
        form {

        /* Apenas para centralizar o form na página*/

        margin: 0 auto;

        width: 400px;

        /* Para ver as bordas do formulário*/

        padding: 1em;

        border: 1px solid#CCC;

    }

     form div+div {

        margin-top: 1em;

     }

     label {

        /*Para ter certeza que todas as labels tem o mesmo tamanho e estão propriamente alinhadas*/

        display: inline-block;

        width: 90px;

        text-align: right;

     }

     input, textarea {

        /*Para certificar que todos os campos tem as mesmas configurações de fonte. Por padrão, textareas devem ter uma fonte monospace */

        font:1em sans-serif;

        /*Para dar o mesmo tamanho a todos os campos de texto*/

        width: 300px;;

        -moz-box-sizing: border-box;

        box-sizing: border-box;

        /*Para harmonizar o look & feel das bordas nos campos de texto*/

        border: 1px solid #999

     }

     input:focus, textarea:focus {

        border-color: blue;

     }

     textarea{

      /*Para alinhar corretamente os campos de texto de várias linhas com sua label*/

      vertical-align: top;

      /*Para dar espaço suficiente para digitar algum texto*/

      height: 5em;

      /*Para permitir aos usuários redimensionarem qualquer textarea verticalmente.

      Ele não funciona em todos os browsers*/

      resize: vertical;

     }

	 h1 {

		 font-family : arial;

		 font-size: 40px;

		 color: crimson;

	 }

 
    </style>
    <body>
        
        <center><h1> Cadastro do Aluno </h1></center>
<form method="post">
<div>
<label for="fcod">Código: </label>
<input type="text" id="codigo"  name="codigo"/>
</div>
<br> 
<div>
<label for="fname">Nome: </label>
<input type="text" id="nome" name ="nome"  />
</div>
<br> 
<div>        
<label for="femail">E-mail: </label>
<input type="email" id="name" name ="email" />
</div>
<br>  
<div>
<label for="ffone">Fone: </label>
<input type="fone" id="name" name ="fone" />
</div>
<br>

 
<div class="button">
<button type="submit">Cadastrar</button>
</div>
<div class="button">
<button type="reset">Limpar</button>
</div>
</form>  

        
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $codigo = $_POST["codigo"];
            $nome = $_POST ["nome"];
            $email = $_POST ["email"];
            $fone = $_POST ["fone"];
            echo "<h1> Dados do Aluno</h1>";
            echo "Nome: $nome <br>";
            echo "E-mail: $email <br>";
            echo "Fone: $fone <br>" ;
            // Conectar o banco de dados
            $caminho_banco = 'BDschoolmusic.db';
            $pdo = new PDO("sqlite:" . $caminho_banco);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Conexão com o banco de dados SQlite estabelecida"
            . "com sucesso!<br>";
            //
            $sql_inserir = "
             INSERT INTO alunos (id_aluno, nome, email, fone, ativo)
             VALUES ($codigo, $nome, $email, $fone, 'A');
             ";
            $pdo->exec($sql_inserir);
            echo "Aluno cadastrado com sucesso!";
        }
        ?>
    </body>
</html>
