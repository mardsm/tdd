<?php
namespace Vox\Treinamento\Tdd\Tests;
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class CalculadoraTest extends AbstractFizzBuzzTestCase
{
    protected $calculadora;
    public function setUp() {
        $this->calculadora = new \Vox\Treinamento\Tdd\Calculadora();
    }
    public function testSoma()
    {
        $this->assertEquals($this->calculadora->somar(1,1), 2);
        $this->assertEquals($this->calculadora->somar(1.10, 1), 2.10);
    }
    /**
     * @expectedException \InvalidArgumentException
     */
    public function testEntradaStringSoma()
    {
        $this->assertEquals($this->calculadora->somar('a','b'), 2);
    }
    public function testSubtrair()
    {
        $this->assertEquals($this->calculadora->subtrair(2,1), 1);
    }
    /**
     * @expectedException \InvalidArgumentException
     */
    public function testEntradaStringSubtrair()
    {
        $this->assertEquals($this->calculadora->subtrair('a','b'), 1);   
    }
    public function testDivir()
    {
        $this->assertEquals($this->calculadora->dividir(10,2), 5);
    }
    /**
     * @expectedException \InvalidArgumentException
     */
    public function testEntradaStringDividir()
    {
        $this->assertEquals($this->calculadora->dividir('a','b'), 1);  
    }
    /**
     * @expectedException \InvalidArgumentException
     */
    public function testDivisaoPorZero()
    {
        $this->assertEquals($this->calculadora->dividir(10,0), 0);
    }
    public function testMultiplicar()
    {
        $this->assertEquals($this->calculadora->multiplicar(5,5), 25);
    }
    /**
     * @expectedException \InvalidArgumentException
     */
    public function testEntradaStringMultiplicar()
    {
        $this->assertEquals($this->calculadora->multiplicar('d', 'f'), 'df');
    }
    public function testRaizQuadrada()
    {
        $this->assertEquals($this->calculadora->raizQuadrada(81), 9);
    }
    /**
     * @expectedException \InvalidArgumentException
     */
    public function testEntradaInvalidaRaiz()
    {
        $this->assertEquals($this->calculadora->raizQuadrada('adf'), 9);
    }
}
