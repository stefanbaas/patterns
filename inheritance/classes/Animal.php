<?php


class Animal implements AnimalInterface
{

    public function describe($name)
    {
        var_dump('I am a '.$name);
    }

    public function legs($numLegs = 0)
    {
        var_dump('I have '.$numLegs.' legs');
    }

    public function head()
    {
        // TODO: Implement head() method.

        var_dump('I have a head');
    }
}