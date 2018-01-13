<?php

namespace CarBundle\Service;
use CarBundle\Entity\Car;

/**
 * Created by PhpStorm.
 * User: Paweł
 * Date: 13.01.2018
 * Time: 12:54
 */

class DataChecker
{
    public function checkCar(Car $car)
    {
        return "Car ".$car->getModel() . " checked";
    }


}