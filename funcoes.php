<?php
    function retornarNome($nome, $sobrenome){
        return "$nome $sobrenome";
    }
    function somarValores($valor1, $valor2){
        $soma = $valor1 + $valor2;
        return $soma;
    }
    function verificarAposentadoria($genero, $idade){
        if ($genero == 'F' && $idade>=60){
            return "Pode aposentar";
        }
        else if ($genero == 'M' && $idade>=65){
            return "Pode aposentar";
        } else{
            return "Não pode aposentar";
        }
    }
    function calcularAreaRetangulo($base, $altura){
        $area = $base*$altura;
        return $area;
    }
?>