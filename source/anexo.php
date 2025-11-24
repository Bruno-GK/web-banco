<!DOCTYPE HTML>
<HTML>
<meta charset="utf-8"/>
<BODY>
   <b><font color="#0000FF">Cadastro de anexo</font></b>
      </br> </br>

    <form action="anexoInsert.php" method="post" enctype="multipart/form-data">

       <input type="hidden" name="input_codane" value="">   

       <b>Tarefa vinculada:</b> 
       <select name="input_codtar" required>
           <option value="">-- Selecione uma tarefa --</option>
           <?php
                include_once("_conexao.php");
                $conexao = conectaBD();
                $sql = "SELECT codtar, titulo FROM tarefa ORDER BY titulo;";
                $resultado = mysqli_query($conexao, $sql);

                while($tarefa = mysqli_fetch_assoc($resultado)){
                    echo "<option value='".$tarefa['codtar']."'>".$tarefa['titulo']."</option>";
                }

                mysqli_close($conexao);
           ?>
       </select>
       </br></br>

       <b>Arquivo:</b> 
       <input type="file" name="input_nomarq" required>
       </br></br>

       <input type="reset" value="Reset">   
       <input type="submit" value="Cadastrar">

   </form>

</BODY>
</HTML>
