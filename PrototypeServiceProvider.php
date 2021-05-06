<?php

Class PrototypeServiceProvider
{

    protected $prototypes;

    public static function addPrototype ($elem)
    {
        $prototypes[] = $elem;
    }

    public function getPrototypes($prototype)
    {
        return clone $prototype;
    }
}