<?php


class SquareAdapter implements ISquare
{
    private $adaptee;

    /**
     * SquareAdapter constructor.
     * @param $adaptee
     */
    public function __construct(SquareAreaLib $adaptee)
    {
        $this->adaptee = $adaptee;
    }

    /**
     * На вход приходит длина стороны, для внешней библиотеки нужна диагональ
     * вычисляем диагональ
     * @param float $sideSquare
     * @return float|int площадь квадрата
     */
    function squareArea(float $sideSquare)
    {
        $diagonal = $sideSquare * (sqrt(2));
        return $this->adaptee->getSquareArea($diagonal);
    }
}
