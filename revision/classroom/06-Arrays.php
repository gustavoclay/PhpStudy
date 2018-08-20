<?php
//arrays Numericos
$carros = array(1 => 'BMW', 2 => 'Veloster', 3 => 'Hilux');
$carros[] = "Amarok";
$carros[10] = "Camaro";
print_r($carros);
echo "<br>";

$motos = array();
$motos[] = "Yamaha";
$motos[] = "Honda";
$motos[] = "Suzuki";
var_dump($motos);
echo "<br>";

$clientes = ["Rogrigo", "Felipe", "Beatriz"];
print_r($clientes);
echo "<hr>";

//count
echo "Carros: ".count($carros)."<br>";
echo "Motos: ".count($motos)."<br>";
echo "Clientes: ".count($clientes)."<br>";

//foreach
foreach($carros as $valor) {
    echo($valor)." ";
}
echo "<hr>";
//Arrays Associativos

$pessoa = array("nome" => "Rodrigo", "idade" => 23, "sexo" => "masculino");
$pessoa["cidade"] = "Brasilia";
print_r($pessoa);
echo "<br>";
foreach($pessoa as $indice => $valor){
    echo $indice.": ".$valor."<br>";
}
echo "<hr>";

//Arrays Associativos
$times = array(
    "Cariocas" => array("Vasco", "Flamengo", "Botafogo"),
    "Paulistas" => array("Palmeiras", "Santos")
);
echo $times["Cariocas"][0]."<br>";
print_r($times);
echo "<br>";

foreach($times["Cariocas"] as $indice => $valor){
    echo $indice.": ".$valor."<br>";
}
echo "<hr>";

//Funções Arrays
$nomes = array("João", "Pablo", "Marcio");
echo is_array($nomes);


