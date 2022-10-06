<?php
class Vehicle {
    private $traccion;
    private $peso;
    private $modelo;
    private $potencia;
    private $consumo;

    function __construct($traccion, $peso, $modelo, $potencia, $consumo){
        $this->traccion = $traccion;
        $this->peso = $peso;
        $this->modelo = $modelo;
        $this->potencia = $potencia;
        $this->consumo = $consumo;
    }

    public function __construct1($traccion, $peso, $modelo){
        $this->traccion = $traccion;
        $this->peso = $peso;
        $this->modelo = $modelo;
    }

    public function __construct2(){

    }

    /**
     * @return mixed
     */
    public function getTraccion()
    {
        return $this->traccion;
    }

    /**
     * @param mixed $traccion
     */
    public function setTraccion($traccion)
    {
        $this->traccion = $traccion;
    }

    /**
     * @return mixed
     */
    public function getPeso()
    {
        return $this->peso;
    }

    /**
     * @param mixed $peso
     */
    public function setPeso($peso)
    {
        $this->peso = $peso;
    }

    /**
     * @return mixed
     */
    public function getModelo()
    {
        return $this->modelo;
    }

    /**
     * @param mixed $modelo
     */
    public function setModelo($modelo)
    {
        $this->modelo = $modelo;
    }

    /**
     * @return mixed
     */
    public function getPotencia()
    {
        return $this->potencia;
    }

    /**
     * @param mixed $potencia
     */
    public function setPotencia($potencia)
    {
        $this->potencia = $potencia;
    }

    /**
     * @return mixed
     */
    public function getConsumo()
    {
        return $this->consumo;
    }

    /**
     * @param mixed $consumo
     */
    public function setConsumo($consumo)
    {
        $this->consumo = $consumo;
    }

    public function __toString()
    {
        return "Vehicle: {\n" + "Traccio " + $this->traccion + "\nPeso:  " + $this->peso +"\nModelo: " + $this->modelo+ "\nPotencia" + $this->potencia +"\nConsumo: " + $this->consumo + " }";
    }

    function kmRecorreguts() {
        $valorRandom = rand(0,100);
        $kmRecorregut = $valorRandom;
        return $kmRecorregut;
    }

    function vehicleCreat() {
        return "Model: " + $this->modelo + " Caballs: " + $this->potencia;
    }
}

?>