<div class="titulo">Desafio Switch</div>

<form action="#" method="post">
    <input type="text" name="param">
    <select name="conversao" id="conversao">
        <option value="km-milha">Km > Milha</option>
        <option value="milha-km">Milha > Km</option>
        <option value="metros-km">Metros > Km</option>
        <option value="km-metros">Km > Metros</option>
        <option value="fah-cel">Fahrenheit > Celsius</option>
        <option value="cel-fah">Celsius > Fahrenheit</option>
    </select>
    <button>Calcular</button>
</form>

<style>
    form > * {
        font-size: 1.8rem;
    }
</style>

<?php
// $param = $_POST['param'];
// $conversao = $_POST['conversao'];
// switch ($conversao) {
//     case 'km-milha':
//         echo $param * 0.621371 . " milha(s)";
//         break;
//     case 'milha-km':
//         echo $param * 1.60934 . " km";
//         break;
//     case 'metros-km':
//         echo $param * 0.001 . " km";
//         break;
//     case 'km-metros':
//         echo $param * 1000 . " metro(s)";
//         break;
//     case 'fah-cel':
//         echo ($param - 32) / 1.8 . " Celsius";
//         break;
//     case 'cel-fah':
//         echo ($param * 1.8) + 32.0. " Fahrenheit";
//         break;
//     default:
//         echo 'Opção inválida';
//         break;
// }
const FATOR_KM_MILHA = 0.621371;
const FATOR_METRO_KM = 1000;
const FATOR_CEL_FAH = 1.8;

$param = $_POST['param'] ?? 0;
switch ($_POST['conversao']) {
    case 'km-milha':
        $distancia = $param * FATOR_KM_MILHA;
        $mensagem = "$param Km(s) = $distancia Milha(s)";
        break;
    case 'milha-km':
        $distancia = $param / FATOR_KM_MILHA;
        $mensagem = "$param Milha(s) = $distancia Km(s)";
        break;
    case'metros-km':
        $distancia = $param * FATOR_METRO_KM;
        $mensagem = "$param Km(s) = $distancia Metro(s)";
        break;
    case 'km-metros':
        $distancia = $param / FATOR_METRO_KM;
        $mensagem = "$param Metro(s) = $distancia Km(s)";
        break;
    case 'cel-fah':
        $conversao = $param * FATOR_CEL_FAH + 32;
        $mensagem = "{$param}º Celsius = {$conversao}º Fahrenheit";
        break;
    case 'fah-cel':
        $conversao = ($param - 32) / FATOR_CEL_FAH;
        $mensagem = "{$param}º Fahrenheit = {$conversao}º Celsius";
        break;
    default:
        echo 'Nenhum valor calculado';
        break;
}

echo "<p>$mensagem</p>";