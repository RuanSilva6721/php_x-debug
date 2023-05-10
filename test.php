<?php 
require "./fail.php";

$variavel  = 'zbxbxtesteaaaaaaaaaaaaaaaaaaaaaaaaazzzzzzzzzzzzzzzzzzzzzzzzaaaaa';

var_dump($variavel);

try{
    funcao1('afghsfajsa');

}catch(\Throwable $e){
    echo $e->getMessage();    
}


