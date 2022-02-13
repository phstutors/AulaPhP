<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    
    /*  class Carro{
           public $cor;
           public $modelo;
   
           public function __construct($cor, $modelo){
               $this->cor = $cor;
               $this->modelo = $modelo;
           }
           public function Falar(){
               return("o carro é $this->cor e o modelo é $this->modelo");
           }
       }
   
       $carro1 = new Carro("branco", "fusca");
   
       echo($carro1->Falar());
       */
   
      /* $palavra = "pedro henrique";
   
       echo(strtoupper($palavra));
       */
   
       /*$cor = "roxa";
   
       switch($cor){
           case "azul":
               echo('A cor do carro é azul');
               break;
           case "vermelho":
               echo('A cor do carro é vermelho');
               break;
           default:
               echo("cor nao reconhecida");
               break;
       }*/
   
       /*$n1 = 1;
   
       while($n1 < 5){
           echo($n1++);
       }*/
   
 /*      $x = 1;
   
       do{
           echo("<p> o Numero é: $x");
           $x++;
       }while($x < 20);
   */


 /*      for ($x = 0; $x <= 11;){
         echo("O numero é $x<br>"); 
         $x++;
       }
       */
      /* $cores = ["azul", "vermelho", "roxo"];

       foreach($cores as $valores){

        echo("A cor é $valores <br>");
       }*/

      /* function EscreverMensagem($nome, $nota1, $nota2){
           $media = ($nota1+$nota2)/2;
           if($media >= 6){
               echo("Voce foi aprovado senhor $nome sua media foi $media");
           }elseif($media == 5){
               echo("Voce esta na recuperação senhor $nome");
           }else{
               echo("voce foi reprovado!<br> Sua Media foi $media");
           }
       }
       EscreverMensagem("Pedro", 4,5); */

     /*  $carros = ["fusca", "uno", "ferrari"];

       foreach($carros as $modelos){
           echo("O carro é $modelos <br>");
       } */

       /*$idade = ["Zimitri"=>"30", "Maria"=>"15", "Pedro"=>"18"];
       foreach($idade as $idades => $valores){
           echo("A chave é $idades e a idade é $valores <br>");
       }*/
      /* $nomes = ["Zimitri", "Maria", "Pedro", "Amanda"];
       rsort($nomes);
       foreach($nomes as $nome){
           echo("A chave é $nome <br>");
       }*/
       $idade = array("Zimitri"=>30, "Maria"=>15, "Pedro"=>18);
       arsort($idade);
       foreach($idade as $chave => $valor){
           echo(" $chave <br>");
       }
     ?>
     <style>
        p{
            color: red;
        }
         </style>
</body>
</html>