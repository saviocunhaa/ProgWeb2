<?php

$nome = $_POST['nome'];
$email = $_POST['ema'];
$telefone = $_POST['telefone'];
$categoria = $_POST['categoria'];
$obse = $_POST['obs'];
$chek = $_POST['flexRadioDefault'];



if ($categoria == 'amador' && $chek == 'on') {
    echo "$nome <br>";
    echo "$email <br>";
    echo "$telefone <br>";
    echo "$categoria <br>";
    echo "$obse <br>";
} else if ($categoria == 'amador' && $chek == 'off') {
    echo "Você não pode competir <br>";
}else{   
    echo "$nome <br>";
    echo "$email <br>";
    echo "$telefone <br>";
    echo "$categoria <br>";
    echo "$obse <br>";
}

?>