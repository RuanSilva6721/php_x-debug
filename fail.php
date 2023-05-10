<?php 

/**
 * Summary of funcao1
 * @param mixed $param
 * @return never
 */
function funcao1(string $param) :never
{
    $variavel =1;
    echo $param;
    funcao2();

}

/**
 * Summary of funcao2
 * @throws Exception
 * @return never
 */
function funcao2():never
{
    $variavel =3;
    if($variavel ==3){

        throw new Exception('Mensagem');
    }

}