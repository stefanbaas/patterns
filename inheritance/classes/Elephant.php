<?php


class Elephant extends Animal implements AnimalInterface
{
    public function __construct()
    {
        $this->describe('elephant');
        $this->head();
        $this->legs(4);
    }
}