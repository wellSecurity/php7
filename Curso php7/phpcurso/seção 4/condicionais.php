<?php

#condições if, elseif, else

#if se ex se 1 == 1 r true

int $idade = 10;
if($idade < 18) {
    echo "Menor de idade";
}
#elseif aqui eles chama outro if a diferença ele e multiplos IF e que esse segue um estrutura dps do primeiro if então so vai chamar esse ser o primeiro não funcionar
elseif ($idade < 10) {
    echo "Criança";
}
#else caso o if e o elseif de errado
else {
    echo "Maior de idade";
}


?>