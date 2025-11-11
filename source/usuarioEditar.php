<!DOCTYPE HTML>
<HTML>
<meta charset="UTF-8"/>
<BODY>
    <?php
        $get1 = filter_input(INPUT_GET, "var_codigo")
        $get2 = filter_input(INPUT_GET, "var_nome");
        $get3 = filter_input(INPUT_GET, "var_email");
        $get4 = filter_input(INPUT_GET, "var_senha");
    ?>

    <b><font color="#0000FF">Tela de Edição de USUÁRIOS</font></b>
    </br> </br>

    <form action="usuarioUpdate.php" method="post">
        <input type=hidden name=tabela value="usuario">

        <b> Código:</b> <input type="text" name="input_codigo" size="8" value="<?php echo $get1?>" readonly hidden>
        </br></br>

        <b> Nome:</b> <input type="text" name="input_nome" size="100" value="<?php echo $get2?>">
        </br></br>

        <b> Email:</b> <input type="text" name="input_email" size="100" value="<?php echo $get3?>">
        </br></br>

        <b> Senha:</b> <input type="password" name="input_senha" size="50" value="<?php echo $get4?>">
        </br></br>

    <input type="submit" value="Salvar">

   </form>
</BODY>
</HTML>