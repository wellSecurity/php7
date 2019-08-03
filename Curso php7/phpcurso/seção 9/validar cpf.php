<?php

class Documento { //cria a classe documento

    private $numero; //cria um atributo chamado numero

    public function getNumero() { //metodo para retorna o numero do cpf
        return $this->numero; //acessa o atributo depois de instanciado utilizando o this
    }

    public function setNumero($numero) { //metodo para setar o numero do cpf no atributo numero
        $resultado = Documento::validarCPF($numero); //:: para acessar metodos estaticos, metodo para validar o cpf feito em estatico
        if($resultado === false) { //o metodo validarCpf responde um bool

            throw new Exception("Cpf Informado não é valido"); //cria uma exceção

        }

        $this->numero = $numero; //se caso o o resultado for diferente de false ele defini o atributo numero como a variavel numero
        echo "O cpf: $numero é valido";
    }

    public static function validarCPF($cpf) { //metodo para validar o cpf feito em estatico
        if(empty($cpf)) {
            return false;
        }
     
        $cpf = preg_match('/[0-9]/', $cpf)?$cpf:0;
    
        $cpf = str_pad($cpf, 11, '0', STR_PAD_LEFT);
         
        
        if (strlen($cpf) != 11) {
            echo "length";
            return false;
        }
        
        else if ($cpf == '00000000000' || 
            $cpf == '11111111111' || 
            $cpf == '22222222222' || 
            $cpf == '33333333333' || 
            $cpf == '44444444444' || 
            $cpf == '55555555555' || 
            $cpf == '66666666666' || 
            $cpf == '77777777777' || 
            $cpf == '88888888888' || 
            $cpf == '99999999999') {
            return false;
    
         } else {   
             
            for ($t = 9; $t < 11; $t++) {
                 
                for ($d = 0, $c = 0; $c < $t; $c++) {
                    $d += $cpf{$c} * (($t + 1) - $c);
                }
                $d = ((10 * $d) % 11) % 10;
                if ($cpf{$c} != $d) {
                    return false;
                }
            }
     
            return true;
        }
    }
}


var_dump(Documento::validarCPF("07671368458")); //chama o metodo sem instancia a função
?>