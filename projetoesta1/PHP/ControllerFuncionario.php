<?php
    namespace Projeto\ProjetoEsta1\PHP;
    require_once('Funcionario.php');

    use Projeto\ProjetoEsta1\PHP\Funcionario;
    
    ?>
<Doctype HTML>
    <HTML lang="PT-BR">

        <head>
            <meta charset="UTF-8">
        </head>

        <body>
            <form method="POST">

            <h1>Acesso Funcionário</h1>
                
            <label>Codigo do funcionário</label>
                <input type="number" id="codigo" name="codigo"/><br><br>

                <label>Nome do Funcionário </label>
                <input type="text" id="cpf" name="cpf"/><br><br>

                <label>Data de Nascimento do Funcionário</label>
                <input type="date" id="date" name="date"/><br><br>

                <label>Digite o Telefone </label>
                <input type="text" id="telefone" name="telefone"/><br><br>

                <label>Digite o Endereço :</label>
                <input type="text" id="endereco" name="endereco"/><br><br>

               
                
              
                <button>Concluir</button>

                <h1>Cadastrar Entrada</h1>

                <label>Hora de Entrada</label>
                <input type="string" id="codigo" name="codigo"/><br><br>

                <label>Nome do Cliente </label>
                <input type="text" id="cpf" name="cpf"/><br><br>

                <label>Cpf do Cliente</label>
                <input type="number" id="number" name="number"/><br><br>

                <label>Carro do Cliene</label>
                <input type="text" id="telefone" name="telefone"/><br><br>

                <label>Cor do Carro :</label>
                <input type="text" id="endereco" name="endereco"/><br><br>

                <label>Horário de Saída </label>
                <input type="text" id="endereco" name="endereco"/><br><br>

                <label>Placa do Carro </label>
                <input type="text" id="endereco" name="endereco"/><br><br>



                <button>Registrar Entrada</button>
                

                <h1>Horário De Saida</h1>

                <label>Horário de Saída</label>
                <input type="text" id="endereco" name="endereco"/><br><br>

                <label>Nota do Pagamento</label>
                <input type="text" id="endereco" name="endereco"/><br><br>

                <label>Ticket Usado</label>
                <input type="text" id="endereco" name="endereco"/><br><br>

                <button>CONFIRMAR SAÍDA</button>





                
                <h1>Cadastrar Mensalista</h1>

                <label>Nome do Cliente</label>
                <input type="string" id="codigo" name="codigo"/><br><br>

                <label> CPF </label>
                <input type="text" id="cpf" name="cpf"/><br><br>

                <label>Telefone Do Cliente</label>
                <input type="number" id="number" name="Cliente"/><br><br>

                <label>Endereço do Cliente</label>
                <input type="text" id="telefone" name="endereco"/><br><br>

                <label>Modelo do Carro</label>
                <input type="text" id="endereco" name="carro"/><br><br>

                <label>Cor do Carro</label>
                <input type="text" id="endereco" name="cor"/><br><br>
                
                <label>Placa do Carro</label>
                <input type="text" id="endereco" name="placa"/><br><br>

                <label>Valor Mensal </label>
                <input type="text" id="endereco" name="mensal"/><br><br>

                <label>DIVISÃO DO PAGAMENTO | 12X </label>
                <input type="string" id="string" name="divisao"/><br><br>


                <button>CONFIRMAR PAGAMENTO</button>


                <?php
                session_start();
                try{ 
                    $_SESSION['codigo']   = $_POST['codigo'];
                    $_SESSION['cpf'] = $_POST['cpf'];
                    $_SESSION['telefone']  = $_POST['telefone'];
                    $_SESSION['endereco'] = $_POST['endereco'];
                    $_SESSION['carro'] = $_POST['carro'];
                    $_SESSION['cor']   = $_POST['cor'];
                    $_SESSION['placa']   = $_POST['placa'];
                    $_SESSION['mensal']   = $_POST['mensal'];
                    $_SESSION['divisao']   = $_POST['divisao'];
                    
                    
                }catch(Exception $erro){
                    echo $erro;
                }//fim do try_catch
            ?>
            </button><br><br>

        </form>
    </body>
</HTML>











    








                


                    
                