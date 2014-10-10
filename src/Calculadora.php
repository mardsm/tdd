<?php

namespace Vox\Treinamento\Tdd;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Calculadora {

    public function somar($valor1, $valor2) {
        $this->validarEntradaCalculadora($valor1);
        $this->validarEntradaCalculadora($valor2);
        return ($valor1 + $valor2);
    }

    protected function validarEntradaCalculadora($numero) {
        if (!$this->validarNumeros($numero)) {
            throw new \InvalidArgumentException('Valor não Permitido.');
        }
    }

    protected function validarNumeros($numero) {
        return is_numeric($numero);
    }

    public function subtrair($valor1, $valor2) {
        $this->validarEntradaCalculadora($valor1);
        $this->validarEntradaCalculadora($valor2);
        return ($valor1 - $valor2);
    }

    public function dividir($valor1, $valor2) {
        $this->validarEntradaCalculadora($valor1);
        $this->validarEntradaCalculadora($valor2);
        if (0 === $valor2) {
            throw new \InvalidArgumentException('Divisao por Zero.');
        }
        return ($valor1 / $valor2);
    }

    public function multiplicar($valor1, $valor2) {
        $this->validarEntradaCalculadora($valor1);
        $this->validarEntradaCalculadora($valor2);
        return ($valor1 * $valor2);
    }

}
