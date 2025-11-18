<!DOCTYPE HTML>
<HTML>
<meta charset="UTF-8"/>
<BODY>
    <?php
        $get1 = filter_input(INPUT_GET, "var_codtar");
        $get2 = filter_input(INPUT_GET, "var_codusu");
        $get3 = filter_input(INPUT_GET, "var_codcat");
        $get4 = filter_input(INPUT_GET, "var_titulo");
        $get5 = filter_input(INPUT_GET, "var_descri");
        $get6 = filter_input(INPUT_GET, "var_status");
        $get7 = filter_input(INPUT_GET, "var_priori");
        $get8 = filter_input(INPUT_GET, "var_datcri");
        $get9 = filter_input(INPUT_GET, "var_datven");
        $get10 = filter_input(INPUT_GET, "var_datcon");
    ?>

    <b><font color="#0000FF">Tela de Edição de TAREFAS</font></b>
    </br> </br>

    <form action="tarefaUpdate.php" method="post">
        <input type="hidden" name="tabela" value="tarefa">

        <b>Código:</b> 
        <input type="text" name="input_codtar" size="8" value="<?php echo $get1 ?>" readonly>
        </br></br>

        <b>Código Usuário:</b> 
        <input type="text" name="input_codusu" size="8" value="<?php echo $get2 ?>">
        </br></br>

        <b>Código Categoria:</b> 
        <input type="text" name="input_codcat" size="8" value="<?php echo $get3 ?>">
        </br></br>

        <b>Título:</b> 
        <input type="text" name="input_titulo" size="100" value="<?php echo $get4 ?>">
        </br></br>

        <b>Descrição:</b> 
        <textarea name="input_descri" cols="80" rows="4"><?php echo $get5 ?></textarea>
        </br></br>

        <b>Status:</b> 
        <input type="text" name="input_status" size="9" value="<?php echo $get6 ?>">
        </br></br>

        <b>Prioridade:</b> 
        <input type="text" name="input_priori" size="1" value="<?php echo $get7 ?>">
        </br></br>

        <b>Data Criação:</b> 
        <input type="date" name="input_datcri" value="<?php echo $get8 ?>">
        </br></br>

        <b>Data Vencimento:</b> 
        <input type="date" name="input_datven" value="<?php echo $get9 ?>">
        </br></br>

        <b>Data Conclusão:</b> 
        <input type="date" name="input_datcon" value="<?php echo $get10 ?>">
        </br></br>

        <input type="submit" value="Salvar">
   </form>
</BODY>
</HTML>