<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Cadastro Simples de Usuário</title>
    </head>
    <body>
        <div style="position: absolute; width: 400px; height: 250px; top: 50%; left: 50%; margin-left: -200px; margin-top: -125px">
            <fieldset style="width: 100%; height: 100%">
                <legend>Dados</legend>
                <?php
                $nome = $_GET['nome'];
                $mail = $_GET['mail'];
                if(empty($_GET['spam'])){
                    $obs = "Não recebe span";
                }else if ($_GET['spam'] == 'on'){
                    $obs = "Recebe spam";
                }else{
                    $obs = "Não recebe span";
                }
                if (!empty($_GET)) {
                    
                    echo "Nome: ".$nome."<br>";
                    echo "Email: ".$mail ."<br>";
                    echo "Obs: ".$obs."<br>";                    
                }else{
                    echo "erro ao acessar a global";
                }
                ?>
            </fieldset>
        </div>
    </body>
</html>


