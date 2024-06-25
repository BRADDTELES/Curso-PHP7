<?php
namespace Aritmetica;

class NaoInteiroException extends \Exception{

}

function intdiv($a, $b){
    if($b == 0) {
        throw new \DivisionByZeroError();
    }

    if($a % $b > 0){
        throw new NaoInteiroException();
    }

    return $a / $b;
}


// class DivisaoException extends \Exception {
//     public function __construct($message, $code = 0, $previous = null) {
//         parent::__construct($message, $code, $previous);
//     }
// }

// class Divisoria {
//     public $a;
//     public $b;
//     public function __construct($a, $b){
//         $this->a = $a;
//         $this->b = $b;
//     }
//     public function dividir(){
//         if($this->b == 0) {
//             echo "intdiv com os parametros {$this->a} e {$this->b} [Exceção]<br>";
//             throw new DivisaoException("Divisão por zero");  
//         } else if($this->b > 0) {
//             $resp = $this->a / $this->b;
//             if (is_int( $resp )) {
//                 echo "intdiv com os parametros {$this->a} e {$this->b} [Sucesso]<br>";
//                 return $resp;
//             } else if (is_float( $resp )) {
//                 echo "intdiv com os parametros {$this->a} e {$this->b} [Exceção]<br>";
//                 return $resp;
//             } 
//         } 
//     }

//     public function original(){
//         if($this->b == 0) {
//             echo "intdiv com os parametros {$this->a} e {$this->b} [Exceção]<br>";
//             throw new DivisaoException("Divisão por zero");  
//         }
//         $original = intdiv($this->a, $this->b);
//         echo "intdiv " . '"original"' . " com os parametros {$this->a} e {$this->b} [Sucesso]<br>";
//         return $original;
//     }
// }

// try {
//     $dividindo = new Divisoria(8, 3);
//     echo 'Resultado: '. number_format($dividindo->dividir(), 2). '<br>';
//     // var_dump($dividindo->dividir());
//     // echo '<br>';
//     echo 'Resultado: '. number_format($dividindo->original(), 2). '<br>';
//     // var_dump($dividindo->original());
// } catch (DivisaoException $e) {
//     echo "Não foi possível calcula<br>";
//     echo "Motivo: {$e->getMessage()}<br>";
// }