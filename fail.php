<?php 

/**
 * Summary of funcao1
 * @param mixed $param
 * @return never
 */
function funcao1(string $param) :never
{
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
    throw new Exception('Mensagem');

}