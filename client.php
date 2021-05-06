<?php

class Application
{
    private $factory;
    private $button;
    private $checkbox;

    public function __constructor (GUIFactory $factory)
    {
        $this->factory = $factory;
    }

    public function createApp ()
    {
        $this->button = $this->factory->createButton();
        $this->checkbox = $this->factory->createCheckbox();

        return $this;
    }

}