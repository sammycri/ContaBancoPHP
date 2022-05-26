<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
        <?php
           require_once 'ContaBancaria.php';
           $p1 = new ContaBancaria(); //conta da pessoa 1 = Cleitin
           $p2 = new ContaBancaria(); // conta da pessoa 2 = Jandira
           
           // Conta Corrente = "CC" | Conta Poupança = "CP"
           $p1 ->abrirConta(1001, "Cleitin", "CC");
           $p2 ->abrirConta(1002, "Jandira", "CP");
           
           print_r($p1);
           echo " <br/>";
           print_r($p2);
           
           echo "<br/>";
           //test instanciando numero, nome do cliente e saldo
           print "<h2>O saldo da conta de nº" . $p2 ->getNumero() . " do Sr(a). " . $p2 -> getNome(). " é de R$ " . $p2 -> getSaldo();
           echo "<br/>";
           print "<h2>O saldo da conta de nº" . $p1 ->getNumero(). " do Sr(a). ". $p1 -> getNome(). " é de R$ " . $p1 -> getSaldo();
           
           echo "</h2><br/>";
           echo "<br/>";
           echo "<br/>";
           echo "<br/>";
           //Test deposito
           $p1 ->depositar(350);
           $p2 ->sacar(25);
           
           print_r($p1);
           echo "<br/>";
           print_r($p2);
           
           //Test TAXA MENSAL
           echo "<h2>30 DIAS SE PASSARAM DESDE A CRIAÇÃO DAS CONTAS... Taxa cobrada!</h2></br>";
           $p1 ->taxaMensal();
           $p2 ->taxaMensal();
           
           print_r($p1);
           echo "<br/>";
           print_r($p2);
           
           //Test fechar contas
           
           $p1 ->fecharConta();
           $p2 ->fecharConta();
           
           print_r($p1);
           echo "<br/>";
           print_r($p2);
           
           
            
        ?>
        </pre>
    </body>
</html>
