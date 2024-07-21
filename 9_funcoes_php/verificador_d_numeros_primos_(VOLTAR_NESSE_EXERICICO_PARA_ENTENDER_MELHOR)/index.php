<?php

    /*
    Verificador de Números Primos:

    1. Crie uma função chamada isPrime que recebe um número inteiro positivo como parâmetro.

    2. A função deve verificar se o número fornecido é um número primo.

    3. Um número primo é aquele que é divisível apenas por 1 e por ele mesmo.

    4. Caso o número fornecido seja menor que 2, retorne false.

    5. Caso contrário, percorra os números de 2 até a raiz quadrada do número fornecido e verifique se algum deles é um divisor do número. Se encontrar um divisor, retorne false. Caso contrário, retorne true.
     */

     function isPrime($n) {
        if ($n < 2) {
            return false; // Números menores que 2 não são primos
        }
    
        for ($ind = 2; $ind <= sqrt($n); $ind++) {
            if ($n % $ind == 0) {
                return false; // Encontrou um divisor, não é primo
            }
        }
    
        return true; // Nenhum divisor encontrado, é primo
    }
    
    print_r(isPrime(8)); // Saída esperada: 1 (que corresponde a true)

?>