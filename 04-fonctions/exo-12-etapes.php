<?php

/*
Premier appel :                                                     Cinquième retour :
 
    function genererSuiteFibonacci(4, 0, 1, 1)                             $a = 0
    {
        if (1 <= 4)
        {
            $suiteDeFibo = genererSuiteFibonacci(4, 1, 1, 2);              [1, 1, 2];
            ...                                                             array_unshift([1, 1, 2], 0)
            ...                                                             return [0, 1, 1, 2]
        }
    }



Second appel :                                                      Quatrième retour :

    function genererSuiteFibonacci(4, 1, 1, 2)                             $a = 1
    {
        if (2 <= 4)
        {
            $suiteDeFibo = genererSuiteFibonacci(4, 1, 2, 3);
            ...                                                             array_unshift([1, 2], 1)
            ...                                                             return [1, 1, 2]
        }
        return [];
    }



Troisième appel :                                                    Troisième retour :
 
    function genererSuiteFibonacci(4, 1, 2, 3)                             $a = 1
    {
        if (3 <= 4)
        {
            $suiteDeFibo = genererSuiteFibonacci(4, 2, 3, 4);
            ...                                                             array_unshift([2], 1)
            ...                                                             return [1, 2]
        }
    }



Quatrième appel :                                                    Deuxième retour :

    function genererSuiteFibonacci(4, 2, 3, 4)                             $a = 2
    {
    if (4 <= 4)
        {
            $suiteDeFibo = genererSuiteFibonacci(4, 3, 5, 5);
            ...                                                             array_unshift([], 2)
            ...                                                             return [2]
        }
    }



Cinquième appel :                                                    Premier retour :
 
    function genererSuiteFibonacci(4, 3, 5, 5)
    {
        if (5 <= 4){}
        ...                                                                 return []
    }
*/

function genererSuiteFibonacci(int $n, int $a = 0, int $b = 1, int $compteurRécursion = 1): array
{
    if ($compteurRécursion <= $n)
    {
        $suiteDeFibo = genererSuiteFibonacci($n, $b, $a + $b, $compteurRécursion + 1);
        array_unshift($suiteDeFibo, $a);
        return $suiteDeFibo;
    }
    return [];
}

$n = 4;
$suiteFibo = genererSuiteFibonacci($n);
