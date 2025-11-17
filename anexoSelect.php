<!DOCTYPE HTML>
<HTML>
<meta charset="utf-8"/>
<BODY>
   <b><font color="#0000FF">Lista de anexos</font></b>
      </br> </br>

     <table border = "1">
      <tr>
        <td><b>Código</b></td>
        <td><b>Tarefa vinculada</b></td>
        <td><b>Arquivo</b></td>
        <td><b>Alterar</b></td>
        <td><b>Excluir</b></td> 
     </tr>

       <?php
            // criar conexao
            include_once("_conexao.php");
            $conexao = conectaBD();

            $sql = "SELECT * FROM anexo;";
            $resultado = mysqli_query($conexao, $sql);

            while($i = mysqli_fetch_assoc($resultado)){
        ?>
             <tr>
                <td><?php echo $i['codane'];?></td>
                <td><?php echo $i['codtar'];?></td>
                <td><?php echo $i['nomarq'];?></td>

                <td><a href="<?php echo "anexoEditar.php?codcat=". $i['codane']."&codtar=".$i['codtar']."&nomarq=".$i['nomarq']?>">Alterar</a></td>
                <td><a href="<?php echo "anexoDelete.php?codcat=". $i['codane']?>">Excluir</a></td>
             </tr>
            <?php
           }
            ?>
     </table>
     <h4><a href="anexo.html">Cadastrar novo ANEXO</a></h4>

     <?php
      mysqli_close($conexao);
     ?>
</BODY>
</HTML>
