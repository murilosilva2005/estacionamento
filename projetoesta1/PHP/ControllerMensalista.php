<?php
    namespace Projeto\ProjetoEsta1\PHP;
    require_once('Mensalista.php');

    use Projeto\ProjetoEsta1\PHP\Mensalista;
    
    ?>
<Doctype HTML>
    <HTML lang="PT-BR">

        <head>
            <meta charset="UTF-8">
        </head>

        <body>
            <form method="POST">
                <label>Nome do Cliente</label>
                <input type="number" id="codigo" name="nome"/><br><br>

                <label>Telefone do cliente</label>
                <input type="text" id="cpf" name="telefone"/><br><br>

                <label>Endereço do cliente </label>
                <input type="text" id="text" name="endereco"/><br><br>

                <label>Digite o seu Carro</label>
                <input type="text" id="telefone" name="carro"/><br><br>

                <label>Digite o Endereço :</label>
                <input type="text" id="endereco" name="endereco"/><br><br>

                <label>Digite a placa do seu carro</label>
                <input type="text" id="endereco" name="placa"/><br><br>

                <label>digite a cor do seu carro</label>
                <input type="text" id="endereco" name="cor"/><br><br>

                <label>digite o valor mensal</label>
                <input type="text" id="endereco" name="mensal"/><br><br>
                
               
                <button>Concluir Cadastro</button>

                <?php
                session_start();
                try{ 
                    $_SESSION['nome']   = $_POST['nome'];
                    $_SESSION['telefone'] = $_POST['telefone'];
                    $_SESSION['endereco']  = $_POST['endereco'];
                    $_SESSION['placa']   = $_POST['placa'];
                    $_SESSION['cor'] = $_POST['cor'];
                    $_SESSION['mensal'] = $_POST['mensal'];
                    
                    
                }catch(Exception $erro){
                    echo $erro;
                }//fim do try_catch
            ?>
            </button><br><br>

        </form>
    </body>
</HTML>



                

                