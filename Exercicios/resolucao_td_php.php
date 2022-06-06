<?php
/*
// questão 01
$valor = 8;

if ($valor > 0) {
   echo "Valor Positivo";
}else if ($valor < 0){
    echo "valor negativo";
} else{
    echo "valor igual a zero";
}

echo "<br> <br>";

// questão 02
echo "resposta questão 02 <br>";
$num = 3;

if($num%2 == 0){
    echo "Par";
}else{
    echo "Impar";
}
 // questão 03
echo "<br> resposta questão 03 <br>";
$v1 = 5;
$v2 = 4;

if ($v1>$v2){
    echo $v2, ", ", $v1;
}else {
    echo $v1 .", ". $v2;
}


// QUESTÃO 04 (fácil)
echo "<br> média notas <br>";
$nota = [10,8,9];

$media = ($nota[0] + $nota[1] + $nota[2] )/ 3;

echo "$media <br>";


if($media >=6 ){
    echo ("aprovado com média $media");
}else{
    echo ("reprovado com média $media <br>");
}

// questão 04 (mais fácil ainda - logica);

*/
echo "<br>";
$notas = [10,8,9];
$smTotal = 0;

for ($i=0; $i < count($notas); $i++) { 
    $smTotal += $notas[$i];
}

$resultado = $smTotal/count($notas);

if($resultado >=6 ){
    echo ("aprovado com média $resultado");
}else{
    echo ("reprovado com média $resultado");
}

// questão 05;

echo"<br>";

$produto = 28;

$produto1 = (1.16 * $produto);

$produto2 = $produto1/10;

echo "valor total: $produto1 <br>";

echo "parcela: $produto2";

echo "<br>";

// questão 06
$base = 10;
$altura = 25;
$area = $base*$altura;
echo ("area do quadrado = $area m²");

echo "<br>";

// questão 07

$v = 100;
$desc = ($v/100)*9;
$nv = ($v - $desc);
echo("$nv");

echo "<br>";

// questão 08

$H = 1.7;
$S = "mulher";
$ph = (72.7*$H);
$pm = ((62.1*$H)-44.7);

if ($S == "homem") {
echo("$ph kg");    
}
elseif($S == "mulher"){
    echo("$pm kg");
}
else { 
    echo("?");
}
echo "<br>";

// questão 09








// questão switch case

$mes = 11;


switch ($mes) {
    case 1:
        echo "janeiro";
        break;
    case 2:
        echo "fev";
        break;
    case 3: 
        echo "março";
        break;
    case 4:
        echo "abril";
     case 5:
        echo "maio";
        break;
    case 6:
        echo "jun";
        break;
    case 7: 
        echo "julho";
        break;
    case 8:
        echo "agosto";
     case 9:
        echo "setembro";
        break;
    case 10:
        echo "outubro";
        break;
    case 11: 
        echo "novembro";
        break;
    case 12:
        echo "dezembro"; 
        break; 
    default:
        echo "digite um mês valido";
        break;

        
    }
//final 

?>






