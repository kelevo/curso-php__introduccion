<?php

//IF -------------------------------------
if (condition) {
    #code
} elseif (contition) {
    #code
} else {
    #code
}

//SWITCH ---------------------------------
switch ($login) {
    case true:
        #code
        break;
    case false:
        #code
        break;
    default:
        #code
        break;
}

//FOREACH --------------------------------
// Consulta de datos
foreach ($datos as $row) {
    #code
}

//WHILE -----------------------------------
while ($a <= 10) {
    #code
}

//DO-WHILE ---------------------------------
// Siempre y cuando queremo que el codigo se ejecute almenos una vez
do {
    #code
} while ($a <= 10);

//FOR --------------------------------------
for ($i = 0; $i < 10; $i++) {
    #code
}