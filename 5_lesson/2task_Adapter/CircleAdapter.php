<?php


class CircleAdapter implements ICircle
{
    private $adaptee;

    /**
     * CircleAdapter constructor.
     * @param $adaptee
     */
    public function __construct(CircleAreaLib $adaptee)
    {
        $this->adaptee = $adaptee;
    }

    /**
     * На выход приходит длина окружности, вычисляем из нее диаметр
     * т.к. внешняя библиотека работает с диаметром
     * @param float $circumference
     * @return float|int Площадь круга
     */
    function circleArea(float $circumference)
    {
        $diagonal = $circumference / M_PI;
        return $this->adaptee->getCircleArea($diagonal);
    }
}
