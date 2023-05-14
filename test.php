<?php 
require "./fail.php";
require "./flatArray.php";

$variavel  = 'zbxbxtesteaaaaaaaaaaaaaaaaaaaaaaaaazzzzzzzzzzzzzzzzzzzzzzzzaaaaa';

var_dump($variavel);

try{
    funcao1('afghsfajsa');

}catch(\Throwable $e){
    echo $e->getMessage();    
}
echo "testeaaa".PHP_EOL;


$flatArray = new FlatArray([
    [7,8],
    [9,10],
    [11,12],
]);

foreach($flatArray as $item){
    echo $item . PHP_EOL;
}