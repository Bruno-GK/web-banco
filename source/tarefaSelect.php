<!DOCTYPE html>
<HTML>
<meta charset="UTF-8">
<BODY>
    <b><font color="#0000FF">Lista de TAREFA</font></b>
    </br> </br>

    <table border = "1">
    <tr>
        <td><b>Código</b></td>
        <td><b>Usuário</b></td>
        <td><b>Categoria</b></td>
        <td><b>Título</b></td>
        <td><b>Descrição</b></td>
        <td><b>Status</b></td>
        <td><b>Prioridade</b></td>
        <td><b>Data de Criação</b></td>
        <td><b>Data de Vencimento</b></td>
        <td><b>Data de Conclusão</b></td>
    </tr>

    <?php
        // criar conexao
        include_once("_conexao.php");
        $conexao = conectaBD();

        $sql = "SELECT codtar, codusu, codcat, titulo, descri, status, priori, datcri, datven, datcon FROM tarefa;";
        $resultado = mysqli_query($conexao, $sql);

        while($i = mysqli_fetch_assoc($resultado)){
    ?>
        <tr>
            <td><?php echo $i['codtar'];?></td>
            <td><?php echo $i['codusu'];?></td>
            <td><?php echo $i['codcat'];?></td>
            <td><?php echo $i['titulo'];?></td>
            <td><?php echo $i['descri'];?></td>
            <td><?php echo $i['status'];?></td>
            <td><?php echo $i['priori'];?></td>
            <td><?php echo $i['datcri'];?></td>
            <td><?php echo $i['datven'];?></td>
            <td><?php echo $i['datcon'];?></td>

            <td>
                <a href="<?php echo 
                    "tarefaEditar.php?".
                    "var_cod=" . $i['codtar'] .
                    "&var_codusu=" . $i['codusu'] .
                    "&var_codcat=" . $i['codcat'] .
                    "&var_titulo=" . urlencode($i['titulo']) .
                    "&var_descri=" . urlencode($i['descri']) .
                    "&var_status=" . $i['status'] .
                    "&var_priori=" . $i['priori'] .
                    "&var_datcri=" . $i['datcri'] .
                    "&var_datven=" . $i['datven'] .
                    "&var_datcon=" . $i['datcon']; 
                ?>">
                    Alterar
                </a>
            </td>
            <td><a href="<?php echo "tarefaDelete.php?var_cod=". $i['codtar']?>">Excluir</a></td>
        </tr>
    <?php
        }
    ?>
    </table>
    <h4><a href="tarefa.php">Cadastrar novo TAREFA</a></h4>

    <?php
        mysqli_close($conexao);
    ?>
</BODY>
</HTML>