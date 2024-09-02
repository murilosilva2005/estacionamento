<?php
    //Conectando a classe ao projeto
    namespace Projeto\Projetoesta1\PHP;
    //Colocar qual classe eu utilizar
    require_once("Entrada.php");
    require_once("funcionario.php");
    require_once("Mensalista.php");
    require_once("Saida.php");
    require_once("Gerente.php");
    //Mostrar quem eu vou usar - reforço
    use Projeto\Projetoesta1\PHP\Entrada;
    use Projeto\Projetoesta1\PHP\Funcionario;
    use Projeto\Projetoesta1\PHP\Mensalista;
    use Projeto\Projetoesta1\PHP\Saida;
    use Projeto\Projetoesta1\PHP\Gerente;


        //Instanciar Entrada

        $entrada1 = new Entrada(1221131312312,
            "12/03/2005",
            "11:30",
            "13:30",
            "Mauricio Tatos",
            "Ferrari",
            "Estacionamento SENAC SBC",
            13);

           

        echo $entrada1->imprimir();

        //Instanciar Funcionario

        $Funcionario1 = new Funcionario(
            1,
            "Murilo",
            4131434131,
            "vendedor de sapatos",
            "rua das americas 22 bloco 3234",
            2500,
            "comercial",
            "27/10/1434"
        );
        echo $Funcionario1->imprimir();


        echo $Gerente1->Imprimir();

        //INSTANCIAR MENSALISTA

        $Mensalista1 = new Mensalista(
            "Pedro Martins Teixera",
                12323232332,
                "Rua Duas Pontes 32 SBC",
                "Fiat Creta Preto",
                "SIUU-7777",
                "12/12/1976",
                10.000
        );

        $saida1 = new Saida(
            "João",
            "Fiat Uno Azul",
            "13:40",
            12213312313  // <- CODIGO DE ACESSO AO ESTACIONAMENTO...
        );
        echo $saida1->Imprimir();

        $Tarifa1 = new Tarifa(
            5.00,
            "30 MINUTOS",
            "152525442524524254", // <- Comprovante De Pagamento;
            "5365354355" // <- Código de acesso ao estacionamento usado 
        );
        echo $tarifa1->Imprimir();


         $gerente = new Gerente("João", "1990-01-01", "123456789", "Rua ABC, 123", 5000, "Gerente");
$atendente1 = new Funcionario("Maria", "1995-01-01", "987654321", "Rua DEF, 456", 2000, "Atendente");
$gerente->cadastrarFuncionario($atendente1);
$gerente->imprimirRelatorio();

session_start();
echo "<br><br>";
echo $_SESSION['nome'];


    


