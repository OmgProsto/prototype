<?php

interface GUIPrototype
{
    public function createButton(): Button;
    public function createCheckbox(): Checkbox;
}

class WinPrototype implements GUIPrototype
{

    private $winButton;
    private $winCheckbox;

    public function __constructor()
    {
        $winButton = new WinButton( /* 128937948 параметров для огромной логики */);
        $winCheckbox = new WinCheckbox( /* 128937948 параметров для огромной логики */ );
    }

    public function createButton(): Button
    {
        return clone $this->winButton;
    }

    public function createCheckbox(): Checkbox
    {
        return clone $this->winCheckbox;
    }
}

class MacPrototype implements GUIPrototype
{

    private $macButton;
    private $macCheckbox;

    public function __constructor()
    {
        $winButton = new MacButton( /* 128937948 параметров для огромной логики */ );
        $winCheckbox = new MacCheckbox( /* 128937948 параметров для огромной логики */ );
    }

    public function createButton(): Button
    {
        return clone $this->macButton;
    }

    public function createCheckbox(): Checkbox
    {
        return clone $this->macCheckbox;
    }
}