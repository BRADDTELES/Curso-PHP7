<div class="titulo">Desafio Palindromo</div>

<?php
function palindrome($string){ 
    if (strrev($string) == $string){ 
        return 1; 
    }
    else{
        return 0;
    }
} 

$palavra = "arara";
if(palindrome($palavra)){ 
    echo "Palindrome"; 
} else { 
    echo "Not a Palindrome"; 
}

?> 