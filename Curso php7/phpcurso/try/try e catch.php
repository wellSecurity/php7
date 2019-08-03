<?php
//try é catch são maneiras de tratar erros

try { //try tenta 
    throw new Exception("Houve um erro", 400); //o numero nos criamos para criar uma documentação de erro
    
}

catch (Exception $e) { //captura se deu um erro dentro do try

    echo json_encode(array(
        "Message"=>$e->getMessage(),
        "line"=>$e->getLine(),
        "file"=>$e->getFile(),
        "code"=>$e->getCode(),

    ));

}

?>