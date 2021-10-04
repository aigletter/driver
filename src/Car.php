<?php


namespace Driver;


class Car
{
    public function move($speed)
    {
        return 'I am moving with speed' . $speed . PHP_EOL;
    }
}