<!DOCTYPE HTML>
<HTML>
<meta charset="UTF-8"/>
<BODY>
    <?php
        $codtar  = filter_input(INPUT_GET, "var_codtar", FILTER_VALIDATE_INT) ?? '';
        $codusu  = filter_input(INPUT_GET, "var_codusu", FILTER_VALIDATE_INT) ?? '';
        $codcat  = filter_input(INPUT_GET, "var_codcat", FILTER_VALIDATE_INT) ?? '';
        $titulo  = filter_input(INPUT_GET, "var_titulo") ?? '';
        $descri  = filter_input(INPUT_GET, "var_descri") ?? '';
        $status  = filter_input(INPUT_GET, "var_status") ?? '';
        $priori  = filter_input(INPUT_GET, "var_priori") ?? '';
        $datcri  = filter_input(INPUT_GET, "var_datcri") ?? '';
        $datven  = filter_input(INPUT_GET, "var_datven") ?? '';
        $datcon  = filter_input(INPUT_GET, "var_datcon") ?? '';

        if (!$codtar) die("ID da tarefa não informado.");
    ?>

    <b><font color="#0000FF">Tela de Edição de TAREFAS</font></b>
    </br> </br>

    <form action="tarefaUpdate.php" method="post">
        <input type="hidden" name="input_codtar" value="<?= $codtar ?>">

        <b>Código Usuário:</b> 
        <input type="text" name="input_codusu" size="8" value="<?= $codusu ?>">
        </br></br>

        <b>Código Categoria:</b> 
        <input type="text" name="input_codcat" size="8" value="<?= $codcat ?>">
        </br></br>

        <b>Título:</b> 
        <input type="text" name="input_titulo" size="100" value="<?= htmlspecialchars($titulo) ?>">
        </br></br>

        <b>Descrição:</b> 
        <textarea name="input_descri" cols="80" rows="4"><?= htmlspecialchars($descri) ?></textarea>
        </br></br>

        <b>Status:</b> 
        <input type="text" name="input_status" size="9" value="<?= htmlspecialchars($status) ?>">
        </br></br>

        <b>Prioridade:</b> 
        <input type="text" name="input_priori" size="1" value="<?= $priori ?>">
        </br></br>

        <b>Data Criação:</b> 
        <input type="date" name="input_datcri" value="<?= $datcri ?>">
        </br></br>

        <b>Data Vencimento:</b> 
        <input type="date" name="input_datven" value="<?= $datven ?>">
        </br></br>

        <b>Data Conclusão:</b> 
        <input type="date" name="input_datcon" value="<?= $datcon ?>">
        </br></br>

        <input type="submit" value="Salvar">
   </form>
</BODY>
</HTML>
