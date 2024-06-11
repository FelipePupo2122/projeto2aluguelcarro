<?php

require_once 'model/Car.php';

class CarController
{
    private $carModel;

    public function __construct($pdo)
    {
        $this->carModel = new Car($pdo);
    }

    public function listarCarros()
    {
        return $this->carModel->listarCarros();
    }
}
