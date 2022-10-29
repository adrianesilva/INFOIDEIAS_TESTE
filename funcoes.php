<?php

namespace SRC;


class Funcoes
{
    /*

    Desenvolva uma função que receba como parâmetro o ano e retorne o século ao qual este ano faz parte. O primeiro século começa no ano 1 e termina no ano 100, o segundo século começa no ano 101 e termina no 200.

	Exemplos para teste:

	Ano 1905 = século 20
	Ano 1700 = século 17

     * */
    public function SeculoAno(int $ano): int {

        if ($ano >= 1 && $ano <= 100) $seculo = 1;
        if ($ano >= 101 && $ano <= 200) $seculo = 2;
        if ($ano >= 201 && $ano <= 300) $seculo = 3;
        if ($ano >= 301 && $ano <= 400) $seculo = 4;
        if ($ano >= 401 && $ano <= 500) $seculo = 5;
        if ($ano >= 501 && $ano <= 600) $seculo = 6;
        if ($ano >= 601 && $ano <= 700) $seculo = 7;
        if ($ano >= 701 && $ano <= 800) $seculo = 8;
        if ($ano >= 801 && $ano <= 900) $seculo = 9;
        if ($ano >= 901 && $ano <= 1000) $seculo = 10;
        if ($ano >= 1001 && $ano <= 1100) $seculo = 11;
        if ($ano >= 1101 && $ano <= 1200) $seculo = 12;
        if ($ano >= 1201 && $ano <= 1300) $seculo = 13;
        if ($ano >= 1301 && $ano <= 1400) $seculo = 14;
        if ($ano >= 1401 && $ano <= 1500) $seculo = 15;
        if ($ano >= 1501 && $ano <= 1600) $seculo = 16;
        if ($ano >= 1601 && $ano <= 1700) $seculo = 17;
        if ($ano >= 1701 && $ano <= 1800) $seculo = 18;
        if ($ano >= 1801 && $ano <= 1900) $seculo = 19;
        if ($ano >= 1901 && $ano <= 2000) $seculo = 20;
        if ($ano >= 2001 && $ano <= 2100) $seculo = 21;

        return $seculo;
        
    }

    
	
	
	
	
	
	
	
	/*

    Desenvolva uma função que receba como parâmetro um número inteiro e retorne o numero primo imediatamente anterior ao número recebido

    Exemplo para teste:

    Numero = 10 resposta = 7
    Número = 29 resposta = 23

     * */
    public function PrimoAnterior(int $numero): int {

        $numeroAnt = $numero-1;
        
        while ($this->numeroPrimo($numeroAnt)==false){
            $numeroAnt--;
        }

        if ($numeroAnt==1) $numeroAnt=0;
        
        return $numeroAnt;
        
    }

    public function numeroPrimo(int $numero): bool {

        if ($numero==2){
            $primo = true;
        }elseif ($numero % 2 == 0){
            $primo = false;
        }elseif($numero % 3 == 0){
            $primo = false;
        }elseif($numero % 5 == 0){
            $primo = false;
        }else{
            $primo = true;
        }  
        
        return $primo;
            
    }











    /*

    Desenvolva uma função que receba como parâmetro um array multidimensional de números inteiros e retorne como resposta o segundo maior número.

    Exemplo para teste:

	Array multidimensional = array (
	array(25,22,18),
	array(10,15,13),
	array(24,5,2),
	array(80,17,15)
	);

	resposta = 25

     * */
    public function SegundoMaior(array $arr): int {

        $maiorArray = array();

        foreach($arr as $key=>$value){

            $maior=max($value);

            $maiorArray[$key] = $maior;

        }

        $maior1 = max($maiorArray);
        $maiorKey = array_search($maior1,$maiorArray);
        unset($maiorArray[$maiorKey]);
        $maior2 = max($maiorArray);

        return (int) $maior2;
        
    }
	
	
	
	
	
	
	

    /*
   Desenvolva uma função que receba como parâmetro um array de números inteiros e responda com TRUE or FALSE se é possível obter uma sequencia crescente removendo apenas um elemento do array.

	Exemplos para teste 

	Obs.:-  É Importante  realizar todos os testes abaixo para garantir o funcionamento correto.
         -  Sequencias com apenas um elemento são consideradas crescentes

    [1, 3, 2, 1]  false
    [1, 3, 2]  true
    [1, 2, 1, 2]  false
    [3, 6, 5, 8, 10, 20, 15] false
    [1, 1, 2, 3, 4, 4] false
    [1, 4, 10, 4, 2] false
    [10, 1, 2, 3, 4, 5] true
    [1, 1, 1, 2, 3] false
    [0, -2, 5, 6] true
    [1, 2, 3, 4, 5, 3, 5, 6] false
    [40, 50, 60, 10, 20, 30] false
    [1, 1] true
    [1, 2, 5, 3, 5] true
    [1, 2, 5, 5, 5] false
    [10, 1, 2, 3, 4, 5, 6, 1] false
    [1, 2, 3, 4, 3, 6] true
    [1, 2, 3, 4, 99, 5, 6] true
    [123, -17, -5, 1, 2, 3, 12, 43, 45] true
    [3, 5, 67, 98, 3] true

     * */
    
	public function SequenciaCrescente(array $arr): bool {
        $dec=0;
        for($i=0;$i<sizeof($arr);$i++){
            
            $j=$i-1;
            if($j<0){
                 $vlr=$arr[0];
            }else{
                $vlr=$arr[$j];
            }

            if($vlr>$arr[$i]) $dec++;

        }

        if($dec > 1){
            $resultado = FALSE;
        }else{
            $resultado = TRUE;
        }

        return $resultado;
        
    }
}

