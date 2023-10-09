<?php
require_once("./clases/accesoDatos.php");
require_once("./clases/neumaticoBD.php");

use ChristianThomas\SuarezGrecco\NeumaticoBD;
use ChristianThomas\SuarezGrecco\AccesoDatos;


$neumaticos = NeumaticoBD::mostrarBorradosJSON();

// for ($i = 0; $i < count($neumaticos); $i++) 
// { 
//         $neumatico = $neumaticos[$i];
//         echo $neumatico->ToJSON() . ",\n";    
// }

echo "[";

for ($i = 0; $i < count($neumaticos); $i++) { 
       $neumatico = $neumaticos[$i];

     if ($i == count($neumaticos) - 1) {
        echo $neumatico->ToJSON() . "\n"; 
        } 
        else {
          echo $neumatico->ToJSON() . ",\n";  
        }  
}

echo "]";

?>