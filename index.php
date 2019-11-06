<!--primeiro arquivo - INDEX - pega a solitacao do usuario e envia para o controller que ele quer acessar.-->
<!--pega oq o usuario digitou na URL e indicsar a solicitacao para algum controler fazer os processos que foram definidos. Podemos fazer isso a partir do GET-->
<!--Pagina de ponto de entrada, NÃO VISUAL-->
<?php

    //1.ver o que vem quando o usuario digitar algo
    //var_dump($_GET);
    //2.pegando a associacao
    //key : retorna as chaves de um array
    //validar caso o usuario não digite nada
    $rota = key($_GET)?key($_GET):"home";

    //3.pega o que o usuario digitou e soma com a palavra controler.php que é o mesmo nome do controler para criar o fluxo, rretornar uma view.
    //como nao sei qual controler esta chamando tiro ele daqui e deixo somente no include.
    $controller =  $rota."Controller";

    //4.por ser de forma dinamica ele pega a variavel que mudou o nome do arquivo.
    //De acordo com o que o usuario digital eu faço um include.
    //vou ter que fazer uma validacao apara que no caso dele digitar algo que nao existe ele receba uma mensagem .
    include "controller/".$controller.".php";

    //5.cria um novo Objeto.
    $obj = new $controller();

    //6.executa o metodo viewHome
    $obj->acao($rota);
     

    //var_dump ($obj);
    


?>
