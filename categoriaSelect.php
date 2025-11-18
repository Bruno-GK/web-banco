<!DOCTYPE HTML>
<HTML>
<meta charset="utf-8"/>
<BODY>
   <b><font color="#0000FF">Lista de Categorias</font></b>
      </br> </br>

     <table border = "1">
      <tr>
        <td><b>Código</b></td>
        <td><b>Nome</b></td>
        <td><b>Cor</b></td>
        <td><b>Alterar</b></td>
        <td><b>Excluir</b></td> 
     </tr>

       <?php
            // criar conexao
            include_once("_conexao.php");
            $conexao = conectaBD();

            $sql = "SELECT * FROM categoria;";
            $resultado = mysqli_query($conexao, $sql);

            while($i = mysqli_fetch_assoc($resultado)){
        ?>
             <tr>
                <td><?php echo $i['codcat'];?></td>
                <td><?php echo $i['nomcat'];?></td>
                <td><?php echo $i['corhex'];?></td>

                <td><a href="<?php echo "categoriaEditar.php?codcat=". $i['codcat']."&nomcat=".$i['nomcat']."&corhex=".$i['corhex']?>">Alterar</a></td>
                <td><a href="<?php echo "categoriaDelete.php?codcat=". $i['codcat']?>">Excluir</a></td>
             </tr>
            <?php
           }
            ?>
     </table>
     <h4><a href="categoria.html">Cadastrar nova CATEGORIA</a></h4>

     <?php
      mysqli_close($conexao);
     ?>
</BODY>
</HTML>
