<?php
require_once("./clases/neumatico.php");
use ChristianThomas\SuarezGrecco\Neumatico;


$marca = isset($_POST["marca"]) ? $_POST["marca"] : NULL;
$medidas = isset($_POST["medidas"]) ? $_POST["medidas"] : NULL;
$precio = isset($_POST["precio"]) ? $_POST["precio"] : NULL;

if($marca && $medidas && $precio) 
{
    $neumatico = new Neumatico($marca, $medidas, $precio);
    if($neumatico) 
    {
        echo $neumatico->guardarJSON("./archivos/neumaticos.json");
    }
}


?>