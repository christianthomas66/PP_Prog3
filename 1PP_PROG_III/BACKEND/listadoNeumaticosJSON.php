<?php

require_once("./clases/neumatico.php");

use ChristianThomas\SuarezGrecco\Neumatico;

$neumaticos = Neumatico::traerJSON("./archivos/neumaticos.json");

// echo json_encode($neumaticos);
echo "[";

for ($i = 0; $i < count($neumaticos); $i++) { 
        $neumatico = $neumaticos[$i];

        if ($i == count($neumaticos) - 1) {
            echo $neumatico->ToJSON() . "\n"; 
        }
        else
        {
            echo $neumatico->ToJSON() . ",\n";  
        }  
}

echo "]";

?>