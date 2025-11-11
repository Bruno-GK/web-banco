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
            <td><?php echo $i['codigo'];?></td>
            <td><?php echo $i['nome'];?></td>
            <td><?php echo $i['email'];?></td>
            <td><?php echo $i['Data de Cadastro'];?></td>


            <td><a href="<?php echo "usuarioEditar.php?var_cod=". $i['codigo']."&var_nome=".$i['nome']."&var_email=".$i['email']?>">Alterar</a></td>
            <td><a href="<?php echo "usuarioDelete.php?var_cod=". $i['codigo']?>">Excluir</a></td>
        </tr>
    <?php
        }
    ?>
    </table>
    <h4><a href="vendedor.html">Cadastrar novo USUÁRIO</a></h4>

    <?php
        mysqli_close($conexao);
    ?>
</BODY>
</HTML>