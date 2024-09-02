<?php
    namespace Projeto\ProjetoEsta1\PHP;
    require_once('Gerente.php');

    use Projeto\ProjetoEsta1\PHP\Gerente;
    
    ?>
<Doctype HTML>
    <HTML lang="PT-BR">

        <head>
            <meta charset="UTF-8">
        </head>

        <body>
            <form method="POST">
                <label>Total De Entradas no dia</label>
                <input type="number" id="codigo" name="codigo"/><br><br>

                <label>Total de Saidas</label>
                <input type="text" id="cpf" name="cpf"/><br><br>

                <label>Funcionario Registrados</label>
                <input type="number" id="nome" name="nome"/><br><br>

                <label>Carros que passaram no dia</label>
                <input type="text" id="telefone" name="telefone"/><br><br>

                <label>Nome dos clientes do dia</label>
                <input type="text" id="endereco" name="endereco"/><br><br>

              

              
                <button>Concluir Saída do Cliente</button>


                <h1>REGISTRAR NOVOS FUNCIONÁRIOS</h1>


                <form method="POST">
                <label>Crie um novo codigo de acesso</label>
                <input type="number" id="codigo" name="codigo"/><br><br>

                <label>Informe o CPF</label>
                <input type="text" id="cpf" name="cpf"/><br><br>

                <label>Data de Nascimento do Funcionário</label>
                <input type="date" id="date" name="data"/><br><br>

                <label>Digite o Telefone</label>
                <input type="text" id="telefone" name="telefone"/><br><br>

                <label>Digite o Endereço :</label>
                <input type="text" id="endereco" name="endereco"/><br><br>

                <label>Digite o Salario</label>
                <input type="text" id="endereco" name="salario"/><br><br>

                <label>Qual o seu cargo</label>
                <input type="text" id="endereco" name="cargo"/><br><br>

                <button>Cadastrar Novo Funcionário</button>


                
                <?php
                session_start();
                try{ 
                    $_SESSION['codigo']   = $_POST['codigo'];
                    $_SESSION['cpf'] = $_POST['cpf'];
                    $_SESSION['data']  = $_POST['data'];
                    $_SESSION['telefone']   = $_POST['telefone'];
                    $_SESSION['endereco'] = $_POST['endereco'];
                    $_SESSION['salario'] = $_POST['salario'];
                    $_SESSION['cargo']   = $_POST['cargo'];
                    
                    
                }catch(Exception $erro){
                    echo $erro;
                }//fim do try_catch
            ?>
            </button><br><br>

        </form>
    </body>
</HTML>





        

