<?php

//essa classe vai fugir dos padroes de camelcase e plural.Evitar problemas co letras maisculas e minusculas.
//pq se fosse letra aisucula ne sempre o ususario ira digitar home com letra maiuscula.
class homeController{
    //o parametro poderia ser $rota tambem
    public function acao($acao){
        switch($acao){
            //caso o usuario digitar home:
            case "home": 
                $this->viewHome();
            break;
            default:
                $this->viewHome();
                break;
        }
    }

   //por default sempre sera publica 
   public function viewHome(){
        //incluir a home
        include "view/home.php";
    }
    

}


?>