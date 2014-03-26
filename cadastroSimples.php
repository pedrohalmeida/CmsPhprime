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
                <legend>Cadastro Simples</legend>
                <form action="trataCadastro.php" method="GET" style="margin-left: 10px; margin-top: 20px">
                    Digite seu nome:<br>
                    <input type="text" name="nome" size="80">
                    <br><br>
                    Digite seu email:<br>
                    <input type="text" name="mail" size="80">
                    <br><br>
                    <input type="checkbox" name="spam"> Desejo receber spam
                    <br><br><br>
                    <input type="submit" title="Finalizar Cadastro">
                </form>
            </fieldset>
        </div>
    </body>
</html>
