<?php
    namespace Projeto\Projetoesta1\PHP;
    require_once('Entrada.php');

    use Projeto\Projetoesta1\PHP\Entrada;
    
    ?>
<Doctype HTML>
    <HTML lang="PT-BR">

        <head>
            <meta charset="UTF-8">
        </head>

        <body>
            <form method="POST">
                <label>Codigo da Compra</label>
                <input type="number" id="codigo" name="codigo"/><br><br>

                <label>Digite a data de entrada</label>
                <input type="text" id="cpf" name="data"/><br><br>

                <label>Digite a hora de Entrada</label>
                <input type="number" id="nome" name="entrada"/><br><br>

                <label>Digite a hora da Saída</label>
                <input type="text" id="telefone" name="hora"/><br><br>

                <label>Informe o nome do Cliente:</label>
                <input type="text" id="endereco" name="nome"/><br><br>

                <label>Informe o veiculo</label>
                <input type="text" id="endereco" name="veiculo"/><br><br>

                <label>Qual vaga utilizada</label>
                <input type="text" id="endereco" name="vaga"/><br><br>
                
                <label>O Valor total:</label>
                <input type="text" id="endereco" name="valor"/><br><br>

              
                <button>Concluir Saída do Cliente</button>


                <?php
                session_start();
                try{ 
                    $_SESSION['codigo']   = $_POST['codigo'];
                    $_SESSION['data'] = $_POST['data'];
                    $_SESSION['entrada']  = $_POST['entrada'];
                    $_SESSION['hora'] = $_POST['hora'];
                    $_SESSION['nome'] = $_POST['nome'];
                    $_SESSION['veiculo']   = $_POST['veiculo'];
                    $_SESSION['vaga']   = $_POST['vaga'];
                    $_SESSION['valor']   = $_POST['valor'];
                   
                    
                    
                }catch(Exception $erro){
                    echo $erro;
                }//fim do try_catch
            ?>
            </button><br><br>

        </form>
    </body>
</HTML>



        

                






