<?php 
 include_once './model/Cliente.php';

 if(isset($_POST['enviar'])):
     $cadastrar = new Cliente();
     $cadastrar->setNome(trim($_POST['nome']));
     $cadastrar->setEmail(trim($_POST['email']));
     $cadastrar->setIdade(trim($_POST['idade']));
     $cadastrar->cadastrar();
     
 endif;

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form method="post" action="">
            <label for="nome">Nome:</label>
            <input type="text" name="nome">
            <label for="email">E-mail:</label>
            <input type="text" name="email">
            <label for="idade">Idade:</label>
            <input type="text" name="idade">
            <input type="submit" name="enviar" value="enviar">
        </form>
    </body>
</html>
