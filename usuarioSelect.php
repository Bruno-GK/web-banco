<!DOCTYPE html>
<HTML>
<meta charset="UTF-8">
<BODY>
    <b><font color="#0000FF">Lista de USUÁRIOS</font></b>
    </br> </br>

    <table border = "1">
    <tr>
        <td><b>Código</b></td>
        <td><b>Nome</b></td>
        <td><b>Email</b></td>
        <td><b>Data de Cadastro</b></td>
        <td><b>Editar</b></td>
        <td><b>Excluir</b></td>
    </tr>

    <?php
        // criar conexao
        include_once("_conexao.php");
        $conexao = conectaBD();

        $sql = "SELECT codusu, nomusu, emausu, datcad FROM usuario;";
        $resultado = mysqli_query($conexao, $sql);

        while($i = mysqli_fetch_assoc($resultado)){
    ?>
        <tr>
            <td><?php echo $i['codusu'];?></td>
            <td><?php echo $i['nomusu'];?></td>
            <td><?php echo $i['emausu'];?></td>
            <td><?php echo $i['datcad'];?></td>


            <td><a href="<?php echo "usuarioEditar.php?var_cod=". $i['codusu']."&var_nome=".$i['nomusu']."&var_email=".$i['emausu']?>">Alterar</a></td>
            <td><a href="<?php echo "usuarioDelete.php?var_cod=". $i['codusu']?>">Excluir</a></td>
        </tr>
    <?php
        }
    ?>
    </table>
    <h4><a href="usuario.html">Cadastrar novo USUÁRIO</a></h4>

    <?php
        mysqli_close($conexao);
    ?>
</BODY>
</HTML>