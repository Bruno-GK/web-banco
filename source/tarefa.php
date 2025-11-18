<!DOCTYPE html>
<HTML>
<meta charset="utf-8"/>
<BODY>
    <b><font color=""#0000FF>Cadastro de Tarefas</font></b>
    </br></br>

    <form action="tarefaInsert.php" method="post">
        <input type="text" name="input_codigo" size="4" hidden>

        <b>Usuário</b>
        <select name="input_usuario">
        <option>Selecione</option>
        <?php
            include_once("_conexao.php");

            $conn = conectaBD();

            $select = "SELECT codusu, nomusu FROM usuario order by nomusu";
            $resultado = mysqli_query($conn, $select);

            while($i = mysqli_fetch_assoc($resultado)){
            ?>
             <option value="<?php echo $i['codusu'];?>">
                            <?php echo $i['nomusu'];?>
             </option> 
        <?php
           }
        ?>
          </select>    
       </br></br>

       <b>Categoria</b>
        <select name="input_categoria">
        <option>Selecione</option>
        <?php
            include_once("_conexao.php");

            $conn = conectaBD();

            $select = "SELECT codcat, nomcat FROM categoria order by nomcat";
            $resultado = mysqli_query($conn, $select);

            while($i = mysqli_fetch_assoc($resultado)){
            ?>
             <option value="<?php echo $i['codcat'];?>">
                            <?php echo $i['nomcat'];?>
             </option> 
        <?php
           }
        ?>
          </select>    
       </br></br>

        <b>Título: </b> <input type="text" name="input_titulo" size="100">
        </br></br>

        <b>Descrição: </b> <input type="text" name="input_descricao" size="1000">
        </br></br>

        <b>Status: </b> <input type="text" name="input_status" size="9">
        </br></br>

        <b>Prioridade: </b> <input type="text" name="input_prioriridade" size="4">
        </br></br>

        <input type="date" name="input_datcri" hidden>

        <b>Data de Vencimento:</b><input type="date" name="input_datven" size="10">
        </br></br>

        <b>Data de Conclusão:</b><input type="date" name="input_datcon" size="10">
        </br></br>

        </br></br>
        <input type="reset" value="Reset">   <input type="submit" value="Cadastrar">
    </form>
</BODY>
</HTML>