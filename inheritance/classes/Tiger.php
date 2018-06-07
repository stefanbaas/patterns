<?php


class Tiger extends Animal implements AnimalInterface
{
    public function __construct()
    {
        $this->describe('tiger');
        $this->head();
        $this->legs(4);
    }
}