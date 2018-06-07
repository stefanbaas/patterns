<?php


interface AnimalInterface
{
    // ==============================
    //            METHODS
    // ------------------------------

    public function describe($name);
    public function legs($numLegs = 0);
    public function head();

}